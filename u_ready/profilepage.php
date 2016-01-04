  
<?php
if(isset($_SESSION['user'])!="")
include_once 'connect.php';

if(isset($_POST['btn-signup']))
{
 $profile_image = mysql_real_escape_string($_POST['profile_image']);
 $grade_point_average = mysql_real_escape_string($_POST['grade_point_average']);
 $grade = mysql_real_escape_string($_POST['grade']);

 
 if(mysql_query("INSERT INTO edit(profile_image,grade_point_average,grade) VALUES('$profile_image', '$grade_point_average','$grade')"))
 {
  ?>
        <script>alert('successfully posted');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
 }
?>
<form method="post">
<input type="text" name="profile_image" placeholder="profile image" required />
<input type="text" name="grade_point_average" placeholder="GPA" required />
<input type="text" name="grade" placeholder="grade" required />
<button type="submit" name="btn-signup"  class="btn btn-lg btn-primary btn-block signup-btn" >Sign Me Up</button>
</form>
