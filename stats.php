<?php
require_once 'vendor/autoload.php';

Use Carneiro\Statistics;

$statistics = new Statistics();
echo $statistics->generateReportByTimeByCount(new DateTime("15 minutes ago"), 10000);