<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Servico extends JsonResource
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
            'nome' => $this->nome,
            'preco' => $this->preco,
            'codigo' => $this->codigo,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
