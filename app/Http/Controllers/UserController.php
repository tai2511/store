<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //
    function login(Request $request)
    {
        $user = User::where(['name'=>$request->name])->first();
        if($user && Hash::check($request->password,$user->password))
        {
            $request->session()->put('user',$user);
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }
    public function register(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/login');
    }
}
