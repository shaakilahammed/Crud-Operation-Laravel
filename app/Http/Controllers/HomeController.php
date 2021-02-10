<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

    }

    public function create(){
        return view('home.create');
    }

    public function store(Request $req){

        //insert into DB or model...
        $userlist= $this->getUserlist();
        $newuser = ['id' => $req->id, 'name' => $req->username, 'email' => $req->email, 'password' => $req->password];
        array_push($userlist, $newuser);
        return view('home.index')->with('list', $userlist);
    }

    public function edit($id){
        $userlist= $this->getUserlist();
        $user = [];

        foreach($userlist as $u){
            if($u['id'] == $id ){
                $user = $u;
                break;
            }
        }

        return view('home.edit')->with('user', $user);
    }


    public function update($id, Request $req){

        $userlist= $this->getUserlist();
        $user = [];

        foreach ($userlist as $u) {
            if ($u['id'] == $id) {

                $u['name']=$req->username;
                $u['email']=$req->email;
                $u['password']=$req->password;
                $user= $u;
                array_push($userlist, $user);

            }
        }
        return view('home.index')->with('list', $userlist);

    }

    public function delete($id){
        $userlist= $this->getUserlist();
        $user = [];

        foreach($userlist as $u){
            if($u['id'] == $id ){
                $user = $u;
                break;
            }
        }

        return view('home.delete')->with('user', $user);

    }


    public function confirmDelete($id)
    {

        $userlist= $this->getUserlist();
        for ($i = 0; $i < count($userlist); $i++) {
            if ($userlist[$i]['id'] == $id) {
                unset($userlist[$i]);
                break;
            }
        }
        return view('home.index')->with('list', $userlist);
    }

    public function userlist(){
        
        $userlist = $this->getUserlist();

        return view('home.list')->with('list', $userlist);
    }

    public function getUserlist (){

        return [
                ['id'=>1, 'name'=>'abc', 'email'=> 'abc@aiub.edu', 'password'=>'123'],
                ['id'=>2, 'name'=>'def', 'email'=> 'def@aiub.edu', 'password'=>'456'],
                ['id'=>3, 'name'=>'ghi', 'email'=> 'ghi@aiub.edu', 'password'=>'789'],
                ['id'=>4, 'name'=>'jkl', 'email'=> 'jkl@aiub.edu', 'password'=>'789'],
                ['id'=>5, 'name'=>'mno', 'email'=> 'mno@aiub.edu', 'password'=>'789']
            ];
    }
}
