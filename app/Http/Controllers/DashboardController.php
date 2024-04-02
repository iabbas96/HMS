<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function dashboard(){
        $role = Auth::user()->user_type;

        switch ($role) {
          case 'Admin':
             return redirect()->route('admin.dashboard');
             break;
          case 'User':
             return redirect()->route('user.dashboard');
             break;

        }//end switch
    }
}
