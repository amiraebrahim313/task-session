<?php
require 'function.php';
require 'session.php';
clear();
//this page for checking if the data is enterd correctly or not 
$username=post('name');//call the name and password and... and store it in the varaible to use it easly
$email=post('email');
$password=post('password');
$confirm_password=post('confirm_password');
$checkbox=post('checkbox');
if(!$username){
    //if not user name or .... then  there is error then call function store error()to store the error
    // in the array
    store_error('name','name is required');
    
}
if (!$email){
    store_error('email','email is required');
}
if (!$password){
    store_error('password','password is required');
} 
$length=strlen($password);
if($length<8){
    store_error('password','minimum password is 8 char');
}
if ($confirm_password!= $password){
    store_error('confirm_password','confirm_password didnt match password');

}
if(!$confirm_password){
    store_error('confirm_password','confirm_password is required');
}
//if there is error the function check error return true if there is error 
//and if there is error  we go to the page of register to enter the data again
if(check_error()){
    redirect_to('register.php');
}elseif($checkbox){
        require 'cookie.php';
    
}else {
    // if not any error ---> go to session to store the data of user 
    add('user',[
        'name'=>$username,
        'email'=>$email,
        'password'=>$password,

    ]);
    //after we store in session we go to the page of index
    redirect_to('index.php');
}


