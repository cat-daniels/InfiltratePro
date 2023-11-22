<html lang="en">
<?php
include_once("../public/header.php");
include_once("../Utils/database.php");
include_once("../Utils/sessionconfig.php");
//functions
include_once("../Functions/authfunctions.php");

displayNavbar();

include_once("../Functions/accountfunctions.php");
?>
<body>

<?php
if (isset($_GET['uid'])) {
    $user = $_GET['uid'];
    editUser($user);
    echo '<div class = "gap"></div>';
} else {
    echo "User ID not found in the URL or handle the error here.";
   
    exit();
}
?>

</body>

<?php include_once("../Components/footer.php"); ?>
</html>
