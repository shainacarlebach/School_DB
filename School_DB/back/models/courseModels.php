<?php

require_once'models.php';
require_once "C:/xampp/htdocs/School_DB/back/common/dal.php";

Class courseModels extends Model implements JsonSerializable{
 
 private $course_id;
 private $course_name;
 private $course_description;
 private $course_image;

 function __construct($course_id, $course_name,$course_description, $course_image){
  
     $this->tableName ='school_db_course';
     $this->course_id = $course_id;
     $this->model_phones=$model_phones;
      $this->manu_code=$manu_code; 
      $this->image=$image;
 }
 
public function getID(){
//if(filter_validate_int){
    return $this->id_phones;
//}
}
function getModel(){
    return $this->model_phones;
}
function getCode(){
    return $this->manu_code;
}
 public function getImage(){
        return $this->image;
            }
function jsonSerialize(){
    return[
       "$id_phones"=>$this->getID(),
       "$model_phones"=>$this->getModel(),
       "$manu_code"=>$this->getCode(),
       "image_name"=>$this->getImage()
           ];
}
}
?>