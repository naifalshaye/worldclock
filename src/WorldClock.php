<?php

namespace Naif\WorldClock;

use Illuminate\Support\Carbon;
use Laravel\Nova\Card;

class WorldClock extends Card
{
    /**
     * The width of the card (1/3, 1/2, or full).
     *
     * @var string
     */
    public $width = '1/3';

    /**
     * The format used to display time on card.
     * See http://php.net/manual/en/function.date.php for options
     *
     * @var string
     */
    public $format = 'h:i a';


    public function __construct($format = 'h:i a')
    {
        $this->format = $format;
    }

    /**
     * Get the component name for the element.
     *
     * @return string
     */
    public function component()
    {
        return 'world-clock';
    }

    public function timezones($timezones) {
        $times = [];
        foreach ($timezones as $timezone){
            $time = Carbon::now($timezone);
            $name = explode('/',$time->getTimezone()->getName())[1];
            $name = str_replace('_',' ',$name);
            array_push($times,[
                'name'=> ucwords($name),
                'time'=> $time->format($this->format)
            ]);
        }
        return $this->withMeta([
            'times' => $times,
        ]);
    }
}
