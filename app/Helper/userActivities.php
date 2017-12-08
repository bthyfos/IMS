<?php
use App\Activity;

 function userActivities()
{
	$userActivities = Activity::all();
	return $userActivities;
}



