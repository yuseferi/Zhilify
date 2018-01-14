<?php

require('../../class.zhilify.php');

$obj = (object) array('a' => array('b' => array('c' => array('d' => array('e' => null)))));

zhilify($obj);
