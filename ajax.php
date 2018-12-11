<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 11/12/2018
 * Time: 09:49
 */
require_once 'database.php';
$db = new Database();
$offset = isset($_POST['offset']) ? $_POST['offset'] : 0; /*cú phấp viết tắt của lệnh if*/
$limit = isset($_POST['limit']) ? $_POST['limit'] : 0;

$conn = Database::$connection;
$sql = "SELECT * FROM posts LIMIT $offset,$limit";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}
$html = '';
if (!empty($data)) {
    foreach($data as $post) {
        $html .= '<div class="col-lg-4 fm1">
                <img class="rounded-circle" src="'.$post['post_image'].'" alt="Generic placeholder image">
                <h2>'.$post['post_name'].'</h2>
               <p>'.$post['post_content'].'</p>
                <p><a class="btn btn-secondary" href="#" role="button">View details »</a></p>
            </div>';
    }
}


$respond = array();
$respond['success'] = 1;
$respond['html'] = $html;
echo json_encode($respond);
exit();