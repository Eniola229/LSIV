<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use App\Models\Blog;


class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all(); 
        return view('Admin.blog', compact('blogs'));
    }
    public function view($id)
    {
        $blog = Blog::find($id);

        if (!$blog) {
            return redirect()->back()->with('error', 'Blog not found.');
        }

        return view('Admin.view-blog', compact('blog')); 
    }
    public function editblog($id)
    {
        $blog = Blog::find($id);

        if (!$blog) {
            return redirect()->back()->with('error', 'Blog not found.');
        }

        return view('Admin.edit-blog', compact('blog')); 
    }
   public function blog()
    {
        return view('Admin.add-blog');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);

        // Delete the old cover image from Cloudinary if it exists
        if ($blog->cover_image_id) {
                Cloudinary::destroy($blog->cover_image_id);
        }
            
        $blog->delete();

        return redirect()->route('admin-blog')->with('success', 'Case Study has been successfully deleted.');
    }

    public function store(Request $request)
    {
        // Validate form data
        $request->validate([
            "id" => 'nullable',
            'title' => 'required|max:250',
            'sub_title' => 'required|max:250',
            'project_timeline' => "required|max:250",
            'our_service' => "required|max:250",
            'content' => 'required',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Check if an ID is provided for updating an existing blog post
        if ($request->id) {
            // Retrieve the existing blog post
            $blog = Blog::findOrFail($request->id);

            // Delete the old cover image from Cloudinary if it exists
            if ($blog->cover_image_id) {
                Cloudinary::destroy($blog->cover_image_id);
            }
            
            // Upload the new cover image to Cloudinary
            $uploadedFile = Cloudinary::upload($request->file('cover_image')->getRealPath(), [
                'folder' => 'lsiv_blogs' 
            ]);
            
            // Get the secure URL and the public ID of the uploaded image
            $coverImageUrl = $uploadedFile->getSecurePath();
            $coverImageId = $uploadedFile->getPublicId();

            // Update the existing blog post
            $blog->update([
                'sub_title' => $request->sub_title,
                'title' => $request->title,
                'project_timeline' => $request->project_timeline,
                'our_service' => $request->our_service,
                'content' => $request->content,
                'cover_image' => $coverImageUrl,  
                'cover_image_id' => $coverImageId,
            ]);

            return redirect()->back()->with('success', 'Case Study updated successfully');
        } else {
            // Create a new blog post
            // Upload the new cover image to Cloudinary
            $uploadedFile = Cloudinary::upload($request->file('cover_image')->getRealPath(), [
                'folder' => 'lsiv_blogs' 
            ]);
            
            // Get the secure URL and the public ID of the uploaded image
            $coverImageUrl = $uploadedFile->getSecurePath();
            $coverImageId = $uploadedFile->getPublicId();

            Blog::create([
                'title' => $request->title,
                'sub_title' => $request->sub_title,
                'project_timeline' => $request->project_timeline,
                'our_service' => $request->our_service,
                'content' => $request->content,
                'cover_image' => $coverImageUrl,
                'cover_image_id' => $coverImageId,
            ]);

            return redirect()->back()->with('success', 'Case Study created successfully');
        }
    }


            // Handle image upload from CKEditor
        public function uploadImage(Request $request)
        {
            if ($request->hasFile('upload')) {
                // Upload image to Cloudinary
                $uploadedFile = Cloudinary::upload($request->file('upload')->getRealPath(), [
                    'folder' => 'lsiv_blogs_written'
                ]);

                // Get the secure URL from the uploaded file response
                $uploadedFileUrl = $uploadedFile->getSecurePath();

                // Send the URL back to CKEditor
                return response()->json([
                    'uploaded' => true,
                    'url' => $uploadedFileUrl
                ]);
            }

            return response()->json(['uploaded' => false]);
        }
}