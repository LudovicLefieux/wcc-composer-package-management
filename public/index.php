<?php

require '../vendor/autoload.php';

use CowSay\Cow;

$bessie = new Cow('Hello, Farm!');

// store the output in a variable
$output = $bessie->say();
echo $output;

// or just echo the object for direct output
echo $bessie;

// show the tongue

$bessie->setEyes('oO')
    ->setTongue('U')
    ->setPoop('@@@')
    ->setUdder('W');
echo $bessie;