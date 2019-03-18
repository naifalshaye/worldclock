<?php
namespace Naif\WorldClock\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class WorldClockController
{
    public function getTimes(Request $request)
    {
        if (!$request->timeFormat){
            $request->timeFormat = 'h:i:s';
        }
        $times = [];
        $night = true;
        foreach ($request->timezones as $timezone){
            $time = Carbon::now($timezone);
            if ($time->format('H') < 17) {
                $night = false;
            }
            $name = explode('/',$time->getTimezone()->getName())[1];
            $name = str_replace('_',' ',$name);
            array_push($times,[
                'name'=> ucwords($name),
                'time'=> $time->format($request->timeFormat),
                'night'=> $night
            ]);
        }
        return $times;
    }
}
