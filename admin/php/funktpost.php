<?php 
function get_post_by_id($id_post) {
    global $con;
    $sql = "SELECT *FROM `posts` WHERE `id_post`= '$id_post'";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}
?>