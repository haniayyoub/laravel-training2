# laravel-training

## Part 1: Installation
To work with Laravel w need to setup the following installation:
-	Download XAMPP for PHP and MySQL: https://www.apachefriends.org/
-	Download Visual Studio Code: https://code.visualstudio.com/
-	For package dependency management install Composer: https://getcomposer.org/
-	Also install NodeJS: https://nodejs.org/en/
-	For version control we will use GitHub:
	create account: https://github.com/
    download GitHub Desktop: https://desktop.github.com/

Note 1: you can download standalone PHP and MySQL server with any management tool.
Note 2: you can use any IDE rather than VSCode such as sublime text, Atom, and PhpStorm, 
Note 3: the Apache server is used for running the MySQL management tool (PhpMyAdmin)
Note 4: Laravel has its own server for development so there is no need to put the project folder under the Apache/htdocs folder 

## Part 2: Starting with Laravel 
 -	open VSCode
 -	Open terminal 
 -	Run command: composer create-project laravel/laravel laravel-training
 -	create GitHub repository with same name and location of the project
 -	publish this repo
 -	check GitHub and make sure that the files are uploaded
 -	open the folder in VSCode 
 -	delete the folder 
 -	go to GitHub and this time choose clone repo and clone the Laravel-training repo
 -	open in VSCode note that .env file and vendor folder are no longer existing 
 -	in terminal run ( composer install ) now the vendor folder appears 
 -	run command: php artisan key:generate
 -	run command: php artisan serve
 -	create a copy of resources/views/welcome.blade.php and rename it to mypage
 -	modify the page content 
 -	go to routes/web.php change the view name to mypage 
 -	now refresh the page 
 -	in route/web.php change the route URI to home 

 
![Laravel MVC](public/mvc.jpg)
