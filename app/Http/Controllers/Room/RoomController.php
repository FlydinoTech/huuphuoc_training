<?php

namespace App\Http\Controllers\Room;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(){
        return view('room.index');
    }

    public function tour(){
        return view('room.tour');
    }

    public function catTour(){
        return view('room.cat_tour');
    }

    public function booktour(){
        return view('room.booktour');
    }

    public function team(){
        return view('room.team');
    }

    public function blog(){
        return view('room.blog');
    }

    public function about(){
        return view('room.about');
    }

    public function error(){
        return view('room.404');
    }

    public function comming(){
        return view('room.comming');
    }

    public function shop(){
        return view('room.shop');
    }

    public function contact(){
        return view('room.contact');
    }
}
