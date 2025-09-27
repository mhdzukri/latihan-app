<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();

        return view('blogs.index', compact('blogs'));
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'category' => 'required',
            'description' => 'required|max:255',
            'total_views' => 'required'
        ]);

        Blog::create($validated);

        return redirect()->route('blogs.index')->with('success', 'Blog Created Succsesfully');
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);

        return view('blogs.edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'category' => 'required',
            'description' => 'required|max:255',
            'total_views' => 'required'
        ]);

        $blog = Blog::findOrFail($id);

        $blog->update($validated);

        return redirect()->route('blogs.index')->with('success', 'Blog Updated Succsesfully');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        $blog->delete();
        return redirect()->route('blogs.index')->with('success', 'Blog Deleted Succsesfully');
    }
}
