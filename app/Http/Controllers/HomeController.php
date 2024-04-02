<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function user(){
        if(Auth::id()){
            if(Auth::user()->user_type == 'User'){
                return view('dashboard');

            }//end inner if
            else{
                return view('admin.home');
            }

        }
        else{
            return redirect()->back();
            }
    }//end function index


    public function admin(){
        return view('admin.home');
    }
}
