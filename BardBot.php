<?php

$blessings = array(
  "May your coat smell unexpectedly nice.",
  "May you receive a compliment that you haven't heard before.",
  "May traffic be unusually accomodating to you.",
  "May your next meeting go better than expected.",
  "May your next unpleasant activity be canceled.",
  "May you come across free food today.",
  "May you complete your todo list in a reasonable amount of time.",
  "May you find the perfect parking spot.",
  "May your next task go better than expected.",
  "May you feel unusually strong today.",
  "May you complete a task you've long been dreading.",
  "May your next argument reach a mutually satisfying resolution.",
  "May you recall a pleasant memory that you haven't thought of in a while.",
  "May you encounter a pleasant smell.",
  "May you find something you thought was lost.",
  "May you discover some fantastic new music.",
  "May you feel more energetic than you have in a while.",
  "May you receive a gift you weren't expecting.",
  "May you solve a problem that's been bothering you for a while.",
  "May you have exactly the desired ratio of alone time to social time.",
  "May you feel passionate about something you didn't expect to feel passionate about.",
  "May you have a pleasant encounter with an old friend.",
  "May you finally remember that word you were looking for.",
  "May you find a simple solution for a complicated problem.",
  "May you find an extra free hour in the middle of your schedule.",
  "May you rediscover something beautiful around you.",
  "May you dream of something pleasant.",
  "May you remember a forgotten passion.",
  "May you laugh uncontrollably about something today."
);

$i = rand(0, count($blessings)-1);

print $blessings[$i];

?>
