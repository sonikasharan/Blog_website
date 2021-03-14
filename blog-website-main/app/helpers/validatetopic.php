<?php
function validatetopic($topic){
    $errors = array();
    if (empty($topic['name'])){
        array_push($errors, 'name is required');
    }
   
   // $existingtopic = selectOne('topics',['name'=>$topic['name']]);
   // if($existingtopic){
   //     array_push($errors,'Topic already exist');
  //  }
  $existingtopic = selectOne('topics',['name'=>$topic['name']]);
  if($existingtopic){
    if (isset($topic['update-topic']) && $existingtopic['id']!=$topic['id']) {
       array_push($errors,'Topic already exist');
    }
    if (isset($topic['add-topic'])) {
       array_push($errors,'Topic already exist');
    }
   }

    return $errors;
}

