<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class UserCollection  extends ResourceCollection
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//        return parent::toArray($request);
        return [
            'data' => $this->collection,
            'links' => [
                'self' => 'link-value',
            ],
            'meta' => [
                'key' => 'value',
            ],
        ];
    }

    public function with($request)
    {
        return [
            'hello' => [
                'name' => 'chl',
            ],
        ];
    }

    public function withResponse($request, $response)
    {
        $response->header('Y-value', true);
    }
}
