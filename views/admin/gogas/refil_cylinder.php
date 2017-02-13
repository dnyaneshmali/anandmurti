<div class="refill-cy">
<h1>Refil Cylinder</h1>
<div class="refilform" ng-controller="Refilcylinderctrl">
<form name="refilform" class="form-horizontal form-label-left" nonvalidate>
                     <!--  <span class="section">Personal Info</span> -->

<datalist  id="gcustomerlist">
    <option ng-repeat="gclist in connectiondetails" value="{{gclist.gcustomer_name}}">{{gclist.gcustomer_name}}</option>
</datalist>
  
  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select Customer <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-list-ul"></i></span>
                          <input type="text" ng-model="refil.customer" id="customer" class="form-control" name="customer" list="gcustomerlist" required />
                        </div>
                        </div>
                       </div> 

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select Connection <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-list-ul"></i></span>
                          <input type="text" ng-model="refil.connection" id="connection" class="form-control" name="connection" required />
                        </div>
                        </div>
                       </div> 


                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select Cylinder <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-list-ul"></i></span>
                          <input type="text" ng-model="refil.cylinder" id="cylinder" class="form-control" name="cylinder"  required />
                        </div>
                        </div>
                       </div> 
                      
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="      connection_cylinder_deposit">Refil Payment Details<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                          <input type="text" ng-model="refil.connection_cylinder_deposit" id="    connection_cylinder_deposit" class="form-control" name="connection_cylinder_deposit" required />
                        </div>
                          <p class="val-style" ng-show="refilform.connection_cylinder_deposit.$invalid && !connectionform.connection_cylinder_deposit.$pristine" class="help-block"> required</p>
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="      connection_depreciation"> Refil Amount<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                          <input type="text" ng-model="refil.connection_depreciation" id="    connection_depreciation" class="form-control" name="connection_depreciation" required />
                        </div>
                          <p class="val-style" ng-show="refilform.connection_depreciation.$invalid && !connectionform.connection_depreciation.$pristine" class="help-block"> required</p>
                        </div>
                      </div>
                           <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="connection_other">Connection Other<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-list-ul"></i></span>
                          <input type="text" ng-model="refil.connection_other" id="connection_other" class="form-control" name="connection_other" required />
                        </div>
                          <p class="val-style" ng-show="refilform.connection_other.$invalid && !connectionform.connection_other.$pristine" class="help-block"> required</p>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-5 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-4">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button ng-click="insertdata(refil)" ng-disabled="!connectionform.$valid" id="send" type="submit" class="btn btn-success">Submit</button>

                          {{msg}}
                        </div>
                      </div>
                    </form>
                     </div>
</div>