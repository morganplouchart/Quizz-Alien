<?php

//echo $_POST["nostromo"];
//var_dump($_POST);die;
$count = 0;
if($_POST['vaisseau'] !== 'Nostromo') {
  //var_dump("Question 1 fausse");
} else {
  $count ++;
  //var_dump("Question 1 juste");
}

if($_POST['actrice'] !== 'Sigourney Weaver') {
  //var_dump("Question 2 fausse");
}else {
  $count ++;
  //var_dump("Question 1 juste");
}
if($_POST['ordinateur'] !== 'maman') {
  //var_dump("Question 2 juste");
}else {
  $count ++;
  //var_dump("Question 1 juste");
}
//var_dump($count);

if($_POST['robot1'] !== 'Ash') {
  //var_dump("Question 2 juste");
}else {
  $count ++;
  //var_dump("Question 1 juste");
}
if($_POST['robot2'] !== 'Bishop') {
  //var_dump("Question 2 juste");
}else {
  $count ++;
  //var_dump("Question 1 juste");
}
if($_POST['robot2'] !== 'Bishop') {
  //var_dump("Question 2 juste");
}else {
  $count ++;
  //var_dump("Question 1 juste");
}
if($_POST['robot3'] !== 'Rebecca') {
  //var_dump("Question 2 juste");
}else {
  $count ++;
  //var_dump("Question 1 juste");
}
if($_POST['commandant'] !== 'A.J Dallas') {
  //var_dump("Question 2 juste");
}else {
  $count ++;
  //var_dump("Question 1 juste");
}
if($_POST['ripley'] !== '57 ans') {
  //var_dump("Question 2 juste");
}else {
  $count ++;
  //var_dump("Question 1 juste");
}

if($_POST['real'] !== 'David Fincher') {
  //var_dump("Question 2 juste");
}else {
  $count ++;
  //var_dump("Question 1 juste");
}
