<?php
/**
 * Created by PhpStorm.
 * User: Min Thet Naing
 * Date: 11/28/2016
 * Time: 5:05 AM
 */

$arr = array(
    'username' => 'Mg Mg',
    'password' => '123123'

);

$arr = [
    'username' => 'Aung Aung',
    'pass' => '123'
];

foreach($arr as $value) {
    echo $value . '<br>';
}

$result = '';

foreach($arr as $key => $value) {
    $result .= $key . ' = ' . $value . ', ';
}

echo preg_replace('/, $/', '', $result);


/*echo '<pre>';
print_r($arr);
echo '</pre>';*/

// echo $arr['username'];








