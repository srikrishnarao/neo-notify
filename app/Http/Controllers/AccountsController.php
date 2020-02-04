<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
use App\User;

class AccountsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id=\Auth::user()->id;
        
        $values = \DB::table('stores')->where('id', '=', $id)->limit(1)->get();
        $email = \Auth::user()->user_email;

        return view('account.index', compact('values', 'email'));
        // get values of store and send it to view to show
        
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  Request $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(Request $data)
    {
        return Validator::make($data, [
            'store_name' => ['required', 'string', 'max:255'],
            'store_postal_code' => ['required', 'string', 'max:255'],
            'store_prefecture' => ['required', 'string', 'max:255'],
            'store_url' => ['required', 'url'],
            'store_address' => ['required', 'string', 'max:255'],
            'store_phone_number' => ['required', 'numeric', 'max:10'],
            'store_person_in_charge_department' => ['required', 'string', 'max:255'],
            'user_first_name' => ['required', 'string', 'max:255'],
            'user_last_name' => ['required', 'string', 'max:255'],
            'user_email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  Request $data
     * @return \App\User
     */
    public function edit()
    {

        // get values of store and send it to view to show
        
    }

    

}
