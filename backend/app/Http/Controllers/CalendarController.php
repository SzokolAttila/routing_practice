<?php

namespace App\Http\Controllers;

use DateInterval;
use DateTime;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    protected array $weekdays = [
        1 => "hetfo",
        "kedd",
        "szerda",
        "csutortok", 
        "pentek", 
        "szombat",
        "vasarnap"
    ];
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
    public function weekdayName($number){
        if($number < 1 || $number > 7)
            $title = "A hét napjához adja meg a sorszámát (1 és 7 közötti szám)";
        else $title = $this->weekdays[$number]; 
        return view("calendar.weekday", [
            "title" => $title
        ]);
    }
    public function weekdayNumber($name){
        if(in_array($name, $this->weekdays))
            $title = array_search($name, $this->weekdays);
        else $title = "Ismeretlen nap!";
        return view("calendar.weekday", [
            "title" => $title
        ]);
    }
}
