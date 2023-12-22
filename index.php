
<?php include("header.php")?>

<?php 
if(isset($_POST['submit'])){
  $fullname = sanstring($_POST['fullname']) ;
  $name = sanstring($_POST['username']) ;
  $email = sanemail($_POST['email']) ;
  $password = $_POST['password'];
  $confirm = $_POST['confirm'];
  $phone = $_POST['phone'];
  $radio = $_POST['radio'];
  
//   validation
  if(req($fullname)&& req($name) && req($email) && req($password) && req($confirm) && req($phone) &&req($radio)) {
    if(valid($email)){
        if(minimam($fullname,4) && minimam($name,4) && minimam($password,4) ){

            if(confirm($password,$confirm)){
                $hash =password_hash($password,PASSWORD_DEFAULT);
                if(phone($phone)){
                   
                 $sql ="INSERT INTO `users`(`fullname`, `username`, `email`, `password`, `phone`, `gender`)
                 
                  VALUES ('$fullname','$name','$email',' $hash','$phone',' $radio')";   
                    $result = mysqli_query($conn,$sql);

                    if($result){$succses ="added succsefully";}
                }
                else{$error = "phone must be more than 8 numbers";}
            }
            else{$error = "please confirm your password";}
        }
        else{ $error = "all filed must be more than 4 char";
        }
    }
    else{$error = "please insert valid email"; }
  }else {$error ="please fill all feildes";}

}

?>

<?php if($succses): ?>


<div class="alert alert-success" role="alert">
 <?php echo $succses; ?>
</div>

<?php endif ?>


<?php if($error): ?>


    <div class="alert alert-danger" role="alert">
    <?php echo $error; ?>
</div>

<?php endif ?>




    <form method="post">
    <h1>Registration</h1>

    <div class="flex">
        <label for="">Full Name</label>
        <label for="">Email</label>


        <input class="inputs" name="fullname" placeholder="Enter your name" type="text">
    
        <input class="inputs" name="email" placeholder="Enter your email" type="email">
    

    
        <label for="">password</label>
        <label for="">user name</label>

        <input class="inputs" name="password" placeholder="enter your password" type="password">
  
        <input class="inputs" name="username" placeholder="enter your user name" type="text">
   


  
        <label for="">phone number</label>
        <label for="">confirm password</label>

        <input class="inputs" name="phone" placeholder="enter your phone number" type="text">
        
        <input class="inputs" name="confirm" placeholder="confirm your password" type="password">
</div>
 
   <h1 class="gender">gender</h1>
 
   <div class="radio">
    
    <div >
        <input value="male" name="radio" type="radio">
        <label for="">male</label>
    </div>

    <div>
        <input value="female" name="radio" type="radio">
        <label for="">female</label>
    </div>

    <div>
        <input value="prefer not" name="radio" type="radio">
        <label for="">prefer not to say</label>
    </div>

    </div>



    <div class="bts flex">
        <input name="submit" class="inpu" type="submit">
        <a style="width: 90%;
    
    height: 30px;
    border-radius: 7px;
    background-image:linear-gradient(to right, rgb(65, 65, 200) , rgb(191, 102, 117));
    color: white;
    font-size: 15px;
    font-weight: bold;
    transition: 0.5s;text-transform: capitalize;
    text-decoration: none; padding-top: 2px;"
        
 href="users.php">user
             </a>
             

    </div>

    

  


    </form>
    
    <?php include("footer.php")?>



