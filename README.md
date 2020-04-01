# Symfony 5 Admin Application

Symfony 5 Admin Application is a skeleton [Symfony](https://symfony.com/) application 
based on [CoreUI Free Bootstrap Admin Template](https://github.com/coreui/coreui-free-bootstrap-admin-template).

The application contains the basic features including user login/logout and user management and is a project template for local Docker development. 
It includes commonly used configurations that would allow you to focus on adding new features to your application.

## Table of Contents

* [What is this](#symfony-5-admin-application)
  * [Table of Contents](#table-of-contents)
  * [Requirements](#requirements)
  * [Installation](#installation)
    * [1. Clone repository](#1-clone-repository)
    * [2. Building containers](#2-building-containers)
    * [3. Start containers](#3-start-containers)
    * [4. Using application](#4-using-application)
    * [5. Stop application](#5-stop-application)
  * [Testing](#testing)
  * [Inspired](#inspired)
  * [License](#license)

## Requirements

* [docker-compose](https://docs.docker.com/compose/install/)
* `Makefile` support - if you don't have this you need to look `Makefile` file
  to see what each `make` command is doing.
  
## Installation

This installation guide expects that you're using docker-compose.

### 1. Clone repository

Clone repository use following command:

```bash
git clone git@github.com:codenix-sv/symfony-admin.git
```

### 2. Building containers

For first time you probably need to build containers:

```bash
make init
```

Those containers are following:

* manager-php-fpm: PHP for actual web application
* manager-php-cli: PHP for console
* manager-nginx: Nginx web server
* manager-postgres: PostgreSQL database for store all the data of application
* manager-node-watch: Node.js for npm (run scripts from package.json when files change)
* manager-node: Node.js
* manager-redis: Redis in-memory data structure store used as cache
* manager-wait-for-it: Pure [bash script](https://github.com/vishnubob/wait-for-it) to test and wait on the availability of a TCP host and port
* mailer: [MailHog](https://github.com/mailhog/MailHog) Web and API based SMTP testing

### 3. Start containers

For this just run following command:

```bash
make up
```

### 4. Using application

By default `make up` command starts containers and application is usable within your browser on `http://localhost:8080` address.

You can sign in with credentials: login: `admin@test.app`, password: `123456`

### 5. Stop application
For this just run following command:

```bash
make down
```

## Testing

You can run tests by following command:

```bash
make test
```

## Inspired

* [demo-project-manager](https://github.com/ElisDN/demo-project-manager)

## License

[The MIT License (MIT)](LICENSE)