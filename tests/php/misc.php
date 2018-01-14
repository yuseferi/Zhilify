<?PHP

include("../../class.zhilify.php");

$fp = fopen(__FILE__, "r");

$a = array(
    'first'           => $fp,
    'last'            => new bar,
    'null_var'        => null,
    'float'           => pi(),
    'bool'            => true,
    ' leading_space'  => 6*8,
    'trailing_space ' => 'grapes',
    'middle space'    => 'Mt. Rushmore',
    'phones'          => array(5036541278,8714077831,'x253'),
    'long_str'        => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum...",
    'empty_arr'       => array(),
    'func_str'        => 'preg_replace',
    'address'         => array('street' => '123 Fake Street', 'city' => 'Tehran', 'state' => 'Tehran'),
    'unixtime'        => 1231241234,
    'microtime'       => microtime(1),
);

if (isset($_GET['short']) || php_sapi_name() === 'cli') {
    zhd($a, 'expand');
}

print "<h2>zhilify capture</h2>\n";
$str = zh(array('foo' => 'bar'));
print $str;

print "<h2>zhilify</h2>\n";
zh(array('likes','kittens','and','dogs'));

print "<h2>zhilify passing multiple args</h2>\n";
zh('likes', 'kittens', 'and', 'dogs');

print "<h2>zhilify + die()</h2>\n";
zhd($a);
print "If you see this something is broken";

$k = new zhilify;

class bar
{
    public $b = 'bb';
    public $a = 'aa';

    public function foo()
    {
        return 'bar';
    }
}
