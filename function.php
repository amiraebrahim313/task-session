
<?php
//this page contain all function that we use it in the other page 





function post($key){
    //this function get the value that we enter it in the form and stored in array in the session   
if(isset($_POST[$key])){
    //check first if the name or email or... there or not if it is found return it
    return$_POST[$key];
}
return null;
}
//function store the error in array and show the message
function store_error($name,$message){
    $formErrorsKey = 'form_errors';// key the error in the array
    $errors = get($formErrorsKey); 

    if (!$errors) {
        $errors = [];
    }

    $errors[$name] = $message;

    add($formErrorsKey, $errors);
}
// if error return true
function check_error(){
    return check('form_errors')===true;
}

function form_error($name){
    $errors = get('form_errors');
    if (! $errors) return '';

    if (! isset($errors[$name])) {
        return '';
    } else {
        return $errors[$name];
    }
}

//function clear the error from session
function clear(){
    delete('form_errors');
}

function user($key)
{
    $user = get('user');

    if (! $user) return '';

    if (! isset($user[$key])) return '';

    return $user[$key];
}


// function redirect
function redirect_to( $path)
{ 
    header("location: $path"); 
}