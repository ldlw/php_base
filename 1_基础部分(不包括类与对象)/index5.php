<?php
// 流程控制 分支

// 单分支
$age = 18;
if ($age >= 18) {
  echo '成年'. '<br>';
}

// 双分支
// if ($age >= 18) {
//   echo '成年'. '<br>';
// } else {
//   echo '未成年'. '<br>';
// }
if ($age >= 18)
  echo '成年'. '<br>';
else
  echo '未成年'. '<br>';


// 多分支 elseif也可以
$age = 38;
if ($age >= 18 && $age < 30)
  echo '成年1'. '<br>';
else if ($age >= 30 && $age < 45)
  echo '未成年2'. '<br>';
else
  echo '未成年3'. '<br>';

// switch
switch(true) {
  case xxx:
    case yyy:
    break;
  case xxx:
  case yyy:
    break;
  default:
  // ...
}

