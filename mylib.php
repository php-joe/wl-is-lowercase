<?php

//Write a function that checks if a string is all lower case.
function check_LowerCase() {
  if(isset($_POST['string'])) {
  $string = $_POST['string'];
  $lowerCase = strtolower($string);
  if($string === $lowerCase) {
    echo $string . " is all lowercased";
  } else {
    echo $string . " not all lowercased.";
  }
}}
