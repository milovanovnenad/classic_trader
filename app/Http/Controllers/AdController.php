<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $data = [
            "name" => "FIAT 500 D",
            "year" => "1960",
            "price" => "18.766€",
            "subtitle" => "Trasformabile - Primissima serie D - Omologata Registro Fiat Italiano",
            "images" => [
                0 => "vehicle_ad_standard_image_4f93444a0c8560717c1fe1c295a8726e.jpg",
                1 => "vehicle_ad_standard_image_6658fa599e44d109a9e8a9ddad1f226f.jpg",
                2 => "vehicle_ad_standard_image_eab6329f005a55dc3b02fb62a3067962.jpg"
            ],

            "make" => "FIAT",
            "series" => "500",
            "model" => "500 D",
            "manufacturerCode" => "110 D",
            "firstRegistrationDate" => "07/1961",
            "yearOfManufacture" => "1960",
            "mileage" => "79,600 km",
            "chassisNumber" => "Not provided",
            "engineNumber" => "Not provided",
            "gearboxNumber" => "Not provided",
            "matchingNumbers" => "Yes",
            "previousOwners" => "Not provided",

            "bodyStyle" => "Saloon (2-doors)",
            "power" => "13/18",
            "cubicCapacity" => "499",
            "cylinders" => "2",
            "doors" => "2",
            "steering" => "Left (LHD)",
            "gearbox" => "Manual",
            "gears" => "4",
            "transmission" => "Rear",
            "frontBreaks" => "Not provided",
            "rearBreaks" => "Not provided",
            "fuelType" => "Petrol",

            "exteriorColor" => "Green",
            "manufacturerColorName" => "Verde chiaro 363",
            "sunRoof" => "Yes",
            "foldingRoof" => "No",
            "powerAssistedSteering" => "No",
            "centralLocking" => "No",
            "electricWindows" => "No",
            "interiorColor" => "Green",
            "interiorMaterial" => "Imitation leather",
            "heatedSeats" => "No",
            "airConditioning" => "No",
            "abs" => "No",
            "airbag" => "No",
            "cruiseControl" => "No",

            "seller" => [
                "image" => "trader_homepage_asset_5133eee0946cef66706659ab6cb59e65.png",
                "companyName" => "TOMMYCAR Classic & Sport Cars",
                "firstName" => "Domenico",
                "lastName" => "Grieco",
                "street" => "Via Francesco Egidi",
                "streetNumber" => "77",
                "postalCode" => "63900",
                "city" => "Fermo",
                "flag" => "🇮🇹",
                "country" => "Italy",
            ]
        ];
        return new Response($data);
    }

}
