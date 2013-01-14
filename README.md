Installation
============

<pre>
git clone git@github.com:kestutis-stalmokas/laravel-bootstrap.git directory
cd directory
php artisan key:generate
</pre>

Create Database and change configuration in application/config/database.php

<pre>
php artisan migrate:install
php artisan migrate
</pre>

You can create user using artisan:
<pre>
php artisan user:create email password
</pre>


# [Laravel](http://laravel.com) - A PHP Framework For Web Artisans

Laravel is a clean and classy framework for PHP web development. Freeing you
from spaghetti code, Laravel helps you create wonderful applications using
simple, expressive syntax. Development should be a creative experience that you
enjoy, not something that is painful. Enjoy the fresh air.

[Official Website & Documentation](http://laravel.com)
