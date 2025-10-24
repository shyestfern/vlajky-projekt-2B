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
        $data["title"] = "Články";
        echo view('prvni-stranka', $data); // vyvolává view main_page
    }

    public function druhaStranka()
    {
        $data["title"] = "Barvy";
        echo view('druha-stranka', $data);
    }

    public function tretiStranka()
    {
        $data["title"] = "Neobdélníkové vlajky";
        echo view('treti-stranka', $data);
    }

    public function ctvrtaStranka(){
        $data["title"] = "Symbolismus";
        echo view('ctvrta-stranka', $data);
    }
}
