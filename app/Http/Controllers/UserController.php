<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;

use Session;
use Validator;
use App\User;

use DB;



use Illuminate\Http\Request;
class UserController extends Controller
{
    public function index(){
        $user = auth()->user();



        return view('profile',compact('user'));
    }



    public function create(){

    }




    public function print()
    {

        $qr = auth()->user()->qrcode;
        $user = auth()->user();



        return view('Print',compact('qr','user'));
    }






    public function show( $id)
    {
//here show inf after scan QR
        $user = user::findOrFail($id);

      // dd($user);

        return  view('qrCode',compact('user'));
    }
    public function profile_update(Request $request){

        //confirm Authentica user
        $user = auth()->user();






        $this->validate($request, [
            'name' => 'required|string|max:255', $user->name,
            'email' => "required|email|unique:users,email, $user->id",
            'password' => 'sometimes|nullable|min:8',

            'age' => 'required|string',
            'bolde_type' => 'required|string',
            'chronic_diseases' => 'required',
            'allergic_diseases' => 'required|string',
            'address_latitude' => 'required|string',
            'address_longitude' => 'required|string',
            'message' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'Emergency_phone' => 'required|string',

        ]);


//update all inf user expct QR code
        $user->name = $request->name;
        $user->email = $request->email;
        $user->age = $request->age;
        $user->bolde_type = $request->bolde_type;
        $user->chronic_diseases = $request->chronic_diseases;
        $user->allergic_diseases = $request->allergic_diseases;
        $user->address_latitude = $request->address_longitude;
        $user->message = $request->message;
        $user->phone = $request->phone;
        $user->Emergency_phone = $request->Emergency_phone;

        if($request->hasFile('image')){
            $filename= $user->image ;
            $qrCodePath =public_path();
            unlink( $qrCodePath.$filename);

            $image = $request->image;
            $image_new_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move('storage/user/', $image_new_name);
            $user->image = '/storage/user/' . $image_new_name;
        }
        if($request->has('password') && $request->password !== null){
            $user->password = bcrypt($request->password);
        }


        $user->save();

        return redirect()->back()->with('success', 'information was update');

    }



}
