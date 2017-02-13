<div class="addnew-conn">

<h1>Add Gogas Connection</h1>
<div class="connectionform" ng-controller="Addnewconnectionctrl">
<form name="connectionform" class="form-horizontal form-label-left" nonvalidate>

                    <!--   <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                      </p> -->
                      <!-- <span class="section">Personal Info</span>
 -->
<datalist  id="gcustomerlist">
    <option ng-repeat="gclist in gcustomerdata" value="{{gclist.gcustomer_name}}">{{gclist.gcustomer_name}}</option>
</datalist>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" ng-model="Connection.customer" id="customer" class="form-control" name="customer" list="gcustomerlist" required />
                        </div>
                       </div> 
                      
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="      connection_cylinder_deposit">connection Cylinder Deposit<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="Connection.connection_cylinder_deposit" id="    connection_cylinder_deposit" class="form-control" name="connection_cylinder_deposit" required />
                          <p style="color:red;" ng-show="connectionform.connection_cylinder_deposit.$invalid && !connectionform.connection_cylinder_deposit.$pristine" class="help-block"> required</p>
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="      connection_depreciation">connection Depreciation<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="Connection.connection_depreciation" id="    connection_depreciation" class="form-control" name="connection_depreciation" required />
                          <p style="color:red;" ng-show="connectionform.connection_depreciation.$invalid && !connectionform.connection_depreciation.$pristine" class="help-block"> required</p>
                        </div>
                      </div>
                          
                      <!-- <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="    connection_depreciation">connection hotplate <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="connection.connection_hotplate" id="   connection_hotplate" class="form-control" name=" connection_hotplate" required />
                          <p style="color:red;" ng-show="connectionform.connection_hotplate.$invalid && !connectionform.connection_hotplate.$pristine" class="help-block"> required</p>
                        </div>
                      </div> -->
                      <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="connection_tube">connection Hotplate<span class="required">*</span>
                        </label>
                            <div class="radio form-group col-md-6 col-sm-6 col-xs-12" >
                              <label>
                              <input type="radio" checked="" ng-model="Connection.connection_hotplate" value="Yes" id="Yes" name="connection_hotplate">yes </label><br />
                              <label>
                              <input type="radio" ng-model="Connection.connection_hotplate" value="No" id="No" name="connection_hotplate">No </label>
                              </div>
                            </div>



                           





                      <!-- <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="    connection_depreciation">connection passbook <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="connection.connection_passbook" id="   connection_passbook" class="form-control" name="connection_passbook" required />
                          <p style="color:red;" ng-show="connectionform.connection_passbook.$invalid && !connectionform.connection_passbook.$pristine" class="help-block"> required</p>
                        </div>
                      </div> -->
                           <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="connection_tube">connection passbook<span class="required">*</span>
                        </label>
                            <div class="radio form-group col-md-6 col-sm-6 col-xs-12" >
                              <label>
                              <input type="radio" checked="" ng-model="Connection.connection_passbook" value="Yes" id="Yes" name="connection_passbook">yes </label><br />
                              <label>
                              <input type="radio" ng-model="Connection.connection_passbook" value="No" id="No" name="connection_passbook">No </label>
                              </div>
                            </div>







                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="      connection_stamp">connection stamp<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="Connection.connection_stamp" id="    connection_stamp" class="form-control" name="connection_stamp" required />
                          <p style="color:red;" ng-show="connectionform.connection_stamp.$invalid && !connectionform.connection_stamp.$pristine" class="help-block"> required</p>
                        </div>
                      </div>

                      <!--  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="      connection_tube">connection tube<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="connection.connection_tube" id="    connection_tube" class="form-control" name="connection_tube" required />
                          <p style="color:red;" ng-show="connectionform.connection_tube.$invalid && !connectionform.connection_tube.$pristine" class="help-block"> required</p>
                        </div>
                      </div> -->
                       
                           <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="connection_tube">connection tube<span class="required">*</span>
                        </label>
                            <div class="radio form-group col-md-6 col-sm-6 col-xs-12" >
                              <label>
                              <input type="radio" checked="" ng-model="Connection.connection_tube" value="Yes" id="Yes" name="connection_tube">yes </label><br />
                              <label>
                              <input type="radio" ng-model="Connection.connection_tube" value="No" id="No" name="connection_tube">No </label>
                              </div>
                            </div>












                         <!-- <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="        connection_lighter">connection lighter<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="connection.connection_lighter" id="      connection_lighter" class="form-control" name="connection_lighter" required />
                          <p style="color:red;" ng-show="connectionform.connection_lighter.$invalid && !connectionform.connection_lighter.$pristine" class="help-block"> required</p>
                        </div>
                      </div>
 -->
                        
                             <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="connection_tube">connection Lighter<span class="required">*</span>
                        </label>
                            <div class="radio form-group col-md-6 col-sm-6 col-xs-12" >
                              <label>
                              <input type="radio" checked="" ng-model="Connection.connection_lighter" value="Yes" id="Yes" name=" connection_lighter">yes </label><br />
                              <label>
                              <input type="radio" ng-model="Connection.connection_lighter" value="No" id="No" name="connection_lighter">No </label>
                              </div>
                            </div>



                         

                           <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="        connection_other">connection_other<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="Connection.connection_other" id="      connection_other" class="form-control" name="connection_other" required />
                          <p style="color:red;" ng-show="connectionform.connection_other.$invalid && !connectionform.connection_other.$pristine" class="help-block"> required</p>
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-5 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-4">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button ng-click="insertdata(Connection)" ng-disabled="!connectionform.$valid" id="send" type="submit" class="btn btn-success">Submit</button>

                          {{msg}}
                        </div>
                      </div>
                    </form>
                     </div>
</div>