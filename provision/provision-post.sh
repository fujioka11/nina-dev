#!/usr/bin/env bash

set -ex

/usr/local/bin/wp --path=/var/www db import /vagrant/import.sql
