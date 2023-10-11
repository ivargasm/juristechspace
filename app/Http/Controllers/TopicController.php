<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Http\Resources\TopicResource;
use Illuminate\Http\Resources\Json\JsonResource;

class TopicController extends Controller
{
    public function index($id):jsonResource{

        # get info topics
        $topics = Topic::where('degree_id', $id)->get();

         // Desactiva el envoltorio para esta respuesta en particular
        JsonResource::withoutWrapping();

        return TopicResource::collection($topics);
        
    }
}
