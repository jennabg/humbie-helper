<?php
require_once '../../header.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<main class="container filler">
    <h1 class="my-4">Are you sure you want to delete this quote?</h1>
    <form action="#" method="POST">
        <div class="form-group">
            <ul>
                <li name="print-quote"></li>
                <li name="print-quote-author"></li>
            </ul>
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" name="delete-quote" value="Delete Quote">
        </div>
  </form>
</main>
<?php require_once '../../footer.php'; ?>