<?php
require_once 'controller.php';
class Payment extends Controller
{
    public function __construct()
    {
        $this->view('payment');
    }
}