

#when localhost is entered, a page with string "Hi there is seen"
Route::get('/', function()
{
	return 'Hi there';
});


#when localhost:8080/about is clicked, open page aboutpage.blade.php in views
Route::get('about',function()
{	
	return view('aboutpage');
	#look for resources/views/aboutpage.blade.php
});

//search for page in a nested folder
Route::get('contact',function()
{	
	return view('pages.contacts'); 
	#look for resources/views/pages/contacts.blade.php
	#even / works instead of /
	return view('pages/contacts');
});