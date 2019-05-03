<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class response extends Controller
{
    //
    public function users()
    {
        $data = [
            'name' => 'Saad',
            'role' => 'super-admin'
        ];

        return response()->json($data);
    }
}
