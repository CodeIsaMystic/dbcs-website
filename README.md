<div align="center">

  <p>An helper to implement the codebase of a PHP Framework following the MVC pattern</p>

<img src="./public/img/logos/logo-square-dark-1200.png" width='500'></img>

  <h1 align="center">Aimer le sport par le coaching</h1>
  <br>
  <br>

</div>

## Getting Started

1. **Download the Zip folder** and extract it on your machine.
2. **Put the folder on the `directory/www`** of your Wamp setup.
3. **Create a quick Database** on `phpMyAdmin`
4. **Add your constants variables** on the `config/` folder.
5. **Change the `.htaccess` file**: name your project and put that name to the .htaccess file in the `public/` folder
6. **Launch your localhost from WAMP**

<br>
<br>

### Config constants to change

These constants are to been update with your project.
You will find them on **the `app/config/config.php` file**.

```php
// DB Params
define('DB_HOST', 'localhost');
define('DB_USER', '_YOUR_USERNAME_');
define('DB_PASS', '_YOUR_PASSWORD_');
define('DB_NAME', '_YOUR_DBNAME_');

// App root
define('APP_ROOT',dirname(dirname(__FILE__)));

// URL root
define('URL_ROOT', '_YOUR_URL_');

// Site name
define('SITE_NAME', '_YOUR_SITE_NAME_');
```

<br>
<br>

### Change the .htaccess file

This is **the `.htaccess` file** you have to update to your name project folder.
You will find it, with **the following path, on the `public/.htaccess` file**.

You have **to switch `<YOUR_NAME_FOLDER>` by what's your app main project's name** is.

```
  RewriteBase /<YOUR_NAME_FOLDER>/public
```

<br>
<br>
<br>

## Structure

This helper is implemented with this clean and simple files's architecture.

```sh
app/
├── config
│   └── config.php
├── controllers
│   └── Pages.php
├── helpers
├── lib
│   ├── Controller.php
│   ├── Core.php
│   └── Database.php
├── models
├── views
│   ├── inc
│   |   ├── footer.php
│   |   └── header.php
│   └── pages
│       ├── about.php
│       └── index.php
├── .htaccess
└── bootstrap.php
public/
├── css
│   └── styles.css
├── images
├── js
│   └── main.js
├── .htaccess
└── index.php
.htacccess
README.md

```

<br>
<br>
<br>

## Start building your project

_In this section, I will document how to create your database, the models related to your project and so on._

To be continued...

<br>
<br>
<br>

---

## Branding and style guide

A standard style guide is made on purpose to referr to it, the website will evolve, closed to the customer, and we will of course make some changes as long as we build that project.

![DBCS Style Guide](dbcs-style-guide.jpg)

> **NOTICE:**
> We do not go in depth on that topics because of time and effort but we could definitivetly add more content, and context such as 'tags, logos, icons' or 'personas', customers potential...
