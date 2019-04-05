<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;

class ContactUSController extends Controller
{
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function contactUS()
   {
       return view('pages.contact');
   }

   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function contactUSPost(Request $request)
   {
       $validatedData = $request->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required'
        ]);
        // $new = ContactUS();
        // $new->name = $validatedData['name'];
        // $new->save();
       ContactUS::create($request->all());

       return back()->with('success', 'Thanks for contacting us!');
   }
}
