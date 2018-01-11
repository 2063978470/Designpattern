<?php
/**
 * Created by PhpStorm.
 * User: YM-T430
 * Date: 2018/1/11
 * Time: 10:20
 */
header("Content-Type:text/html;charset=utf-8");
//-------------------------解释器模式-------------------------------
require_once "Interpreter.php";

$play_content=new PlayContent();
$play_content->content="O 2 E 0.5 G 0.5 A 3 E 0.5 G 0.5 D 3 E 0.5 G 0.5 A 0.5 O 3 C 1 O 2 A 0.5 G 1 C 0.5 E 0.5 D 3 ";
$interpreter=null;
try
{
    while(!empty($play_content->content))
    {

        $str = mb_substr($play_content->content,0,1);
        switch($str)
        {
            case "O":
                $interpreter = new MusicScale();
                break;
            case "C":
            case "D":
            case "E":
            case "F":
            case "G":
            case "A":
            case "B":
            case "P":
                $interpreter = new MusicNote();
                break;
        }
        echo $interpreter->Translate($play_content).'::';
    }
}
catch(Exception $e)
{
    echo $e->getMessage();
}