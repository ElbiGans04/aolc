<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

Route::get('/{id?}', function ($id = null) {
    $guessName = in_array($id, ["bojong-kamal", "sadangan", "jagabaya", "parung-panjang", "millenium-city", "curug"]) ? $id : null;
    $finalName = "Kamu";

    switch ($guessName) {
        case "bojong-kamal" : {
            $finalName = "GBI Bojong Kamal";
            break;
        }

        case "sadangan" : {
            $finalName = "GBI Sadangan";
            break;
        }

        case "jagabaya" : {
            $finalName = "GBI Jagabaya";
            break;
        }

        case "parung-panjang" : {
            $finalName = "GBI Parung Panjang";
            break;
        }

        case "millenium-city" : {
            $finalName = "GBI Millenium City";
            break;
        }

        case "curug" : {
            $finalName = "GBI Curug";
            break;
        }
    }

    return view('homepage', compact('finalName', 'guessName'));
});
