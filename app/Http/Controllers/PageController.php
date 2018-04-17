<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller {
    public function index()
    {
        $pages = Page::latest()->get();
        return view('pages.page', compact('pages'));
    }

    public function create()
    {
        return view('pages.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

            $filename='';
        if (request()->hasFile('img')) {
            $image = request()->file('img');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $filename);
        }
        Page::create([
            'title' => request('title'),
            'body' => request('body'),
            'picture' => $filename
        ]);
        return redirect()->back()->with('message', 'Page added successfully!');
    }

    public function show(Page $page)
    {
        return view('pages.show', compact('page'));

    }

    public function delete(Page $page)
    {
        $path = public_path('/images' . '/' . $page->picture);
        \File::delete($path);
        $page->delete();
        return back();

    }

    public function edit(Page $page)
    {
        return view('pages.edit', compact('page'));
    }

    public function update(Page $page)
    {
        $path = public_path('/images' . '/' . $page->picture);
        \File::delete($path);
        $filename = '';
        if (request()->hasFile('img')) {
            $image = request()->file('img');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $filename);
        }

        $page->update([
            'title' => request('title'),
            'body' => request('body'),
            'picture' => $filename

        ]);
        return view('welcome');


    }
}
