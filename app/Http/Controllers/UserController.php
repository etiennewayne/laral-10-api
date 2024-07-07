<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //


    public function getUsers(Request $req){
        $sort = explode('.', $req->sort_by);

        $users = User::where('name', 'like', $req->name . '%')
            //->where('username', '!=', 'admin')
            ->get();
            // ->orderBy($sort[0], $sort[1])
            // ->paginate($req->perpage);

        return $users;
    }

}
