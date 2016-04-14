<?php

namespace App\Http\Controllers\Closure;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class Closure extends Controller
{
    //
    
    public function closure(Request $request)
    {
        return "Hello from the other side!!!";
    }
}
