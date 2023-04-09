<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FormResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
            'dob'=>$this->dob,
            'contact_no' => $this->contact_no,
            'gender'=>$this->gender,
            // 'resume'=>$this->resume,
            'cover_letter'=>$this->cover_letter,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
