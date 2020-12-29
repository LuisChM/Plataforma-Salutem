<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    function index()
    {
     return view('send_email');
    }

    function send(Request $request)
    {

     $this->validate($request, [
      'name'     =>  'required',
      'email'  =>  'required|email',
      'message' =>  'required',
      'archivo' =>'mimes:jpeg,png,jpg,gif,svg,txt,pdf,ppt,docx,doc,xls'
     ]);
        
        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message,
            'archivo'   =>   $request->file('archivo')
        );

        $correoenvio = array(
            'emails'    =>  $request->email
            
        );
        // dd($data);
     Mail::to($correoenvio)->send(new SendMail($data));
     return back()->with('success', 'Enviado satisfactoriamente');

    

    }

}

?>
