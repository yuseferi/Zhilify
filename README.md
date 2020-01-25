Zhilify
=====

Zhilify is a beautiful replacement for `print_r()` and `var_dump()` for PHP developer to show variables
and classed in better view.

Installation:
-------------
Put this line in your header.php or global project include:

~~~PHP
include("/patth/zhilify/class.zhilify.php");
~~~

**or**

Add this line to your composer.json "require" section:

### composer.json
```json
{
	"require": {
		"yuseferi/zhilify": "*"
	}
}
```

Usage:
------
After Zhilify is loaded you have access to the global Zhilify functions: `zhilify()`, `zh()`, and `zhd()`.

```php
$arr = array(
	'first' => 'Ali',
	'last'  => 'Tajikofsky',
	'skills' => array('tabaify','RPG-7','django','linux'),
	'hobbies' => array('game' => 'cod4', 'instrument' => 'electric-guitar'),
);

// Dump out the array, short and long versions
zh($arr);
zhilify($arr);

// Output the array and then exit();
zhd($arr);

// Output the Expanded array and then exit();
zhd($arr,'e'); // or zhd($arr,'expand'); 

// Output the array with all nodes expanded
zh($arr, 'e');  // or zh($arr, 'expand');

// Output  sorted the array with all nodes expanded
zhs($arr);  // s stand for sorted

// The object based method
$zhilify = new Zhilify;
$zhilify->dump($arr);
```
