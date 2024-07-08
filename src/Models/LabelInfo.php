<?php

namespace Aboodma\AramexIntegration\Models;

class LabelInfo
{
    public $ReportID;
    public $ReportType;

    /**
     * Retrieves the report ID.
     *
     * @return string The report ID.
     */
    public function getReportID()
    {
        return $this->ReportID;
    }

    /**
     * Sets the report ID.
     *
     * @param string $ReportID The report ID to set.
     * @return $this
     */
    public function setReportID($ReportID)
    {
        $this->ReportID = $ReportID;
        return $this;
    }

    /**
     * Retrieves the report type.
     *
     * @return string The report type.
     */
    public function getReportType()
    {
        return $this->ReportType;
    }

    /**
     * Sets the report type.
     *
     * @param string $ReportType The report type to set.
     * @return $this
     */
    public function setReportType($ReportType)
    {
        $this->ReportType = $ReportType;
        return $this;
    }
}
