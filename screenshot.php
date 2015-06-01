<?php
require 'vendor/autoload.php';

$host = $argv[1];
$url = "http://google.com/";

$driver = RemoteWebDriver::create($host, DesiredCapabilities::firefox());
$screenshot = "./firefox.png";
$driver->get($url);
$driver->takeScreenshot($screenshot);

$driver = RemoteWebDriver::create($host, DesiredCapabilities::chrome());
$screenshot = "./chrome.png";
$driver->get($url);
$driver->takeScreenshot($screenshot);
 
    
