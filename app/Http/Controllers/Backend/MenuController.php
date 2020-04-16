<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuRequest;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $menus = Menu::all();
            return view('backend.menus.index',
                compact('menus'));
        } catch (\Exception $exception) {
            dd($exception);
            logger()->error($exception);
            return redirect('backend/menus')->with('error', 'Error');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.menus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuRequest $request)
    {
        try {
            $menu = new Menu();
            $menu->name = json_encode($request->name, true);
            $menu->link = $request->link;
            $menu->active = $request->active;
            if (!empty($request->keyword['en']) ||
                !empty($request->keyword['hy']) ||
                !empty($request->keyword['ru'])
            ) {
                $menu->keyword = json_encode($request->keyword);
            }
            if (!empty($request->description['en']) ||
                !empty($request->description['hy']) ||
                !empty($request->description['ru'])
            ) {
                $menu->description = json_encode($request->description);
            }
            $menu->save();
            return redirect('backend/menus')->with('success', 'messages.success');

        } catch (\Exception $exception) {
            dd($exception);
            logger()->error($exception);
            return redirect('backend/menu')->with('error', "wrong");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $menu = Menu::where('id', $id)->first();
            return view('backend.menus.edit', compact('menu'));
        } catch (\Exception $exception) {
            dd($exception);
            logger()->error($exception);
            return redirect('backend/menu')->with('error', "wrong");

        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(MenuRequest $request, $id)
    {
        try {
            $menu = Menu::find($id);
            $menu->name = json_encode($request->name, true);
            $menu->link = $request->link;
            $menu->active = $request->active;
            if (!empty($request->keyword['en']) ||
                !empty($request->keyword['hy']) ||
                !empty($request->keyword['ru'])
            ) {
                $menu->keyword = json_encode($request->keyword);
            }
            if (!empty($request->description['en']) ||
                !empty($request->description['hy']) ||
                !empty($request->description['ru'])
            ) {
                $menu->description = json_encode($request->description);
            }
            $menu->save();
            return redirect('backend/menus')->with('success', 'messages.success');

        } catch (\Exception $exception) {
            dd($exception);
            logger()->error($exception);
            return redirect('backend/menu')->with('error', "wrong");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {
        //
    }
}
