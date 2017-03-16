<div class="addgo-cust">
<h1>Add Gogas Customers</h1>
<div class="addgogasform" ng-controller="Addgogasctrl">
<form name="addgogasform" class="form-horizontal form-label-left" nonvalidate>

                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select Type<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-list-ul"></i></span>
                          <select class="form-control" ng-model="gogascustomers.gcustomer_type" name="gcustomer_type" class="{'has-errors' : gogascustomers.gcustomer_type.$invalid, 'no-errors' : gogascustomers.gcustomer_type.$valid}" ng-required="true">
                          <option value="" ng-selected="true">Select User</option>
                            <option value="1" >Connection User</option>
                            <option value="2">Simple User</option>
                          </select>
                          </div>
                           <div class="error-container" ng-show="addgogasform.gcustomer_type.$dirty && addgogasform.gcustomer_type.$invalid" ng-messages="addgogasform.gcustomer_type.$error">
                         <div class="val-style" class="error" ng-message="required">select User Type </div>
                          </div>
                        </div>
                      </div>
                       
                    <!--   <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="gcustomer_name">Customer Name <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input type="text" placeholder="Customer name" ng-model="gogascustomers.gcustomer_name" id="customer_name" class="form-control" name="gcustomer_name" >
                        </div>
                          <p class="val-style" ng-show="addgogasform.gcustomer_name.$invalid && !addgogasform.gcustomer_name.$pristine" class="help-block"> Customer name is required.</p>
                        </div>
                      </div> -->
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Customer Name">Customer Name <span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" ng-class="{ 'has-error' : addgogasform.gcustomer_name.$invalid && !addgogasform.gcustomer_name.$pristine }" >
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-home"></i></span>
                          <input type="text" placeholder="customer name" ng-model="gogascustomers.gcustomer_name" id="gcustomer_name" class="form-control" name="gcustomer_name" required />
                        </div>
                          <p class="val-style" ng-show="addgogasform.gcustomer_name.$invalid && !addgogasform.gcustomer_name.$pristine" class="help-block">Required.</p>
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="  gcustomer_email">Customer Email <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                          <input type="email" placeholder="Email Id" ng-model="gogascustomers.gcustomer_email" id="gcustomer_email" class="form-control" name="gcustomer_email" >
                        </div>
                          <p class="val-style" ng-show="addgogasform. gcustomer_email.$invalid && !addgogasform.gcustomer_email.$pristine" class="help-block"> email is required with correct format.</p>
                        </div>
                      </div>

                     
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Customer Number <span class="required">*</span>
                        </label>

                        <div class="form-group col-md-6 col-sm-6 col-xs-12 " >
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                          <input type="text" placeholder="Phone Number" ng-model="gogascustomers.gcustomer_number" id="gcustomer_number" class="form-control" name="gcustomer_number" ng-pattern="/^[0-9]{10}$/">    </div> 
                          <p class="val-style" ng-show="addgogasform.gcustomer_number.$invalid && !addgogasform.gcustomer_number.$pristine" class="help-block"> 10 digit phone is required.</p>
                        </div>
                      </div>

                        <div ng-if="gogascustomers.gcustomer_type==1" class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Date of Birth <span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" ng-class="{ 'has-error' : addgogasform.gcustomer_dob.$invalid && !addgogasform.gcustomer_dob.$pristine }" >
                          <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
                          <input type="date" placeholder="Birth Date" ng-model="gogascustomers.gcustomer_dob" id="gcustomer_dob" class="form-control" name="gcustomer_dob" >
                        </div>
                          <p class="val-style" ng-show="addgogasform.gcustomer_dob.$invalid && !addgogasform.gcustomer_dob.$pristine" class="help-block">Birthdate required.</p>
                        </div>
                      </div>

                       <!--  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">State <span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" ng-class="{ 'has-error' : addgogasform.gcustomer_state.$invalid && !addgogasform.gcustomer_state.$pristine }" >
                         <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-home"></i></span>
                          <input type="text" placeholder="State" ng-model="gogascustomers. gcustomer_state" id="  gcustomer_state" class="form-control" name="gcustomer_state" >
                        </div>
                             <p class="val-style" ng-show="addgogasform.gcustomer_state.$invalid && !addgogasform.gcustomer_state.$pristine" class="help-block">Required.</p>
                        </div>
                      </div>
 -->

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Customer Name">State <span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" ng-class="{ 'has-error' : addgogasform.gcustomer_state.$invalid && !addgogasform.gcustomer_state.$pristine }" >
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-home"></i></span>
                          <input type="text" placeholder="state" ng-model="gogascustomers.gcustomer_state" id="gcustomer_name" class="form-control" name="gcustomer_state" required />
                        </div>
                          <p class="val-style" ng-show="addgogasform.gcustomer_state.$invalid && !addgogasform.gcustomer_state.$pristine" class="help-block">Required.</p>
                        </div>
                      </div>



                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">City <span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" ng-class="{ 'has-error' : addgogasform.gcustomer_city.$invalid && !addgogasform.gcustomer_city.$pristine }" >
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-home"></i></span>
                          <input type="text" placeholder="City" ng-model="gogascustomers.gcustomer_city" id="  gcustomer_city" class="form-control" name="gcustomer_city" required/>
                        </div>
                          <p class="val-style" ng-show="addgogasform.gcustomer_city.$invalid && !addgogasform.gcustomer_city.$pristine" class="help-block">Required.</p>
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">PinCode <span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" ng-class="{ 'has-error' : addgogasform.gcustomer_pincode.$invalid && !addgogasform.gcustomer_pincode.$pristine }" >
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-home"></i></span>
                          <input type="text" placeholder="Pin-Code" ng-model="gogascustomers.gcustomer_pincode" ng-pattern="/^[0-9]{6}$/" id="  gcustomer_pincode" class="form-control" name="gcustomer_pincode" >
                        </div>
                          <p class="val-style" ng-show="addgogasform.gcustomer_pincode.$invalid && !addgogasform.gcustomer_pincode.$pristine" class="help-block">Required with correct 6 digit format.</p>

                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Landmark <span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" ng-class="{ 'has-error' : addgogasform.gcustomer_landmark.$invalid && !addgogasform.gcustomer_landmark.$pristine }" >
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-home"></i></span>
                          <input type="text" placeholder="Landmark" ng-model="gogascustomers.gcustomer_landmark" id="    gcustomer_landmark" class="form-control" name="gcustomer_landmark" required />
                        </div>
                          <p class="val-style" ng-show="addgogasform.gcustomer_landmark.$invalid && !addgogasform.gcustomer_landmark.$pristine" class="help-block">Required.</p>
                        </div>
                      </div>
                      <div ng-if="gogascustomers.gcustomer_type==1" class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Proof<span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" ng-class="{ 'has-error' : addgogasform.gcustomer_proof.$invalid && !addgogasform.gcustomer_proof.$pristine }" >
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-newspaper-o"></i></span>
                          <input type="text" placeholder="Proof" ng-model="gogascustomers.gcustomer_proof" id="     gcustomer_proof" class="form-control" name="gcustomer_proof" >
                        </div>
                          <p class="val-style" ng-show="addgogasform.gcustomer_proof.$invalid && !addgogasform.gcustomer_proof.$pristine" class="help-block">Required.</p>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-5 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-4">
                          <button type="submit"  ng-click="reset()"  ng-disabled="!addgogasform.$valid" class="btn btn-primary">Cancel</button>
                          <button ng-click="insertdata(gogascustomers)" ng-disabled="!addgogasform.$valid" id="send" type="submit" class="btn btn-success">Submit</button>
                          {{msg}}
                        </div>
                      </div>
                    </form>
                     </div>
                   </div>
