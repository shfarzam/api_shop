<?php
if(isset($_GET['name'])) {
    print_r(json_encode([ "GET parameter" => $_GET['name']]));
}
if(isset($_POST['name'])) {
    print_r(json_encode([ "POST parameter" => $_POST['name']]));
}
?>