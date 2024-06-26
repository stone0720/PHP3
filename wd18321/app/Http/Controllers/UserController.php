<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function showUser(){
        $users = [
            [
                'id' => '1',
                'name' => 'khanh'
            ],
            [
                'id' => '2',
                'name' => 'hai'
            ]
            ];
        return view('list-user')->with(
            ['abc' => $users]
        );
    }

    function getUser($id, $name = ""){
        echo $id, $name;
    }

    function editUser(Request $request){
        echo $request->id;
        echo $request->name;
    }
}
