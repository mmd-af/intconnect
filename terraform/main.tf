terraform {
  cloud {
    organization = "intconnect"

    workspaces {
      name = "intconnect"
    }
  }

  required_version = ">= 1.5.0"

  required_providers {
    hcloud = {
      source  = "hetznercloud/hcloud"
      version = "~> 1.47"
    }
    cloudflare = {
      source = "cloudflare/cloudflare"
      version = ">= 4.7.0"
    }
  }
}

provider "hcloud" {
  token = var.hcloud_token
}

provider "cloudflare" {
  api_token = var.cloudflare_api_token
}

resource "hcloud_ssh_key" "main" {
  name       = var.hcloud_ssh_key_name
  public_key = var.ssh_public_key
}

resource "hcloud_firewall" "main" {
  name = "intconnect-firewall"

  rule {
    direction  = "in"
    protocol   = "tcp"
    port       = "22"
    source_ips = ["0.0.0.0/0", "::/0"]
  }

  rule {
    direction  = "in"
    protocol   = "tcp"
    port       = "80"
    source_ips = ["0.0.0.0/0", "::/0"]
  }

  rule {
    direction  = "in"
    protocol   = "tcp"
    port       = "443"
    source_ips = ["0.0.0.0/0", "::/0"]
  }
}

resource "hcloud_server" "intconnect" {
  name         = "intconnect-app"
  server_type  = var.hcloud_server_type
  image        = var.hcloud_image
  location     = var.hcloud_location
  ssh_keys     = [hcloud_ssh_key.main.id]
  firewall_ids = [hcloud_firewall.main.id]

  labels = {
    project = "intconnect"
    env     = "production"
  }

  user_data = <<-EOF
  #cloud-config
  packages:
    - git
  EOF
}

resource "cloudflare_dns_record" "root" {
  zone_id = var.cloudflare_zone_id
  name    = "@"
  type    = "A"
  content = hcloud_server.intconnect.ipv4_address
  ttl     = 1
  proxied = true
}
