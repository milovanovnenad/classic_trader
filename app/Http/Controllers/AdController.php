<?php

namespace App\Http\Controllers;

use App\Models\Ad;
use Illuminate\Http\Response;
use Illuminate\View\View;

class AdController extends Controller
{
    public function show(string $id): View
    {
        return view('ad', [
            'getDataUrl' => "/ad/data/$id"
        ]);
    }

    public function getData(string $id): Response
    {
        $data = Ad::with([
            'seller.image',
            'images',
            'vehicleDetails',
            'technicalDetails',
            'individualConfiguration'
        ])->find($id);

        return new Response($data);
    }

}
