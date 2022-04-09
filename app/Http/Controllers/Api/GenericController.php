<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;

class GenericController extends Controller
{
    /**     * success response method.     *     * @return \Illuminate\Http\Response     */    
    public function sendResponse($result, $message)
        {
            $response = [
                'success' => true,
                'data'    => $result,
                'message' => $message,
                    ];
            return response()->json($response, 200);
            }
    /**     * return error response.     *     * @return \Illuminate\Http\Response     */    
    public function sendError($error, $errorMessages = [], $code = 404)
        {
            $response = [
                'success' => false,
                'message' => $error,
                'data'=>[],
                ];
            if(!empty($errorMessages)){
                $response['data'] = $errorMessages;
                }
                return response()->json($response, $code);
               
            
        }
        
}