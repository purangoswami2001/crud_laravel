<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userinfo;
class UserController extends Controller
{

    /*
    Databse name: crud 
    */

    public function index(){
        return view('welcome');

    }
    public function adduser(){
        return view('adduser');

    }
    public function showuser(){
        $data=array();
        $data = Userinfo::all();
       
       return view('showuser',compact('data'));

       

    }

    public function register(Request $request)
    {
        $request->validate(
            [
                'name'=> 'required',
                'email'=>'required|email|unique:users',
                'address'=>'required',
                'phone'=>'required'
           ]
            );
      $user = new Userinfo;
      $user->name = $request['name'];
      $user->email = $request['email'];
      $user->address = $request['address'];
      $user->phone = $request['phone'];

      $user->save();
      return view('welcome');
    
    }


    public function update($id){
      

        $data=array();
        $data = Userinfo::find($id);
       
       return view('update',compact('data'));      

    }

    public function delete($id)
    {
        $data = Userinfo::find($id);
        $data->delete();
       return $this->showuser();      

    }

    public function updateUser(Request $request){

    $request->validate(
        [
            'name'=> 'required',
            'email'=>'required|email|unique:users',
            'address'=>'required',
            'phone'=>'required'
        ]
    );
      $user = Userinfo::find($request['id']);
      $user->name = $request['name'];
      $user->email = $request['email'];
      $user->address = $request['address'];
      $user->phone = $request['phone'];
      $user->save();

      return $this->showuser() ;     

    }
}
