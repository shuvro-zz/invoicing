<?php

if (!function_exists("money_format")) { 
	function money_format($format, $number){
		return sprintf($format, $number);
	}
}