<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListPromocion;
use App\Models\ListHotel;

class EnviosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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

        $promo = ListPromocion::find($id);
        $hotel = ListHotel::find($promo->id_hotel);

        print_r($promo->id_hotel);
        $url = "https://api.green-api.com/waInstance1101822972/SendMessage/73eb30504f484d268665e0c1f1e96bae7e022f6ab2a242669c";
        $data = [
            "chatId" => "51".$promo->Icelu."@c.us",
            "message" =>  'Hasta solo *'.strtoupper($promo->Idura).'* el Hotel *'.strtoupper($hotel->Ititle).'* te ofrece una promoción indicando que: *'.strtoupper($promo->Ipromo).'*.'
                ];
        $options = array(
            'http' => array(
                'method'  => 'POST',
                'content' => json_encode($data),
                'header' =>  "Content-Type: application/json\r\n" .
                    "Accept: application/json\r\n"
            )
        );

        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        $response = json_decode($result);
       
        return redirect()->route("promociones.index",$hotel->id);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {




        
        // ESTA POCIÓN DE CÓDIGO NOS PERMITE ENVIAR SOLO IAMGENS AL CHAT WHATSAP
        // $url = "https://api.green-api.com/waInstance1101822972/sendFileByUrl/73eb30504f484d268665e0c1f1e96bae7e022f6ab2a242669c";
        
    
        // $data = [
        //     "chatId" => "51".$promo->Icelu."@c.us",
        //     "urlFile" => "https://media.giphy.com/media/7ihdqCWmJnDr2/giphy.gif",
        // "fileName"=> "giphy.gif"
        //         ];





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
