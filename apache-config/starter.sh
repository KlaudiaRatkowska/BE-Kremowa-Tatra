#!/bin/sh
a2enmod ssl
usermod -u 1000 www-data  
echo "Starting apache foreground"
apache2-foreground