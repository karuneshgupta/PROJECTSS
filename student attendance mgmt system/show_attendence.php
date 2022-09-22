<?php
    $flag=0;
    include("db.php");
    include("header.php");
?>
<div class="panel panel-default">
    <div class="panel panel-heading">
       <h2>
        <a href="add.php" class="btn btn-success">Add Student</a>
        <a href="index.php" class="btn btn-info pull-right">Back</a>
       </h2>
       <div class="panel panel-body">
           <form action="index.php" method="post">
               <table class="table table-striped">
                  <tr>
                    <th>#serial Number</th>
                    <th>Student Name</th>
                    <th>Roll Number</th>
                    <th>Attendence Status</th>
                  </tr>
                   <?php $result=mysqli_query($con,"SELECT * FROM `attendence_records` WHERE `attendence_records`.`date` = '$_POST[date]'");
                        $serialnumber=0;
                        $counter=0;
                        while($row=mysqli_fetch_array($result))
                        {
                            $serialnumber++;
                        ?>
                           <tr>
                                <td><?php echo $serialnumber; ?></td>
                                <td><?php echo $row['student_name']; ?>
                                <td><?php echo $row['roll_number']; ?>
                                <td>
                                    <input type="radio" name="attendence_status[<?php echo $counter;?>]" 
                                    <?php if($row['attendence_status']=='present')
                                        echo "checked=checked";
                                    ?>
                                    value="present" id="">Present
                                    <input type="radio" name="attendence_status[<?php echo $counter; ?>]" 
                                    <?php if($row['attendence_status']=='Absent')
                                        echo "checked=checked";
                                    ?>value="Absent" id="">Absent
                                </td>
                           </tr>
                        <?php
                        $counter++;
                        }
                    ?>
               </table>
           </form>
       </div>
    </div>
</div>