<div class="addveh-dtls">
<h1>Add Vehicle Details</h1>
<div class="addvehicleform" ng-controller="Addvehiclectrl">
<form name="addvehicleform" class="form-horizontal form-label-left" nonvalidate>

                   
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="vowner_name">Vehicle Owner Name <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input type="text" placeholder="Vehicle owner name" class="form-control"ng-model="vdetails.vowner_name" id="vowner_name" class="form-control" name="vowner_name" required />
                          </div>
                          <p class="val-style" ng-show="addvehicleform.vowner_name.$invalid && !addvehicleform.vowner_name.$pristine" class="help-block"> required.</p>
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Vehicle Number<span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-truck"></i></span>
                          <input type="text" placeholder="Vehicle Number" class="form-control" ng-model="vdetails.vehicle_number" id="vehicle_number" class="form-control" name="vehicle_number" required />
                           </div>
                          <p class="val-style" ng-show="addvehicleform.vehicle_number.$invalid && !addvehicleform.vehicle_number.$pristine" class="help-block"> required.</p>     
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Vehicle Contact Number <span class="required">*</span>
                        </label>
                      <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                          <input type="text" placeholder="Vehicle Contact number" class="form-control" ng-pattern="/^[0-9]{10}$/"  ng-model="vdetails.vehicle_contact_number" id="vehicle_contact_number" class="form-control" name="vehicle_contact_number" required/>
                          </div>
       <p class="val-style" ng-show="addvehicleform.vehicle_contact_number.$invalid && !addvehicleform.vehicle_contact_number.$pristine" class="help-block"> required 10 digit number.</p>
                           
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-5 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-4">
                          <button type="submit" ng-click="reset()" class="btn btn-primary">Cancel</button>
                          <button ng-click="insertdata(vdetails)" id="send" ng-disabled="!addvehicleform.$valid" type="submit" class="btn btn-success">Submit</button>

                          {{msg}}
                        </div>
                      </div>
                    </form>
                     </div>
</div>
