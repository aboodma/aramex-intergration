<?php

namespace Aboodma\AramexIntegration\Models;

class Amount {

    public $value;
    public $currencyCode;

    /**
     * Retrieves the value of the amount.
     *
     * @return float The value of the amount.
     */
    public function getValue() {
        return $this->value;
    }

    /**
     * Sets the value of the amount.
     *
     * @param float $value The value to set.
     * @return $this
     */
    public function setValue($value) {
        $this->value = $value;
        return $this;
    }

    /**
     * Retrieves the currency code of the amount.
     *
     * @return string The currency code of the amount.
     */
    public function getCurrencyCode() {
        return $this->currencyCode;
    }

    /**
     * Sets the currency code of the amount.
     *
     * @param string $currencyCode The currency code to set.
     * @return $this
     */
    public function setCurrencyCode($currencyCode) {
        $this->currencyCode = $currencyCode;
        return $this;
    }
}
