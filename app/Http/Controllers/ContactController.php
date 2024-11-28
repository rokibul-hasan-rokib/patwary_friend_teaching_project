<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    final public function index(){
        return view('admin.modules.contact.index');
    }
}