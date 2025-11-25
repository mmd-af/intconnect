terraform {
  required_version = ">= 1.5.0"

  required_providers {
    hcloud = {
      source  = "hetznercloud/hcloud"
      version = "~> 1.47"
    }
    cloudflare = {
      source  = "cloudflare/cloudflare"
      version = "~> 5.0"
    }
  }
}

# --- Providers ---

provider "hcloud" {
  token = var.hcloud_token
}

provider "cloudflare" {
  api_token = var.cloudflare_api_token
}

# --- Cloudflare zone (intconnect.ro) ---

data "cloudflare_zone" "intconnect" {
  name = var.domain
}

# --- Hetzner SSH key (uses your SSH_PUBLIC_KEY secret) ---

resource "hcloud_ssh_key" "main" {
  name       = var.hcloud_ssh_key_name
  public_key = var.ssh_public_key
}

# --- Hetzner server (Docker host for prod + staging) ---

resource "hcloud_server" "intconnect" {
  name        = "intconnect-app"
  server_type = var.hcloud_server_type      # e.g. cx21
  image       = var.hcloud_image            # using Hetzner Docker CE image
  location    = var.hcloud_location         # e.g. fsn1
  ssh_keys    = [hcloud_ssh_key.main.id]

  labels = {
    project = "intconnect"
    env     = "prod-staging"
  }

  # Optional: basic firewall with ufw; Docker CE image already has docker installed
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

# --- Cloudflare DNS: intconnect.ro → server IP ---

resource "cloudflare_record" "root" {
  zone_id         = data.cloudflare_zone.intconnect.id
  name            = "@"
  type            = "A"
  value           = hcloud_server.intconnect.ipv4_address
  ttl             = 300
  proxied         = true
  allow_overwrite = true
}

# --- Cloudflare DNS: staging.intconnect.ro → same server ---

resource "cloudflare_record" "staging" {
  zone_id         = data.cloudflare_zone.intconnect.id
  name            = "staging"
  type            = "A"
  value           = hcloud_server.intconnect.ipv4_address
  ttl             = 300
  proxied         = true
  allow_overwrite = true
}
