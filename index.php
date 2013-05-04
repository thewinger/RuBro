<?php // Needs to be first line of page.
/*
   Language Browser Language Detection and Redirect
   Version 1.0
   August 21, 2010

   Will Bontrager
   http://www.willmaster.com/
   Copyright 2010 Bontrager Connection, LLC

   Bontrager Connection, LLC grants you
   a royalty free license to use or modify
   this software provided this notice appears
   on all copies. This software is provided
   "AS IS," without a warranty of any kind.
*/

// Two customization steps --
//
// Step 1:
// Specify each applicable language code and its URL,
//   one line per code, in this format:
//
//   $Destination['code'] = 'http://www.willmaster.com/blog/';

$Destination['en'] = 'http://localhost:8888/Web/RuBro/en/';
$Destination['es'] = 'http://localhost:8888/Web/RuBro/es/';
$Destination['pt'] = 'http://localhost:8888/Web/RuBro/pt/';


// Step 2:
// Specify the default destination URL for when none of
//   the above match. (May be blank for no default redirect.)

$DefaultDestination = 'http://localhost:8888/Web/RuBro/en/';


 // No other customization required. //
//////////////////////////////////////
$lang = preg_replace('/;.*$/','',$_SERVER['HTTP_ACCEPT_LANGUAGE']);
$lang = preg_replace('/,.*$/','',strtolower($lang));
$dest = '';
if( isset($Destination[$lang]) ) { $dest = $Destination[$lang]; }
if( empty($dest) )
{
   $lang = substr($lang,0,2);
   if( isset($Destination[$lang]) ) { $dest = $Destination[$lang]; }
   else { $dest = $DefaultDestination; }
}
if( ! empty($dest) )
{
   header("Location: $dest");
   exit;
}
?>
