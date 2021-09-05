<?php
$Aquestion=array(1=>'Вопрос 1',2=>'Вопрос 2',3=>'Вопрос 3',4=>'Вопрос 4');

$Aanswer[1]=array(1=>'Вариант 1',2=>'Вариант 2',3=>'Вариант 3',4=>'Вариант 4');
$Aanswer[2]=array(1=>'Вариант 1',2=>'Вариант 2',3=>'Вариант 3',4=>'Вариант 4');
$Aanswer[3]=array(1=>'Вариант 1',2=>'Вариант 2',3=>'Вариант 3',4=>'Вариант 4');
$Aanswer[4]=array(1=>'Вариант 1',2=>'Вариант 2',3=>'Вариант 3',4=>'Вариант 4');

$qcount=0;
foreach ($Aquestion as $k=>$v) {
 $qcount=$qcount+1;
 echo "<div>";
 echo "<div>".$qcount.". ".$v."</div>";
 foreach ($Aanswer[$k] as $kk=>$vv) {
  echo "<div class='question-list-item'><a href='javascript:void(0);' class='ref".$k."' id='ref_".$k."_".$kk."' onClick='set_result(".$k.",".$kk.");'>".$vv."</a><a href='javascript:void(0);' onClick='set_result(".$k.",".$kk.");'><img src='images/test_selector_0.png' class='img".$k."' id='img_".$k."_".$kk."'/></a></div>";
 } 
 echo "<input type='number' id='q".$k."' value='0'/>";
 echo "</div>";
}

?>