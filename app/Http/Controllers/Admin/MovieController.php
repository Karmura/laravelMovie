<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        return view('admin.adminBody.movie');
    }

    public function createMovie()
    {
        return view('admin.adminBody.createMovie');
    }

    public function storeMovie(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            // 'tag' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg,gif,svg|max:2048',
            'description' => 'required',
            // 'video' => 'required|file|mimetypes:video/mp4',
        ]);

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $imageName = 'cover_' . time() . '_' . $file->getClientOriginalName();
            $file->move(('movie/image'), $imageName);

            $movie = new Movie([
                "title" => $request->title,
                "image" => $imageName,
                "description" => $request->description,
            ]);
            $movie->save();
            dd("success");
        }else{
            dd("Fail");
        }
        // return redirect("admin/dashboard");


    }

    public function editMovie()
    {
        return view('admin.adminBody.editMovie');
    }
}
