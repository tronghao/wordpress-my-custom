<?php

class CommonService {
    public static function isPostMethod() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            return true;
        }
        return false;
    }

    public static function parsePostFromApi() {
        return json_decode(file_get_contents("php://input"),true);
    }
}