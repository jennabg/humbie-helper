<?php require './../../config.php';
require_once CONTROLLERS.'/deadline-controller.php';
$id = $_SESSION['deadlineId'] = $_GET['id'];
require_once VIEWS.'/header.php';
?>

<main id="jg-main" class="m-4">
    <div class="text-center p-3">
        <h1>Edit Deadline</h1>
        <div class="col-md-6 mx-auto">
            <form action="" method="POST" class="m-4">
                <div>
                    <label for="deadlineName">Deadline Name:</label>
                </div>
                <div>
                    <input type="text" class="form__input-field form-control" name="deadlineName" value="<?php
                        echo $d->getDeadline($id)[0]['event_name'];
                        ?>" />
                </div>
                <div>
                    <label for="deadlineDate">Deadline Date:</label>
                </div>
                <div>
                    <input type="date" class="form-control" name="deadlineDate" value="<?php
                         echo date('Y-m-d', strtotime($d->getDeadline($id)[0]['event_date']));
                    ?>">
                </div>
                <div>
                    <label for="deadlineDesc">Deadline Description:</label>
                </div>
                <div>
                    <textarea type="text" class="form-control" name="deadlineDesc"><?php echo $d->getDeadline($id)[0]['event_description'];?></textarea>
                </div>
                <button class="jg-button-primary btn" name="editDeadline" type="submit">Submit</button>
            </form>
        </div>

    </div>
</main>

<?php include VIEWS.'/footer.php'; ?>
