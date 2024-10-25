<?php

namespace App\Controllers;

class WelcomeController extends BaseController
{
    public function index()
    {
        // Load the welcome view
        return view('welcome_message');
    }
}
