<?php namespace App\Http\Controllers;

use App\Http\Requests\ContactformRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Mail;

use App\mktp\entities\Contactform;

class ContactformController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function marketing_y_estrategia()
	{
		return view('marketing_y_estrategia');
	}

	public function campanas_publicitarias()
	{
		return view('campanas_publicitarias');
	}

	public function diseno_grafico()
	{
		return view('diseno_grafico');
	}

	public function branding()
	{
		return view('branding');
	}

	public function estrategia_digital()
	{
		return view('estrategia_digital');
	}

	public function btl()
	{
		return view('btl');
	}
	public function contact()
	{
		return view('mktp/new_contactform');
	}
	public function contact_save(ContactformRequest $request)
	{
		/*
		PERSISTIMOS CONTACTO
		*/
		$contact_form = Contactform::create([
			
			//"id" => 4,
			"name" => $request->name,
			"email" => $request->email,
			"city" => $request->city,
			"group" => $request->group,
			"subject" => $request->subject,
			"text" => $request->text,
		]);

		/*
		INFORMAMOS
		*/
		$meesage = 'Hola. Ha habido un contacto';
		Mail::send('hola', array('html' => 'view', 'message' => $meesage), function($message)
		{
			$message->to('barcodepandora@gmail.com', 'German')->subject('Ha habido un contacto!');
		});
		
		//return redirect('ccservice/');
		return view('btl');
	}
	public function chart()
	{

		/*
		INFORMAMOS
		*/
		$meesage = 'Hola. Maduremos';
		Mail::send('hola', array('html' => 'view', 'message' => $meesage), function($message)
		{
			$message->to('barcodepandora@gmail.com', 'Juan')->subject('Maduremos!');
		});
	
		return view('chart');
	}	
}

