<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class CalendarController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(Request $request)
    {
        $events = [];

        $appointments = Appointment::get();

        foreach ($appointments as $appointment) {
            $events[] = [
                'title' => 'dev',
                'start' => $appointment->start_timestamp,
                'end' => $appointment->end_timestamp,
            ];
        }

        return view('welcome', compact('events'));
    }
}
