<?php

namespace Bitfumes\Multiauth\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Color;
use Crypt;


class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $colors = Color::get();
        return view('vendor.multiauth.color.index')->with(compact('colors'));
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
        $store = new Color;
        $store->name = $request->input('name');
        $store->code = $request->input('code');
        $store->save();
        return back()->with('message', 'Color added successfully');
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
    public function update(Request $request)
    {
        $update = Color::findOrFail($request->input('id'));
        $update->name = $request->input('name');
        $update->code = $request->input('code');
        $update->update();
        return back()->with('message','Color has been Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = Crypt::decrypt($id);
        $delete = Color::findOrFail($id);
        $delete->delete();
        return back()->with('message', 'Color Deleted');
    }
}
