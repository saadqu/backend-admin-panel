<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ResponseController extends Controller
{
    //
    public function users()
    {
        /*$data = [
            'name' => 'Saad',
            'role' => 'super-admin',
            'phone' => '+923007309706'
        ];*/

        $data = DB::table('users')->get();

        return response()->json($data);
    }
}
