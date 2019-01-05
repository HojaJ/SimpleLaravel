<?php

use App\Mail\FeedbackReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


Route::get('/', function () {
    return view('home');
});


Route::get('about', function(){
   return view('about');
});


Route::get('contact', function(){
    return view('contact');
});

Route::post('contact', function(Request $request){
    \Validator::make($request->all(),[
        'name' => 'required|string',
        'email' => 'required|email',
        'comment' => 'required|string',
    ])->validate();

    Mail::to($request->get('email'))->send(new FeedbackReceived($request->get('name'), $request->get('comment')));

    return redirect('/contact')->with([
        'success_message' => 'Your message has been sent!.'
    ]);

});


//Route::get('/concert/{id}','ConcertsController@show');