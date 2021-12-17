<?php
include('../FUNCTIONS/function_package-customers.php');
$id = $_GET['id'];

if (deleteOrder($id) > 0) {
    echo "
    <script>
        alert ('Successfully');
        document.location.href = 'main.php?page=Home';  
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