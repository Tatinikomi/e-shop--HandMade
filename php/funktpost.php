<?php 
function get_post_by_id($id_post) {
    global $connection;
    $sql = "SELECT *FROM `posts` WHERE `id_post`= '$id_post'";
    $result = mysqli_query($connection,$sql);
    $post = mysqli_fetch_assoc($result);
    return $post;
}
?>