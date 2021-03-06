<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('index');
});


Route::get('/login', function() {
    return 'welcome to login';
}); 

Route::post('/login', function() {
    return 'welcome to login';
});


Route::get('/signup', function() {
    return 'Please signup for our services';
}); 

Route::post('/signup', function() {
    return 'Please signup for our services';
}); 


Route::get('/incomplete', function() {
    return 'incomplete tasks are shown here';
}); 

Route::post('/incomplete', function() {
    return 'incomplete tasks are shown here';
});


Route::get('/complete', function() {
    return 'All complete tasks are shown here';
}); 

Route::get('/tasks', function() {
    return 'All tasks are shown here';
});


Route::get('/add', function() {
    return 'Add a new task here';
});

Route::post('/add', function() {
    return 'Add a new task here';
});


Route::get('/delete', function() {
    return 'delete a task here';
});


Route::get('/edit', function() {
    return 'edit an existing tasks here';
});

Route::post('/edit', function() {
    return 'edit an existing tasks here';
});

Route::get('mysql-test', function() {

    # Print environment
    echo 'Environment: '.App::environment().'<br>';

    # Use the DB component to select all the databases
    $results = DB::select('SHOW DATABASES;');

    # If the "Pre" package is not installed, you should output using print_r instead
    echo pre::$results;

});

Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>environment.php</h1>';
    $path   = base_path().'/environment.php';

    try {
        $contents = 'Contents: '.File::getRequire($path);
        $exists = 'Yes';
    }
    catch (Exception $e) {
        $exists = 'No. Defaulting to `production`';
        $contents = '';
    }

    echo "Checking for: ".$path.'<br>';
    echo 'Exists: '.$exists.'<br>';
    echo $contents;
    echo '<br>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(Config::get('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    print_r(Config::get('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    } 
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});
