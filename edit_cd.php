
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
        Resent Edit Cd File
    </div>
    <div class="card-body">

        <!-- form -->
        <?php
                        
            include 'connection_DB.php';
            $cd_id = $_GET['cd_id'];
            $q = "SELECT * FROM `cd` WHERE cd_id = '$cd_id'";
            $run_query = mysqli_query($con,$q);

            if (mysqli_num_rows($run_query)>0) {
            # code...
            foreach ($run_query as $row) {
            # code...
            //echo $row['book_id'];
        ?>
        <form action="add_cd_of_book" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="cd_id" value="<?php echo $row['cd_id'];?>" class="form-control" placeholder=" Loading..." style="height:40px;">
            <div class="row">
                
                <div class="col-md-6 form-group mb-3">
                    <label for="validationCustomUsername">Title</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text menu-icon  icon-social-tumblr" style="background-color:#eee;"></span>
                        </div>
                        <input type="text" name="cd_title" value="<?php echo $row['cd_title'];?>" class="form-control" placeholder=" Loading..." style="height:40px;">
                    </div>
                </div>
                
                <div class="col-md-6 form-group mb-3">
                    <label for="validationCustomUsername">Subject</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text  menu-icon icon-speech" style="background-color:#eee;"></span>
                        </div>
                        <input type="text" name="subject" class="form-control" placeholder="Loading..." value="<?php echo $row['subject'];?>" style="height:40px;">
                    </div>
                </div>
                <div class="col-md-6 form-group mb-3">
                    <label for="validationCustomUsername">Presenter</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text  icon-people" style="background-color:#eee;"></span>
                        </div>
                        <input type="text" name="presenter" value="<?php echo $row['presenter'];?>" class="form-control" placeholder="Loading..." style="height:40px;">
                    </div>
                </div>

                
                <div class="col-md-6 form-group mb-3">
                    <label for="validationCustomUsername">files Info</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text menu-icon  icon-folder-alt" style="background-color:#eee;"></span>
                        </div>
                        <input type="text" name="files_info" value="<?php echo $row['files_info'];?>" class="form-control" placeholder="Loading..." style="height:40px;">
                    </div>
                </div>
                <div class="col-md-6 form-group mb-3">
                    <label for="validationCustomUsername">Author</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text menu-icon  icon-user" style="background-color:#eee;"></span>
                        </div>
                        <input type="text" name="Author" value="<?php echo $row['Author'];?>" class="form-control" placeholder="Loading..." style="height:40px;">
                    </div>
                </div>
                <div class="col-md-6 form-group mb-3">
                    <label for="validationCustomUsername">Cd Number</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text menu-icon icon-support" style="background-color:#eee;"></span>
                        </div>
                        <input type="number" name="cd_number" value="<?php echo $row['cd_number'];?>" class="form-control" placeholder="Loading..." style="height:40px;">
                    </div>
                </div>
                <div class="col-md-6 form-group mb-3">
                    <label for="validationCustomUsername">Case</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text mdi mdi-server" style="background-color:#eee;"></span>
                        </div>
                        <?php 
                            $Q = "SELECT * FROM `book_case`";
                            $query=mysqli_query($con,$Q);
                            $account=mysqli_num_rows($query);
                       ?>
                        <select class="form-control" name="b_c_id" style="height:40px;">
                            <option selected hidden>Select Case</option>
                            <?php 
                      for($i=1; $i<=$account; $i++){
                          $row8=mysqli_fetch_array($query);
                          ?>
                            <option value="<?php echo $row8["b_c_id"]; ?>" <?php if($row8['b_c_id'] == $row['b_c_id']){?> selected <?php } ?> ><?php echo $row8["book_case_id"]; ?><?php echo $row8["c_row"]; ?><?php echo $row8["c_column"]; ?></option>
                            <?php
                      }
                      ?>
                        </select>
                    </div>
                </div>
                
                
                <div class="col-md-6 form-group mb-3">
                    <label for="validationCustomUsername">Copy</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text menu-icon   icon-crop" style="background-color:#eee;"></span>
                        </div>
                        <select data-plugin="customselect" class="form-control" name="copy" style="height:40px;">
                            <option selected hidden>Select Copy</option>
                            <option value="1" <?php if($row['copy'] == "1"){ ?> selected <?php } ?>>1</option>
                            <option value="2" <?php if($row['copy'] == "2"){ ?> selected <?php } ?>>2</option>
                            <option value="3" <?php if($row['copy'] == "3"){ ?> selected <?php } ?>>3</option>
                            <option value="4" <?php if($row['copy'] == "4"){ ?> selected <?php } ?>>4</option>
                            <option value="5" <?php if($row['copy'] == "5"){ ?> selected <?php } ?>>5</option>
                            <option value="6" <?php if($row['copy'] == "6"){ ?> selected <?php } ?>>6</option>
                            <option value="7" <?php if($row['copy'] == "7"){ ?> selected <?php } ?>>7</option>
                            <option value="8" <?php if($row['copy'] == "8"){ ?> selected <?php } ?>>8</option>
                            <option value="9" <?php if($row['copy'] == "9"){ ?> selected <?php } ?>>9</option>
                            <option value="10"<?php if($row['copy'] == "10"){?> selected <?php } ?>>10</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 form-group mb-3">
                    
                    <div class="input-group" style="margin-top: 25px;">
                        <button type="submit" class="btn btn-warning col-12" name="cd_update"><span class="icon-note"></span> Edit</button>
                    </div>
                        
                </div>
                
                
            </div>

            
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