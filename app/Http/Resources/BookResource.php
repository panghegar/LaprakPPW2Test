<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BookResource extends JsonResource
{

    // Define properti
    public $status;
    public $message;
    public $resource;

    /**
     * __construct
     * @param mixed $status
     * @param mixed $message
     * @param mixed $resource
     * 
     */

     public function __construct($status, $message, $resource)
     {
        parent::__construct($resource);
        $this->status = $status;
        $this->message = $message;        
     }

    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     * @return array    
     */
    public function toArray($request)
    {
        return [
            'success'       => $this->status,
            'message'       => $this->message,
            'resource'      => $this->resource,
        ];
    }
}
