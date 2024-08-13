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
        // Set the timezone to Istanbul
        $timezone = new \DateTimeZone('Europe/Istanbul');
        $current_time = new \DateTime('now', $timezone);
        
        // Modify the time by adding 2 days
        $current_time->modify('+2 days');
        
        // Get the current timestamp in milliseconds
        $current_timestamp = $current_time->getTimestamp() * 1000; 
    
        // Calculate the ready, last pickup, and closing times
        $ready_time = $current_timestamp + (4 * 3600 * 1000); // 5 hours later
        $last_pickup_time = $current_timestamp + (5 * 3600 * 1000); // 6 hours later
        $closing_time = $current_timestamp + (6 * 3600 * 1000); // 8 hours later
    
        // Return the calculated timestamps
        return [
            'current_timestamp' => $current_timestamp,
            'ready_time' => $ready_time,
            'last_pickup_time' => $last_pickup_time,
            'closing_time' => $closing_time
        ];
    }
    
}
