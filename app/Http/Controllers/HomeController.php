<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
public function index(){
    $data['students'] = Student::all();
    return view("home",$data);
}
public function store(Request $req){
    $std = new Student();
    $std->name = $req->name;
    $std->contact = $req->contact;
    $std->email = $req->email;
    $std->save();

    return redirect()->route("homepage");
}
public function remove($id){
    $std = Student::find($id);
    $std->delete();
    return redirect()->back();
}

}
