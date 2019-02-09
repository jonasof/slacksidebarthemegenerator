<?php

require_once 'vendor/autoload.php';
require_once 'SlackBar.php';

use ColorThief\ColorThief;

if (!isset($_FILES['logo'])) {
    include 'templates/index.php';
} else {
    $path = $_FILES["logo"]['tmp_name'];

    $colorsAmount = 4;

    $pallete = ColorThief::getPalette($path, $colorsAmount+1);
    $slackBar = new SlackBar($pallete);
    $slackBarString = $slackBar->toSlackString();

    include 'templates/processed.php';
}
