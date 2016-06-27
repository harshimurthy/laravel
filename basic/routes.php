
<?php


#when localhost:8000 is entered, a page with string "Hi there is seen"
Route::get('/', function()
{
	return 'Hi there';
});


#when localhost:8000/about is clicked, open page aboutpage.blade.php in views
Route::get('about',function()
{	
	return view('aboutpage');
	#look for resources/views/aboutpage.blade.php
});

#search for page in a nested folder
Route::get('contact',function()
{	
	return view('pages.contacts'); 
	#look for resources/views/pages/contacts.blade.php
	#or
	return view('pages/contacts');
});

#passing values to views

Route::get('/',function()
{
	$people=['matt','adam','joe'];
	return view('welcome',['people'=>$people]);
	#or
	return view('welcome',compact('people')); #preferred
	#or
	return view('welcome')->with('people',$people);
	#or
	return view('welcome')->withPeople($people);
	#or
	return view('welcome',[

		]);
	#or
	return View::make();

});


#PagesController is the controller
#home is the method name
Route::get('/','PagesController@home');
Route::get('about','PagesController@about'); #localhots:8000/about


#Fetching data
Route::get('cards/create','CardsController@create');

#posting/storing data
Route::post('cards','CardsController@store');

#creating 
Route::post('cards/create','CardsContoller@create');

#to edit
Route::post('cards/1/edit','CardsController@edit');

#to update
Route::put('cards/1','CardsController@update');

#to delete
Route::delete('cards/1','CardsController@destroy');

#Get request to display all the cards
Route::get('cards','CardsController@index') #localhost:8000/cards

#To get a particular card
Route::get('cards/{card}','CardsController@show');






?>