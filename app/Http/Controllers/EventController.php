<?php

namespace App\Http\Controllers;

use App\Events\OrderPlaced;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;

class EventController extends Controller
{
    public function index()
    {
        $user_id = 1;
        Event::dispatch(new OrderPlaced($user_id));

        dd("Check inbox");
    }
}

  
