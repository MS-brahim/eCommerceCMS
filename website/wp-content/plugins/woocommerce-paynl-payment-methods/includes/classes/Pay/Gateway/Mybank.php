<?php
class Pay_Gateway_Mybank extends Pay_Gateway_Abstract {

    public static function getId() {
        return 'pay_gateway_mybank';
    }

    public static function getName() {
        return 'Mybank';
    }

    public static function getOptionId() {
        return 1588;
    }

}
    