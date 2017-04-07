<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display the user's profile.
     *
     * @param  Request  $request
     * @return Response
     */
    public function index(Request $request)
    {

    }
    /**
     * Update the user's profile.
     *
     * @param  Request  $request
     * @return Response
     */
    public function update(Request $request)
    {
        // $request->user() returns an instance of the authenticated user...
    }
}
