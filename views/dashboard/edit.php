
<section>
    <div class="container">
        <div class="row">
            <!-- left content-->
            <div class="col-lg-8 col-sm-8 col-xs-8">
                <h1 class="h1_welcome">Welcome to Dashboard Dr.Saman(MBBS,Phd in computer sience) !!</h1>
                <h2 class="h2_management">Edit Patinet Details</h2>
                
                <div>
                    <form role="form" action="<?php echo URL;?>dashboard/editPatient/<?php echo $this->patientEdit['id']?>" method="post" id="details_form">
                        <div class="form-group">
                            <label for="fullname">Full Name</label>
                            <input type="text" name="fullname" class="form-control cmn_width" id="fullname" 
                            value="<?php echo $this->patientEdit['name'];?>">
                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="text" name="age" class="form-control cmn_width" id="age" 
                            value="<?php echo $this->patientEdit['age'];?>">
                        </div>
                        <div class="form-group">
                            <label for="sex">Sex</label>
                            <input type="text" name="sex" class="form-control cmn_width" id="sex" 
                            value="<?php echo $this->patientEdit['sex'];?>">
                        </div>
                        <!--
                        <div class="form-group">
                            <label for="comment">Diseases Discription:</label>
                            <textarea class="form-control cmn_width" rows="4" id="comment" name="diseases" >
                            <?php echo $this->patientEdit['diseases'];?></textarea>
                        </div>
                        -->
                        <div class="form-group">
                            <label for="ddscription">Diseases Discription:</label>
                            <input type="text" name="diseases" class="form-control cmn_width" id="diseases_dis" 
                            value="<?php echo $this->patientEdit['diseases'];?>">
                        </div>

                        <button type="submit" class="btn btn-warning btn_edit"><span class="glyphicon glyphicon-pencil"><span class="edit_text">Edit<span></span></button>

                        <form class="form-inline">
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                                <div class="input-group" style="margin-top: 20px !important;">
                                    <input type="text" class="form-control" id="exampleInputAmount" 
                                     placeholder="Search Patient using Name,Age,Sex,Discription">
                                    <div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
                                </div>
                            </div>
                        </form>
                        
                        <?php 
                            if(isset($msg)){
                                echo "<div class='alert alert-success' role='alert'>" .$msg. "</div>";
                                exit;
                                //echo '<p>'.$msg.'</p>';
                            }
                        ?> 
                    </form>
                </div>
            </div>
            
            <div class="col-lg-4">
                <?php if(session::get('loggedIn') == TRUE): ?>
                    <form class="form-inline" role="form" action="<?php echo URL;?>dashboard/log_out" method="post">
                        <button type="submit" class="btn btn-default btn_logout"><span class="glyphicon glyphicon-off gly_logout">    
                        </span> Log out</button>
                    </form>
                <?php endif; ?>
            </div>

                    <!-- second row -->
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-xs-12">
                    <!-- view patient details -->
                    <table class="table table-striped table_patient">
                        <tr>
                            <th>Full Name</th>
                            <th>Age</th>
                            <th>Sex</th>
                            <th>Diseases Discription</th>
                            <th>Modify Date</th>
                            <th>Action</th>
                        </tr>
                        <?php
                            $data_edit= $this->patientEdit;
                            
                            echo '<tr>';
                                echo '<td>' .$data_edit['name']. '</td>';
                                echo '<td>' .$data_edit['age']. '</td>';
                                echo '<td>' .$data_edit['sex']. '</td>';
                                echo '<td>' .$data_edit['diseases']. '</td>';
                                echo '<td>' .$data_edit['date']. '</td>';
                                echo '<td>';
                                    echo '<a href="'.URL.'dashboard/updatePatient/'.$data_edit['id'].'" class="glyphicon glyphicon-pencil glyp_under" style="padding-right:10px;"></a>';
                                    echo '<a href="'.URL.'dashboard/deletePatient/'.$data_edit['id'].'" class="glyphicon glyphicon-trash glyp_under"></a>';
                                echo '</td>';
                            echo '</tr>';
                        ?>
                </table>
            </div>
        </div>
        </div>
    </div>
</section>