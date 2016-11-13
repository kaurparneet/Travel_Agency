<?php
  $hvar=date("G ");
  $mvar=date("i");



  if($hvar>=0  && $hvar<12){
      if($hvar<=11 && $mvar<=59){
        print("Good morning");
      }
  }
  else if ($hvar>=12 && $hvar<18) {
      if($hvar<18 && $mvar<=59){
      print("Good afternoon");
    }
  }
  else if ($hvar>18) {
    if($hvar=24 && $mvar<=59){
      print("Good evening");
    }
  }
 ?>
