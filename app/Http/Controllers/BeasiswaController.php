<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeasiswaController extends Controller
{
    public function getData()
    {
        $data = [
            [ 'code' => '1123', 'name' => 'Lerian', 'age' => '25'],
            [ 'code' => '2234', 'name' => 'Rigai', 'age' => '25'],
            [ 'code' => '5567', 'name' => 'Asep', 'age' => '25'],
            [ 'code' => '8890', 'name' => 'Sopyan', 'age' => '25'],
        ];
        return response()->json($data);
    }
}
