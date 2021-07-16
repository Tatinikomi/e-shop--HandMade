<?php 
function get_post_by_id($id_mk) {
    global $connection;
    $sql = "SELECT *FROM `mk` WHERE `id_mk`= '$id_mk'";
    $result = mysqli_query($connection,$sql);
    $post = mysqli_fetch_assoc($result);
    return $post;
}
?>