<?php
    $flag=0;
    include("db.php");
    include("header.php");
    if(isset($_POST['submit']))
    {
        foreach($_POST['attendence_status'] as $id=>$attendence_status)
        {
            $student_name=$_POST['student_name'][$id];
            $roll_number=$_POST['roll_number'][$id];
            $date=date("Y-m-d H:i:s");
            $query="INSERT INTO `attendence_records` (`student_name`, `roll_number`, `attendence_status`, `date`) VALUES ('$student_name', '$roll_number', '$attendence_status', '$date')";
            $result=mysqli_query($con,$query);
            if($result)
            {
                $flag=1;
            }
        }
    }
?>
<div class="panel panel-default">
    <div class="panel panel-heading">
       <h2>
        <a href="add.php" class="btn btn-success">Add Student</a>
        <a href="viewall.php" class="btn btn-info pull-right">View All</a>
       </h2>
       <?php if($flag){?>
            <div class="alert alert-success">
                Attendence Date Insert Successfully.
            </div>
        <?php }?>
       <h3><div class="text-center">Date:<?php echo date("Y-m-d"); ?></div></h3>
       <div class="panel panel-body">
           <form action="index.php" method="post">
               <table class="table table-striped">
                  <tr>
                    <th>#serial Number</th>
                    <th>Student Name</th>
                    <th>Roll Number</th>
                    <th>Attendence Status</th>
                  </tr>
                   <?php $result=mysqli_query($con,"SELECT * FROM `attendence`");
                        $serialnumber=0;
                        $counter=0;
                        while($row=mysqli_fetch_array($result))
                        {
                            $serialnumber++;
                        ?>
                           <tr>
                                <td><?php echo $serialnumber; ?></td>
                                <td><?php echo $row['student_name']; ?>
                                <input type="hidden" value="<?php echo $row['student_name']; ?>" name="student_name[]">
                                </td>
                                <td><?php echo $row['roll_number']; ?>
                                <input type="hidden" value="<?php echo $row['roll_number']; ?>" name="roll_number[]">
                                </td>
                                <td>
                                    <input type="radio" name="attendence_status[<?php echo $counter; ?>]" value="present" id="">Present
                                    <input type="radio" name="attendence_status[<?php echo $counter; ?>]" value="Absent" id="">Absent
                                </td>
                           </tr>
                        <?php
                        $counter++;
                        }
                    ?>
               </table>
               <input type="submit" class="btn btn-primary" value="submit" name="submit">
           </form>
       </div>
    </div>
</div>