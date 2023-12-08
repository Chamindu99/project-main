<?php
$connect = new PDO('mysql:host=localhost;dbname=comment', 'root', '');

// Use the function to fetch comments
echo fetch_comments($connect);

function fetch_comments($connect)
{
    $query = "SELECT * FROM tbl_comment WHERE parent_comment_id='0' ORDER BY comment_id DESC";
    $output = '';
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();

    foreach ($result as $row) {
    $output .= '
        <div class="panel panel-default" style="padding-left:44px;color:#3498db;">
            <div class="panel-heading"><b style="color:red;font-size:20px">Question</b> By <b style="color:blue;font-size :20px;">' . $row["comment_sender_name"] . '</b> on <i > ' . $row["date"] . '</i></div>
            
            <div class="panel-body"style="font-size:25px;color:black;"><br>' . $row["comment"] . '</div>
            <div class="panel-footer" align="right"><button type="button"style="color:blue;" class="btn btn-default reply" id="' . $row["comment_id"] . '">Reply</button></div>
        </div>
    ';
    $output .= get_reply_comment($connect, $row["comment_id"]);
}

return $output;
}


function get_reply_comment($connect, $parent_id = 0, $marginleft = 0)
{
    $output = '';
    $query = "SELECT * FROM tbl_comment WHERE parent_comment_id='" . $parent_id . "'";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    $count = $statement->rowCount();
    if ($parent_id == 0) {
        $marginleft = 0;
    } else {
        $marginleft = $marginleft + 48;
    }
    if ($count > 0) {
        foreach ($result as $row) {
            $output .= '<div class="panel panel-default"style="margin-left:' . $marginleft . 'px;color:#85c1e9;">
                <div class="panel-heading"><b  style="color:red;font-size:20px">Replied</b> By <b style="color:blue;font-size :20px;">' . $row["comment_sender_name"] . '</b> on <i>' . $row["date"] . '</i></div>
                <div class="panel-body" style="font-size:25px;color:black;padding-left:20px;">' . $row["comment"] . '</div>
                <div class="panel-footer" align="right"><button type="button"style="color:blue;" class="btn btn-default reply" id="' . $row["comment_id"] . '">Reply</button></div>
                </div>';
            $output .= get_reply_comment($connect, $row["comment_id"], $marginleft);
        }
    }
    return $output;
}
?>
