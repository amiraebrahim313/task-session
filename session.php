<?php
 session_start();
 //add in the session 
 function add($key,$value){
$_SESSION[$key]=$value;
 }
 //check if the key there is in the  or not
 function check( $key){
     return isset($_SESSION[$key]);
 }
 // get the value that is stored in session
 function get($key){
     if(check($key)){
         return $_SESSION[$key];
     }
     return null;
 }
 //delete the key from the session(delete the data that we  enterd it in session  )
 function delete($key){
     unset($_SESSION[$key]);
 }
 //destroy the session 
 function destroy(){
     unset($_SESSION);
     session_unset();
     session_destroy();
 }
