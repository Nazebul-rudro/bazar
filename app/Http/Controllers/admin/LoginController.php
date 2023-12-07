<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    //
    public function login()
    {
      return view('ecommerce.fontend.Auth.login');
    }
    public function index(Request $request)
    {
        $uemail = $request->input('email');
        $upassword = $request->input('password');

        // Retrieve the user based on the email
        $user = User::where('email', $uemail)->first();

        // Check if the user exists
        if ($user) {
            // Validate the password using Hash::check
            if (Hash::check($upassword, $user->password)) {
                if($user->is_admin == 0){
                    return redirect()->route('Bajar');
                }else{
                    return redirect()->route('admin');
                }

            } else {
                // Password is incorrect
                return back();
            }
        } else {
            // User with the provided email doesn't exist
            return back();
        }
    }
    public function register()
    {
        return view('ecommerce.fontend.Auth.Register');
    }
    public function store(Request $request, User $user)
    {
        // dd($request->all());
        $user->create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return redirect()->route('login');
    }
}
