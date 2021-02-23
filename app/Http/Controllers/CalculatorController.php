<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function operation($number1, $sign, $number2){
        switch ($sign) {
            case '+':
            $result=$number1+$number2;
            return view("user5", ["result"=>$result ]);
            break;

            case '-':
                $result=$number1-$number2;
                return view("user5", ["result"=>$result ]);
                break;

        }
    }
    //
}
