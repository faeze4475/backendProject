<?php
function qery1($dml,$tablename ,$con){
    return ("{'$dml'} from '{'$tablename'} where {'$con'}");
}
function get_user_data($user_id){
    global $mysqli; // $mysqli = $GLOBALS['mysqli'];

    $user_data = "SELECT * FROM Users WHERE `Uid` = {$user_id}";
    $user_data = $mysqli->query($user_data);
    if ($user_data->num_rows > 0) {

        return $user_data->fetch_assoc();
    }
}