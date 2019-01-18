#!/bin/sh

composer install --no-dev --optimize-autoloader
mkdir cache
chmod o+w storage/* cache/*
sudo chmod o+w storage/* cache/*