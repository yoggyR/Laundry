<?php
include('../CONFIG/connect_database.php');
include('../FUNCTIONS/function_package-setting.php');
$id = $_GET['id'];

if (delete($id) > 0) {
    echo "
    <script>
        alert ('Successfully');
        document.location.href = 'main.php?page=Package setting';  
    </script>
    ";
} else {
    echo "
    <script>
        alert ('Failed');
    </script>
    ";
}
?>