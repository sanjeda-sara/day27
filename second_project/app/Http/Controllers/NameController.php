<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NameController extends Controller
{
    protected $firstname = 'Habibur';
    protected $lastname = 'Rahman';
    public function index()
    {
        return $this->firstname;
    }
    public function fullName()
    {
       // return $this->firstname.' '.$this->lastname;
//        return view('full-name',[
//            'firstName' => $this->firstname,
//            'lastName' => $this->lastname,
//        ]);
        $firstName = $this->firstname;
        $lastName = $this->lastname;
        return view('full-name', compact(['firstName', 'lastName']));
    }
}

//we'll concat first and last name in another method
