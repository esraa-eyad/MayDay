<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'age' => ['required', 'string'],
            'bolde_type' => ['required', 'string'],
            'chronic_diseases' => ['required'],
            'allergic_diseases' => ['required', 'string'],
            'address_latitude' => ['required', 'string'],
            'address_longitude' => ['required', 'string'],
            'message' => ['required', 'string','max:255'],
            'image'=> ['required'],

            'phone' => ['required', 'string', 'max:255'],
            'Emergency_phone' => ['required', 'string'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    public function createQrCode($qrCodeData)


    {

//This is code connert data to QR
        $qrcodeimagename = '/'.uniqid().'-' .time().'-'.uniqid().'-'. '.png';
        $qrCodePath = public_path().$qrcodeimagename;

        $createQrcode =  \QRCode::text($qrCodeData)->setSize(6)->setOutfile($qrCodePath)->png();

        $qrcode = str_replace("public/", "",$qrCodePath);
        //  $url= public_path()/qrCode;



        //return $qrcode;
        return $qrcodeimagename;

    }

    protected function create(array $data){

        // store data Personal Information in database



            $image = $data['image'];
            $image_new_name = time() . '.' . $image->getClientOriginalExtension();
            $image->move('storage/user/', $image_new_name);
            $imgeTosave= '/storage/user/' . $image_new_name;

         User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'age' => $data['age'],
            'phone' => $data['phone'],
            'Emergency_phone' => $data['Emergency_phone'],
            'address_longitude' => $data['address_longitude'],
            'address_latitude' => $data['address_latitude'],
            'message' => $data['message'],
            'bolde_type' => $data['bolde_type'],
            'chronic_diseases' => $data['chronic_diseases'],
            'allergic_diseases' => $data['allergic_diseases'],
             'image' =>  $imgeTosave,

            'password' => Hash::make($data['password']),
        ]);

        // get id afte rstore data Personal Information in database

        $id = user::latest()->first()->id;

        $user = user::findOrFail($id);


        // create url with id


        $url='http://127.0.0.1:8000/qrCode/'.$id;


        // call the function of createQrCode with url

        $qrCodeDataNew= $this->createQrCode( $url);


//update database and store qrcode in database

         $user->update([
            'qrcode' => $qrCodeDataNew

        ]);

        return $user;


    }


}
