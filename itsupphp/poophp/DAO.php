<?php
include ("database.php");
class DAO{
    public $table;
    public $db ;
   public function __construct($table){
       $this->table=$table;
    //    $this->db=Databases::get_db();
   }
   public function all(){
   return $this->db->query("SELECT * FROM $this->table")->fetchAll();

   }
   public function delete($id){
    $this->db->exec("DELETE FROM $this->table WHERE id=".(int)$id);

   }
}