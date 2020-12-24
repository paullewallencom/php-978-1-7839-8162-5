#! /bin/bash

## installs memcached
sudo apt-get install -y memcached

## installs php's connection driver for memcached
sudo apt-get install -y php5-memcached

## restarts Apache web server
sudo service apache2 restart

