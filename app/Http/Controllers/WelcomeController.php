<?php namespace App\Http\Controllers;

use App\Http\Requests\ContactformRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
//use Mail;

use mktp\entities\Contactform;

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('index');
	}
	public function test()
	{
		return view('index_test');
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

	public function call_center()
	{
		return view('call_center');
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
		$contact_form = null;
		$contact_form = Contactform::create([
			
			//"id" => 4,
			"name" => $request->name,
			"email" => $request->email,
			"group" => $request->group,
			"subject" => $request->subject,
			"text" => $request->text,
		]);

		/*
		INFORMAMOS
		*/
		/*$meesage = 'Hola. Ha habido un contacto';
		Mail::send('hola', array('html' => 'view', 'message' => $meesage), function($message)
		{
			$message->to('juan.moreno@mktp.co', 'Juan M')->subject('Ha habido un contacto!');
		});
		
		//return redirect('ccservice/');*/
		return view('btl');
	}
}
