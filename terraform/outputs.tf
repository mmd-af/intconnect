output "server_ipv4_address" {
  description = "Public IPv4 of the app server"
  value       = hcloud_server.intconnect.ipv4_address
}
