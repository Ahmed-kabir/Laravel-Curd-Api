<?php

namespace App\Http\Controllers;

use App\RestApi;
use App\User;
use Illuminate\Http\Request;

class RestApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getData()
    {
        return User::all();
    }

    public function postData(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        if($user->save())
        {
            return ['status'=>'data inserted'];
        }
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
     * @param  \App\RestApi  $restApi
     * @return \Illuminate\Http\Response
     */
    public function show(RestApi $restApi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RestApi  $restApi
     * @return \Illuminate\Http\Response
     */
    public function edit(RestApi $restApi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RestApi  $restApi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RestApi $restApi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RestApi  $restApi
     * @return \Illuminate\Http\Response
     */
    public function destroy(RestApi $restApi)
    {
        //
    }
}
