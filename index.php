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
                <div class="form-horizontal">
                    <div class="form-group">
                            <form action="lib/conn.php" method="post">
                                <label for="inputEmail3" class="col-sm-2 control-label">姓名或部门职位</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control"  placeholder="请输入姓名或部门职位" name="department"><br>
                                    （什么也不输入直接点击查询可查询所有录入的电话）<br>
                                </div>
                                <br><br>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <button  class="btn btn-default">查询</button>
                                    </div>
                                </div>
                            </form>
                        <div align="left">
                                <?php
                                    require_once "lib/show.php";
                                    de();
                                ?>
                        </div>
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