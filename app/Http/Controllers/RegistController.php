<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;
use Illuminate\Support\Str;
use DB;
use App\Mail\CustomerRegisterMail;
use Mail;

class RegistController extends Controller
{
    public function register(Request $request){

        if (!auth()->guard('customer')->check()) {
            $customer = Customer::create([
                'name' => $request->customer_name,
                'email' => $request->email,
                'password' => $request->password,
                'phone_number' => $request->customer_phone,
                'address' => $request->customer_address,
                'district_id' => $request->district_id,
                'activate_token' => Str::random(30),
                'status' => false
            ]);
            }
        DB::commit();
        if (!auth()->guard('customer')->check()) {
                Mail::to($request->email)->send(new CustomerRegisterMail($customer, $password));
            }
                return redirect(route('customer.login'));
            }
}
