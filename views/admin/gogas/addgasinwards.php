<div class="inwards-entry">

<h1>Add New Entry</h1>
<div class="inwardsform" ng-controller="Addgasinwardsctrl">
<form name="inwardsform" class="form-horizontal form-label-left" nonvalidate>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select Product <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-list-ul "></i></span>
                          <select class="form-control" ng-model="gasinwards.product" name="product"  ng-required="true">
                            <option ng-repeat="plist in allproducts" value="{{plist.product_id}}">{{plist.product_name}}</option>
                          </select>
                        </div>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pquantity">Product Quantity<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                          <input type="text" placeholder="Product Quantity" ng-pattern="/^\d+$/" ng-model="gasinwards.pquantity" id="pquantity" class="form-control" name="pquantity" required />
                        </div>
                          <p class="val-style" ng-show="inwardsform.pquantity.$invalid && !inwardsform.pquantity.$pristine" class="help-block">Accept digits only</p>
                        </div>
                      </div>
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tprice">Total Price<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                          <input type="text" placeholder=" Total Price" ng-model="gasinwards.tprice" id="tprice" class="form-control" name="tprice" required />
                        </div>
                          <p class="val-style" ng-show="inwardsform.tprice.$invalid && !inwardsform.tprice.$pristine" class="help-block"> required</p>
                        </div>
                      </div>
                    
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="distributor_name">Distributor Name<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input type="text" placeholder="Distributor Name" ng-model="gasinwards.distributor_name" id="distributor_name" class="form-control" name="distributor_name" required />
                        </div>
                          <p class="val-style" ng-show="inwardsform.distributor_name.$invalid && !inwardsform.distributor_name.$pristine" class="help-block"> required</p>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select Vehicle<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-list-ul "></i></span>
                          <select class="form-control" ng-model="gasinwards.vehicle" name="vehicle"  ng-required="true">
                            <option ng-repeat="vlist in vehiclesdata" value="{{vlist.gvehicle_id}}">{{vlist.gvehicle_owner_name}}</option>
                          </select>
                        </div>
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-5 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-4">
                          <button type="submit" ng-click="reset()" class="btn btn-primary">Cancel</button>
                          <button ng-click="insertdata(gasinwards)" ng-disabled="!inwardsform.$valid" id="send" type="submit" class="btn btn-success">Submit</button>

                          {{msg}}
                        </div>
                      </div>
                    </form>
                     </div>
</div>
