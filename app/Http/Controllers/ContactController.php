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
		if ($validator->fails()){
			return redirect()->back()
						->withErrors($validator)
                        ->withInput();
		}
        else{
			\Mail::send('emails.contact', 
				[
					'name'=>$request->get('name'),
					'email'=>$request->get('email'),
					'phone'=>$request->get('phone'),
					'company'=>$request->get('company'),
					'user_message'=>$request->get('message'),
					'page'=>$request->get('location')
				],
				function($message){
					$recipients = ['sales@alertsystems.ca', 'wagdy.hanna@gmail.com'];
		            $message->from('sales@alertsystems.ca');
		            $message->to($recipients);
		            $message->subject('ALERT SYSTEMS INQUIRY');
		        });
			
			$auto_reply = "Thank you for contacting Alert Systems International.\r\nOne of our associates will be contacting you shortly.\r\nBest Regards,\r\nSales Team at Alert Systems International";
			\Mail::raw($auto_reply, function($message) use ($request) {
				$message->to($request->get('email'))
						->from('sales@alertsystems.ca')
						->subject('[Auto-Reply] Your message was received');
				});

        	return redirect()->back()
				->with('success', 'Thanks for contacting us!')
				->withInput();
		}
	}
}
