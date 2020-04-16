<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $pages = Page::all();
            return view('backend.pages.index',
                compact('pages'));
        } catch (\Exception $exception) {
            dd($exception);
            logger()->error($exception);
            return redirect('backend/pages')->with('error', 'Error');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            $menus = Menu::select('id', 'name')
                ->get();
            return view("backend/pages/create", compact('menus'));
        } catch (\Exception $exception) {
            dd($exception);
            logger()->error($exception);
            return redirect('backend/pages')->with('error', 'Error');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $page = new Page();

        $validator = \Validator::make($request->all(), [
            'title' => 'required|max:255',
        ]);

        if ($request['menu_id'] == 0) {
            session()->flash('error', 'please select menu');
            return redirect()->back();
        }

        if (!empty($request['images'])) {
            $validator = \Validator::make($request->all(), [
                'images' => 'mimes:jpeg,png,jpg,gif,svg',
            ]);
            $images = [];
            for ($i = 0; $i < count($request['images']); $i++) {
                $image = time() . rand(0, 99) . '.' . $request['images'][$i]->getClientOriginalExtension();
                $request['images'][$i]->move(public_path('my_images'), $image);
                $images[] = $image;
            }
            $images = json_encode($images);
        }

        $page->menu_id = $request['menu_id'];
        $page->title = json_encode($request['title'], true);
        $page->content = json_encode($request['content'], true);
        if (!empty($request['images'])) {
            $page->images = $images;
        }
        $page->save();
        return redirect('backend/pages')->with('success', 'messages.success');

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('backend.pages.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::where('id', $id)->first();
        $menus = Menu::select('id', 'name')->get();

        $title = json_decode($page['title']);
        $title_en = $title->en;
        $title_hy = $title->hy;
        $title_ru = $title->ru;

        $content = json_decode($page['content']);
        $content_en = $content->en;
        $content_hy = $content->hy;
        $content_ru = $content->ru;

        $images = json_decode($page['images']);
        return view("backend/pages/edit",
            compact('page', 'menus',
                'title_en', 'title_ru', 'title_hy',
                'content_en', 'content_ru', 'content_hy', 'images'
            )
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request['menu_id'] == 0) {
            session()->flash('error', 'please select menu');
            return redirect()->back();
        }

        $page = Page::where('id', $id)->first();
//        dd($page);

        $validator = \Validator::make($request->all(), [
            'title' => 'required|max:255',
        ]);

        if (!empty($request['images'])) {
            $validator = \Validator::make($request->all(), [
                'images' => 'mimes:jpeg,png,jpg,gif,svg',
            ]);
            $images = [];
            for ($i = 0; $i < count($request['images']); $i++) {
                $image = time() . rand(0, 99) . '.' . $request['images'][$i]->getClientOriginalExtension();
                $request['images'][$i]->move(public_path('my_images'), $image);
                $images[] = $image;
            }
            $images = json_encode($images);
        }

        $page->menu_id = $request['menu_id'];
        $page->title = json_encode($request['title'], true);
        $page->content = json_encode($request['content'], true);
        if (!empty($request['images'])) {
            $page->images = $images;
        }
        $page->save();
        return redirect('backend/pages')->with('success', 'messages.success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
    }
}
