<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Department;
use App\Models\Designation;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {
       $users=User::with(['getDepartment','getDesignation'])->get();
        return view('index',compact('users'));
   }
}
