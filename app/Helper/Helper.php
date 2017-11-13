<?php

if(!function_exists('active_menu'))
{
	function active_menu($currentRoutineName,$requestName, $start ,$finish)
	{
		if(substr($currentRoutineName,$start ,$finish) == $requestName)
		{
			return 'active';
		}
		else
		{
			return null;
		}
	}
}	



