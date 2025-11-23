output "server_ip" {
  description = "The public IPv4 address of the web server."
  value       = hcloud_server.web_server.ipv4_address
}
