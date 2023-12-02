<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function formSubmission(Request $request)
    {
        // Retrieve data from the request
        $email = $request->input('email');
        $password = $request->input('pwd');
        $remember = $request->has('remember'); 
        
        echo "Email: $email<br>";
        echo "Password: $password<br>";
        echo "Remember: " . ($remember ? 'Yes' : 'No') . "<br>";
    }
}
