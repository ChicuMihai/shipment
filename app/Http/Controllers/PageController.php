<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PageController extends Controller
{
    public function index(){
        $pages=Page::latest()->get();
        return view ('pages.page',compact('pages'));
    }
    public function create (){
        return view('pages.create');
    }
    public function store(){
        $this->validate(request(),[
           'title'=>'required',
           'body'=>'required'
        ]);
        Page::create([
            'title'=>request('title'),
            'body'=>request('body')

        ]);
        return redirect('pages.page');


    }
    public function show(Page $page){
       // $page=Page::find($id);
        return view('pages.show',compact('page'));

    }
    public function delete(Page $page){
        $page->delete();
        return back();

    }
}
