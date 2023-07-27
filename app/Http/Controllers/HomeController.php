<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class HomeController extends Controller
{
    public function index()
    {
       return view('welcome'); //return the home page.
    }

    public function upload(Request $request)
    {
        $data = new Post;

        $data->username=Auth::user()->name;

        $data->name=$request->name;

        $data -> category=$request->category;

        $data -> recipe=$request->recipe;

        $data -> instructions=$request->instructions;

        /*image insert part*/
        $image=$request->image;

        if($image)

        {

        $imagename=time().'.'.$image->getClientOriginalName();

        $request->image->move('post',$imagename);

        /*image part end here*/

        $data->image=$imagename;

        }

        $data->save();

        return redirect('/recipes');
    }

}
