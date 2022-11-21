<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Image;
use Illuminate\Support\Facades\File;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('admin.adminBody.movie')->with('movies',$movies);
    }

    public function createMovie()
    {
        return view('admin.adminBody.createMovie');
    }

    public function storeMovie(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|image|mimes:png,jpg,jpeg,gif,svg|max:2048',
            'description' => 'required',
        ]);

        // if($request->hasFile('image')){
        //     $file = $request->file("image");
        //     $imageName = "image".time()."_".$file->getClientOriginalName();
        //     $file->move(\public_path("image/"),$imageName);

        //     $movie = new Movie([
        //         "title" => $request->title,
        //         "description" => $request->description,
        //     ]);
        //     $movie->save();
        // }
        $movie = new Movie([
            "title" => $request->title,
            "description" => $request->description,
        ]);
        $movie->save();

        if($request->hasFile("image")){
            $files = $request->file("image");
            // foreach($files as $file){
            //     $imageName = "image"."_".time().$file->getClientOriginalName();
            //     $request['movie_id'] = $movie->id;
            //     $request['image'] = $imageName;
            //     $file->move(\public_path("image/"),$imageName);

            //     Image::create($request->all());
            //     dd($file);
            // }
            $imageName = "image"."_".time().$files->getClientOriginalName();
            $request['movie_id'] = $movie->id;
            $request->image = $imageName;
            $files->move(\public_path("asset/image/"),$imageName);
            Image::create([
                "image" => $imageName,
                "movie_id" => $movie->id,
            ]);
        }
        return redirect("/admin/movie");

    }

    public function deleteMovie($id)
    {
        $movies = Movie::findOrFail($id);

        // if(File::exists("image/".$movies->image)){
        //     File::delete("image/".$movies->image);
        // }
        $images = Image::where("movie_id",$movies->id)->get();
        foreach($images as $image){
            if(File::exists("asset/image/".$image->image)){
                File::delete("asset/image/".$image->image);
                $image->delete();
            }
        }
        $movies->delete();
        return back();
    }

    public function editMovie($id)
    {
        $movies = Movie::findOrFail($id);
        // dd($movies);
        return view('admin.adminBody.editMovie')->with('movies',$movies);
    }

    public function deleteImage($id)
    {
        $images = Image::findOrFail($id);
        if(File::exists("asset/image/".$images->image)){
            File::delete("asset/image/".$images->image);
        }
        Image::find($id)->delete();
        return back();
    }
    public function updateMovie(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->update([
            "title" => $request->title,
            "description" => $request->description,
        ]);
        foreach($movie->images as $image){
            if($request->hasFile("image")){
                if(File::exists("asset/image/".$image->image)){
                    File::delete("asset/image/".$image->image);
                    $image->delete();
                }
                $files = $request->file("image");
                // foreach($files as $file){
                //     $imageName = "image"."_".time().$files->getClientOriginalName();
                //     $request['movie_id'] = $id;
                //     $request['image'] = $imageName;
                //     $files->move(\public_path("asset/image/"),$imageName);
                //     Image::create([
                //         "image" => $imageName,
                //         "movie_id" => $movie->id,
                //     ]);
                // }
                $imageName = "image"."_".time().$files->getClientOriginalName();
                $request['movie_id'] = $movie->id;
                $request->image = $imageName;
                $files->move(\public_path("asset/image/"),$imageName);
                Image::create([
                    "image" => $imageName,
                    "movie_id" => $movie->id,
                ]);
            }
        }
        return redirect("/admin/movie");
    }

}
