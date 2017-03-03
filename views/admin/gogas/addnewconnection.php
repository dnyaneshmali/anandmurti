<div class="addnew-conn">

<h1>Add Gogas Connection</h1>
<div class="connectionform" ng-controller="Addnewconnectionctrl">
<form name="connectionform" class="form-horizontal form-label-left" nonvalidate>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select Customer <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-list-ul "></i></span>
                          <select class="form-control" ng-model="Connection.customer" name="customer"  ng-required="true">
                            <option ng-repeat="gclist in gcustomerdata" value="{{gclist.gcustomer_id}}">{{gclist.gcustomer_name}}</option>
                          </select>
                        </div>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Connection Type <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-list-ul "></i></span>
                          <select class="form-control" ng-model="Connection.c_type" name="c_type"  ng-required="true">
                            <option value="1" selected>2 Kg</option>
                            <option value="2">5 Kg</option>
                            <option value="3">12 Kg</option>
                          </select>
                        </div>
                        </div>
                      </div>

                      
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="connection_cylinder_deposit">Connection Cylinder Deposite<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                          <input type="text" placeholder="Connection Cylinder Deposite" ng-pattern="/^\d+$/" ng-model="Connection.connection_cylinder_deposit" id="    connection_cylinder_deposit" class="form-control" name="connection_cylinder_deposit" required />
                        </div>
                          <p class="val-style" ng-show="connectionform.connection_cylinder_deposit.$invalid && !connectionform.connection_cylinder_deposit.$pristine" class="help-block">Accept digits only</p>
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="connection_depreciation">connection Depreciation<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                          <input type="text" placeholder=" connection depreciation" ng-pattern="/^\d+$/" ng-model="Connection.connection_depreciation" id=" connection_depreciation" class="form-control" name="connection_depreciation" required />
                        </div>
                          <p class="val-style" ng-show="connectionform.connection_depreciation.$invalid && !connectionform.connection_depreciation.$pristine" class="help-block">accept only digits required</p>
                        </div>
                      </div>
                    

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="      connection_stamp">connection stamp<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-list-ul"></i></span>
                          <input type="text" placeholder="connection stamp" ng-model="Connection.connection_stamp" id="connection_stamp" class="form-control" name="connection_stamp" required />
                        </div>
                          <p class="val-style" ng-show="connectionform.connection_stamp.$invalid && !connectionform.connection_stamp.$pristine" class="help-block"> required</p>
                        </div>
                      </div>


                           <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="connection_other">connection other<span class="required"></span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-list-ul"></i></span>
                          <input type="text" placeholder="connection other" ng-model="Connection.connection_other" id="connection_other" class="form-control" name="connection_other" required />
                        </div>
                          <!-- <p class="val-style" ng-show="connectionform.connection_other.$invalid && !connectionform.connection_other.$pristine" class="help-block"> required</p> -->
                        </div>
                      </div>

            


                           <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="connection_tube">connection passbook<span class="required">*</span>
                        </label>
                            <div class="radio form-group col-md-6 col-sm-6 col-xs-12" >
                             
                              <span style="margin-right:10px"><label>
                              <input type="radio" checked="" ng-model="Connection.connection_passbook" value="Yes" id="Yes" name="connection_passbook" required/>yes </label></span>
                              <label>
                              <input type="radio" ng-model="Connection.connection_passbook" value="No" id="No" name="connection_passbook" required/>No </label>
                            </div>
                              
                            </div>
                            
                      <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="connection_tube">connection Hotplate<span class="required">*</span>
                        </label>
                            <div class="radio form-group col-md-6 col-sm-6 col-xs-12" >
                          

                             <span style="margin-right:10px"> <label>
                              <input type="radio" checked="" ng-model="Connection.connection_hotplate" value="Yes" id="Yes" name="connection_hotplate" required/>yes </label></span>
                              <label>
                              <input type="radio" ng-model="Connection.connection_hotplate" value="No" id="No" name="connection_hotplate" required/>No </label>
                           
                              </div>
                            </div>

                           <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="connection_tube">connection tube<span class="required">*</span>
                        </label>
                            <div class="radio form-group col-md-6 col-sm-6 col-xs-12" >
                        <span style="margin-right:10px">
                              <label>
                              <input type="radio" checked="" ng-model="Connection.connection_tube" value="Yes" id="Yes" name="connection_tube" required/>yes </label></span>
                              <label>
                              <input type="radio" ng-model="Connection.connection_tube" value="No" id="No" name="connection_tube" required/>No </label>
                           
                              </div>
                              </div>
              
                             <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="connection_tube">connection Lighter<span class="required">*</span>
                        </label>
                            <div class="radio form-group col-md-6 col-sm-6 col-xs-12" >
                              <div class="input-group">
                               <span style="margin-right:13px"> <label>
                              <input type="radio" checked="" ng-model="Connection.connection_lighter" value="Yes" id="Yes" name=" connection_lighter" required/>yes </label></span>
                              <label>
                              <input type="radio" ng-model="Connection.connection_lighter" value="No" id="No" name="connection_lighter" required/> No </label>
                            </div>
                              </div>
                            </div>

                             <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="connection_tcost">connection Cost<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                          <input type="text" placeholder=" connection cost" ng-pattern="/^\d+$/" ng-model="Connection.connection_tcost" id=" connection_tcost" class="form-control" name="connection_tcost" required />
                        </div>
                          <p class="val-style" ng-show="connectionform.connection_tcost.$invalid && !connectionform.connection_tcost.$pristine" class="help-block">accept only digits required</p>
                        </div>
                      </div>



                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-5 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-4">
                          <button type="submit" ng-click="reset()"  ng-disabled="!connectionform.$valid" class="btn btn-primary">Cancel</button>
                          <button ng-click="insertdata(Connection)" ng-disabled="!connectionform.$valid" id="send" type="submit" class="btn btn-success">Submit</button>

                          {{msg}}
                        </div>
                      </div>
                    </form>
                     </div>
</div>
