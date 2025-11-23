variable "cloudflare_zone_id" {
  description = "The Zone ID of the domain in Cloudflare."
  type        = string
}

variable "cloudflare_account_id" {
  description = "The Account ID for Cloudflare."
  type        = string
}

variable "hetzner_server_type" {
  description = "The type of server to create on Hetzner."
  type        = string
  default     = "cpx11"
}

variable "ssh_public_key" {
  description = "The public SSH key to add to the server."
  type        = string
  sensitive   = true
}

variable "hetzner_ssh_key_name" {
  description = "The name for the SSH key in the Hetzner Cloud project."
  type        = string
}
