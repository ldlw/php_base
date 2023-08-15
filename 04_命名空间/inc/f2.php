<?php
namespace ns1;

// 没有写命名空间在全局
function hello($name) {
  return 'Hello '. $name;
}