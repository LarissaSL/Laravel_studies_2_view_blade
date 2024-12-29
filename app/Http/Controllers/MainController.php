<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showView(): View
    {
        // // Método 1 (Array Associativo)
        // $data = [
        //     'name' => 'Larissa Silva',
        //     'phone' => '1233445334'
        // ];

        // return view('admin.newPage3',$data);

        // Método 2 (Array Associativo diretamente no parametro)
        // return view('admin.newPage3',[
        //     'name' => 'Larissa Silva',
        //     'phone' => '1233445334'
        // ]);

        // Método 3 (função with)
        // return view('admin.newPage3')
        //         ->with('name', 'Larissa Silva')
        //         ->with('phone', '123456789');

        // Método 4 (Compact)
        $name = 'Larissa Sousa';
        $phone = '12345567889';

        return view('admin.newPage3', compact('name', 'phone'));
    }
}
