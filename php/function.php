<?php 
function get_post_by_id($id) {
    global $connection;
    $sql = "SELECT *FROM `tblproduct` WHERE `id`= '$id'";
    $result = mysqli_query($connection,$sql);
    $post = mysqli_fetch_assoc($result);
    return $post;
}
?>


