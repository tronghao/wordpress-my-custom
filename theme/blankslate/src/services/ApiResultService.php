<?php

class ApiResultService
{
    public static function success($data) {
        $res = [
            'status' => true,
            'result' => $data
        ];
        return json_encode( $res, 200);
    }

    public static function error($data) {
        $res = [
            'status' => false,
            'result' => $data
        ];

        return json_encode( $res, 500);
    }
 }