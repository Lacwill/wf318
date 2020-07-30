<?php
$fruits = ['kiwi', 'apple', 'orange'];
echo $fruits[sizeof($fruits)-1];
$fruits[3] = 'strawbury';
echo $fruits[3];
$fruits[3] = '';
for($i=0; $i<=2; $i++) {
    echo $fruits[$i];
}
foreach($fruits as $key => $value ) {
    echo $value;
}