<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ProfileRequest;
use App\Services\ImageService;
use Illuminate\Support\Facades\Hash;
use App\Traits\ImageUploadTrait;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use ImageUploadTrait;

    public function dashboard()
    {
        return view('frontend.user.dashboard');
    }

    public function profile()
    {
        return view('frontend.user.profile');
    }

    public function updateProfile(ProfileRequest $request)
    {
        $user = auth()->user();
        if (!empty($request->password) && !Hash::check($request->password, $user->password)) {
            $password = bcrypt($request->password);
        }

        if ($request->hasFile('user_image')) {
            if ($user->user_image) {
                (new ImageService())->unlinkImage($user->user_image, 'users');
            }
            $userImage = (new ImageService())->storeUserImages($user->username, $request->user_image);
        }

        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'receive_email' => $request->receive_email,
            'user_image' => $userImage ?? $user->user_image,
            'password' => $password ?? $user->password
        ]);

        toast('Updated profile successfully', 'success');
        return redirect()->route('user.dashboard');
    }

    public function removeImage()
    {
        if (auth()->user()->user_image) {
            (new ImageService())->unlinkImage(auth()->user()->user_image, 'users');
            auth()->user()->update(['user_image' => NULL]);

            toast('Image removed successfully', 'success');
            return redirect()->back();
        }

        toast('please try again later', 'warning');
        return redirect()->back();
    }

    public function addresses()
    {
        return view('frontend.user.addresses');
    }

    public function orders()
    {
        return view('frontend.user.orders');
    }

    public function index()
    {
        // $users = User::where('is_admin', 0)->limit(30)->get();
        $users = User::where('is_admin', 0)->paginate(30);
        return view('admin.user', ['users' => $users]);
    }

    public function search()
    {
        // $username = $request->search;

        // $users = User::where('username', 'like', "%" . $username . "%")->paginate(30);
        // return view('admin.user', ['users' => $users]);
        $users = User::where('is_admin', 0)->paginate(30);
        return view('admin.user_search', ['users' => $users]);
    }

    public function edit(Request $id)
    {
        $user = User::findOrFail($id);

        return view('admin.user', ['user' => $user]);
    }

    public function setAdmin(Request $request)
    {
        // dd($request);
        $user = User::findOrFail($request->id);
        $user->is_admin = "1";
        $user->update();

        return back()->with('status', 'User is now an admin');
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->first_name = $request->input('first_name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->receive_email = $request->input('receive_email');
        $user->update();

        return back()->with('status', 'User info is updated');
    }

    public function delete(Request $id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return back()->with('status', 'User is deleted');
    }

    
}
