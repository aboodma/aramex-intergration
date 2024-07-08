<?php

namespace Aboodma\AramexIntegration\Models;

class Weight
{
    public $Unit;
    public $Value;

    /**
     * Retrieves the unit of weight.
     *
     * @return mixed The unit of weight.
     */
    public function getUnit()
    {
        return $this->Unit;
    }

    /**
     * Sets the unit of weight.
     *
     * @param mixed $unit The unit to set.
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->Unit = $unit;
        return $this;
    }

    /**
     * Retrieves the value of the weight.
     *
     * @return mixed The value of the weight.
     */
    public function getValue()
    {
        return $this->Value;
    }

    /**
     * Sets the value of the weight.
     *
     * @param mixed $value The value to set.
     * @return $this
     */
    public function setValue($value)
    {
        $this->Value = $value;
        return $this;
    }
}
