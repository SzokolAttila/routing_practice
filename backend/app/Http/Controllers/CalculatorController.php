<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function result($a, $operator, $b){
        if($operator == "/" && $b == 0)
            return abort(400);
        $result;
        $title;
        switch($operator){
            case "/":
                $title = "Osztas";
                $result = $a / $b;
                break;
            case "+":
                $title = "Osszeadas";
                $result = $a + $b;
                break;
            case "*": 
                $title = "Szorzas";
                $result = $a * $b;
                break;
            case "-":
                $title = "Kivonas";
                $result = $a - $b;
                break;
        }
        return view("calculator.result", [
            "a" => $a,
            "b" => $b,
            "operator" => $operator,
            "title" => $title,
            "result" => $result
        ]);
    }
}
