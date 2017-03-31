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
                          <select class="form-control" ng-model="customer" name="customer"  ng-required="true">
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
                          <select class="form-control" ng-model="c_type" name="c_type"  ng-required="true">
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
                          <input type="text" placeholder="Connection Cylinder Deposite" ng-pattern="/^\d+$/" ng-model="connection_cylinder_deposit" id="connection_cylinder_deposit" class="form-control" name="connection_cylinder_deposit" >
                        </div>
                          <p class="val-style" ng-show="connectionform.connection_cylinder_deposit.$invalid && !connectionform.connection_cylinder_deposit.$pristine" class="help-block">Accept digits only</p>
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="connection_depreciation">Connection Depreciation<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                          <input type="text" placeholder="connection depreciation" ng-pattern="/^\d+$/" ng-model="connection_depreciation" id="connection_depreciation" class="form-control" name="connection_depreciation" >
                        </div>
                          <p class="val-style" ng-show="connectionform.connection_depreciation.$invalid && !connectionform.connection_depreciation.$pristine" class="help-block">accept only digits required</p>
                        </div>
                      </div>
                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="connection_other">Connection Other<span class="required"></span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-list-ul"></i></span>
                          <input type="text" placeholder="connection other" ng-model="connection_other" id="connection_other" class="form-control" name="connection_other" >
                        </div>
                           <p class="val-style" ng-show="connectionform.connection_other.$invalid && !connectionform.connection_other.$pristine" class="help-block"> required</p>
                        </div>
                      </div>
                           <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="connection_tube">Connection Passbook<span class="required">*</span>
                            </label>
                            <div class="radio form-group col-md-6 col-sm-6 col-xs-12" >
                             
                              <span style="margin-right:10px"><label>
                              <input type="radio" checked="" ng-model="connection_passbook" value="Yes" id="Yes" name="connection_passbook" required/>yes </label></span>
                              <label>
                              <input type="radio" ng-model="connection_passbook" value="No" id="No" name="connection_passbook" required/>No </label>
                            </div>
                              
                            </div>
                        <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="connection_stamp">Connection Stamp<span class="required">*</span>
                        </label>
                            <div class="radio form-group col-md-6 col-sm-6 col-xs-12" >
                             
                              <span style="margin-right:10px"><label>
                              <input type="radio" checked="" ng-model="connection_stamp" value="Yes" id="Yes" name="connection_stamp" required/>yes </label></span>
                              <label>
                              <input type="radio" ng-model="connection_stamp" value="No" id="No" name="connection_stamp" required/>No </label>
                            </div>
                              
                            </div>
                      <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="connection_tube">Connection Hotplate<span class="required">*</span>
                        </label>
                            <div class="radio form-group col-md-6 col-sm-6 col-xs-12">
                             <span style="margin-right:10px"> <label>
                              <input type="radio" checked="" ng-model="connection_hotplate" value="Yes" id="Yes" name="connection_hotplate" ng-change="chkhotplate(connection_hotplate,connection_tprice)" required/>yes </label></span>
                              <label>
                              <input type="radio" ng-model="connection_hotplate" value="No" id="No" name="connection_hotplate" ng-change="chkhotplate(connection_hotplate,connection_tprice)" required/>No </label>
                           
                              </div>
                            </div>
                           <div class="item form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="connection_tube">Connection Tube<span class="required">*</span>
                        </label>
                            <div class="radio form-group col-md-6 col-sm-6 col-xs-12" >
                        <span style="margin-right:10px">
                              <label>
                              <input type="radio" checked="" ng-model="connection_tube" value="Yes" id="Yes" name="connection_tube" required/>yes </label></span>
                              <label>
                              <input type="radio" ng-model="connection_tube" value="No" id="No" name="connection_tube" required/>No </label>
                              </div>
                              </div>
              
                             <div class="item form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="connection_lighter">Connection Lighter<span class="required">*</span>
                        </label>
                            <div class="radio form-group col-md-6 col-sm-6 col-xs-12" >
                              <div class="input-group">
                               <span style="margin-right:13px"> <label>
                              <input type="radio" checked="" ng-model="connection_lighter" value="Yes" id="Yes" name="connection_lighter" required/>yes </label></span>
                              <label>
                              <input type="radio" ng-model="connection_lighter" value="No" id="No" name="connection_lighter" required/> No </label>
                            </div>
                              </div>
                            </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="connection_tprice">Total Price<span class="required"></span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-list-ul"></i></span>
                          <input type="text" placeholder="Connection Total Price" ng-model="connection_tprice" id="connection_tprice" class="form-control" name="connection_tprice" required />
                        </div>
                          <p class="val-style" ng-show="connectionform.connection_tprice.$invalid && !connectionform.connection_tprice.$pristine" class="help-block"> required</p> 
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-5 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-4">
                          <button type="reset" ng-click="reset()" ng-disabled="!connectionform.$valid"  class="btn btn-primary">Cancel</button>
                          <button ng-click="insertdata()" id="send" type="submit" ng-disabled="!connectionform.$valid" class="btn btn-success">Submit</button>
                          {{msg}}
                        </div>
                      </div>
                    </form>
                     </div>
</div>
