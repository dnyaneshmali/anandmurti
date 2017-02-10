<h1>Add Aqua Customers</h1>
<div class="addvehicleform" ng-controller="Addvehiclectrl">
<form name="addvehicleform" class="form-horizontal form-label-left" nonvalidate>

                    <!--   <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                      </p> -->
                      <span class="section">Personal Info</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="vowner_name">Vehicle Owner Name <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="vdetails.vowner_name" id="vowner_name" class="form-control" name="vowner_name" required />
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Vehicle Number<span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="vdetails.vehicle_number" id="vehicle_number" class="form-control" name="vehicle_number" required />
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Vehicle Contact Number <span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="vdetails.vehicle_contact_number" ng-pattern="/^[0-9]{1,10}$/" id="vehicle_contact_number" class="form-control" name="vehicle_contact_number"
       required/>
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button ng-click="insertdata(vdetails)" id="send" type="submit" class="btn btn-success">Submit</button>

                          {{msg}}
                        </div>
                      </div>
                    </form>
                     </div>
