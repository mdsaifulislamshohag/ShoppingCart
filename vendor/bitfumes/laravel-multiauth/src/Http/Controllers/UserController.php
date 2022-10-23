<?php

namespace Bitfumes\Multiauth\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Crypt;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $users = User::paginate(50);
        return view('vendor.multiauth.user.index')->with(compact('users'));
    }

    public function destroy($id)
    {
        $id = Crypt::decrypt($id);
        $delete = User::findOrFail($id);
        $delete->delete();
        return back()->with('message', 'User Deleted');
    }
}
