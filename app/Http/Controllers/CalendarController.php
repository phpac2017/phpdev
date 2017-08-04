<?php

namespace App\Http\Controllers;

use App\CalendarEvent;
use App\Http\Requests;
use Carbon\Carbon;

class CalendarController extends Controller
{

    /**
     * @var CalendarEvent
     */
    private $calendarEvent;

    /**
     * @param CalendarEvent $calendarEvent
     */
    public function __construct(CalendarEvent $calendarEvent)
    {
        $this->calendarEvent = $calendarEvent;
    }

    public function calendar()
    {
        $staticEvent = \Calendar::event(
            'Today\'s Sample',
            true,
            Carbon::today()->setTime(0, 0),
            Carbon::today()->setTime(23, 59),
            null,
            [
                'color' => '#0e8fbc',
                'url' => 'http://google.com',
            ]
        );

        $databaseEvents = $this->calendarEvent->all();
        $calendar = \Calendar::addEvent($staticEvent)->addEvents($databaseEvents);

       // echo "<pre>";print_r($calendar);exit;

        return view('doctor/calendar', compact('calendar'));
    }

}
