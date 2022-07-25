<?php

include_once controller('DiscountController');

add_shortcode('discount', array( 'DiscountController', 'index'));
add_shortcode('discount-save', array( 'DiscountController', 'save'));