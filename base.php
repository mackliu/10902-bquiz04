<?php

date_default_timezone_set("Asia/Taipei");
session_start();

$Bottom=new DB('bottom');
$Mem=new DB('mem');
$Admin=new DB('admin');
$Type=new DB("type");
$Goods=new DB("goods");
$Ord=new DB("ord");
class DB{
    protected $dsn="mysql:host=localhost;dbname=db66;charset=utf8";
    protected $table;
    protected $pdo;

    function __construct($table){
        $this->table=$table;
        $this->pdo=new PDO($this->dsn,'root','');
    }

    
    function all(...$arg){
        $sql="select * from $this->table ";
        if(isset($arg[0])){
            if(is_array($arg[0])){
                foreach($arg[0] as $key => $value){
                    $tmp[]=sprintf("`%s`='%s'",$key,$value);
                }
                $sql .= " where " . implode(" && ",$tmp);

            }else{
                $sql .= $arg[0];
            }
        }
        if(isset($arg[1])){
            $sql .= $arg[1];
        }

        return $this->pdo->query($sql)->fetchAll();

    }
    function count(...$arg){
        $sql="select count(*) from $this->table ";
        if(isset($arg[0])){
            if(is_array($arg[0])){
                foreach($arg[0] as $key => $value){
                    $tmp[]=sprintf("`%s`='%s'",$key,$value);
                }
                $sql .= " where " . implode(" && ",$tmp);

            }else{
                $sql .= $arg[0];
            }
        }
        if(isset($arg[1])){
            $sql .= $arg[1];
        }

        return $this->pdo->query($sql)->fetchColumn();
    }
    function find($id){
        $sql="select * from $this->table where ";

            if(is_array($id)){
                foreach($id as $key => $value){
                    $tmp[]=sprintf("`%s`='%s'",$key,$value);
                }
                $sql .= implode(" && ",$tmp);

            }else{
                $sql .= " `id` ='{$id}'";
            }


        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }
    function del($id){
        $sql="delete from $this->table where ";

            if(is_array($id)){
                foreach($id as $key => $value){
                    $tmp[]=sprintf("`%s`='%s'",$key,$value);
                }
                $sql .= implode(" && ",$tmp);

            }else{
                $sql .= " `id` ='{$id}'";
            }


        return $this->pdo->exec($sql);
    }
    function save($arg){
        if(isset($arg['id'])){
            //update
            foreach($arg as $key => $value){
                $tmp[]=sprintf("`%s`='%s'",$key,$value);
            }
            $sql="update  $this->table set ".implode(",",$tmp)." where `id`='{$arg['id']}'";
        }else{
            //insert

            $sql="insert into $this->table (`".implode("`,`",array_keys($arg))."`) values('".implode("','",$arg)."')";

        }
        //echo $sql;
        return $this->pdo->exec($sql);
    }
    function q($sql){
        return $this->pdo->query($sql)->fetchALL();
    }



}


function to($url){  
    header("location:".$url);
}

?>