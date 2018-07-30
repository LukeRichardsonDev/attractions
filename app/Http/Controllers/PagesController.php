<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data\AttractionData;

class PagesController extends Controller
{
    public function index() {
        $attractionData = new AttractionData();
        $attractions = $attractionData->getAllData();

        return view('pages.index')->with('attractions', $attractions);
    }

    public function attractions($id) {
        $attractionData = new AttractionData();
        $data = $attractionData->getData($id);

        return view('pages.attraction')->with('data', $data);
    }
}
