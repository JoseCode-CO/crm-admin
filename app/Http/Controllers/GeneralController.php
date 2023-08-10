<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public static function imgUpload($data)
    {
        $originalName = $data->getClientOriginalName();
        $currentTimestamp = time();
        $uniqueFilename = $currentTimestamp . '_' . $originalName;
        $imagePath = $data->storeAs('logo', $uniqueFilename, 'public');

        return $imagePath;
    }
}
