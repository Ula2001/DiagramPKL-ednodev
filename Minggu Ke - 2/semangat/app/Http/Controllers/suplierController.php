<?php

namespace App\Http\Controllers;

use App\Suplier;
use Illuminate\Http\Request;

class suplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Suplier::all();
        return view('suplier.suplierv',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suplier.addsuplier');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'address' => 'required',
            'postal_code' => 'required',
            'zip_code' => 'required',
            'region' => 'required',
            'city' => 'required',
            'country' => 'required',
            'contact_title' => 'required',
            'contact_name' => 'required',
            'contact_phone' => 'required',
            'contact_fax' => 'required',
            'contact_email' => 'required',
        ]);

        $Suplier = new Suplier;
        $Suplier->name = $request->input('name');
        $Suplier->address = $request->input('address');
        $Suplier->postal_code = $request->input('postal_code');
        $Suplier->zip_code = $request->input('zip_code');
        $Suplier->region = $request->input('region');
        $Suplier->city = $request->input('city');
        $Suplier->country = $request->input('country');
        $Suplier->contact_title = $request->input('contact_title');
        $Suplier->contact_name = $request->input('contact_name');
        $Suplier->contact_phone = $request->input('contact_phone');
        $Suplier->contact_fax = $request->input('contact_fax');
        $Suplier->contact_email = $request->input('contact_email');
        $Suplier->save();
        return redirect('/suplier')->with('info', 'Barang Sudah Masuk -_-');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Suplier  $suplier
     * @return \Illuminate\Http\Response
     */
    public function show(Suplier $suplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Suplier  $suplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Suplier $suplier, $id)
    {
        $suplier = Suplier::find($id);
        return view('suplier.editsuplier', ['suplier' => $suplier]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Suplier  $suplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Suplier $suplier, $id)
    {
        $data = array(  'name' => $request->input('name'),
                        'address' => $request->input('address'),
                        'postal_code' => $request->input('postal_code'),
                        'zip_code' => $request->input('zip_code'),
                        'region' => $request->input('region'),
                        'city' => $request->input('city'),
                        'country' => $request->input('country'),
                        'contact_title' => $request->input('contact_title'),
                        'contact_name' => $request->input('contact_name'),
                        'contact_phone' => $request->input('contact_phone'),
                        'contact_fax' => $request->input('contact_fax'),
                        'contact_email' => $request->input('contact_email'));
        Suplier::where('id',$id)->update($data);
        return redirect('/suplier')->with('info', 'Barang Sudah Masuk -_-');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Suplier  $suplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Suplier $suplier, $id)
    {
        Suplier::where('id', $id)->delete();
        return redirect('/suplier')->with('info', 'Barang Sudah Masuk -_-');
    }
}
