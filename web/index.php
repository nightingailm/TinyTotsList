<?php

/* according to .htaccess */
$_SERVER['SCRIPT_NAME'] = '/index.php';

require_once(dirname(__FILE__).'/../config/ProjectConfiguration.class.php');

$configuration = ProjectConfiguration::getApplicationConfiguration('frontend', 'prod', false);
sfContext::createInstance($configuration)->dispatch();
