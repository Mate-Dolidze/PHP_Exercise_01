<?php

/* nomeri 1*/
print 'How are you?';
print "I'm fine.";

/*nomeri 2*/
$a = (2 * 7) + (3 * 2.45) + (2 * 1.75);
print $a - (($a * 7) / 100);

/*nomeri 3*/
$html = '<span class="{class}">fried fish</span><span class="{class}">fried chicken</span>';
print str_repeat('{class}', 'dinner');

/*nomeri 4*/
print (2 + (4 * 10)) / (9 - 2);

/*nomeri 5*/
$arr = [
    'tbilisi' => '2000000',
    'rustavi' => '1000000',
    'qutaisi' => '999000',
    'batumi' => '1400000',
    'telavi' => '750000'
];
City($arr);
function City($data)
{
    print '<pre>';
    var_dump($data);
    print '</pre>';
}

/*nomeri 6*/
arsort($arr);
print'<pre>';
var_dump($arr);
print'</pre>';

?>