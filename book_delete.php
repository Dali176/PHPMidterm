<?php
include_once('database.php');

/*//////////////////////*/
/* YOUR CODE GOES HERE */
/*/////////////////////*/
$bookID = $_GET["bookID"];

if($bookID != false) {
    $query = "DELETE FROM books WHERE Id = :book_id";
    $statement = $db->prepare($query);
    $statement->bindValue("book_id", $bookID);
    $success = $statement->execute();
    $statement->closeCursor();
}
// redirect to index page
header('Location: index.php');

?>
