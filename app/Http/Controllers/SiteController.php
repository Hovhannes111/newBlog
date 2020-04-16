<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function contact(Request $request)
    {
        if ($request->method() === 'GET') {
            return view("/contact");

        } else {
            dd($request->all());
        }
    }

    public function gallery()
    {
        return view("gallery");
    }

    public function registration(Request $request)
    {
        if ($request->method() === 'GET') {
            return view("/registration");

        } else {
            dd($request->all());
        }
    }
}
