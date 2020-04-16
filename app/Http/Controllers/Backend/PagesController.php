<?php

namespace App\Http\Controllers\Backend;

use App\Models\Menu;
use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function index()
    {
        $pages = Page::all();
//        dd($pages);
        return view('backend/pages/index', compact('pages'));
    }

    public function create(Request $request)
    {
        if ($request->method() === 'GET')
        {
            $menus = Menu::all();
            return view("backend/pages/create", compact('menus'));
        }
        else {
            dd($request->all());
        }
    }
}
