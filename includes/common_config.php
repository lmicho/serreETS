<?php

$DEBUG = 1;

if ($DEBUG==1) {
  error_reporting(0);
  $actual_link = "http://$_SERVER[HTTP_HOST]/serreETS";
} else {
  $actual_link = "http://$_SERVER[HTTP_HOST]/projets/serreETS";
  error_reporting(0);
}

