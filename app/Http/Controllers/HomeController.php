<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\WorldCupService;

class HomeController extends Controller
{
    public function __construct(protected WorldCupService $wc) {}

    public function index()
    {
        $matches = $this->wc->getMatches();

        return view('home', compact('matches'));
    }
}
