<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        if( request()->has('search')) {
            $search = request('search');
            return redirect('/products?' . 'search=' . $search);
        }

        return view('index');
    }

    public function partner()
    {
        return view('pages.partner');
    }

    public function help()
    {
        return view('pages.help');
    }
}
