<?php

require('../../class.zhilify.php');

class A
{
    public $b;
    public $c;
}

$x = new A();
$x->b = new A();
$x->b->b = new A();
$x->b->c = new A();
$x->b->c->b = new A();

zhilify($x);
