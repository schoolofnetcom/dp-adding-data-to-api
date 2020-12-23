<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    public function toArray($request)
    {
        $data = parent::toArray($request);
        unset($data['email_verified_at']);
        unset($data['created_at']);
        unset($data['updated_at']);
        $data['age'] = 36;
        return $data;
    }
}
