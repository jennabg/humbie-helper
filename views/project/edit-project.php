<?php
require './../../config.php';
include VIEWS.'/header.php';
//require_once CONTROLLERS.'/student-controller.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once LIB . '/functions.php';
require_once MODELS . '/Database.php';
require_once  MODELS .'/Project.php';

$project_id = $_SESSION['project_id'];
$db = Database::getDatabase();
$p = new Project();

$project= $p->singleProject($project_id, $db);


$description = $project->project_description;
$name = $project->project_name;


if(isset($_POST['updateProj'])){
  $project_name = $_POST['project-name'];
  $project_description = $_POST['project-description'];
  $c = $p->editProject($project_id, $project_name, $project_description, $db);
  header('Location:project-details.php');
}


?>

<main id="jg-main" class="m-4">
    <div class="text-center p-3">
        <h1>Edit Project</h1>
        <div class="p-4">
            <form action="" method="POST" class="m-4">
                <div>
                    <label for="project-name">Project Name:</label>
                </div>
                <div>
                    <input type="text" class="form__input-field" name="project-name" value="<?=$name?>">
                </div>
                <div>
                    <label for="project-description">Project Description:</label>
                </div>
                <div>
                    <textarea class="form__textarea" name="project-description"> <?=$description?> </textarea>
                </div>
                <button class="jg-form__submit" name="updateProj" type="submit">Submit</button>
            </form>
        </div>

    </div>
</main>

<?php include VIEWS.'/footer.php'; ?>