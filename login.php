<?php 
session_start();
if(isset($_SESSION['unique_id'])){
    header("location: ./users.php");
}
?>

<?php include_once "header.php";?>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Orlxio-chat</header>
            <form action="#">
                <div class="error-txt"></div>
                
                <div class="field input">
                   <label>Email Adress</label>
                    <input type="text" name="email" placeholder="Enter your email">
                </div>

                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="mot_passe" placeholder="Enter your Password">
                    <i class="fas fa-eye"></i>
                </div>

                <div class="field button">
                    <input type="submit" value="continue to chat">
                </div>
            </form>
            <div class="link">Not yet signed up ?<a href="./index.php">signup now</a></div> 
        </section>
    </div>
    
</body>
<script src="./javascript/pass-show-hide.js"></script>
<script src="./javascript/login.js"></script>
</html>