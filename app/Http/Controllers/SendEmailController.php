<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Validation\ValidationException;
use phpDocumentor\Reflection\Types\Nullable;
use App\User;

class SendEmailController extends Controller
{
    public function index(Request $request)
    {
        $name  = $request->get('buscarpor');
        // $email  = $request->get('email');

        $usuarios = User::where('name', 'like', "%$name%")->paginate(5);
                    
       return view('send_email', compact('usuarios'));
    }

    function send(Request $request)
    {

     $this->validate($request, [
      'name'     =>  'required',
      'email'  =>  'required',
      'message' =>  'required',
      'archivo' =>'mimes:jpeg,png,jpg,gif,svg,txt,pdf,ppt,docx,doc,xls'
      
     ]);
        
        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message,
            'archivo'   =>   $request->file('archivo')
            
        );
        
        $correoenvio = array(
            'email'  => $request->email            
        );
        // dd($data);
     $correoenvios = explode(",", $correoenvio['email']);
     Mail::to($correoenvios)->send(new SendMail($data));
     return back()->with('success', 'Enviado satisfactoriamente');
    }

    
}

?>
