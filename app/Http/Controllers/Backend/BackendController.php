<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class BackendController extends Controller
{
    public function index(){
        return view('backend.index', ['title' => 'Dashboard']);
    }

    public function userList(){
        $users = User::all();
        return view('backend.user_list', [
            'title' => 'Users',
            'users' => $users,
        ]);
    }

    public function menuList(){
        $menus = [];
        return view('backend.menu_list', [
            'title' => 'Menus',
            'menus' => $menus,
        ]);
    }
}
