<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class CitationResourceCollection extends ResourceCollection
{
    public $collects = CitationResource::class;

    public function toArray($request)
    {
        return [
            'data' => $this->collection->map(function (CitationResource $resource) {
                return $resource;
            })->all()
        ];
    }
}
