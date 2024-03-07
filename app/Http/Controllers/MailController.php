<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller {
   public function basic_email(Request $request) {
      
   
  
$data['name']=$request->name;
$data['email']=$request->email;
$data['number']=$request->phone;
$data['requirement']=$request->msg;
$data['service']=$request->service;
isset($request->package) ? $data['package'] = $request->package :$data['package'] = '' ;


    Mail::send(['text'=>'mail'], $data, function($message) {
         $message->to('info@thebrandprofessionals.com', 'Script Publisher')->subject
            (' New Order');
         $message->from('info@thebrandprofessionals.com','Script Publisher');
      });
       return redirect('thank-you');
   }
  
}