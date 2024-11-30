<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MeetTheTeamController extends Controller
{
    public function index()
    {
        return view('team.meet-the-team');
    }
}
