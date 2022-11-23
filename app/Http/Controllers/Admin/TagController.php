<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Tag;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return view('admin.adminBody.tagMovie')->with('tags',$tags);
    }
    public function createTag(Request $request)
    {
        $tag = new Tag([
            'tagname' => $request->tagname,
        ]);
        $tag->save();

        return redirect()->back()->with("success", "Tag created successfully");
    }

    public function deleteTag($id)
    {
        $tag = Tag::find($id);
        $tag->delete();

        return redirect()->back()->with('success', 'Tag deleted successfully');
    }

    public function editTag($id)
    {
        $tags = Tag::findOrFail($id);
        return view('admin.adminBody.tagEdit')->with('tags',$tags);
    }

    public function updateTag(Request $request,$id)
    {
        $tag = Tag::findOrFail($id);
        $tag->update([
            'tagname' => $request->tagname,
        ]);
        return redirect('/admin/tagMovie')->with("success", "Tag updated successfully");
    }
}

