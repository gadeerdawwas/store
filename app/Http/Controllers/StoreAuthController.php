<?php

namespace App\Http\Controllers;

use App\Models\Store;

use function Ramsey\Uuid\v1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

class StoreAuthController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function storeslogin()
    {
        return view('store.login');
    }
    public function storelogin(Request $request)
    {
     

        $validator= $request->validate([
            'email' => 'required|string|exists:stores,email',
            'password' =>'required|string'
            ]);
        try {
            $store=Store::where('email','=',$request->email)->first();
        if (Hash::check($request->password ,$store->password)) {
            return redirect('/admin')->with('success','Success login');
        }else{
            return redirect()->back()->withErrors('message','login fails');
        }
        } catch (\Throwable $th) {
            return redirect()->back()
            ->withErrors('message', 'login fails');  
        }
    
    }
    public function createstore()
    {
        return view('store.register');
    }
    public function createstores(Request $request)
    {
        $validator= $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:stores'],
            'store_owner' => ['required', 'string', 'max:255', 'unique:stores'],
            'username' => ['required', 'string', 'max:255', 'unique:stores'],
            'store_name' => ['required', 'string', 'max:255', 'unique:stores'],
            'bank_IBAN' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8'],
            ]);


            try {
                $store=Store::create([
                    'email' => $request->email ,
                    'store_owner' =>  $request->store_owner ,
                    'username' =>  $request->username ,
                    'store_name' =>  $request->store_name ,
                    'bank_IBAN' =>  $request->bank_IBAN ,
                    'phone' =>  $request->phone ,
                   'password' =>  Hash::make($request->password),
                   ]);
                
                   return redirect('/admin');
            } catch (\Throwable $th) {
                return redirect()->back()
                ->with('error', 'لم تتم عملية التسجيل');
            }
           
    }
}
