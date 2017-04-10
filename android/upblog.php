<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once 'config.php';
$id=$_POST['id'];
$username=$_POST['username'];
$datetime=$_POST['datetime'];
$title=$_POST['title'];
$content=$_POST['content'];
$comment_id=$_POST['comment_id'];
$likes_count=$_POST['likes_count'];
$dislikes_count=$_POST['dislikes_count'];
$sql="UPDATE `blog` SET `username`='$username',`datetime`='$datetime',`title`='$title',`content`='$content',`comment_id`='$comment_id',`likes_count`='$likes_count',`dislikes_count`='$dislikes_count'WHERE id=$id";
if($con->query($sql))
{
    echo "Update blog successfully";
}
 else {
      echo "Update blog failure";
    
    
}