<div class="adda-order">
<h1>Add Aqua Order</h1>
<div class="addaquorderform" ng-controller="Addaquaorderctrl">
<form name="addaquorderform" class="form-horizontal form-label-left" nonvalidate>
              <!--   <datalist  id="acustomerlist">
    <option ng-repeat="clist in customerdata" value="{{clist.acustomer_name}}">{{clist.acustomer_name}}</option>
</datalist> -->

<datalist  id="vehiclelist">
    <option ng-repeat="vlist in vehicledata" value="{{vlist.vehicle_owner_name}}">{{vlist.vehicle_owner_name}}</option>
</datalist>

<datalist  id="jarlist">
    <option ng-repeat="jlist in jardata" value="{{jlist.jar_type}}">{{jlist.jar_type}}</option>
</datalist>

<div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select Customer <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-list-ul "></i></span>
                          <select class="form-control" ng-model="addaquaorder.customer_id" name="customer_id"  ng-required="true">
                            <option ng-repeat="clist in customerdata" value="{{clist.acustomer_id}}">{{clist.acustomer_name}}</option>
                          </select>
                        </div>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select Jar type <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-list-ul "></i></span>
                          <select ng-change="changedjar(addaquaorder.jar_id)" class="form-control" ng-model="addaquaorder.jar_id" name="jar_id"  ng-required="true">
                          <option ng-repeat="jlist in jardata" value="{{jlist.jar_id}}">{{jlist.jar_type}}</option>
                          </select>
                        </div>
                        </div>
                      </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="order_quantity">Order Quantity<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-dropbox"></i></span>
                          <input ng-change="changedjarqt(addaquaorder.order_quantity,addaquaorder.jar_id)" type="text" placeholder="Order Quantity" class="form-control" ng-model="addaquaorder.order_quantity" ng-pattern="/^\d+$/" id="order_quantity" class="form-control" name="order_quantity" required />
                        </div>
                          <p class="val-style" ng-show="addaquorderform.order_quantity.$invalid && !addaquorderform.order_quantity.$pristine" class="help-block">accept only digits required</p>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="order_price">Order Price<span class="required">*</span>
                        </label>

                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                          <input readonly type="text" placeholder="Order Price" class="form-control" ng-model="addaquaorder.order_price" ng-pattern="/^\d+$/" id="order_price" class="form-control" name="order_price" required />
                        </div>
                           <p class="val-style" ng-show="addaquorderform.order_price.$invalid && !addaquorderform.order_price.$pristine" class="help-block">accept only digits required</p>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="order_address">Delivery Address<span class="required">*</span>
                        </label>
                <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-home"></i></span>
                          <input type="text" placeholder="Delivery Address" class="form-control" ng-model="addaquaorder.order_address" id="order_address" class="form-control" name="order_address" required />
                        </p>
                      </div>
                          <p class="val-style" ng-show="addaquorderform.order_address.$invalid && !addaquorderform.order_address.$pristine" class="help-block">required</p>
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="order_date">Delivery Date<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                          <input type="date" placeholder="Delivery Date" class="form-control" ng-model="addaquaorder.order_date" id="order_date" class="form-control" name="order_date" required />
                        </div>
                             <p class="val-style" ng-show="addaquorderform.order_date.$invalid && !addaquorderform.order_date.$pristine" class="help-block">date required</p>
                        </div>
                      </div>

                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="order_time">Order Time<span class="required">*</span>
                        </label>
          <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                          <input type="time" placeholder="Order time" class="form-control" ng-model="addaquaorder.order_time" id="order_time" class="form-control" name="order_time" required />
                        </div>
                          <p class="val-style" ng-show="addaquorderform.order_time.$invalid && !addaquorderform.order_time.$pristine" class="help-block"> Time required</p>                       
                        </div>
                      </div>
                           
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select Vehicle name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-list-ul"></i></span>
                          <input type="text" placeholder="select vehicle name" class="form-control" ng-model="addaquaorder.vehicle" id="vehicle" class="form-control" name="vehicle" list="vehiclelist" required />
                        </div>
                          <p class="val-style" ng-show="addaquorderform.vehicle.$invalid && !addaquorderform.vehicle.$pristine" class="help-block"> time required</p>
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-5 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-4">
                       <!--   <button type="submit" ng-click="reset()" class="btn btn-primary">Cancel</button>
                          <button ng-click="insertdata(addaquaorder)" id="send" type="submit" class="btn btn-success">Submit</button> -->
                          <button type="submit" ng-click="reset()" ng-disabled="!addaquorderform.$valid" class="btn btn-primary">Cancel</button>
                          <button ng-click="insertdata(addaquaorder)" ng-disabled="!addaquorderform.$valid"  id="send" type="submit" class="btn btn-success">Submit</button>
                           {{msg}}
                        </div>
                      </div>
                    </form>
                     </div>
                  </div>
