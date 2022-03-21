<?php

use App\Models\User;

if (!function_exists('toMoney')) {
    function toMoney($value)
    {
        // Convert Value to Naira
        $value /= 100;

        // Display in a money format
        return number_format($value, 2, '.', $separator = ',');
    }
}

if (!function_exists('status')) {
    function status($dbStatus): string
    {
        $status = '...unrecognized';

        switch ($dbStatus) {
            case 'success':
            case 'succeed':
            case 'completed':
                $status = 'Approved';
                break;
            case 'pending':
                $status = 'Pending ...';
                break;
            case 'failed':
            case 'rejected':
            case 'cancelled':
            case 'closed':
                $status = 'Unsuccessful';
                break;
        }

        return $status;
    }
}

if (!function_exists('statusColor')) {
    function statusColor($dbStatus): string
    {
        $status = 'text-primary';

        switch ($dbStatus) {
            case 'success':
            case 'succeed':
            case 'completed':
                $status = 'text-success';
                break;
            case 'pending':
                $status = 'text-warning';
                break;
            case 'rejected':
            case 'cancelled':
            case 'closed':
                $status = 'text-danger';
                break;
        }

        return $status;
    }
}

if (!function_exists('random_color')) {
    function random_color()
    {
        $background = [
            'bg-primary',
            'bg-warning',
            'bg-default',
            'bg-secondary',
            'bg-light-primary',
            'bg-light-info',
            'bg-light-warning',
            'bg-light-default',
        ];

        return $background[array_rand($background, 1)];
    }
}
