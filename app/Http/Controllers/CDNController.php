<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CDNController extends Controller
{
    function kit() : string {
        $css = "
            .text-primary{
                color: blue;
            }
        ";

        // $response = $css;
        $response = Response::make($css);
        $response->header('Content-Type', 'text/css');

        return $response;
    }
}
