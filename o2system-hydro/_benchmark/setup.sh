#!/bin/sh

composer install --no-dev --optimize-autoloader
chmod -R 777  cache
