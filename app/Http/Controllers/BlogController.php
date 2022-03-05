<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{

    public function index()
    {
        $blogs = Blog::all();
        return view('backend.list', compact('blogs'));
    }

    public function create()
    {
        return view('backend.create');
    }


    public function store(Request $request)
    {
        $data = new Blog();
        $data->name = $request->input('name');
        $data->title = $request->input('title');
        $data->content = $request->input('content');
        $data->save();
        return redirect()->route('index');
    }


    public function show($id)
    {
        $blogs = Blog::all()->where('id', $id);
        return view('backend.detail', compact('blogs'));
    }


    public function edit($id)
    {
        $blogs = Blog::all()->where('id', $id)->first();
        return view('backend.update', compact('id', 'blogs'));
    }


    public function update(Request $request, $id)
    {
        $blogs = Blog::all()->where('id', $id)->first();
        $blogs->name = $request->input('name');
        $blogs->title = $request->input('title');
        $blogs->content = $request->input('content');
        $blogs->save();
        return redirect()->route('index', compact('blogs'));
    }

    public function destroy($id)
    {
        Blog::destroy($id);
        return redirect()->route('index');
    }
}
