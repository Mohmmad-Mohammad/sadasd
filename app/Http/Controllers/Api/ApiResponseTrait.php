<?php

namespace App\Http\Controllers\Api;

trait ApiResponseTrait
{
    public function api($data = null,$massage = null,$status = null)
    {
        $array = [
            'data'=>$data,
            'massage' => $massage,
            'status'=>$status
        ];
        return response($array,$status);

    }
}