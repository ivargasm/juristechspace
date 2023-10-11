<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Degree;
use App\Http\Resources\DegreeResource;
use Illuminate\Http\Resources\Json\JsonResource;

class DegreeController extends Controller
{
    public function index():JsonResource{

        # get info degrees
        $degrees = Degree::all();

         // Desactiva el envoltorio para esta respuesta en particular
        JsonResource::withoutWrapping();

        return DegreeResource::collection($degrees);
    }
}
