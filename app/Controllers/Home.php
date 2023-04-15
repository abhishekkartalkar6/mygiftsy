<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }



    public function admin()
    {
        return view('./admin/dist/admin_login_page');
    }

    public function dashboard()
    {
        return view('./admin/dist/dashboard');
    }
}
