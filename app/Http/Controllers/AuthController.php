<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Exception;

class AuthController extends Controller
{
    //
    public function show()
    {
        return view('dashboard');
    }
    public function Login()
    {
        // validator(request()->all(),[
        //     'email'=> ['required', 'email'],
        //     'password'=>['required']
        // ])->validate();

        // $credentials = [
        //     'email' => $_REQUEST['email'],
        //     'password' => $_REQUEST['password'],
        // ];

        // if(Auth()->attempt(request()->only(['email','password']))) {
        //     return redirect('dashboard');       
        // }


        // return redirect()->back()->withErrors(['email'=>'Invalid Credentials!']);
            session_start();
            $uerid = $_REQUEST['email'];
            $password = $_REQUEST['password'];
            $token        = '91da73c2148895cbf3ed23f9760e0cce';
            $domainname   = env('LMS_URL');
            $functionname = 'local_ops_login_by_userkey';
        
            $serverurl = $domainname . '/webservice/rest/server.php' . '?wstoken=' . $token . '&wsfunction=' 
            . $functionname . '&userid='.$uerid.'&password='.$password.'&moodlewsrestformat=json';
            
        
           
            $path = '&wantsurl='.urlencode(env('APP_URL'));
          
            $client = new \GuzzleHttp\Client(['verify' => false]);
            $r = $client->request('GET', $serverurl);
            $resp = json_decode($r->getBody());
            if($resp->status){
                $_SESSION['mdl_userinfo'] = $resp;
                return json_encode(
                    array(
                    'status' => true,
                    'loginurl' => $resp->loginurl . $path
                ));
            }
            else{
                return json_encode(
                    array(
                    'status' => false,
                    'errMsg' => $resp->loginurl
                ));
            }
            
         
}
public function Logout(Request $req)
{
    
    if(!isset($_SESSION)){
        session_start();
    }
    if($req->ajax()){
        if(isset($_SESSION['mdl_userinfo'])){
        unset($_SESSION['mdl_userinfo']);
        return 'success';
        }
        else{
            return 'error ajax';
        }
    }
        else{
            if(isset($_SESSION['mdl_userinfo'])){
                unset($_SESSION['mdl_userinfo']);
                unset($_SESSION['mdl_sesskey']);
                return Redirect::to(env('APP_URL'));
                }
                else{
                    return 'error http';
                }
        }
    }
}
