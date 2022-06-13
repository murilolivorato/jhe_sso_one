<?php

namespace App\Http\Controllers;

class SiteController extends Controller
{
    public function getApiController () {
        return response()->json(['foiii api']);
    }
}
