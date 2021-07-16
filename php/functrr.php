<?php 
function get_post_by_id($id_rabot) {
    global $connection;
    $sql = "SELECT *FROM `rabota` WHERE `id_rabot`= '$id_rabot'";
    $result = mysqli_query($connection,$sql);
    $rabota = mysqli_fetch_assoc($result);
    return $rabota;
}
?>

