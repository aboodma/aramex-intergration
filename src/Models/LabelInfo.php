<?php

namespace Aboodma\AramexIntegration\Models;

class LabelInfo
{
    private $reportID;
    private $reportType;

    public function getReportID()
    {
        return $this->reportID;
    }

    public function setReportID($reportID)
    {
        $this->reportID = $reportID;
    }

    public function getReportType()
    {
        return $this->reportType;
    }

    public function setReportType($reportType)
    {
        $this->reportType = $reportType;
    }
}
