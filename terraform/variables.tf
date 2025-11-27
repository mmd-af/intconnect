variable "hcloud_token" {
  type      = string
  sensitive = true
}

variable "hcloud_ssh_key_name" {
  type = string
}

variable "ssh_public_key" {
  type      = string
  sensitive = true
}

variable "cloudflare_api_token" {
  type      = string
  sensitive = true
}

variable "cloudflare_zone_id" {
  type      = string
  sensitive = true
}

variable "hcloud_location" {
  type    = string
  default = "fsn1"
}

variable "hcloud_server_type" {
  type    = string
  default = "cx23"
}

variable "hcloud_image" {
  type    = string
  default = "docker-ce"
}
