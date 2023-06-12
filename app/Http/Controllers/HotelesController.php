<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListHotel;


class HotelesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $sitio = 'hoteles';
        return view('home',compact('sitio'));
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sitio = 'creador';
        return view('home',compact('sitio'));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sitio = 'editor';
        $hotel = ListHotel::find($id);
        return view('home',compact('sitio','hotel'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $registro = new ListHotel();
        $registro->id     = $request->post('txtID');
        $registro->Ititle = $request->post('txtTITULO');
        $registro->Istar  = $request->post('txtSTART');
        $registro->Ipais  = $request->post('txtPAIS');
        $registro->Iciu   = $request->post('txtCIUDAD');
        $registro->Idirec = $request->post('txtDIRECCION');
        $registro->Itelf = $request->post('txtTELF');
        $registro->Istate = $request->post('txtSTATE');
        $registro->created_at = $request->post('txtDATE');
        $registro->updated_at = date('Y-m-d H:i:s');
        $registro->save();

        return redirect()->route("home");
    }


    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        $registro = ListHotel::find($id);
        $registro->Ititle = $request->post('txtTITULO');
        $registro->Istar  = $request->post('txtSTAR');
        $registro->Ipais  = $request->post('txtPAIS');
        $registro->Iciu   = $request->post('txtCIUDAD');
        $registro->Idirec = $request->post('txtDIRECCION');
        $registro->Itelf = $request->post('txtTELF');
        $registro->Istate = $request->post('txtSTATE');
        $registro->created_at = $request->post('txtDATE');
        $registro->updated_at = date('Y-m-d H:i:s');
        $registro->save();

        return redirect()->route("home");
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $registro = ListHotel::find($id);
        $sitio = 'eliminador';
        return view('home',compact('sitio','registro'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $registro = ListHotel::find($id);
        $registro->delete();

        return redirect()->route("home");
    }











    


}




    
