<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SupplierResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'status' => $this->status,
            'name' => $this->name,
            'score' => $this->score,
            'econhunt_deal' => $this->econhunt_deal,
            'link' => $this->link,
            'sourcing' => $this->sourcing,
            'cost' => $this->cost,
            'processing' => $this->processing,
            'special_line' => $this->special_line,
            'branding' => $this->branding,
            'couriers' => $this->couriers,
            'return_policy' => $this->return_policy,
            'pod' => $this->pod
        ];
    }
}
