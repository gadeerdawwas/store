<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreStoreRequest;
use App\Http\Requests\UpdateStoreRequest;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStoreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStoreRequest  $request
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStoreRequest $request, Store $store)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        //
    }

    public function stores()
    {
        return view('store.login');
    }
    public function storelogin(Request $request)
    {
        $validator=Validator($request->all(),[
            'email' => 'required|string|exists:stores,email',
            'password' =>'required|string'
        ]);
        if (!$validator->fails()) {
            $store=Store::where('email','=',$request->email)->first();
            if (Hash::check($request->password ,$store->password)) {
                return redirect('/dashboard');
            }else{
                return redirect('/login');
            }
        }else{
            return redirect('/login');
        }
    }


    public function createstore()
    {
        return view('store.register');
    }
    public function createstores(Request $request)
    {
        
        $validator= Validator(  $request->all(),
        [
            'email' => ['required', 'string', 'email', 'max:255', 'unique:stores'],
            'store_owner' => ['required', 'string', 'max:255', 'unique:stores'],
            'username' => ['required', 'string', 'max:255', 'unique:stores'],
            'store_name' => ['required', 'string', 'max:255', 'unique:stores'],
            'bank_IBAN' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'password' => ['required', 'string', 'min:8'],

        ]);

        
        if (! $validator->fails()) {
           Store::create([
            'email' => $request->email ,
            'store_owner' =>  $request->store_owner ,
            'username' =>  $request->username ,
            'store_name' =>  $request->store_name ,
            'bank_IBAN' =>  $request->bank_IBAN ,
            'phone' =>  $request->phone ,
           'password' =>  Hash::make($request->password),
           ]);
           return redirect('/dashboard');
        }else{

        }
    }
}
