<?php
require './../../config.php';
include VIEWS.'/header.php';
//require_once CONTROLLERS.'/student-controller.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once LIB . '/functions.php';
require_once MODELS . '/Database.php';
require_once  MODELS .'/Project.php';

// to do add a isdeleted column in the database and pull only items where status is false


if(isset($_SESSION['project_id'])){
  $project_id = $_SESSION['project_id'];
  $db = Database::getDatabase();
  $p = new Project();
  $count = $p->deleteProject($project_id, $db);

  if($count){
    header("Location: liststudents.php");
  }else {
    "Problem deleting project";
  }

}