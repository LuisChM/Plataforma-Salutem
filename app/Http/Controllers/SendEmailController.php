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
    function __construct()
    {
        $this->middleware([
            'auth',
            'roles:administrador'
        ]);
    }
    public function index(Request $request)
    {
       $name  = $request->get('buscarpor');
       $usuarios = User::where('name', 'like', "%$name%")->paginate(5); 
       
              $results = User::select('users.email')->get();
              
       return view('send_email', compact('usuarios','results'));
       
    }

    //  public function buscarcorreo(){
      
    //   $results = User::select('users.email')->get();
    //   $results->explode(",", $results); 
    //   dd($results);
    //   return view('send_email', compact('results'));
    //   }
    
    
    function send(Request $request)
    {

     $this->validate($request, [
      'tema'     =>  'required',
      'email'  =>  'required',
      'message'  =>  'required',
      'archivo' =>'mimes:jpeg,png,jpg,gif,svg,txt,pdf,ppt,docx,doc,xls|nullable'
      
     ]);
        
        $data = array(
            'tema'      =>  $request->tema,
            'message'   =>   $request->message,
            'archivo'   =>   $request->file('archivo'),
       
        );
        
    $correoenvio = array('email'  => $request->email);
        // dd($data);
    $correoenvios = explode(",", $correoenvio['email']);
     
     Mail:: to($correoenvios)->send(new SendMail($data));
     return back()->with('success', 'Enviado satisfactoriamente');

    }  

  

}


?>
