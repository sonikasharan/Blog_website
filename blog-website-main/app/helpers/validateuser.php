<?php
function validateuser($user){
    $errors = array();
    if (empty($user['username'])){
        array_push($errors, 'Username is required');
    }
    if (empty($user['email'])){
        array_push($errors, 'Email is required');
    } 
    if (empty($user['password'])){
        array_push($errors, 'Password is required');
    }
  
    if ($user['passwordconf'] !==$user['password']){
        array_push($errors, 'Password do not Match');
    } 
   // $existinguser = selectOne('users',['email'=>$user['email']]);
   //  if($existinguser){
      //  array_push($errors,'Email already exist');
  //  }
  $existinguser = selectOne('users',['email'=>$user['name']]);
  if($existinguser){
    if (isset($user['update-user']) && $existinguser['id']!=$user['id']) {
       array_push($errors,'Email already exist');
    }
    if (isset($user['create-admin'])) {
       array_push($errors,'Email already exist');
    }
   }

    return $errors;
}
function validatelogin($user){
    $errors = array();
    if (empty($user['username'])){
        array_push($errors, 'Username is required');
    }
 
    if (empty($user['password'])){
        array_push($errors, 'Password is required');
    }
    return $errors;
}