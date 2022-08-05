<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PensionResource extends JsonResource
{
    
    public function toArray($request)
    {
        return [

            'id'=>$this->id,
            'registration_no'=> $this->registration_no,
            'pensioner_name'=> $this->pensioner_name,
            'pensioner_dob'=> $this->pensioner_dob,
            'pensioner_address'=>$this->pensioner_address,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,


        ];
    }
}
