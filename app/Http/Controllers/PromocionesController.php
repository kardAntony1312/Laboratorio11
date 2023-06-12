<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListPromocion;
use App\Models\ListHotel;

class PromocionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($hotel)
    {   
        $hot = ListHotel::find($hotel);
        $sitio = 'promociones';
        return view('home',compact('sitio','hot'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $registro = new ListPromocion();
        $registro->id_hotel = $id;
        $registro->Ipromo = $request->post('txtPromocion');
        $registro->Idura  = $request->post('txtDuracion');
        $registro->Icelu = $request->post('txtCel');
        $registro->created_at = date('Y-m-d H:i:s');
        $registro->updated_at = date('Y-m-d H:i:s');
        $registro->save();

        return redirect()->route("promociones.index",$id);
    }









    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
