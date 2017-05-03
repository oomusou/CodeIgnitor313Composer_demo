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
        $message = $this->notificationService->getMessage();
        echo($message);
    }
}
