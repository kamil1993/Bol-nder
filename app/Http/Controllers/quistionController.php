<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\quistion;
use Illuminate\Support\Facades\DB;

class quistionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($language)
    {
        
        $res=DB::table('quistions')
        ->where('language',$language)
         ->orderBy('id','desc')
         ->get();
         return $res; 
    }

    public function cat($category)
    {
       // return quistion::all()->where('category',$category);
        $res=DB::table('quistions')
        ->where('category',$category)
         ->orderBy('id','desc')
         ->get();
         return $res; 
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $newQu = new quistion();
        $newQu->text = $request->text;
        $newQu->category=$request->category;
        $newQu->language=$request->language;
        $newQu->save();
        return $newQu;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return quistion::find($id);
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
