# Defines the Terraform providers and their configurations.
terraform {
  required_providers {
    hcloud = {
      source  = "hetznercloud/hcloud"
      version = "~> 1.44"
    }
    cloudflare = {
      source  = "cloudflare/cloudflare"
      version = "~> 4.25"
    }
  }
}

# Configure the Hetzner Cloud provider.
# The token is passed via environment variable HCLOUD_TOKEN in the CI/CD pipeline.
provider "hcloud" {}

# Configure the Cloudflare provider.
# The API token is passed via environment variable CLOUDFLARE_API_TOKEN in the CI/CD pipeline.
provider "cloudflare" {}

# Create an SSH key in Hetzner Cloud. The public key is read from a variable.
resource "hcloud_ssh_key" "github_actions_key" {
  name       = var.hetzner_ssh_key_name
  public_key = var.ssh_public_key
}

# Provision a Hetzner Cloud server.
resource "hcloud_server" "web_server" {
  name        = "intconnect-server"
  server_type = var.hetzner_server_type
  image       = "ubuntu-22.04"
  location    = "nbg1"
  ssh_keys    = [hcloud_ssh_key.github_actions_key.id]

  # cloud-init script to install Docker and Docker Compose.
  user_data = file("${path.module}/cloud-init.yml")
}

# Create the A record for the production domain.
resource "cloudflare_record" "prod_dns" {
  zone_id = var.cloudflare_zone_id
  name    = "intconnect.ro"
  value   = hcloud_server.web_server.ipv4_address
  type    = "A"
  ttl     = 3600
  proxied = true
}

# Create the A record for the staging domain.
resource "cloudflare_record" "staging_dns" {
  zone_id = var.cloudflare_zone_id
  name    = "stg.intconnect.ro"
  value   = hcloud_server.web_server.ipv4_address
  type    = "A"
  ttl     = 3600
  proxied = true
}
