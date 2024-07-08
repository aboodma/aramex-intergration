<?php

namespace Aboodma\AramexIntegration\Helpers;

class DateTimeHelper
{
    /**
     * Calculates and returns different timestamps based on the current time.
     *
     * @return array Returns an array with keys for current_timestamp, ready_time, last_pickup_time, and closing_time.
     */
    public static function calculateTimestamps()
    {
       
        $current_time = new \DateTime();
        $current_time->modify('+2 days');
        $current_timestamp = $current_time->getTimestamp() * 1000; 

        $ready_time = $current_timestamp + (1 * 3600 * 1000); 
        $last_pickup_time = $current_timestamp + (2 * 3600 * 1000); 
        $closing_time = $current_timestamp + (3 * 3600 * 1000); 

        return [
            'current_timestamp' => $current_timestamp,
            'ready_time' => $ready_time,
            'last_pickup_time' => $last_pickup_time,
            'closing_time' => $closing_time
        ];
    }
}
