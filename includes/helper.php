<?php 
$db = db_helper($db_conf);

// select * from tbl_list
$results = $db->table("list")->select()->exec();

// select id, name from tbl_list
$results = $db->table("list")->select("id, name")->exec();

// select id, name from tbl_list limit 10
$results = $db->table("list")->select("id, name")->limit(10)->exec();

// select name from tbl_list where id = 1
$id = 1;
$results = $db->table("list")->select("name")
    ->where("id = :id")->bind(array("id" => $id))->exec();

// insert into tbl_list (id auto increment)
$name = "Clam";
$db->table("list")->insert("(`id`, `name`)")
    ->values("(NULL, :name)")
    ->bind(array("name" => $name))->exec();

// start transaction mode
$db->tx_on();

// update tbl_list where id = $id
$db->table("list")->update("name = :name")->where("id = :id")
    ->bind(array(
        "name" => $name,
        "id" => $id
    ))->exec();

// delete from tbl_list where id = $id
$db->table("list")->delete()->where("id = :id")->bind(array("id" => $id))->exec();

// transaction commit
$db->tx_commit();




 ?>