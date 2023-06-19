# Blog Post Assignment Task

[![Build Status](https://travis-ci.org/joemccann/dillinger.svg?branch=master)](https://travis-ci.org/joemccann/dillinger)

## Tech Stack:

- [Docker] and Laradock
- [Mysql] & PHPMyAdmin Client 
- [Framework] [Laravel] with blad template engine
- [HTML], CSS, BootStrap

## Features

- User Login, Registration and Logout
- Blog Post Crud

# Installation

### Docker Setup 

Install Docker Engine on Mac, Window and Linux, please follow this [Link](https://docs.docker.com/engine/install/)

### Setup Docker Configuration

Copy & paste file .env.example in the root of docker-engine direcotry
Run the following command to run the docker services
``` 
$~ docker-compose up -d nginx mysql phpmyadmin workspace
```

For Installing Laravel packages and dependcies you have to bash into the workspace
```
$~ docker-compose exec workspace bash
$~ composer install
$~ composer update
$~ php artisan migrate
$~ php artisan db:seed
```

### Web App URL
```
http://localhost:801/post
```

### PHPMyAdmin 
```
Host: mysql
Username: root 
Password: root
```

### MySQL 
```
DB_CONNECTION=mysql
DB_HOST=local
DB_PORT=3307
DB_DATABASE=default
DB_USERNAME=root
DB_PASSWORD=root
```
