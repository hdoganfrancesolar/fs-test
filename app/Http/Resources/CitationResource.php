<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CitationResource extends JsonResource
{
    public function toArray($request)
    {
        return ['data' => parent::toArray($request)];
    }
}
