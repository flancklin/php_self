<?php
namespace Common\Model\Pro;

use Think\Model;

class ProModel extends Model{
    protected $tablePrefix = "tp_";
    protected $connection  = array(
        'DB_TYPE' => 'mysql',
        'DB_DSN'=> 'mysql:host=localhost;dbname=test',
        'DB_USER'=>'root',
        'DB_PWD'=>'',
        'DB_PREFIX'=>'',
        'DB_PARAMS'=>array("PDO::ATTR_CASE" => \PDO::CASE_NATURAL)
    );

    public function li(){
        var_dump("Common\Model\Pro::ProModel_li()");
    }
    public function get(){
        var_dump("Common\Model\Pro::ProModel_get()");
    }
}