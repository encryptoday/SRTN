# SRTN

A simple and efficient URL shortener built with PHP. This tool allows you to shorten long URLs, making them easier to share and track.

## Features
- Shortens long URLs into compact and shareable links.
- Simple, user-friendly interface.
- Supports easy integration with databases for storage and tracking.

## Installation

### 1. Clone the Repository

```bash
git clone https://github.com/your-username/your-repository-name.git
cd your-repository-name
```

### 2. Set up Database
To store shortened URLs, you need to create a table in your database. Use the provided redirect.sql file to create the necessary table.

### 3. Configure Database Settings
Edit the config.php file located in the auth folder to match your database configuration. 

```php
<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "";
?>
```
Make sure the database credentials are correct and match the settings of your server.

## Live Demo

You can have a look at my live demo of SRTN at [https://mmm.sh/tools/url_shortner](https://mmm.sh/tools/url_shortner)
