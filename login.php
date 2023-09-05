<?php
require('header.php');

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM `user` WHERE email=`{$email}` AND password=`{$password}` ";
    $result = mysqli_query($conn, $sql) or die('Query Failed');
}
?>
<div class="container text-center">
    <h3>Login</h3>
    <form action="">

        <input type="email" name="email" class="form-control m-3" placeholder="Enter Email">
        <input type="password" name="password" class="form-control m-3" placeholder="Enter Password">
        <button class="btn btn-danger" name="login">Login</button>
    </form>
</div>



<?php
require('footer.php');
?>