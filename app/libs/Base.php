<?php

class Base
{

protected $dbhost = DB_HOST;
protected $dbname = DB_NAME;
protected $dbuser = DB_USER;
protected $dbpass = DB_PASSWORD;

private $cnx;
private $stmt;
private $error;

public function __construct() 
{
