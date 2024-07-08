<?php

namespace Aboodma\AramexIntegration\Models;

class Dimensions
{
    public $Length;
    public $Width;
    public $Height;
    public $Unit;

    /**
     * Retrieves the length.
     *
     * @return float The length.
     */
    public function getLength()
    {
        return $this->Length;
    }

    /**
     * Sets the length.
     *
     * @param float $Length The length to set.
     * @return $this
     */
    public function setLength($Length)
    {
        $this->Length = $Length;
        return $this;
    }

    /**
     * Retrieves the width.
     *
     * @return float The width.
     */
    public function getWidth()
    {
        return $this->Width;
    }

    /**
     * Sets the width.
     *
     * @param float $Width The width to set.
     * @return $this
     */
    public function setWidth($Width)
    {
        $this->Width = $Width;
        return $this;
    }

    /**
     * Retrieves the height.
     *
     * @return float The height.
     */
    public function getHeight()
    {
        return $this->Height;
    }

    /**
     * Sets the height.
     *
     * @param float $Height The height to set.
     * @return $this
     */
    public function setHeight($Height)
    {
        $this->Height = $Height;
        return $this;
    }

    /**
     * Retrieves the unit of measurement.
     *
     * @return string The unit of measurement.
     */
    public function getUnit()
    {
        return $this->Unit;
    }

    /**
     * Sets the unit of measurement.
     *
     * @param string $Unit The unit of measurement to set.
     * @return $this
     */
    public function setUnit($Unit)
    {
        $this->Unit = $Unit;
        return $this;
    }
}
