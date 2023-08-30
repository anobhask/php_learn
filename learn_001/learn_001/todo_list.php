#! /usr/bin/php
<?php
$db_user = 'learn_php';
$db_name = 'learn_00';
$db_pass = 'learn_php@123';
$db_table = 'todo_list';

try {
    $db = new PDO("mysql:host=localhost;dbname=$db_name", $db_user, $db_pass);
    echo "<h2>ToDo</h2><col>";
    foreach($db->query("SELECT item_desc FROM $db_table") as $row) {
        echo "<li>" . $row['item_desc'] . "</li>";
    }
    echo "</ol>";
} catch (PDOException $error) {
    print "Error!: " . $error->getMessage() . "<br/>";
    die();
}

?>
