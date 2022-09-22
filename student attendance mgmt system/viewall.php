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
           <form action="show_attendence.php" method="post">
               <table class="table table-striped">
                  <tr>
                    <th>#serial Number</th>
                    <th>Dates</th>
                    <th>Show Attendence</th>
                  </tr>
                   <?php $result=mysqli_query($con,"SELECT distinct date  FROM `attendence_records`");
                        $serialnumber=0;
                        while($row=mysqli_fetch_array($result))
                        {
                            $serialnumber++;
                        ?>
                           <tr>
                                <td><?php echo $serialnumber; ?></td>
                                <td><?php echo $row['date']; ?></td>
                                <td>
                                    <form action="show_attendence.php" method="post">
                                        <input type="hidden" value="<?php echo $row['date'] ?>" name="date">
                                        <input type="submit"  class="btn btn-primary" value="Show Attendence">
                                    </form>
                                </td>
                           </tr>
                        <?php
                        }
                    ?>
               </table>
               <input type="submit" class="btn btn-primary" value="submit" name="submit">
           </form>
       </div>
    </div>
</div>