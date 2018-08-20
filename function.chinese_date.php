<?php
// 國字的日期，包含月日及星期

function chinese_date($time_stamp)
{
   $a_num= array(
      "無用","一","二","三","四","五","六","七","八","九","十",
      "十一","十二","十三","十四","十五","十六","十七","十八","十九","二十",
      "廿一","廿二","廿三","廿四","廿五","廿六","廿七","廿八","廿九","卅","卅一" );
                 
   $a_week = array("日","一","二","三","四","五","六");
   
   $yy = date("Y", $time_stamp);  // 年的數字，四位數
   $mm = date("n", $time_stamp);  // 月的數字，從1到12
   $dd = date("j", $time_stamp);  // 日的數字，從1到31
   $ww = date("w", $time_stamp);  // 星期的數字，從0到6 (0為星期日)

   if(!checkdate($mm, $dd, $yy))
   {
      $ret_str = "查無此日";
   }
   else
   {
      $ret_str = $a_num[$mm] . "月" . $a_num[$dd] . "日　星期" . $a_week[$ww];
   }

   return $ret_str;
}

?>