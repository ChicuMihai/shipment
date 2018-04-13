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


        if(request()->hasFile('img')){
            $image=request()->file('img');
            $filename=time().'.'.$image->getClientOriginalExtension();
            $location=public_path('images/'.$filename);
            $image->store($location);
        }
        Page::create([
            'title'=>request('title'),
            'body'=>request('body'),
            'picture'=>$filename
        ]);
        return  redirect()->back()->with('message', 'Page added successfully!');;
    }
    public function show(Page $page){
        return view('pages.show',compact('page'));

    }
    public function delete(Page $page){
        $page->delete();
        return back();

    }
}