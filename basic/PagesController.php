
#creating new controller
#terminal : php artisan make:controller PagesController.php
#app>Http>controller
<? php


namespace App\Http\Controllers;

class PagesController extends Controller
{
	public function home()
	{
		$people=['Taylor','Matt','Adam'];
		return view('Welcom',compact('people'));
	}

	public function about()
	{
		return 'About page';
	}
}