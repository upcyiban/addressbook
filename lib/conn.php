<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <title>通讯录</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<div id="container" class="container">
    <h1><strong>中国石油大学(华东)通讯录</strong></h1><br>
    <div class="panel panel-default">
        <div class="panel-body">
            <br>
            <div class="form-horizontal" id="record">
                <div class="form-group">
                    <?php
                    require_once 'lib/my_spli.php';
                    require_once 'lib/connect.php';
                    require_once 'lib/show.php';
//                    header("Content-type: text/html; charset=utf-8");
                    $con="";
                    $con=connect($con);
                    $spr=spr($_REQUEST['department']);
                    $query = "SELECT * FROM tongxunlu WHERE department LIKE ".$spr."OR sition LIKE".$spr;
                    $result = $con->query($query);
//                   var_dump($result);
                    $request = '以下是关于<font color="red"> "';
                    $request .=$_REQUEST['department'];
                    $request .='" </font> 的查询';
                    echo $request;
//                    echo '以下是关于 "'.$_REQUEST['department'].' "的查询</br>';
//                    echo '<p class="navbar-text"><font color="red">213</font></p>';
                    echo '<br>';
                    while($row  = $result->fetch_assoc()){
                        echo "部门：".$row['department']."  姓名或职位：".$row['sition']."  电话：".$row['telephone'].'<br>';
                    }
                    ?>
                </div>
            </div>
        </div>
        <footer class="text-center">
            <p>Powered by upcyiban</p>
        </footer>
    </div>
</div>

</body>
</html>
