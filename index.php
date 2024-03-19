<?php 
session_start();
if(isset($_SESSION['unique_id'])){
    header("location: ./users.php");
}
?>

<?php include_once "header.php";?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Orlxio-chat</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                     <label>First name</label>
                     <input type="text" name="fname" placeholder="First name" required>
                    </div>

                    <div class="field input">
                        <label>Last name</label>
                        <input type="text" name="lname" placeholder="Last name" required>
                    </div>
                </div>
                <div class="field input">
                   <label>Email Adress</label>
                    <input type="text" name="email" placeholder="Enter your email" required>
                </div>

                <div class="field input">
                    <label>Password</label>
                    <input type="password" name="mot_passe" placeholder="Enter new Password" required>
                    <i class="fas fa-eye"></i>
                </div>

                <div class="field image">
                    <label>Select Image</label>
                    <input type="file" name="image">
                </div>

                <div class="field button">
                    <input type="submit" value="continue to chat">
                </div>
            </form>
            <div class="link">Already signed up ?<a href="./login.php">Login now</a></div> 
        </section>
    </div>
    
</body>
<script src="./javascript/pass-show-hide.js"></script>
<script src="./javascript/signup.js"></script>
</html>