<div class="addgo-cust">
<h1>Add Gogas Customers</h1>
<div class="addgogasform" ng-controller="Addgogasctrl">
<form name="addgogasform" class="form-horizontal form-label-left" nonvalidate>

                    <!--   <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                      </p> -->
                     <!--  <span class="section">Personal Info</span> -->

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gcustomer_name">Customer Name <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="gogascustomers.gcustomer_name" id="customer_name" class="form-control" name="gcustomer_name" required />
                          <p style="color:red;" ng-show="addgogasform.gcustomer_name.$invalid && !addgogasform.gcustomer_name.$pristine" class="help-block"> Customer name is required.</p>
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="  gcustomer_email">Customer Email <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="email" ng-model="gogascustomers.gcustomer_email" id="gcustomer_email" class="form-control" name="gcustomer_email" required />
                          <p style="color:red;" ng-show="addgogasform. gcustomer_email.$invalid && !addgogasform.gcustomer_email.$pristine" class="help-block"> email is required with correct format.</p>
                        </div>
                      </div>

                     
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Customer Number <span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="gogascustomers.gcustomer_number" id="gcustomer_number" class="form-control" name="gcustomer_number" ng-pattern="/^[0-9]{10}$/"
       required/>
                          <p style="color:red;" ng-show="addgogasform.gcustomer_number.$invalid && !addgogasform.gcustomer_number.$pristine" class="help-block"> 10 digit phone is required.</p>
                        </div>
                      </div>

                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Date of Birth <span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" ng-class="{ 'has-error' : addgogasform.gcustomer_dob.$invalid && !addgogasform.gcustomer_dob.$pristine }" >
                          <input type="date" ng-model="gogascustomers.gcustomer_dob" id="gcustomer_dob" class="form-control" name="gcustomer_dob" required />
                          <p style="color:red;" ng-show="addgogasform.gcustomer_dob.$invalid && !addgogasform.gcustomer_dob.$pristine" class="help-block">Birthdate required.</p>
                        </div>
                      </div>

                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">State <span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" ng-class="{ 'has-error' : addgogasform. gcustomer_state.$invalid && !addgogasform.gcustomer_state.$pristine }" >
                          <input type="text" ng-model="gogascustomers. gcustomer_state" id="  gcustomer_state" class="form-control" name="gcustomer_state" required />
                          <p style="color:red;" ng-show="addgogasform.gcustomer_state.$invalid && !addgogasform.gcustomer_state.$pristine" class="help-block">Required.</p>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">City <span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" ng-class="{ 'has-error' : addgogasform. gcustomer_city.$invalid && !addgogasform.gcustomer_city.$pristine }" >
                          <input type="text" ng-model="gogascustomers.gcustomer_city" id="  gcustomer_city" class="form-control" name="gcustomer_city" required />
                          <p style="color:red;" ng-show="addgogasform.gcustomer_city.$invalid && !addgogasform.gcustomer_city.$pristine" class="help-block">Required.</p>
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">pincode <span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" ng-class="{ 'has-error' : addgogasform.gcustomer_pincode.$invalid && !addgogasform.gcustomer_pincode.$pristine }" >
                          <input type="text" ng-model="gogascustomers.gcustomer_pincode" ng-pattern="/^[0-9]{6}$/"  id="gcustomer_pincode" class="form-control" name="gcustomer_pincode" required />
                          <p style="color:red;" ng-show="addgogasform.gcustomer_pincode.$invalid && !addgogasform.gcustomer_pincode.$pristine" class="help-block">Required accept only 6 digit Numbers format .</p>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Landmark <span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" ng-class="{ 'has-error' : addgogasform.gcustomer_landmark.$invalid && !addgogasform. gcustomer_landmark.$pristine }" >
                          <input type="text" ng-model="gogascustomers.gcustomer_landmark" id="    gcustomer_landmark" class="form-control" name="gcustomer_landmark" required />
                          <p style="color:red;" ng-show="addgogasform.gcustomer_landmark.$invalid && !addgogasform.gcustomer_landmark.$pristine" class="help-block">Required.</p>
                        </div>
                      </div>
                           

                            <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">proof<span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" ng-class="{ 'has-error' : addgogasform.gcustomer_proof.$invalid && !addgogasform.gcustomer_proof.$pristine }" >
                          <input type="text" ng-model="gogascustomers.gcustomer_proof" id="     gcustomer_proof" class="form-control" name="gcustomer_proof" required />
                          <p style="color:red;" ng-show="addgogasform.gcustomer_proof.$invalid && !addgogasform.gcustomer_proof.$pristine" class="help-block">Required.</p>
                        </div>
                      </div>



                     

                      
                      



                      <!-- <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Customer Address <span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" ng-class="{ 'has-error' : addgogasform.customer_address.$invalid && !addgogasform.customer_address.$pristine }" >
                          <input type="text" ng-model="gogascustomers.customer_address" id="username" class="form-control" name="customer_address" required />
                          <p style="color:red;" ng-show="addgogasform.customer_address.$invalid && !addgogasform.customer_address.$pristine" class="help-block">Address is required.</p>
                        </div>
                      </div> -->

                      
                     <!--  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" ng-model="gogascustomers.customer_type" name="customer_type" ng-class="{'has-errors' : addgogasform.customer_type.$invalid, 'no-errors' : addgogasform.customer_type.$valid}" ng-required="true">
                            <option value="" selected>Customer Type</option>
                            <option value="temporary">temporary</option>
                            <option value="Regular">Regular</option>
                          </select>
                          <div class="error-container" ng-show="addgogasform.customer_type.$dirty && addgogasform.customer_type.$invalid" ng-messages="addgogasform.customer_type.$error">
                         <div style="color:red;" class="error" ng-message="required">select customer type </div>
                          </div>
                        </div>
                      </div> -->


                       <!--    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" ng-model="gogascustomers.customer_role" name="customer_role" ng-class="{'has-errors' : addgogasform.customer_role.$invalid, 'no-errors' : addgogasform.customer_role.$valid}" ng-required="true">
                            <option value="" selected>Customer Role</option>
                            <option value="Gogas">Gogas</option>
                          
                          </select>
                          <div class="error-container" ng-show="addgogasform.customer_type.$dirty && addgogasform.customer_type.$invalid" ng-messages="addgogasform.customer_type.$error">
                         <div style="color:red;" class="error" ng-message="required">select customer Role </div>
                          </div>
                        </div>
                      </div> -->

                       

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-5 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-4">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button ng-click="insertdata(gogascustomers)" ng-disabled="!addgogasform.$valid" id="send" type="submit" class="btn btn-success">Submit</button>

                          {{msg}}
                        </div>
                      </div>
                    </form>
                     </div>
                   </div>
