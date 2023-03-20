<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

$my = 'hello';
class dashboardController extends Controller

{
    //

    public function show(): View
    {
        $my = strtoupper('Abu Bakar');
        return view('name', [
            'name' => $my,
            'occupation' => 'Hacker',
            'status' => 'masih bujang'
        ]);
    }
}
