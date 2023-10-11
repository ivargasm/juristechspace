<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partner;
use App\Http\Resources\PartnerResource;
use Illuminate\Http\Resources\Json\JsonResource;

class PartnerController extends Controller
{
    public function index($degree_id, $topic_id){
        
        // Llamamos a la función getUsers y pasamos $topic_id
        $partners = $this->getUsers($topic_id);

        // Desactiva el envoltorio para esta respuesta en particular
        JsonResource::withoutWrapping();

        return PartnerResource::collection(collect($partners));
        // return PartnerResource::collection($partners);
    }


    private function getUsers($topic_id) 
    {
        $users = Partner::with('role', 'topics')
                    ->whereHas('topics', function($query) use ($topic_id) {
                        $query->where('topics.id', $topic_id);
                    })
                    ->get();
        return $users;
    }
}
