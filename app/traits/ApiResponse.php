<?php

namespace App\Traits;

use Illuminate\Http\Exceptions\HttpResponseException;

Trait ApiResponse{
   
    private function apiResponse($messageTitle,$message,$code,$data=null){
        $response=[
            $messageTitle => $message,
            'status' => $code
            ];
        $response['data']=[];  
        if($data!=null){
            if($code==201){
                $response['data']=$data;   
            }else{
                $response['errors']=$data;
            }
            
        }
        throw new HttpResponseException(response()->json($response, $code)
        );

    }



}