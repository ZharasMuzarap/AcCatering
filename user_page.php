<?php
session_start();
include 'connection.php';

if (isset($_SESSION['id'])){
    $id = $_SESSION['id'];
    $res = mysql_query("SELECT `name` FROM `users` WHERE id='$id'");
    $arr = mysql_fetch_array($res);
    $name = $arr['name'];
}else{
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>AC Catering | Sign in</title>
    <script src="js/jquery-1.9.1.js"></script>
    <script src="js/jquery-migrate-1.1.0.js"></script>
    <script src="js/MyJavaScript.js"></script>
    <link rel="stylesheet" href="css/user_page.css" media="screen" type="text/css" />
</head>
<body>
    <div class="menu">
        <ul id = "left">
            <li><a class="ancLinks" href="index.php">Home</a></li>
            <li><a class="ancLinks" href="index.php#Second">About us</a></li>
            <li><a class="ancLinks" href="index.php#Third">Menu</a></li>
            <li><a class="ancLinks" href="index.php#Fourth">Our Team</a></li>
            <li><a class="ancLinks" href="index.php#Fifth">Contact us</a></li>
        </ul>
        <?php
            if(isset($_SESSION['id'])){
            ?>
            <div class = "login">
                <ul id= "right">
                    <li><a href=""><?=$name?></a></li>
                    <li><a href="log_out.php">Log out</a></li>
                </ul>
            </div>
            <?php
            }
            ?>
    </div>
    <div class="content">
        <?php
            if($id == 1){
            ?>
        <a id="info" href="user_page.php?page=info">Information</a> 
        <a id="add_std" href="user_page.php?page=std">Add students</a>
        <a id="message" href="user_page.php?page=msg">Messages</a>
        <?php
            }else{
            ?>
        <p style="color:black; margin-left: 50px; border-bottom: 2px solid black; width: 850px;">Information</p>
        <?php
    }
    $page='info';
    if (isset($_GET['page'])) {
        $page=$_GET['page'];
    }
    
    switch ($page) {
        case 'std':
            std();
            break;
        case 'msg':
            msg();
            break;
        
        default:
            info();
            break;
    }
    function msg(){
    $res=mysql_query("SELECT * FROM `message` WHERE 1");
    $arr=array();
    while ($row=mysql_fetch_array($res)){
        $arr[]=$row;
    }
    foreach ($arr as $mes) {
        ?>
        <div class="message">
            <a id="delete" href="delete.php?id=<?=$mes['id']?>">delete</a>
            <strong>Name & Surname:</strong> <?=$mes['name'],' ',$mes['surname']?> <br>
            <strong>Phone: </strong><?=$mes['phone']?><br>
            <strong>Time: </strong><?=$mes['time'],' / ',$mes['date']?><br>
            <strong>Information: </strong><?=$mes['plan']?><br>
            <strong>More Information: </strong><?=$mes['plan1']?><br>
        </div>
    <?php 
        }
    }
    function info(){
        $id = $_SESSION['id'];
        $res = mysql_query("SELECT `card`, `name`, `surname`  FROM `users` WHERE id='$id'");
        $arr = mysql_fetch_array($res);
        $name = $arr['name'];
        $surname = $arr['surname'];
        $card = $arr['card'];
        ?>
        <div class="info">
                <img src="img/stud_photo.jpg" style="width: 150px; border-radius: 15px; float: left;">
                <p><strong>Name: </strong><?=$name?></p><br>
                <p><strong>Surname: </strong><?=$surname?></p><br>
                <p><strong>Card №: </strong><?=$card?></p><br>
        </div>
        <?php
    }
    function std(){
    ?>
    <div class="add">
        <form method = "get" action="add_student.php">
            <input type = "text" name = "name">
            <label ><strong>First Name</strong></label><br>
            <input type = "text" name = "surname">
            <label ><strong>Last Name</strong></label><br>
            <input type = "tel" name = "card">
            <label ><strong>Card №</strong></label><br>
            <input type = "text" name = "password">
            <label ><strong>Password</strong></label><br>
            <input type = "submit" name="submit" value="Add student"></input>
            <br><br>
        </form>
    </div>
    <div class="student">
      <p>
        Search:
        <input type="text" name="search_text" id="search_text" placeholder="Search by Name or Surname" class="form-control">
      </p>
    <div id="result"></div>
    <br>

        <strong style="margin-left: 19%; font-size: 25px;">Name /
            Surname /
            Card № /
        Password</strong><br>
        <?php
            $query = "SELECT * FROM `users` ORDER BY name";
            $result = mysql_query($query);
            $num = mysql_num_rows($result);
            for ($i=0;$i<$num;$i++){
                $row = mysql_fetch_array($result);
                if($row["id"]!=1){
                    ?>
                <a href="delete_user.php?id=<?= $row['id'] ?>">Delete</a>
                <a href="edit.php?id=<?= $row['id']?>">Edit</a>
                <?= $row["name"]?>
                <?= $row["surname"]?>
                <?= $row["card"]?>
                <?= $row["password"]?><br>
            <?php
                }
            }
            ?>
    </div>
    <?php
    }
    ?>
</body>
</html>