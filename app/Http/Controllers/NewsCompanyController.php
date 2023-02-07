<?php

namespace App\Http\Controllers;

use App\Models\newsCompany;
use Illuminate\Http\Request;

class NewsCompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news=newsCompany::get();
        return view('index', compact('news'));
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
     * @param  \App\Models\newsCompany  $newsCompany
     * @return \Illuminate\Http\Response
     */
    public function show(newsCompany $newsCompany)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\newsCompany  $newsCompany
     * @return \Illuminate\Http\Response
     */
    public function edit(newsCompany $newsCompany)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\newsCompany  $newsCompany
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, newsCompany $newsCompany)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\newsCompany  $newsCompany
     * @return \Illuminate\Http\Response
     */
    public function destroy(newsCompany $newsCompany)
    {
        //
    }
}
