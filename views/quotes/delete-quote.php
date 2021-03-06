<?php
require_once '../../config.php';
require_once CONTROLLERS . '/quote-controller.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once VIEWS . '/header.php';
?>

<main id="jg-main" class="m-4">
    <h1 class="my-4">Are you sure you want to delete this quote?</h1>
    <ul>
        <li>Quote: <?php echo $quotebyid->quote ?></li>
        <li>Author: <?php echo $quotebyid->quote_author ?></li>
    </ul>
    <form action="" method="POST">
        <div class="form-group">
            <input type="submit" class="btn btn-primary" name="deletequote" value="Delete Quote">
        </div>
        <div class="form-group">
            <a href="list-quotes.php" class="btn btn-primary">Cancel</a>
        </div>
  </form>
</main>
<?php include VIEWS.'/footer.php'; ?>
