<?php
/**
 * Created by PhpStorm.
 * User: YM-T430
 * Date: 2018/1/11
 * Time: 10:31
 */

header("Content-Type:text/html;charset=utf-8");
//-------------------------备忘录模式------------------------
require_once "Memento.php";

//开战前
$ufo = new GameRole();
$ufo->GetInitState();
echo "<span style='color:#ff0000'>----------------开战前-----------------</span><br/>";
$ufo->StateDisplay();

//保存进度
$roleMan = new RoleStateManager();
$roleMan->memento = $ufo->SaveState();

echo "<span style='color:#ff0000'>----------------战斗中-----------------</span><br/>";
$num=1;
//大战Boss5个回合
for ($i = 0; $i <13;$i++ )
{
    echo "-------------第{$num}回合-------------<br/>";
    $ufo->BeenAttack();
    $ufo->StateDisplay();
    $num++;
    //角色阵亡
    if($ufo->liveLevel<=0)
    {
        break;
    }
}

echo "<span style='color:#ff0000'>----------------恢复状态-----------------</span><br/>";
//恢复之前状态
$ufo->RecoveryState($roleMan->memento);
$ufo->StateDisplay();
