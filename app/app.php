<?php
	session_start();
	require_once 'models/Field.class.php';
    $field = new Field();
    print $field->field_init();
?>