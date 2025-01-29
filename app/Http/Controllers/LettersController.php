<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LettersController extends Controller
{
    function assignLetterToNumber($numChain)
{
    if (strlen($numChain) != 8) {
        return "Please, insert a valid number (8 numbers needed)";
    }

    $mod = (int)$numChain % 23;
    $letter = Letter::find($mod + 1);

    return $numChain . $letter->letter;
}

}

