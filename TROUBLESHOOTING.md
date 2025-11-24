# Troubleshooting Guide

This guide provides solutions to common issues that may arise during the deployment process.

## Issue: "Web server is down" (Error 521)

This error indicates that Cloudflare is unable to connect to the origin server. This is often caused by a misconfiguration in the deployment pipeline or the server itself.

### Symptom: `src` directory is empty on the server

If you SSH into the server and find that the `/home/ubuntu/intconnect/src` directory is empty or missing files, it means the application code was not deployed correctly.

### Solution:

1.  **Check the deployment pipeline:**
    *   Examine the `.github/workflows/pipeline.yml` file to ensure that the application code is being copied to the server.
    *   Look for a step that uses `scp` or a similar command to copy the `src` directory to the server.

2.  **Check the Dockerfile:**
    *   Examine the `docker/Dockerfile.prod` file to ensure that the application code is being copied into the Docker image.
    *   Look for a `COPY src /var/www` command.

3.  **Check the `docker-compose.yml` files:**
    *   Examine the `docker-compose.prod.yml` and `docker-compose.staging.yml` files to ensure that the volumes are configured correctly.
    *   If you are using a host-based volume for the `storage` directory, make sure that the directory exists on the host.
    *   **Recommended:** Use a named volume for the `storage` directory to ensure that it is persisted between deployments.

### Example: Using a named volume for the `storage` directory

In your `docker-compose.prod.yml` or `docker-compose.staging.yml` file, change the `volumes` section for the `php` service to use a named volume:

```yaml
services:
  php:
    # ...
    volumes:
      - prod-storage:/var/www/storage
    # ...

volumes:
  prod-storage:
    name: intconnect-prod-storage-data
```

This will ensure that the `storage` directory is persisted between deployments and will prevent the application from failing if the directory is not present on the host.
