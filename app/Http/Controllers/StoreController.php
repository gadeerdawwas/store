<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores=Store::paginate(5);
        return view('dashboard.stores.index',compact('stores',$stores));
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Store::find($id)->delete();
        return redirect()->back()->with('success', 'تم  حذف المستخدم بنجاح');
    }

    public function stores()
    {
        return view('store.login');
    }
    public function storelogin(Request $request)
    {
        // $validator=Validator($request->all(),[
        //     'email' => 'required|string|exists:stores,email',
        //     'password' =>'required|string'
        // ]
        // ,
        // [
        //     'email.required' => 'The email field is required.' ,
        //     'email.exists' => 'The email field is incorrect.' ,
        //     'password.required' => 'The email field is required.' ,
        // ]
        // );

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
                Store::create([
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
