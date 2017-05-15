<div class="container" style="margin-top: 30px">
    <div class="row">

        <div class="col-lg-3">

        </div>

        <div class="col-lg-6 ">
        <div class="login_container">
            <img src="<?php echo URL;?>public/images/company_logo.png" class="img-responsive cmn_logo" />
            <h1 class="system_name">Patient Management System</h1>
            <div>
                <form role="form" action="<?php echo URL; ?>index/loginDo" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" class="form-control" id="username" placeholder="Enter username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" name="password" class="form-control" id="password" placeholder="Enter password">
                    </div>
                    <button type="submit" class="btn btn-success">Login to System</button>
                    <h2 class="footer_text">
                    	&COPY; Copyright by <a href="https://www.facebook.com/isuru.tharanga.7">Isuru Tharanga</a>, developed by using 
                    	<a href="#">exacomta web framework v_0.1</a>
                    </h2>
                </form>
            </div>
        	</div>
        	</div>
		</div>

        <div class="col-lg-3">

        </div>


    </div>
</div>








