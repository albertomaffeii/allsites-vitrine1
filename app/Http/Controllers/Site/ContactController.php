<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('site.contact.index');
    }

     /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return dd($request->all());
    }

}
