<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{

    public function stored(Request $request)
    {
        DB::table('projects')->insert([
            'name'=> $request->name,
            'category'=> $request->category,
            'created_at'=>now(),
            'updated_at'=>now()

        ]);
            return redirect()->back();
        return 'ali';
    }
    public function delete($id)
    {
        DB::table('projects')->where('id','=',$id)->delete();
        return redirect()->back();

    }





    public function create()
    {
        $projects = DB::table('projects')->get();


        return view('create_expenses',compact('projects'));

    }

    public function dash()
    {
        return view('dashboard');

    }
    public function expenses()
    {
        $projects = DB::table('projects')->get();


        return view('expenses',compact('projects'));


    }
}
