<?php

namespace App\Traits;

/**
 * 定義統一例外回應方法
 * @param $message 錯誤訊息
 * @param $status HTTP狀態碼
 * @param $code 自定義錯誤編號
 */
trait ApiResponseTrait
{
    public function errorResponse($message, $status, $code = null)
    {
        $code = $code ?? $status; // $code預設為null時預設HTTP狀態碼

        return response()->json(
            [
                'message' => $message,
                'code' => $code
            ],
            $status
        );
    }
}
