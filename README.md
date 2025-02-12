# Basic Wordpress setup 
This repo is meant to present/share and is easy to set up to play or develop. This repo is a work in progress and will get updated with more components.

This repo contains:
1. Basic Docker webserver setup containing php, mysql, composer and node
2. Johnpbloch Wordpress installed with composer install
3. Config setup for easy deploying to different enviroments
4. Custom plugin fetching api data with cat facts
5. example bitbucket-pipelines for automated deployment


# Docker setup commands
$ docker-compose up -d
$ docker-compose run --rm composer install


# create wp-config file from config folder
$ cp config/wordpress.php.dev config/wordpress.php


# Theme front-end compilers
$ docker-compose run --rm npm install
$ docker-compose run --rm npm run dev
$ docker-compose run --rm npm run watch


# Example: To correct upload simlink on the server in case pipeline fails to do so
$ ln -sf ../../../data/theblackdog/uploads custom-website.nl/public_html/wp-content/uploads