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
 -  for .env file make a copy form .env.example file and rename it to .env 
 -	run command: php artisan key:generate
 -	run command: php artisan serve
 -	create a copy of resources/views/welcome.blade.php and rename it to mypage
 -	modify the page content 
 -	go to routes/web.php change the view name to mypage 
 <pre>
 Route::get('/', function () {
    return view('home');
}); 

To 

Route::get('/', function () {
    return view('mypage');
});
</pre>
 -	now refresh the page 
 -	in route/web.php change the route URI to mypage 

<pre>
Route::get('/', function () {
    return view('mypage');
});

To 

Route::get('/mypage', function () {
    return view('mypage');
});
</pre>
## Part 3: Laravel MVC 
Model-view-controller (MVC) is a software architectural pattern commonly used to develop web applications containing user interfaces. This pattern divides the application into three interconnected elements.
* **Model** contains the business logic of the application. For example, the Online Store application product data and its functions.
* **View** contains the application’s user interface. For example, a view to register products or users.
* **Controller** acts as an interface between model and view elements. For example, a product controller collects information from a “create product” view and passes it to the product model to be stored in the database.

![Laravel MVC](/public/mvc.png)

## Part 4: Laravel Routes
In Laravel, the Route class is used to define the routes for a web application. It provides a simple and convenient way to define URLs, HTTP methods, and controllers or closure functions that should handle the incoming requests.
If you open the **routes/web.php** file you will find the following code:

<pre>
Route::get('/', function () {
    return view('welcome');
});
</pre>

This example creates a route that matches the root URL of the application and returns a view named "welcome". The get method is used to specify that the route should only match GET requests.
Laravel also provides several other methods on the Route class, such as post, put, patch, delete, options, and any, that you can use to define routes that match different HTTP methods
<pre>
Route::get();
Route::post();
Route::patch();
Route::put();
Route::delete();
Route::any();

</pre>

Try:
<pre>
Route::get('/welcome', function () {
return 'welcome';
});

Route::get('/hello', function () {
echo '&lt;h1>Hello&lt;/h1>';
});

</pre>

**Routes parameters**
In Laravel, you can pass parameters to your routes to capture dynamic values in the URL. This allows you to create dynamic and flexible URLs that can be used to retrieve specific data based on the parameters provided.

<pre>
Route::get( 'hello/{name}', function ($name){
echo "Hello " . $name;
});

Route::get( 'hello/{name}/{lastname?}', function ($name, $lname = " "){
echo "Hello " . $name . " " . $lname ;
});

Route::get( 'hello/{name}/{fname?}', function ($x, $y="test"){
            echo "Hello " . $x . " " . $y;
            });

</pre>

**Note**: the ? means optional parameter

**Grouping routes**
Grouping routes in Laravel allows you to organize and structure your routes in a more meaningful and efficient way. By grouping routes, you can apply common behavior or configurations to multiple routes at once, which can help reduce code duplication and improve the maintainability of your application.

<pre> 
Route::group(['prefix'=>'home'], function()
{
Route::get('/', function () {
    return view('home');
});
Route::get('/account', function () {
    return view('account');
});
Route::get('/signup',function () {
    return view('signup');
});
});

</pre>

**Named routes**
Naming routes in Laravel is useful for several reasons:

- Improved readability: By giving routes descriptive names, it makes your code more readable and understandable, especially for developers who may be unfamiliar with your codebase.
- Ease of maintenance: Named routes make it easier to update your application if you need to change the URL structure. Instead of searching through your code for hardcoded URLs, you can update the route definition in one place, and the change will be reflected throughout your application.
- URL generation: Named routes allow you to generate URLs programmatically, without having to hardcode them in your application. For example, you can generate a URL to a named route in your Blade templates or in your controllers using the route helper function. This can make your application more flexible and resilient to changes.

<pre>
Route::group(['prefix' => 'home'], function () {
    Route::get('/', function () {
        return view('home');
    })->name('home');
    Route::get('/account', function () {
        return view('account');
    })->name('home.acount');
    Route::get('/signup', function () {
        return view('signup');
    })->name('home.signup');
});

</pre>
In home.blade add the following

<pre>
 <h2 style="color:black; text-align: center" ><a href="{{ route('home.signup') }}"> Signup with route name</a></h2>
 <h2 style="color:black; text-align: center" ><a href="{{ url('home/signup') }}"> Signup with route url </a></h2>
</pre>

Note: The route method takes the name of the route, while the url method take the URI of the route
Note: The **{{ }}** syntax in Laravel Blade is used to print a value or expression in a Blade template. **{{ $name}}** is equal to **<?php echo $name ?>**
 
