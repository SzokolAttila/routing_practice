<?php

namespace App\Http\Controllers;

use DateInterval;
use DateTime;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function today(){
        return view("calendar.date", [
            "title" => "Ma",
            "date" => date_format(now(), "Y-m-d")
        ]);
    }
    public function yesterday(){
        return view("calendar.date", [
            "title" => "Tegnap",
            "date" => date_format(now()->sub(new DateInterval("P1D")), "Y-m-d")
        ]);
    }
    public function tomorrow(){
        return view("calendar.date", [
            "title" => "Holnap",
            "date" => date_format(now()->add(new DateInterval("P1D")), "Y-m-d")
        ]);
    }
}
