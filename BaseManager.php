<?php
function getCn(){
    static $cn;
    if(!$cn){
        $cn=new PDO('mysql:host=localhost;dbname=collemvc2024','root','');
    }
    return $cn;
}

function findAll($table){
    return getCn()->query("select * from $table")->fetchAll(PDO::FETCH_ASSOC);
}

function findOne($table, $id){
    return getCn()->query("select * from $table where id= $id")-> fetch(PDO::FETCH_ASSOC);
}

function del($table,$id){
    return getCn()->prepare("delete from $table where id=?")->execute([$id]);

}
function describe($table){
    return getCn()->query("describe $table")->fetchAll(PDO::FETCH_COLUMN);
}

function save($table, $element){
	
    $id=$element["id"]?? NULL;
    unset($element["id"]);
	
	$champs = array_keys($element);
	$values = array_values($element);
	
	if (empty($id)) {
		$champsInsert = join(", ",$champs);			
		$valuesInsert = join(", ",array_fill_keys($champs,'?'));
		$rq = "insert into $table ($champsInsert) values ($valuesInsert)";

		
	} else {	
		$champsUpdate = join(" = ?, ", $champs) . " = ? ";
		$values[] = $id ;
		$rq = "update $table set $champsUpdate where id = ?" ;

	}try{
		$result= getCn()->prepare($rq)->execute($values);
		
	}catch(Exception $e){
		$result=false;
	}
		return $result;
}