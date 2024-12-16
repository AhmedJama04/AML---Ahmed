<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;

class SuccessfulController extends Controller
{

    public function SuccessfulView()
    {
        return view('successful');
    }


}
