<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function auth($request)
    {
        $check_email =  DB::table('users')->where('email',$request->email)->first();
        
        if(!empty($check_email)){
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password,'role'=>'1'])){
                return redirect('admin/dashboard');
            }else{
                return back()->with('error','Invalid Password!');
            }   
        }else{
            return back()->with('error','Invalid Email!');
        }
    }

    public function check_email($email){
        $check_email =  DB::table('users')->where('email',$email)->first();
        return $check_email;
    }

    public function reset_password($email){
        $this->check_email($email);
    }

}
