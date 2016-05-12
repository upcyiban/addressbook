
<?php
/**
 * Created by PhpStorm.
 * User: yyljj
 * Date: 2016/4/14
 * Time: 22:53
 */
//处理字符问题
function mb_str_split($str){
    return preg_split('/(?<!^)(?!$)/u', $str );
}