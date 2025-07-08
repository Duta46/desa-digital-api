<?php

namespace App\Helpers;

use Illuminate\Http\JsonResponse;

class ResponseHelper
{
    /**
     * Create a JSON response with a success message.
     *
     * @param string $message
     * @param mixed $data
     * @return JsonResponse
     */
    public static function JsonResponse($success, $message, $data, $statusCode): JsonResponse
    {
        return response()->json([
            'success' => 'success',
            'message' => $message,
            'data' => $data,
        ], $statusCode);
    }

    /**
     * Create a JSON response with an error message.
     *
     * @param string $message
     * @param int $code
     * @return JsonResponse
     */
    public static function error(string $message, int $code = 400): JsonResponse
    {
        return response()->json([
            'status' => 'error',
            'message' => $message,
        ], $code);
    }
}
