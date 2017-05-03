<?php

use Senao\Services\NotificationService;

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    /** @var NotificationService  */
    private $notificationService;

    /**
     * Welcome constructor.
     */
    public function __construct()
    {
        $this->notificationService = new NotificationService();
    }

    public function index()
    {
        $collection = collect([1, 2, 3, 4, 5]);
        $sum = $collection->map(function($value) {
            return $value * 2;
        })->reduce(function ($carry, $value) {
            return $carry + $value;
        });

        echo($sum);
    }
}
