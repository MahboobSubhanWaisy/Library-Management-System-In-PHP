
<?php 
ob_start();
session_start();
  ?>
  <div class="col-12 d-flex align-items-center justify-content-between">
    <h4 class="page-title">
    </h4>
    <div class="d-flex align-items-center">
        <div class="wrapper mr-4 d-none d-sm-block">
            <p class="mb-0">Edit
                <b class="mb-0">Section</b>
            </p>
        </div>
        
        <div class="wrapper">
            <a href="system" class="btn btn-link btn-sm font-weight-bold">
                <i class="icon-home"></i>Home</a>

        </div>
        
    </div>
   
</div>
<div class="card col-12" style="margin-top:40px;">
    <div class="card-header bg-info text-white">
        Resent Edit Enroll Teacher
    </div>
    <div class="card-body">

        <!-- form -->
        <?php
                        
                        include 'connection_DB.php';
                        $teacher_id = $_GET['teacher_id'];
                        $q = "SELECT * FROM `teacher` WHERE teacher_id = '$teacher_id'";
                        $run_query = mysqli_query($con,$q);

                        if (mysqli_num_rows($run_query)>0) {
                            # code...
                            foreach ($run_query as $row) {
                                # code...
                                //echo $row['phone'];
                                ?>
        <form action="enroll_teacher_insert_code.php" method="POST" enctype="multipart/form-data">

            <div class="row">

                <div class="col-md-6 form-group mb-3">
                    <label for="validationCustomUsername"> ID</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text menu-icon icon-key" style="background-color:#eee;"></span>
                        </div>
                        <input type="number" name="teacher_id" value="<?php echo $row['teacher_id'];?>" class="form-control" placeholder=" 96290015" style="height:40px;">
                    </div>
                </div>
                <div class="col-md-6 form-group mb-3">
                    <label for="validationCustomUsername">Name</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text  menu-icon  icon-user" style="background-color:#eee;"></span>
                        </div>
                        <input type="text" name="name" class="form-control" placeholder="Type name here.." value="<?php echo $row['name'];?>" style="height:40px;">
                    </div>
                </div>
                <div class="col-md-6 form-group mb-3">
                    <label for="validationCustomUsername">Last Name</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text menu-icon icon-user" style="background-color:#eee;"></span>
                        </div>
                        <input type="text" name="lastname" value="<?php echo $row['lastname'];?>" class="form-control" placeholder="Type your last name here.." style="height:40px;">
                    </div>
                </div>

                <div class="col-md-6 form-group mb-3">
                    <label for="validationCustomUsername">Email Address</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text menu-icon icon-envelope-letter" style="background-color:#eee;"></span>
                        </div>
                        <input type="text" name="email" value="<?php echo $row['email'];?>" class="form-control" placeholder="Type email here.." style="height:40px;">
                    </div>
                </div>
                <div class="col-md-6 form-group mb-3">
                    <label for="validationCustomUsername">Shift</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text menu-icon  icon-clock" style="background-color:#eee;"></span>
                        </div>
                        <select data-plugin="customselect" class="form-control" name="shift" style="height:40px;">
                            <option value="Morning" <?php if($row['shift'] == "Morning"){ ?> selected <?php } ?>>Morning</option>
                            <option value="After noon" <?php if($row['shift'] == "After noon"){ ?> selected <?php } ?>>After noon</option>
                            <option value="Evening" <?php if($row['shift'] == "Evening"){ ?> selected <?php } ?>>Evening</option>
                            <option value="FullTime" <?php if($row['shift'] == "FullTime"){ ?> selected <?php } ?>>Full Time</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 form-group mb-3">
                    <label for="validationCustomUsername">Phone</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text menu-icon  icon-phone" style="background-color:#eee;"></span>
                        </div>
                        <input type="text" name="phone" class="form-control" style="height:40px;" value="<?php echo $row['phone'] ?>">
                    </div>
                </div>
                <div class="col-md-6 form-group mb-3">
                    <label for="validationCustomUsername">Departmenet</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text menu-icon  icon-drawer" style="background-color:#eee;"></span>
                        </div>
                        <?php 
                            $Q = "SELECT * FROM `department`";
                       $query=mysqli_query($con,$Q);
                       $account=mysqli_num_rows($query);
                       ?>
                        <select class="form-control" name="department_id" style="height:40px;">
                            <option selected hidden>Select Department</option>
                            <?php 
                      for($i=1; $i<=$account; $i++){
                          $row3=mysqli_fetch_array($query);
                          ?>
                            <option value="<?php echo $row3["department_id"]; ?>" <?php if($row3['department_id'] == $row['department_id']){?> selected <?php } ?> ><?php echo $row3["department_name"]; ?></option>
                            <?php
                      }
                      ?>
                        </select>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-warning" name="teacher_update">Edit</button>
        </form>
        <!-- end form -->

        <?php
                            }
                        }else {
                            # code...
                            echo "No Record Available";
                        }
                
                    ?>
    </div>
    <!-- <div class="card-header bg-info text-white">
    </div> -->
</div>





<?php
    $section = ob_get_contents();
    ob_end_clean();
    include_once("master_page.php");
?>