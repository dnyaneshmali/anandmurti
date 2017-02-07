<h1>Add Gogas Connection</h1>
<div class="connectionform" ng-controller="Addnewconnectionctrl">
<form name="connectionform" class="form-horizontal form-label-left" nonvalidate>

                    <!--   <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                      </p> -->
                      <span class="section">Personal Info</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" ng-model="Connection" name="" ng-class="{'has-errors' : addadminform.userrole.$invalid, 'no-errors' : addadminform.userrole.$valid}" ng-required="true">
                            <option value="" selected>Choose customer for connection</option>
                            <option value=""></option>
                            <option value=""></option>
                          </select>
                          <div class="error-container" ng-show="addadminform.userrole.$dirty && addadminform.userrole.$invalid" ng-messages="addadminform.userrole.$error">
                         <div style="color:red;" class="error" ng-message="required">select Userrole </div>
                          </div>
                        </div>
                      </div>





                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="connection_cylinder_deposit ">connection cylinder deposit  <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="connection.connection_cylinder_deposit " id="connection_cylinder_deposit " class="form-control" name="connection_cylinder_deposit" required />
                          <p style="color:red;" ng-show="connectionform.connection_cylinder_deposit .$invalid && !connectionform.connection_cylinder_deposit  .$pristine" class="help-block">Cylinder  Deposit is required for new connection.</p>
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="    connection_depreciation">connection depreciation <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="connection.connection_depreciation" id="   connection_depreciation" class="form-control" name=" connection_depreciation" required />
                          <p style="color:red;" ng-show="connectionform.connection_depreciation.$invalid && !connectionform.connection_depreciation.$pristine" class="help-block"> required</p>
                        </div>
                      </div>
                          
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="    connection_depreciation">connection hotplate <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="connection.connection_hotplate" id="   connection_hotplate" class="form-control" name=" connection_hotplate" required />
                          <p style="color:red;" ng-show="connectionform.connection_hotplate.$invalid && !connectionform.connection_hotplate.$pristine" class="help-block"> required</p>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="    connection_depreciation">connection passbook <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="connection.connection_passbook" id="   connection_passbook" class="form-control" name="connection_passbook" required />
                          <p style="color:red;" ng-show="connectionform.connection_passbook.$invalid && !connectionform.connection_passbook.$pristine" class="help-block"> required</p>
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="      connection_stamp">connection stamp<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="connection.connection_stamp" id="    connection_stamp" class="form-control" name="connection_stamp" required />
                          <p style="color:red;" ng-show="connectionform.connection_stamp.$invalid && !connectionform.connection_stamp.$pristine" class="help-block"> required</p>
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="      connection_tube">connection tube<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="connection.connection_tube" id="    connection_tube" class="form-control" name="connection_tube" required />
                          <p style="color:red;" ng-show="connectionform.connection_tube.$invalid && !connectionform.connection_tube.$pristine" class="help-block"> required</p>
                        </div>
                      </div>
                       

                         <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="        connection_lighter">connection lighter<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="connection.connection_lighter" id="      connection_lighter" class="form-control" name="connection_lighter" required />
                          <p style="color:red;" ng-show="connectionform.connection_lighter.$invalid && !connectionform.connection_lighter.$pristine" class="help-block"> required</p>
                        </div>
                      </div>

                        
                         

                           <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="        connection_other">connection_other<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="connection.connection_other" id="      connection_other" class="form-control" name="connection_other" required />
                          <p style="color:red;" ng-show="connectionform.connection_other.$invalid && !connectionform.connection_other.$pristine" class="help-block"> required</p>
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button ng-click="insertdata(Connection)" ng-disabled="!connectionform.$valid" id="send" type="submit" class="btn btn-success">Submit</button>

                          {{msg}}
                        </div>
                      </div>
                    </form>
                     </div>
