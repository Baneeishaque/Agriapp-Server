<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once 'config.php';
$id=$_POST['id'];
$username=$_POST['name'];
$datetime=$_POST['datetime'];
$title=$_POST['title'];
$content=$_POST['content'];
$comment_id=$_POST['comment'];
$likes_count=$_POST['likes_count'];
$dislike_count=$_POST['dislike_count'];
$sql="DELETE FROM `blog` WHERE id=$id";
if($con->query($sql))
{
    echo "Delete blog successfully";
}
 else {
      echo "Delete blog faiure";
    
    
}