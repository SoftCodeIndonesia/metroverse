<?php

namespace App\Http\Controllers;

use App\Mail\ClientMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Landing extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('welcome');
    }
    public function sendEmail(Request $request)
    {
       

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email:rfc,dns',
            'phone' => 'required|numeric',
            'company' => 'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ]);

        $cc = [
            'faizalfernandy08@gmail.com',
            'softcodeindonesia@gmail.com'
        ];

        $data['name'] = $request->name;
        $data['gmail'] = $request->email;

        foreach ($cc as $value) {
            Mail::to($value)->send(new ClientMessage($request->email, $request->get("message")));
        }
       
        
        return view('emails.success', $data);
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
        //
    }
}