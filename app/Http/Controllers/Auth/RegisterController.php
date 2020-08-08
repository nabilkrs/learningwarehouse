<?php

namespace App\Http\Controllers\Auth;

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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone'=>['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        
        if (isset($data['spec'])==false)
        $spec="Null";
        if (isset($data['spec'])==true)
        $spec=$data['spec'];
        if (isset($data['cle'])==false)
        $key="Null";
        if (isset($data['cle'])==true)
        $key=$data['cle'];
        if (isset($data['photo'])==false)
        $fileName="Unknown.jpg";
        else
        {
        $fileName=time().'.'.$data['photo']->getClientOriginalExtension();
        $data['photo']->move(public_path('photo'),$fileName);
        }
        return User::create([
            'photo'=>$fileName,
            'name' => $data['name'],
            'phone'=>$data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'spec'=>$spec,
            'type'=>$data['option'],
            'cle'=>$key,

        ]);
    }
}
