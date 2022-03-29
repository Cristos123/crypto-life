<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Integrations\Universe;

class UniversalController extends Controller
{
    public function getState($country)
    {
        $states = (new Universe())->getStates($country);
        return $states;
    }
}
