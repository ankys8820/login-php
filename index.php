<?php
require('header.php');
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    // echo ($name . $email . $password);
    $sql = " INSERT INTO `user`( `name`, `email`, `password`) VALUES ('{$name}','{$email}','$password')";
    $query = mysqli_query($conn, $sql);
    if ($query) {
        header('Location: http://localhost/login-app/login.php');
    }
}

?>


<div class="container text-center">
    <h3>Register</h3>
    <form action="" method="post">
        <input type="text" name="name" class="form-control m-3" placeholder="Enter fullname">
        <input type="email" name="email" class="form-control m-3" placeholder="Enter Email">
        <input type="password" name="password" class="form-control m-3" placeholder="Enter Password">
        <button class="btn btn-dark" name="register">Register</button>
    </form>
</div>



<?php
require('footer.php');
?>