<?php

namespace Aboodma\AramexIntegration\Models;

class Amount {

    public $value;
    public $currencyCode;



    public function getValue() {
        return $this->value;
    }

    public function setValue($value) {
        $this->value = $value;
    }

    public function getCurrencyCode() {
        return $this->currencyCode;
    }

    public function setCurrencyCode($currencyCode) {
        $this->currencyCode = $currencyCode;
    }

}
