
<div class="myaccountform" ng-controller="Addmyaccountctrl">
<form name="myaccountform" class="form-horizontal form-label-left" nonvalidate>

                      <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                      </p>
                      <span class="section">Personal Info</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Username <span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12"  >
                          <input type="text" ng-model="username" id="username" class="form-control" name="username" required />
                          
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Full Name <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="fullname" id="fullname" class="form-control" name="fullname" required />
                        
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Email <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="email" ng-model="email" id="email" class="form-control" name="email" required />
                         
                        </div>
                      </div>

                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Phone number <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="phone" id="phone" class="form-control" name="phone" required />
                         
                        </div>
                      </div>
                        

                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Userrole <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="userrole" id="userrole" class="form-control" name="userrole" readonly required />
                         
                        </div>
                      </div>


                    <!--   <div class="item form-group">
                        <label for="password" class="control-label col-md-3">Password <span class="required">*</span></label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="password" ng-model="password" id="password" class="form-control" name="password" required />
                          
                        </div>
                        </div>
                    
                      <div class="item form-group">
                        <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Confirm Password <span class="required">*</span></label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="password" ng-model="password2" id="password2" class="form-control" name="password2" required />
                          
                        </div>
                      </div> -->

                      
                {{msg}}

                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                         <!--  <button type="submit" class="btn btn-primary">Cancel</button> -->
                         
                          <button ng-click="updateadmin(admin_id)"  id="send" type="submit" class="btn btn-success">UpdateAdmin</button>

                        <!--   {{msg}} -->
                        </div>
                      </div>
                    </form>
                     </div>

                    