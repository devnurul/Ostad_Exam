<?php
// The Question here
// HF consultancy wants to build a very simple commission-calculating calculator for their Admission agents. Usually, the commission is twenty-five percent of the tuition fee if the tuition is above twenty thousand dollars. But if the tuition fee is above ten thousand dollars but less than twenty thousand dollars, the commission is twenty percent. If the tuition fee is less than ten thousand dollars but greater than seven thousand dollars,  the commission rate is fifteen percent. If the tuition fee is below seven thousand dollars the data will be invalid. As a developer please help HF Consultancy for building this simple calculator using a ternary operator in Php.

// start to solve the problem by ternary operator
$tuitionFee =30000;

$commissionFee =($tuitionFee > 20000)?("Commission Fee ="..25*$tuitionFee):(($tuitionFee > 10000)?("Commission Fee ="..2*$tuitionFee):(($tuitionFee > 7000)? ("Commission Fee ="..15*$tuitionFee):("Invalid Tuition fee")));

echo $commissionFee;