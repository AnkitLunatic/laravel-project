<?php

namespace App\Http\Controllers;
use App\Models\member;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class PagesController extends Controller
{

    public function home(){
        $data=[
            'name'=>'Ankit',
            'age'=>17
        ];
        return view('welcome')->with($data);
    }

    public function profile(){
        return view(view:'profile');
        $data=[
            'username'=>'Ankitsapkota'
        ];
        return view('profile')->with($data);
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $request->validate([
            'member_name'=>'required',
            'member_price'=>'required',
            'member_quantity'=>'required',
            'Date_added'=>'required'
        ]);

        $member = new member();
        $member->member_name =$request->member_name;
        $member->member_price =$request->member_price;
        $member->member_quantity =$request->member_quantity;
        $member->Date_added =$request->Date_added;
        $img = Image::make($request->file('image'));
        $filename = $request->file('image')->getClientOriginalName();
        $img->save('storage/image/'.$filename);
        $member->image=$filename;
        $member->save();
        return redirect('/list');
        return 'Saved';
    }

    public function list(){
        $member = member::get();
        return view('list')->with('member',$member);
    }




    public function register(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/list');
    }

    public function registor(){
        return view('register');
    }



    public function login(){
        return view('login');
    }

    public function loginForm(Request $request){
        if(Auth::attempt(['name'=>$request->name,'password'=>$request->password])){
            return redirect("list");
        }else{
            return 'wrong credentials';
        }

    }
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
    public function delete($id){

        $member= member::where('id',$id)->first();
        if(File::exists('storage/image/' .$member->image)){
            File::delete('storage/image/' .$member->image);
        }
        $member->delete();
        return redirect('/member.list');
    }

}

