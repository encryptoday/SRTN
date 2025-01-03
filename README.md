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
To store shortened URLs, you need to create a table in your database. 
```mysql
CREATE TABLE `redirect` (
  `id` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `short_url` varchar(50) NOT NULL,
  `hits` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;
```
Use the provided redirect.sql file to create the necessary table.

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

You can have a look at [live SRTN](https://mmm.sh/tools/url_shortner)
