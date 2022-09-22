<?php
    include("header.php");
    include("db.php");
    $flag=0;
    if(isset($_POST['submit'])) # agar submit hua h tabhi connection estabibilish ho 
    {
        #inserting into table attendance 
        $query="INSERT INTO `attendence` (`id`, `student_name`, `roll_number`) VALUES (NULL, '$_POST[name]', '$_POST[roll]')"; 
        
        $result=mysqli_query($con,$query);
        if($result)
        {
            $flag=1;
        }
    }
?>
<div class="panel panel-default">
    <?php  if($flag){?>
        <div class="alert alert-success">
            <strong>!Success</strong>Attendence data successfully inserted.
        </div>
    <?php }?>
    <div class="panel-heading">
       <h2>
        <a href="add.php" class="btn btn-success">Add Student</a>
        <a href="index.php" class="btn btn-info pull-right">Back</a>
       </h2>
    </div>
    <div class="panel-body">
        <form action="add.php" method="post" >
           <div class="form-group">
               <label for="name" class="form-group">Student Name</label>
               <input type="text" name="name" id="name" class="form-control" required>
           </div>
           <div class="form-group">
               <label for="roll" class="form-group">Roll No</label>
               <input type="text" name="roll" id="roll" class="form-control" required>
           </div>
           <div class="form-group">
               <input type="submit" name="submit"  class="btn btn-primary" required>
           </div>
        </form>
    </div>
</div>