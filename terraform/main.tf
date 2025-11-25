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
      source  = "cloudflare/cloudflare"
      version = "~> 5"
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

resource "hcloud_server" "intconnect" {
  name        = "intconnect-app"
  server_type = var.hcloud_server_type
  image       = var.hcloud_image
  location    = var.hcloud_location
  ssh_keys    = [hcloud_ssh_key.main.id]

  labels = {
    project = "intconnect"
    env     = "prod-staging"
  }

  user_data = <<-EOF
  #cloud-config
  packages:
    - git
  runcmd:
    - ufw allow ssh
    - ufw allow http
    - ufw allow https
    - ufw --force enable
  EOF
}

resource "cloudflare_dns_record" "root" {
  zone_id = var.cloudflare_zone_id
  name    = "@"
  type    = "A"
  content = hcloud_server.intconnect.ipv4_address
  ttl     = 300
  proxied = true
}

resource "cloudflare_dns_record" "stg" {
  zone_id = var.cloudflare_zone_id
  name    = "stg"
  type    = "A"
  content = hcloud_server.intconnect.ipv4_address
  ttl     = 300
  proxied = true
}
