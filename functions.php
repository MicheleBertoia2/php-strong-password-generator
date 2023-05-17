<?php

function generatePwd($number){
  $data = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!"#$%&()*+,-./:;<=>?@{|}~';
  $pwdArr = [];
  for ($i=0; $i < $number; $i++) { 
    $carattereEstratto = rand(0,strlen($data) - 1);
    $pwdArr[] = $data[$carattereEstratto];
  }
  return implode("",$pwdArr);
};