#!/bin/bash

# This script is intended to be run by a cron job on the server.
# Example cron job (runs daily at 2 AM):
# 0 2 * * * /path/to/mysql_backup.sh

# --- Configuration ---
# Production DB
PROD_CONTAINER="intconnect-prod-mysql"
PROD_DB_USER="your_prod_db_user" # Replace with your actual DB user from .env
PROD_DB_PASS="your_prod_db_pass" # Replace with your actual DB pass from .env
PROD_DB_NAME="your_prod_db_name" # Replace with your actual DB name from .env

# Staging DB
STG_CONTAINER="intconnect-stg-mysql"
STG_DB_USER="your_stg_db_user" # Replace with your actual DB user from .env.staging
STG_DB_PASS="your_stg_db_pass" # Replace with your actual DB pass from .env.staging
STG_DB_NAME="your_stg_db_name" # Replace with your actual DB name from .env.staging

BACKUP_DIR="/var/backups/mysql"
TIMESTAMP=$(date +"%Y%m%d_%H%M%S")
RETENTION_DAYS=7

# --- Script ---
mkdir -p "$BACKUP_DIR"

echo "Starting database backup..."

# Backup Production DB
echo "Backing up Production database: $PROD_DB_NAME"
docker exec "$PROD_CONTAINER" mysqldump -u"$PROD_DB_USER" -p"$PROD_DB_PASS" "$PROD_DB_NAME" | gzip > "$BACKUP_DIR/prod-$PROD_DB_NAME-$TIMESTAMP.sql.gz"

# Backup Staging DB
echo "Backing up Staging database: $STG_DB_NAME"
docker exec "$STG_CONTAINER" mysqldump -u"$STG_DB_USER" -p"$STG_DB_PASS" "$STG_DB_NAME" | gzip > "$BACKUP_DIR/stg-$STG_DB_NAME-$TIMESTAMP.sql.gz"

echo "Backup complete."

# --- Cleanup old backups ---
echo "Cleaning up backups older than $RETENTION_DAYS days..."
find "$BACKUP_DIR" -type f -name "*.sql.gz" -mtime +$RETENTION_DAYS -delete
echo "Cleanup complete."
