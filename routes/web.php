<?php 


Route::view('/','home')->name('home');

Route::view('/quienes-somos','about')->name('about');

/*Route::get('/portafolio','ProjectController@index')->name('projects.index');
Route::get('/portafolio/crear','ProjectController@create')->name('projects.create');

Route::get('/portafolio/{project}/editar','ProjectController@edit')->name('projects.edit');
Route::patch('/portafolio/{project}','ProjectController@update')->name('projects.update');

Route::post('/portafolio','ProjectController@store')->name('projects.store');
Route::get('/portafolio/{project}','ProjectController@show')->name('projects.show');

Route::delete('/portafolio/{project}', 'ProjectController@destroy')->name('projects.destroy');*/

Route::resource('portafolio','ProjectController')
    ->parameters(['portafolio'=>'project'])
    ->names('projects');

Route::view('/contacto','contact')->name('contact');
Route::post('/contact','MessageController@store')->name('messages.store');




//Route::resource('projects','PortfolioController')->only(['index']);

//Route::apiResource('projects','PortfolioController');



//Route::view('/','home', ['nombre' => 'jorge']);

/*oute::get('/', function(){
    $nombre = "jorge";

	return view('home')->with('nombre',$nombre);
})->name('home');  */

Auth::routes();


    
?> 

