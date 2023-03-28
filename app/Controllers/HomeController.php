<?php

namespace App\Controllers;
use App\Models\Contact;

class HomeController extends Controller
{
    public function index()
    {
        $contactModel = new Contact();

        return $contactModel->query("SELECT * FROM contacts")->get();

        // return $contactModel->get();

        return $this->view('login', [
            'title' => 'Login',
            'description' => 'pagina de login'
        ]);
    }

    
}