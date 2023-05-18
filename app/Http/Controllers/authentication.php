<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class authentication extends Controller
{
    public function toggle(Request $request) {
        session_start()  ;
        $to = $request->to ; 
        $_SESSION['auth'] = $to ; 
        return '<script>location.reload()</script>' ; 
    }

    public function signin(Request $request) {
        $email = $request -> email ; 
        $password = $request -> password ; 
        $select_user = DB::table('users')->where('email' , $email)->first() ; 
        if($select_user) {
            $verfiy_password = password_verify($password , $select_user->password) ; 
            if($verfiy_password) {
                session_start() ; 
                $_SESSION['user'] = [
                    'id' => $select_user -> id ,
                    'username' => $select_user->username , 
                    'email' => $select_user -> email
                ]; 

                return '<script>location.reload()</script>' ;
                
            }else{
                return 'Invalid password!' ; 
            }
        }else{
            return 'Invalid email or password!' ; 
        }

    }

    public function signup(Request $request) {
        $username = $request -> username ; 
        $email = $request -> email ; 
        $password = $request -> password ; 

        if($username != null && $email != null && $password != null ) {

            $check_username = DB::table('users')->where('username' , $username)->first() ; 

            if($check_username) {
                return 'This username already token!' ; 
            }else{

                $check_email =  DB::table('users')->where('email' , $email)->first() ; 
                if($check_email) {
                    return 'This email already exist!' ; 
                }else{

                    if(strlen($password) < 6) {
                        return 'This password too short !' ; 
                    }else{

                        $hash_password = password_hash($password , PASSWORD_DEFAULT) ; 
                        $insert = DB::table('users') -> insert([
                            'username' => $username , 
                            'email' => $email , 
                            'password' => $hash_password , 
                            'avatar' => 'profile.png' 
                        ]);

                        if($insert){
                            $user = DB::table('users')->where('email' , $email)->first() ; 
                            if($user) {
                                $verify_password = password_verify($password , $user->password) ; 
                                if($verify_password) {
                                    session_start() ; 
                                    $_SESSION['user'] = [
                                        'id' => $user -> id ,
                                        'username' => $user->username , 
                                        'email' => $user -> email
                                    ]; 
                                    return '<script>location.reload()</script>';
                                }else{
                                    return 'Interval insertion error verify password !' ; 
                                }
                            }else{
                                return 'Interval insertion error cant find the user !' ; 
                            }
                        
                        
                        
                    }

                    }
                    
                    
                }
                

            }
            
            
            return 'Interval insertion error !' ; 
        }else{
            return 'All fileds required!';
        }
    }

    public function signout() {
        session_start() ;
        $_SESSION['user'] = null ;
        $_SESSION['chatWith'] = null ; 
        return '<script>location.reload()</script>' ;
        
    }
}
