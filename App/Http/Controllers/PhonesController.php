<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Inertia\Inertia;
use Illuminate\Http\Request;


class PhonesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phones = Phone::all();

        return Inertia::render('Phones/Index', [
            'phones' => $phones,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Phones/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'user' => 'required',
            'extension' => 'required|unique:phones',
            'password' => 'required|min:5'
        ]);

        Phone::create([
            'user' => $request->user,
            'extension' => $request->extension,
            'password' => bcrypt($request->password)
        ]);

        $all_phones=Phone::all();
        $config = "";
        foreach($all_phones as $phone){
            $config.= "[$phone->extension]\n";
            $config.="\ttype=friend\n";
            $config.="\tsecret=$phone->extension\n";
            $config.="\tcontext=test\n";
            $config.="\thost=dynamic\n";
            $config.="\tallow=all\n";
            $config.="\thost=dynamic\n";
            $config.="\n";
            $config.="\n";
        }
                  
        file_put_contents('C:\Users\user\Desktop\users.conf',$config);
        return redirect()->route('phones.index')->with('successMessage', 'User was successfully added!');
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
        //
    }
}
