<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$autoload['packages'] = array();

$autoload['libraries'] = array('database','form_validation','pagination','session','encryption','upload','email','csvimport');
$autoload['drivers'] = array();

$autoload['helper'] = array('file','url','form','text','html','slug','dateind','uploadresize','bootstrap_helper','string','csv_helper');

$autoload['config'] = array();

$autoload['language'] = array();

$autoload['model'] = array('M_Login','M_User','M_SK');
