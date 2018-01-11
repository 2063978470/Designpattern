<?php
header("Content-Type:text/html;charset=utf-8");
//------------------------组合器模式测试代码------------------
require_once "Combinatorial.php";

$root=new SubCompany("北京总公司");
$root->Add(new MoneyDept("总公司财务部"));
$root->Add(new TechnologyDept("总公司技术部"));

$shanghai=new SubCompany("上海分公司");
$shanghai->Add(new TechnologyDept("上海分公司技术部"));
$shanghai->Add(new MoneyDept("上海分公司财务部"));

$root->Add($shanghai);

$root->Display(1);

echo "<hr/>";

$root->Remove($shanghai);
$root->Display(3);