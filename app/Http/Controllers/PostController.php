<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


use function Pest\Laravel\post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $posts = Post::paginate(20);

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function generatePdf()
    {
        $posts = Post::paginate(1000);
        $pdf = PDF::loadHTML(view('posts.index', compact('posts')));
        $pdf->setPaper('a3', 'landscape');
        return $pdf->stream();
    }

    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'datefiled' => ['required', 'date'],
            'fullname' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'unique:posts'],
            'contactNumber' => ['required', 'max:25'],
            'srfNumber' => ['required', 'max:25'],
            'profession' => ['required'],
            'status' => ['required'],
            'datesent' => ['required', 'date'],
        ]);

        // Create a new user
        $posts = Post::create($validated);

        return redirect(route('posts.create'))->with('status', 'New User Created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'datefiled' => ['required, date'],
            'fullname' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'unique:posts'],
            'contactNumber' => ['required', 'max:25'],
            'srfNumber' => ['required', 'max:25'],
            'profession' => ['required'],
            'status' => ['required'],
            'datesent' => ['required', 'date'],
        ]);

        // Create a new user
        $post->update($validated);

        return redirect(route('posts.edit', $post))->with('status', 'User Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect(route('posts.index'))->with('status', 'User Successfully Deleted!');
    }

    public function deleteAll()
    {

        try {
            Post::truncate();

            return redirect()->route('posts.index')->with('success', 'All posts deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('posts.index')->with('error', 'Error deleting posts: ' . $e->getMessage());
        }
    }
}
