<?php

namespace App\Controllers;
use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        $contactModel = new Contact();
        
        return $this->view('login', [
            'title' => 'Login',
            'description' => 'pagina de login'
        ]);
    }

    
}