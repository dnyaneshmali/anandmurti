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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Payment details <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-list-ul "></i></span>
                          <select class="form-control" ng-model="refil.refil_payment_details" name="refil_payment_details" class="{'has-errors' : refilform.refil_payment_details.$invalid, 'no-errors' : refilform.refil_payment_details.$valid}" ng-required="true">
                             <option value="" selected>Payment details</option>
                            <option value="1" selected>Check</option>
                            <option value="Cash">Cash</option>
                            <option value="2">NEFT</option>
                            </select>
                        </div>
                        <div class="error-container" ng-show="refilform.refil_payment_details.$dirty && refilform.refil_payment_details.$invalid" ng-messages="refilform.refil_payment_details.$error">
                         <div class="val-style" class="error" ng-message="required">select payment details </div>
                          </div>
                        </div>
                      </div>

                        

                     <div ng-if="refil.refil_payment_details==1" class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="refil_payment_details">check Number <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                          <input type="text" ng-pattern="/^\d+$/" placeholder="Check id" class="form-control"ng-model="refil.check_neft_id" id="check_neft_id" class="form-control" name="check_neft_id" >
                          </div>
                         <p class="val-style" ng-show="refilform.check_neft_id.$invalid && !refilform.check_neft_id.$pristine" class="help-block">accept digits only required.</p>
                        </div>
                      </div>

 
                     <div ng-if="refil.refil_payment_details==1" class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="refil_payment_details">Bank Name<span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                          <input type="text" placeholder="Bank Name"  class="form-control" ng-model="refil.bank_name" id="bank_name" class="form-control" name="bank_name" required />
                           </div>
                          <p class="val-style" ng-show="refilform.bank_name.$invalid && !refilform.bank_name.$pristine" class="help-block"> required.</p>     
                        </div>
                      </div>


                      <div ng-if="refil.refil_payment_details==1" class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="refil_payment_details">IFSC code <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                          <input type="text" ng-pattern="/^\d+$/" placeholder="Enter IFSC code" class="form-control"ng-model="refil.ifsc_code" id="ifsc_code" class="form-control" name="   ifsc_code" >
                          </div>
                          <p class="val-style" ng-show="refilform.ifsc_code.$invalid && !refilform.ifsc_code.$pristine" class="help-block">accept digits only required.</p>
                        </div>
                      </div>


                     <div ng-if="refil.refil_payment_details==2" class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="refil_payment_details">NEFT Number <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                          <input type="text" ng-pattern="/^\d+$/" placeholder="NEFT Number" class="form-control"ng-model="refil.check_neft_id" id="check_neft_id" class="form-control" name="check_neft_id" >
                          </div>
                          <p class="val-style" ng-show="refilform.check_neft_id.$invalid && !refilform.check_neft_id.$pristine" class="help-block">accept digits only required.</p>
                        </div>
                      </div>


                       <div ng-if="refil.refil_payment_details==2" class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="refil_payment_details">Bank Name<span class="required">*</span>
                        </label>
                        <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                          <input type="text" placeholder="Bank Name"  class="form-control" ng-model="refil.bank_name" id="bank_name" class="form-control" name="bank_name" required />
                           </div>
                          <p class="val-style" ng-show="refilform.bank_name.$invalid && !refilform.bank_name.$pristine" class="help-block"> required.</p>     
                        </div>
                      </div>
                      

                       <div ng-if="refil.refil_payment_details==2" class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="refil_payment_details">IFSC code <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                          <input type="text" ng-pattern="/^\d+$/" placeholder="Enter IFSC code" class="form-control"ng-model="refil.ifsc_code" id="ifsc_code" class="form-control" name=" ifsc_code" >
                          </div>
                          <p class="val-style" ng-show="refilform.ifsc_code.$invalid && !refilform.ifsc_code.$pristine" class="help-block">accept digits only required.</p>
                        </div>
                      </div>









                      
                     <div  class="item form-group">
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