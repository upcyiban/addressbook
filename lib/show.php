<?php
require_once "my_spli.php";
require_once "connect.php";
//从数据库中获取数据并输出dd
function dd($de){
    $query = "SELECT * FROM tongxunlu WHERE department LIKE '".$de."'";
    $con = '';
    //echo $query;
    $con = connect($con);
//    var_dump($con);
    $result = $con->query($query);
   //var_dump($result);
    echo "<table>";
    while($row = $result->fetch_assoc()){
        echo "<tr><td>".$row['sition']."</td><td>&nbsp&nbsp&nbsp&nbsp</td><td>".$row['telephone']."</td></tr>";
    }
    echo "</table>";
}
function de(){
    $query = "SELECT * FROM tongxunlu ORDER BY val";
    $con = '';
    $con = connect($con);
      // var_dump($con);
    $result = $con->query($query);
//   var_dump($result);
    $temp = "";
    echo "<div align='center'>";
    while($row = $result->fetch_assoc()){
        if($row['department']!=$temp){
            $temp = $row['department'];
            $details = "<table><tr><td><details><summary>".$row['department']."</summary>";
            echo $details;
//        dd(spr($row['department']));
            dd($row['department']);
            echo "</details></td></tr></table>";
        }
    }
    echo "</div>";

}
function spr($var){
    //处理模糊搜索
    $var = mb_str_split($var);
    $spr = join("%",$var);
    $spr = "'%".$spr."%'";
    return $spr;
}
//function print_table(){
//        require_once 'my_spli.php';
//        require_once 'connect.php';
//        $query = "SELECT * FROM adressbooks ";
//        $result = $con->query($query);
//        //打印所有数据表格
//        echo "<table border='1' align='center'><tr><td><b>部门</b></td><td><b>姓名或职位</b></td><td><b>电话</b></td></tr>";
//        while($row  = $result->fetch_assoc()){
//    //                                    echo "部门：".$row['department']."  姓名或职位：".$row['sition']."  电话：".$row['telephone'].'<br>';
//            echo "<tr><td>".$row['department']."</td><td>".$row['sition']."</td><td>".$row['telephone']."</td>";
//        }
//        echo "</table>";
//}
