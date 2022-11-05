<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function index(){
        return view('login');
    }
    public function ragister(){
        return view('register');
    }

    public function store(Request $r){
        $this->validate($r,[
            'name'=>'required|unique:users',
            'email'=>'required|unique:users',
            'password'=>'required'
        ]);
        $data=$r->all();
        $userCount = User::where('email',$data['email'])->count();
        if($userCount){
            return redirect()->back()->with('message','user email alrady exist');
        }else{
            $ragister = new User();
            $ragister->name = $r->name;
            $ragister->email = $r->email;
            $ragister->password =Hash::make($r->password);
            $ragister->save();
            if(Auth::attempt(['email' => $data['email'], 'password' => $data['password']])){
                return redirect('/descbord')->with('message','ragister successfully');
            }
        }
    }

    public function login(Request $a){
        if($a->isMethod('post')){
            $data = $a->all();
            if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
                    return redirect('/descbord')->with('message','Login successfully :)');
        }
        else{
            return redirect()->back()->with('message','enter correct email or password successfully :)');
        }
     }
    }

    public function descbord(){
        return view('descbord');
    }
}
