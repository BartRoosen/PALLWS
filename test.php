<?php
require_once("bootstrap.php");

use Layers\Business\SessionHandler;
use Layers\Business\KalenderSVC;
use Layers\Data\KalenderDAO;


print_r(KalenderSVC::getMonthKalender(2016, 12));


echo date('d-m-Y', strtotime('2016-02-15'));