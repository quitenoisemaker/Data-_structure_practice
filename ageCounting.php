<?php

  // Your goal is to count how many items exist that have an age equal to or greater than 50, and print this final value.

  $ch = curl_init('https://coderbyte.com/api/challenges/json/age-counting');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HEADER, 0);
  $data = curl_exec($ch);
  curl_close($ch);

  $json_data = json_decode($data, true);
  $items = explode(', ', $json_data['data']);
  // the explode here breaks a string into an array and remove the comma



  $count = array_reduce($items, function ($count, $item) {
    if (strpos($item, 'age=') !== false) { // geting the string with the age=
      $age = explode('=', $item)[1];// breaks into an array ang the numbers
      if ($age >= 50) return $count + 1;
    }
    return $count;
  }, 0);  //we are just sending the array in a user define function with the the initial value 0 and return a string

  print_r($count);

?>