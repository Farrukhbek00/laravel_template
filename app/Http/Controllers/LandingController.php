<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;
use App\Carousel;
use App\Body;
use App\Gallery;
class LandingController extends Controller
{
    public function index() {
        $blogs = Post::all();
        $carouselImages = Carousel::all();
        $body = Body::all();
        $galleries = Gallery::all();
        return view('Landing', compact('blogs', 'carouselImages', 'body', 'galleries'));
    }

    public function show($id) {
        $blog = Post::find($id);
        return view('blogPost', compact('blog'));
    }

    public function store(Request $request) {
        $data = new Comment;
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->address = $request->input('address');
        $data->text = $request->input('message');
        $data->save();
        return redirect('/');
    }
}
