<?php
include_once service('CommonService');

class Request {
    public static function get($name, $api = false) {
        if ($api) {
            $_POST = CommonService::parsePostFromApi();
        }
        if (isset($_GET[$name])) {
            return $_GET[$name];
        }
        if (isset($_POST[$name])) {
            return $_POST[$name];
        }
        return null;
    }
}