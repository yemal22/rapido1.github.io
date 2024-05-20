<?php
include_once '/rapido/controllers/AssignDriverController';
echo 'hello';

$update = new AssignDriverController();
$update->assignDriverToCourse($_POST['courseId'], $_POST['chauffeurId']);
