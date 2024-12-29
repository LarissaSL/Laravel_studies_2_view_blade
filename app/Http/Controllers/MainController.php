<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showView(): View
    {
        $data = [
            'value' => 100,
            'cities' => ['New York', 'Los Angeles', 'Chicago'],
            'names' => [],
            'index' => 1
        ];

        return view('home', $data);
    }

    public function submit(Request $request): void {
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:6'
        ]);

        echo 'Formulário submitido com sucesso.';
    }
    
    public function setSession() : View {
        session(['name' => 'John Doe']);
        return view('home');
    }

    public function clearSession() : View {
        session()->forget('name');
        return view('home');
    }
}
