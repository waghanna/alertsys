<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class ContactController extends Controller
{

	public function post_contact_form(Request $request){
		$validator = Validator::make($request->all(), [
	        'email' => 'required|email',
	        'name' => 'required',
	        'message' => 'required']);
		$input = $request->all();
		if ($validator->fails())
			return redirect()->back()
						->withErrors($validator)
                        ->withInput();

        else
		Mail::send('emails.contact', 
			[
				'name'=>$request->get('name'),
				'email'=>$request->get('email'),
				'phone'=>$request->get('phone'),
				'company'=>$request->get('company'),
				'user_message'=>$request->get('message'),
				'page'=>$request->get('location')
			],
			function($message){
	            $message->from('sales@alertsystems.ca');
	            $message->to('sales@alertsystems.ca','ALERT-SYSTEMS-SALES');
	            $message->subject('ALERT SYSTEMS MESSAGE');
	        });
        	return redirect()->back()
						->with('success', 'Thanks for contacting us!')
						->withInput();
                        
	}
}
