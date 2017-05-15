
<section>
    <div class="container">
        <!-- first row -->
        <div class="row">
            <div class="col-lg-12">

                <div class="col-lg-8">
                    <h1 class="h1_welcome">Welcome to Dashboard !</h1>
                    <h2 class="h2_management">Patinet Management</h2>

                    <!-- form content fields -->
                    <div>
                        <form role="form" action="<?php echo URL;?>dashboard/addPatientDetails" method="post">
                            <div class="form-group">
                                <label for="fullname">Full Name</label>
                                <input type="text" name="fullname" class="form-control cmn_textbox" id="fullname" 
                                placeholder="Enter Your Full Name">
                            </div>
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="text" name="age" class="form-control cmn_textbox" id="age" 
                                placeholder="Enter Your Age">
                            </div>
                            <div class="form-group">
                                <label for="sex">Sex</label>
                                <input type="text" name="sex" class="form-control cmn_textbox" id="sex" 
                                placeholder="Enter Your Sex">
                            </div>
                            <div class="form-group">
                                <label for="comment">Diseases Discription:</label>
                                <textarea class="form-control cmn_textbox" rows="4" id="comment" name="diseases"
                                placeholder="Enter Diseases Discription"></textarea>
                            </div>

                            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Add</button>
                            <?php 
                                if(isset($msg)){
                                    echo "<div class='alert alert-success' role='alert'>" .$msg. "</div>";
                                    exit;
                                    //echo '<p>'.$msg.'</p>';
                                }
                            ?> 
                        </form>


                        <!-- serach form -->
                        <form class="form-inline form_search-test" action="<?php echo URL;?>test/searchDetails" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control txt_serach_test" id="exampleInputName2" name="txt_search" 
                                    placeholder="Search Patient using Name,Age,Sex,Discription...">
                            </div>
                                
                            <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span> Search</button>
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

            </div>
        </div>

        <!-- second row -->
        <div class="row">
            <div class="col-lg-12">
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
                        foreach($this->searchSinglePatient as $key=>$value){
                            
                            echo '<tr>';
                                echo '<td>' .$value['name']. '</td>';
                                echo '<td>' .$value['age']. '</td>';
                                echo '<td>' .$value['sex']. '</td>';
                                echo '<td>' .$value['diseases']. '</td>';
                                echo '<td>' .$value['date']. '</td>';
                                echo '<td>';
                                    echo '<a href="'.URL.'dashboard/updatePatient/'.$value['id'].'" class="glyphicon glyphicon-pencil glyp_under" style="padding-right:10px;"></a>';
                                    echo '<a href="'.URL.'dashboard/deletePatient/'.$value['id'].'" class="glyphicon glyphicon-trash glyp_under"></a>';
                                echo '</td>';
                            echo '</tr>';
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</section>