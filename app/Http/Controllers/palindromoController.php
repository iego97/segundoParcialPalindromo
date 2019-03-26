<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class palindromoController extends Controller
{
    

    public function palindromoView()
    {
        return view('palindromo.palindromo');
    }

    public function validarPalindromo($cadena)
    {
        
        if ($cadena == strrev($cadena))
        {
            return 'true';
        }
        else
        {
	        return 'false';
        }

    }

}
