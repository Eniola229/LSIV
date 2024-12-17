<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\Admin;
use Hash;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Models\Blog;



class AuthController extends Controller
{
     public function index()
    {
        return view('Admin.login');
    }
    public function register()
    {
        $admins = Admin::all();
        $adminsCount = Admin::all()->count();
        $blogsCount = Blog::all()->count();
        return view('Admin.register', compact('admins', 'adminsCount', 'blogsCount'));
    }
    public function addAdmin()
    {
        return view('Admin.add-admin');
    }
    public function postLogin(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        
        // Use the 'admins' guard for authentication
        if (Auth::guard('admins')->attempt($credentials)) {
            return redirect()->intended('/admin/dashboard')
                        ->withSuccess('You have successfully logged in');
        }

        return redirect("admin/login")->with('error', 'Oops! You have entered invalid credentials');
    }
    public function postRegistration(Request $request, $id = null): RedirectResponse
    {
        // Validation rules
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'role' => 'required|in:Admin,Super-Admin,Moderator',
            'password' => 'required|min:6',
        ]);

        // Check if the admin exists and either update or create
        $admin = Admin::updateOrCreate(
            ['id' => $id], // This will update the existing admin if $id is provided
            [
                'name' => $request->name,
                'email' => $request->email,
                'role' => $request->role,
                'password' => bcrypt($request->password),
            ]
        );

        // Uncomment the line below if you want to log in the admin immediately after creation/updating
        // Auth::guard('admins')->login($admin);

        return redirect('/admin/register')->withSuccess('Great! Admin has successfully been created or updated.');
    }

    public function edit($id)
    {
        $admin = Admin::findOrFail($id);
        return view('admin.edit-admin', compact('admin')); // Pass the admin data to the view
    }

    public function destroy($id): RedirectResponse
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();

        return redirect('/admin/register')->withSuccess('Admin has been successfully deleted.');
    }

    public function dashboard()
    {
        $adminsCount = Admin::all()->count();
        $blogsCount = Blog::all()->count();
        $blogs = Blog::all(); 

        if (Auth::guard('admins')->check()) {
            return view('Admin.dashboard', compact('adminsCount', 'blogs', 'blogsCount'));
        }

        return redirect("admin/login")->withSuccess('Oops! You do not have access');
    }

    public function logout(): RedirectResponse
    {
        Session::flush();
        Auth::guard('admins')->logout();

        return redirect('admin/login');
    }


}
