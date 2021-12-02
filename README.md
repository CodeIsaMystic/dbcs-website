<div align="center">

<img src="./public/img/site/logos/logo-dbcs/logo-square-dark-1200.png" width='500'></img>

  <h1 align="center">Aimer le sport par le coaching</h1>
  <br>
  <br>

</div>

## Table of Contents

- [Table of Contents](#table-of-contents)
- [Getting **Started**](#getting-started)
  - [Config constants to change](#config-constants-to-change)
  - [Change the .htaccess file](#change-the-htaccess-file)
- [Structure](#structure)
- [Start building your project](#start-building-your-project)
- [Branding and style guide](#branding-and-style-guide)
- [The Project](#the-project)
    - [Global scope](#global-scope)
    - [Javascript](#javascript)
  - [Backend](#backend)

## Getting **Started**

1. **Download the Zip folder** and extract it on your machine.
2. **Put the folder on the `wamp64/www`** of your Wamp setup.
3. **Create a quick Database** on `phpMyAdmin` you can use the `dbcs.sql` file on the root of the project.
4. **Add your own constants variables** on the `app/config/config.php` file.
5. **Change the `.htaccess` files**: name your project and put that name to the .htaccess file in the `public/` folder
6. **Launch your localhost from WAMP**

---

<br>
<br>

### Config constants to change

These constants are to update if you download the project.
You will find them on **the `app/config/config.php` file**.

```php
define('DB_HOST', 'localhost');
define('DB_USER', '_YOUR_USERNAME_');
define('DB_PASS', '_YOUR_PASSWORD_');
// Your phpMyAdmin database's username and password
define('DB_NAME', '_YOUR_DBNAME_');
// Your Project's database name

define('APP_ROOT',dirname(dirname(__FILE__)));

define('URL_ROOT', '_YOUR_URL_');
// The url you will use, like "http://localhost/NAME_FOLDER"
// The NAME_FOLDER must be the same you use on your `wamp64/www` directory

define('SITE_NAME', '_YOUR_SITE_NAME_');
// The site name you want to display on the <title>
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

> **NOTES:**
> you may encounter an issue to setup the project. Please checkout all the .htaccess files are exactly the same as the project. You just have to do one changes for your name folder.

<br>
<br>
<br>

## Structure

This project is implemented with this simple files's architecture.

```sh
app/
├── config/
│   └── config.php
├── controllers/
│   ├── Pages.php
│   ├── Posts.php
│   └── Users.php
├── helpers/...
├── lib/
│   ├── Controller.php
│   ├── Core.php
│   └── Database.php
├── models/
│   ├── Post.php
│   └── User.php
├── views/
│   ├── inc/
│   ├── pages/
│   └── posts/
├── .htaccess
└── bootstrap.php
public/
├── css/
│   └── styles.css
├── img/
│   ├── favicons/
│   ├── site/
│   └── uploads/

├── js/
│   ├── helper/
│   ├── lib/
│   ├── modules/
│   └── script.js
├── .htaccess
├── index.php
└── manifest.webmanifest
.htacccess
dbcs.sql
README.md

```

<br>
<br>
<br>

## Start building your project

_In this section, I document to create your database, the models related to your project and so on. Some basic's stuff..._

1.  first, create your database on your phpMyAdmin account (thinking that you don't have to forget to rename your constants and your .htaccess file)
2.  get the `dbcs.sql` file on the root
3.  then copy/paste the file's content into the `SQL` section
4.  checkout every rows and columns are provided and corresponding for the project because it may have some issue if that files has not been updated on time.

> **NOTES:**
> Noticed you do have to check your constants naming variables, matching with your phpMyAdmin credentails and the project name setup you changed on the .htaccess file.

<br>
<br>
<br>

---

## Branding and style guide

A standard style guide is made on purpose to referr to it, the website will evolve, closed to the customer, and we will of course make some changes as long as we build that project.

<div align="center">
  <img src="./dbcs-style-guide.jpg" />
</div>

> **NOTICE:**
>
> - We do not go in depth on that topics because of time and effort but we could definitivetly add more content, and context such as 'tags, logos, icons' or 'personas', customers potential...
> - This style guide may have changed with time...

## The Project

#### Global scope

A simple app web site for a professional personal trainer which is trying to build his own enterprise. The needs are basic and we've focused more time and effort on the way to manage customers, partners and contacts in general.

The blog part will be used mor as a way to make some partners, helping them to increase their visibility, letting the client publish their content and redirect customers to their web sites...

On this way, the client do not make some big effort to publish some new contents and can like so, stay focus on his list of customers, prospects, partners or contacts...

#### Javascript

You will find as well on the UI and "Views" side some of Javascript modules or library used to animate or some functionalities closed to the Js part of an application such as DataTables.js, scrollTrigger.js or stickyHeader.js...

I decide as well **in javascript to focus on a simple Modules architecture organization** without following the OOP standard paradigm. That's only my decision in that project which, of course, could be definitively done in another way.

There's also an helper folder to add some tiny functions..

### Backend

For this simplifyed project, I decide to use a MVC Architecture with PHP & MySQL as database.

I've simplifyied the back office for purpose.
It's a "volunteer project" for a professional which have some simple needs and we both definitively agree that it will be not a special requirement, and need for his activity.

The project will grow with time and this MVC architecture allows us to do so...

> **NOTES:**
> You possibly may encounter an issue with receiving email if you will test the forms contact and it's totally okay. You do have to setup your machine on this purpose if you are using WAMP as localhost.
> Please get more infos on a Google search about " _"How to setup WAMP to send email in php"_
