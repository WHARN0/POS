<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id, $name)
    {
        // Mengambil data user dari $id
        $id = $id;
        $name = $name;

        return view('user', compact('id', 'name'));
    }
}