<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use App\Http\Support\Facades;
class AdminLoginController extends Controller
{
    public function _construct(){
        $this->middleware('guest:admin');
    }
    public function showLoginForm()
    {
        return view ('admin.admin-login');
    }

    public function login()
    {
       // $this->validate($request,[
        
      //  ]);
    }

}
