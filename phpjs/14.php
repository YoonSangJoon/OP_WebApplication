<?php
$conn = mysqli_connect('localhost:3307','root','asb12865');
mysqli_select_db($conn, "opentutorials");
$name = mysqli_real_escape_string($conn, $_GET['name']);
$password =mysqli_real_escape_string($conn, $_GET['password']);
// mysqli_real_escape_string : 첫번째 인자로 DB에 Connect. 두번째 인자 작은 따옴표 앞에 \ 붙여 문자화.
$sql = "SELECT * FROM user WHERE name = '".$name."'AND password = '".$password."'";
echo $sql;
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
</head>
<body>
    <?php 
        $password=$_GET['password'];
        if($result -> num_rows == 0) {
          // $result 즉 주소창에 입력한 이름과 비밀번호가 DB에서의 내용과 같을 경우 '안녕하세요!' 출력.
            echo '뉘신지?';
        } else {
            echo '안녕하세요!';
        }

    ?>
    </body>
    </html>