<div class="adda-order">
<h1>Add New Admin</h1>
<div class="addadminform" ng-controller="Addadminctrl">
<form name="addadminform" class="form-horizontal form-label-left" nonvalidate>

                    <!--   <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                      </p>
                      <span class="section">Personal Info</span> -->

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Username <span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12 input-group" ng-class="{ 'has-error' : addadminform.username.$invalid && !addadminform.username.$pristine }" >
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input type="text" placeholder="Username" ng-model="admin.username" id="username" class="form-control" name="username" required />
                          <p style="color:red;" ng-show="addadminform.username.$invalid && !addadminform.username.$pristine" class="help-block"> username is required.</p>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Full Name <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12 input-group" >
                           <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input type="text" placeholder="Full Name" ng-model="admin.fullname" id="fullname" class="form-control" name="fullname" required />
                          <p style="color:red;" ng-show="addadminform.fullname.$invalid && !addadminform.fullname.$pristine" class="help-block"> fullname is required.</p>
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Email <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12 input-group" >
                           <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                          <input type="email" placeholder="Email Id" ng-model="admin.email" id="email" class="form-control" name="email" required />
                          <p style="color:red;" ng-show="addadminform.email.$invalid && !addadminform.email.$pristine" class="help-block"> email is required with correct format.</p>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Number <span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12 input-group" >
                          <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                          <input type="text" placeholder="Mobile Number" ng-model="admin.phone" id="phone" class="form-control" name="phone" ng-pattern="/^[0-9]{1,10}$/"
       required/>
                          <p style="color:red;" ng-show="addadminform.phone.$invalid && !addadminform.phone.$pristine" class="help-block"> 10 digit phone is required.</p>
                        </div>
                      </div>


                      <div class="item form-group">
                        <label for="password" class="control-label col-md-3">Password <span class="required">*</span></label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12 input-group" >
                           <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                          <input type="password" placeholder="Password" ng-model="admin.password" id="password" class="form-control" name="password" required />
                          <p style="color:red;" ng-show="addadminform.password.$invalid && !addadminform.password.$pristine" class="help-block"> password is required.</p>
                        </div>
                        </div>
                    
                      <div class="item form-group">
                        <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Confirm Password <span class="required">*</span></label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12 input-group" >
                              <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                          <input type="password" placeholder="Confirm Password" ng-model="admin.password2" id="password2" class="form-control" name="password2" match="admin.password" required />
                          <p style="color:red;" ng-show="addadminform.password2.$error.required && !addadminform.password2.$pristine" class="help-block"> confirm password is required.</p>
                          <p style="color:red;" ng-show="addadminform.password2.$error.match && !addadminform.password2.$pristine" class="help-block"> confirm password is not mached.</p>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12 input-group">
                              <span class="input-group-addon"><i class="fa fa-list-ul "></i></span>
                          <select class="form-control" ng-model="admin.userrole" name="userrole" ng-class="{'has-errors' : addadminform.userrole.$invalid, 'no-errors' : addadminform.userrole.$valid}" ng-required="true">
                            <option value="" selected>Choose option</option>
                            <option value="aquaadmin">aquaadmin</option>
                            <option value="gogasadmin">gogasadmin</option>
                          </select>
                          <div class="error-container" ng-show="addadminform.userrole.$dirty && addadminform.userrole.$invalid" ng-messages="addadminform.userrole.$error">
                         <div style="color:red;" class="error" ng-message="required">select Userrole </div>
                          </div>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-5 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-4">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button ng-click="insertdata(admin)"  ng-disabled="!addadminform.$valid" id="send" type="submit" class="btn btn-success">Submit</button>

                          {{msg}}
                        </div>
                      </div>
                    </form>
                     </div>

                    