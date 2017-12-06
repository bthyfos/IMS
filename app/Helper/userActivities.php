<?php

use App\Activity;


function getUserActivities()
{
    $userActivities  = Activity::all();
    return $userActivities;
}