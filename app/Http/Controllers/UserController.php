<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Ixudra\Curl\Facades\Curl;
use Session;

class UserController extends Controller
{
    
    public function __construct(
        User $user
    ){
        $this->user = $user;
    }

    public function loginpage()
    {
        if (!empty(Session::get('user'))) {
            return redirect('account/home');
        }else{
            return view('account.login');
        }
    }
    
    public function login(Request $request)
    {

        $username = $request->username;
        $password = $request->password;

        $response = Curl::to('https://netzwelt-devtest.azurewebsites.net/Account/SignIn')
        ->withContentType('application/json')
        ->withData(['username'=>$username,'password'=>$password])
        ->asJson()
        ->post();

        if(!empty($response)){
            if(isset($response->username)) {
                Session::put('user', $response);
                return redirect('account/home');
            }else{
                return back()->with('error',$response->message);
            } 

        }else{
            return back()->with('error','Invalid email or password');
        }
    }

    public function territories(Request $request)
    {
        
        $territories = Curl::to('https://netzwelt-devtest.azurewebsites.net/Territories/All')
        ->get();
        $territories = json_decode($territories);
        $territories = $this->buildTree($territories->data);

        return view('account.home')->with('territories',$territories);
    }

  
    public function buildTree(array $elements, $parentId = 0) {
        
        $branch = array();

        foreach ($elements as $key => $element) {
            
            if ($element->parent == $parentId) {
                $children = $this->buildTree($elements, $element->id);
                if ($children) {
                    $element->children = $children;
                }
               
                $branch[] = $element;
                
            }
        }
        return $branch;
    }

    
    public function logout(Request $request)
    {
        Session::put('user', '');
        return redirect('account/login')->with('success','You\'re successfully log out.' );
    }



}
