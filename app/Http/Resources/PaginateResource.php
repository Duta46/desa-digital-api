<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PaginateResource extends JsonResource
{
    public function __construct($resource, public $resourceClass = null)
    {
        parent::__construct($resource);
    }

    public function collect($resource) {
        return $this->resourceClass::collection($resource);
    }

    public function toArray($request): array

    {
        return [
            'data' => $this->collect($this->items()),
            'meta' => [
                'data' => $this->currentPage(),
                'from' => $this->firstItem(),
                'last_page' => $this->lastPage(),
                'path' => $this->path(),
                'per_page' => $this->perPage(),
                'to' => $this->lastItem(),
                'total' => $this->total(),
            ],
        ];
    }


}
