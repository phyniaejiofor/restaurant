
<?php

function find_all_bookedtables() {
    global $db;

    $sql = "SELECT * FROM book_a_table";
    $sql .= " ORDER BY ID ASC";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}



function find_all_contacts() {
    global $db;

    $sql = "SELECT * FROM contact";
    $sql .= " ORDER BY ID ASC";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}


?>