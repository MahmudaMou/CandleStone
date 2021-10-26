<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contacts;

class ContactMassage extends Controller
{
    public function index()
    {
        $note = Contacts::all();
        return view('admin.contact-massage',compact('note'));
    }
}
