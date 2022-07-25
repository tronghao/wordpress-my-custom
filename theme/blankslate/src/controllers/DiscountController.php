<?php
include_once service('CommonService');
include_once service('ApiResultService');

class DiscountController {
    /**
     * index
     * @author HaoDT
     */
    public function index() {
        if (CommonService::isPostMethod()) {
            echo Request::get('discount');
        }
        include_once view('discount/index');
    }

    /**
     * save
     * @author HaoDT
     */
    public function save() {
        if (CommonService::isPostMethod()) {
            $discountCode = Request::get('discount', true);

            return ApiResultService::success($discountCode);
        }
    }
}