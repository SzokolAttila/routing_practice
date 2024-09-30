<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function house(){
        return view("quote.show", 
        [
            "title" => "House", 
            "quote" => "Nemcsak az emberek megalázásával lehet a gőzt kiereszteni; mondják, hogy a bowling jobb még ennél is.", 
            "name" => "Dr. House"
        ]);
    }
}
