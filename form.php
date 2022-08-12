<form method="post" action="login.php" class="row g-3"  >

                    <div class="input-group mb-3" style="font-size: 12px">
                        <input type="text" name="username" id="username" class="form-control input_user"  placeholder="Username" >
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-user fa-2x"></i>
                            </span>
                        </div>
                    </div> 
		                                 
                    <div class="input-group mb-2">
                        <input type="password" name="password" id="password" class="form-control input_pass" placeholder="Password" >
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-key fa-2x"></i>
                            </span>
                        </div>
                    </div>
                     <select class="form-select" aria-label="Default select example" name="usertype">
                      <option selected>User type</option>
                      <option value="Employer">Desk officer</option>
                      <option value="Jobseeker">Store keeper</option>
                      <option value="Jobseeker">Manager</option>
                      <option value="Jobseeker">Admin</option>
                    </select>

                    <div class="d-flex justify-content-center mt-3 login-container">
                        <button type="submit" name="login" id="login" class="btn login_btn"><i class="fa fa-lock"></i> Login</button>
                    </div>
                        

                </form>