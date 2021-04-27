# REST API IN SLIM PHP


## QUICK INSTALL:

### Requirements:

- Git.
- Composer.
- PHP 7.3+.
- MySQL/MariaDB.

### Configurations

Cambiar las variables de conexión según su entorno de pruebas en los siguientes archivos

```bash
1. En src/App/Configs.php
2. En extras/bin/restart-db.php
```

### With Composer:

You can create a new project running the following commands:

```bash
$ composer restart-db
$ composer start
```


### With Git:

In your terminal execute this commands:

```bash
$ git clone https://github.com/craymundo/slim-framework-project.git && cd slim-framework-project
$ composer install
$ composer restart-db
$ composer start
```



## :books: DOCUMENTATION:

### ENDPOINTS:

#### CUSTOMER:

- Login Customer: `POST /api/customer/getDataCustomer`

#### MENU:

- Get All Menu: `GET /api/menu/getAll`


#### OPERATION:

- Get Report: `GET /api/operation/report`

- Post Add Operations: `GET /api/operation/add`

#### USER:

- Login User: `POST /api/user/login`