<div class="refill-cy">
<h1>Refill Cylinder</h1>
<div class="refilform" ng-controller="Refilcylinderctrl">
<form name="refilform" class="form-horizontal form-label-left" nonvalidate>
                     <!--  <span class="section">Personal Info</span> -->

  
  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select Customer <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-list-ul "></i></span>
                          <select class="form-control" ng-model="refil.customer" name="customer" ng-change="changedname(refil.customer)">
                            <option ng-repeat="clist in connectiondetails" value="{{clist.gcustomer_id}}">{{clist.gcustomer_name}}</option>
                          </select>
                        </div>
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Cylinder Type <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-list-ul "></i></span>
                          <select class="form-control" ng-model="refil.type" name="type" >
                            <option ng-repeat="uconn in userconnections" ng-if="uconn.connection_type==1" value="{{uconn.connection_type}}">2 Kg</option>
                            <option ng-repeat="uconn in userconnections" ng-if="uconn.connection_type==2" value="{{uconn.connection_type}}">5 Kg</option>
                            <option ng-repeat="uconn in userconnections" ng-if="uconn.connection_type==3" value="{{uconn.connection_type}}">12 Kg</option>
                          </select>
                        </div>
                        </div>
                      </div>


                  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="refil_payment_details">Refil payment details <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input type="text" placeholder="payment details" class="form-control" ng-model="refil.refil_payment_details" id="refil_payment_details"  name="refil_payment_details" required />
                          </div>
                          <p class="val-style" ng-show="refilform.refil_payment_details.$invalid && !refilform.refil_payment_details.$pristine" class="help-block"> required.</p>
                        </div>
                      </div>


                      
                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="refil_payment_details">Refil amount <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                          <input type="text" ng-pattern="/^\d+$/" placeholder="Refil amount" class="form-control"ng-model="refil.amount" id="refil_amount" class="form-control" name="amount" >
                          </div>
                          <p class="val-style" ng-show="refilform.amount.$invalid && !refilform.amount.$pristine" class="help-block">accept digits only required.</p>
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-5 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-4">
                          <button type="submit" ng-click="reset()"  ng-disabled="!refilform.$valid" class="btn btn-primary">Cancel</button>
                          <button ng-click="insertdata(refil)"   ng-disabled="!refilform.$valid" id="send" type="submit" class="btn btn-success">Submit</button>
                          {{msg}}
                        </div>
                      </div>
                    </form>
                     </div>
</div>