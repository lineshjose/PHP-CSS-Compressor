<?php
/*
	Name: PHP CSS Compressor.
	Description: A simple PHP functions that compress css codes
	Version : 2.00
	Author: Linesh Jose
	Url: http://linesh.com
	Donate:  http://linesh.com/make-a-donation/
	github: https://github.com/lineshjose/
	Demo: http://linesh.com/blog/how-to-create-a-simple-css-compressor-using-php/
	Copyright: Copyright (c) 2015 LineshJose.com
	
	Note: This script is free; you can redistribute it and/or modify  it under the terms of the GNU General Public License as published by 	the Free Software Foundation; either version 2 of the License, or (at your option) any later version.This script is distributed in the hope 	that it will be useful,    but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the  GNU General Public License for more details.

----------------------------------------------------------------------------------------------------------------------

	This function returns compressed css codes
	@param $css_codes : CSS Code
*/

// Compress CSS function
function compress_css($css_codes){		
	$buffer =strip_tags(trim($css_codes));
	// Remove comments
	$buffer = preg_replace('!/\*[^*]*\*+([^/][^*]*\*+)*/!', '', $buffer);
	// Remove whitespace
	$buffer = str_replace(array(': ',' :'), ':', $buffer);
	$buffer = str_replace(array('; ',' ;'), ';', $buffer);
	$buffer = str_replace(array('{ ',' {'), '{', $buffer);
	$buffer = str_replace(array('} ',' }'), '}', $buffer);
	$buffer = str_replace(array(', ',' ,'), ',', $buffer);
	$buffer = str_replace(array('. ',' .'), ' .', $buffer);
	$buffer = str_replace(array('   ', '  '), ' ', $buffer);
	$buffer = str_replace(array("\r\n", "\r", "\n", "\t"), '', $buffer);
	echo 	 $buffer;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="generator" content="Linesh Jose http://linesh.com/" />
<title>The Simple CSS Compressor</title>
<style>
body {
	text-align: center;
	margin: 0;
	padding: 120px 0 0;
	color: #000;
	font-family: "Times, serif", "Helvetica", "Arial";
	font-size: 15px;
	background: #eee;
}
h1 {
	padding: 25px;
	color: #000;
	font-size: 21px;
	background: #fff;
	text-transform: uppercase;
	border-bottom: 1px solid #ccc;
	position: fixed;
	top: 0px;
	right: 0px;
	left: 0px;
	margin: 0;
}
.clear {
	float: none;
	clear: both;
}
p {
	margin: 0px;
	padding: 5px;
}
.button {
	background: #217EBF;
	padding: 5px;
	border: none;
	border-radius: 20px;
	color: #fff;
	width: 200px;
	display: block;
	margin: 0 auto;
	padding: 10px;
	font-size: 13px;
	text-align: center;
	text-decoration: none;
	text-transform: uppercase;
	outline: none;
}
textarea {
	width: 100%;
	max-width: 1000px;
	outline: none;
	box-shadow: 0px 0px 100px 0px rgba(0, 0, 0, 0.27);
	border: 1px solid #ADADAD;
	height: 200px;
	max-height: 200px;
	padding: 20px;
	margin: 10px;
	font-size: 14px;
	line-height: 16px;
	font-family: Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
}
</style>
</head>
<body>
<h1>The Simple CSS Compressor  - PHP script.</h1>
<p> <a href="http://linesh.com/blog/how-to-create-a-simple-css-compressor-using-php/" class="button"> Download this PHP script</a><br>
  <br>
  <br>
</p>
<form action="" method="post">
  <textarea name="css" rows="8" placeholder="Put your CSS Code here:" class="message_box"><?php if(isset($_POST['css'])){ echo trim($_POST['css']);}else{echo 'body {
	text-align: center;
	margin: 0;
	padding: 0;
	color: #000;
	font-family: "Times, serif", "Helvetica", "Arial";
	font-size: 15px;
	background:#eee;
}';
}?>
</textarea>
  <br>
  <input type="submit" name="submit" value="Compress" class="button"/>
</form>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['css']))
{
	if(!empty($_POST['css']))
	{ 
	echo '<br><br><br><br><h2>Cumpressed CSS:</h2>
		<textarea cols="120" rows="10" class="message">';
		compress_css(trim($_POST['css']));
	echo '</textarea>';
	}
}
?>
</body>
</html>
