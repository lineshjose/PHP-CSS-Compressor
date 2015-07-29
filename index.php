<?php
/*
	Name: PHP CSS Compressor.
	Description: A simple PHP functions that compress css codes
	Version : 2.00
	Author: Linesh Jose
	Url: https://lineshjose.com
	Email: lineshjose@gmail.com
	Donate:  http://bit.ly/donate-linesh
	github: https://github.com/lineshjose
	Demo: https://lineshjose.com/blog/how-to-create-a-simple-css-compressor-using-php/
	Copyright: Copyright (c) 2015 LineshJose.com
	
	Note: This script is free; you can redistribute it and/or modify  it under the terms of the GNU General Public License as published by 	the Free Software Foundation; either version 2 of the License, or (at your option) any later version.This script is distributed in the hope 	that it will be useful,    but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the  GNU General Public License for more details.

----------------------------------------------------------------------------------------------------------------------

	This function returns compressed css codes
	@param $css_codes : CSS Code
*/

// Compress CSS function
function compress_css($css_codes)
{		
	$buffer =$css_codes;
	// Remove comments
	$buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
	
	// Remove whitespace
	$buffer = str_replace(array('   ', '  ','    '), ' ', $buffer);
	$buffer = str_replace(array("\r\n", "\r", "\n", "\t"), '', $buffer);
	$buffer = str_replace(array('{ ',' {'), '{', $buffer);
	$buffer = str_replace(array('} ',' }'), '}', $buffer);
	$buffer = str_replace(array(': ',' :'), ':', $buffer);
	$buffer = str_replace(array(' ;','; '), ';', $buffer);
	$buffer = str_replace(array(' ,', ', '), ',', $buffer);
	$buffer = str_replace(array('  .'), ' .', $buffer);
	$buffer = str_replace(array('  #'), ' #', $buffer);
	echo 	 $buffer;
}
?>
