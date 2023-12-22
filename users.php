
<?php include("header.php")?>
<?php 
// $read = "SELECT * FROM `users`";
// $result = mysqli_query($conn,$read);?>



<?php $read ="SELECT * FROM `users`";?>

<?php $result =mysqli_query($conn,$read);?>



<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Full name</th>
      <th scope="col">user name</th>
      <th scope="col">Email</th>
      <th scope="col">password</th>
      <th scope="col">phone</th>
      <th scope="col">gender</th>
    </tr>
  </thead>
  <tbody>
  <?php if(mysqli_num_rows($result)) : ?>

<?php while($row = mysqli_fetch_assoc($result)) : ?>


	
    <tr>
      <td><?php echo $row['id'];  ?></td>
      <td><?php echo $row['fullname'];  ?></td>
      <td><?php echo $row['username'];  ?></td>
      <td><?php echo $row['email'];  ?></td>
      <td><?php echo $row['password'];  ?></td>
      <td><?php echo $row['phone'];  ?></td>
      <td><?php echo $row['gender'];  ?></td>
      
    </tr>
    <?php endwhile ?>
<?php endif ?>
  </tbody>
</table>

<a href="index.php"  > <button style="width: 50%;margin-left:30%">Back</button></a>


<?php include("footer.php")?>
























