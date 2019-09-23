<?php

namespace App\Http\Controllers;

use App\Info; 
use App\Category;
use App\User;
use App\Http\Requests\CreateInfosRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class infosTableController extends Controller
{
    //get creat
    public function new()
    {
        $categories = Category::all();
        return view('infos.new', compact('categories'));
    }
    //post creat
    public function create(CreateInfosRequest $request)
    {
        $info = new Info;

        $user_id = Auth::user()->id;

        $info->age = $request->age;
        $info->category_id = $request->category;
        $info->comment = $request->comment;
        $info->user_id = $user_id;
        $info->save();

        return redirect('/booking');
    }
    //get user infomation
    public function show()
    {
        $infos = Auth::user()->infoUser()->first();
            
        return view('infos.show',compact('infos'));
    }
    //get edit user infomation
    public function edit($id)
    {
        $info = Info::find($id);
        $categories = Category::all();

        return view('infos.edit',compact('info','categories'));
    }
    //post edit user infomation
    public function update(Request $request, $id)
    {
        $info = Info::find($id);

        $info->age = $request->age;
        $info->category_id = $request->category;
        $info->comment = $request->comment;
        $info->user_id = $info->user_id;
        $info->save();

        return redirect('/infos/show');
    }
    //delete user
    public function delete($id)
    {
        User::find($id)->delete();

        return redirect('/booking');
    }
}
