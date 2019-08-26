<?php
namespace Codecademy;

function chooseCheckoutLane($num_arg){
  if($num_arg <= 12){
    return "express lane";
  }else{
    return "regular lane";
  }
}

function canIVote($age){
  if($age >=18){
    return "yes";
  }else{
    return "no";
  }
}

echo chooseCheckoutLane(4);
echo chooseCheckoutLane(25);
echo canIVote(42);
echo canIVote(2);