<?php

namespace App\Controllers; // složky pro třídy

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Psr\Log\LoggerInterface;

class Main extends BaseController
{
    // konstruktor
    public function initController(RequestInterface $request, ResponseInterface $response, LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger); // použij konstruktor rodiče
    }

    public function index()
    {
        echo view('prvni-stranka'); // vyvolává view main_page
    }

    public function druhaStranka()
    {
        echo view('druha-stranka');
    }

    public function tretiStranka()
    {
        echo view('treti-stranka');
    }

    public function ctvrtaStranka(){
        echo view('ctvrta-stranka');
    }
}
