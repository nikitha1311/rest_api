<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TransactionResource extends JsonResource
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
        return
        [
            'id' =>$this->id,
            'category' =>$this->category_name,
            'type' => ($this->type =='i') ? 'Income' : 'expense',
            'deatails' => $this->deatails,
            'amount' => number_format($this->amount,2),
            'created_at' => date('D M Y',strtotime($this->created_at)),
            'updated_at' => date('D M Y',strtotime($this->updated_at)),

        ];
    }
}
