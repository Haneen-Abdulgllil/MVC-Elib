<?php
require_once 'controller.php';
class Category extends Controller
{
    public function __construct()
    {
        $this->view('category');
    }
}