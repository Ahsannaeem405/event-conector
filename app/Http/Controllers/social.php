<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Laravel\Socialite\Facades\Socialite;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class social extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback()
    {

        try {
      
            $user = Socialite::driver('google')->user();
      
            $finduser = User::where('google_id', $user->id)->first();
       
            if($finduser){
       
                Auth::login($finduser);
      
                return redirect('/');
       
            }else{
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'password' => encrypt('123456dummy')
                ]);
      
                Auth::login($newUser);
      
                return redirect()->intended('dashboard');
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
     public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleFacebookCallback()
    {
        try {
            
            
            

            $user = Socialite::driver('facebook')->user();


            $finduser = User::where('facebook_id', $user->id)->first();


                if($finduser){
                    

                     
                    
                    return redirect('/user');



                }
                else{
                    if ($user->getEmail() ==null or User::where('email',$user->getEmail())->exists()){
                            
                            $str_mail = Str::random(10);
                            $newUser = User::create([
                            'name' => $user->name,
                            'email' => $str_mail."@gmail.com",
                            'password' => encrypt('123456dummy'),
                            'facebook_id'=> $user->id,
                            
                            ]);
                           
                    
                    }
                    else 
                    {
                       
                            $newUser = User::create([
                                'name' => $user->name,
                                'email' => $user->email,
                                'facebook_id'=> $user->id,
                                'password' => encrypt('123456dummy'),
                                

                            ]);


                    }
                   
                    Auth::login($newUser);
                    return redirect('/user');


            } 
        }catch (Exception $e) {

             dd($e);

            return redirect('auth/facebook');


        }
    }
}
