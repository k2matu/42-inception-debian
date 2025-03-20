#!/bin/bash

# Load environment variables from .env file
if [ -f .env ]; then
    export $(grep -v '^#' .env | xargs)
else
    echo ".env file not found!"
    exit 1
fi

# Check if required variables are set
if [[ -z "$MYSQL_DB" || -z "$MYSQL_USER" || -z "$MYSQL_PASSWORD" || -z "$MYSQL_ROOT_PASSWORD" ]]; then
    echo "Missing required environment variables! Check your .env file."
    exit 1
fi

# Replace placeholders in init.sql with actual values
envsubst < init.sql > temp_init.sql

echo "Running SQL script..."
mysql -u root -p"$MYSQL_ROOT_PASSWORD" < temp_init.sql

# Clean up
rm temp_init.sql

echo "Database setup completed successfully!"
