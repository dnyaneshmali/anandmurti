<div class="adda-order">
<h1>Add Aqua Order</h1>
<div class="addaquorderform" ng-controller="Addaquaorderctrl">
<form name="addaquorderform" class="form-horizontal form-label-left" nonvalidate>

                    <!--   <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                      </p> -->
                   <!--    <span class="section">Personal Info</span> -->
                 <datalist  id="acustomerlist">
    <option ng-repeat="clist in customerdata" value="{{clist.acustomer_name}}">{{clist.acustomer_name}}</option>
</datalist>

<datalist  id="vehiclelist">
    <option ng-repeat="vlist in vehicledata" value="{{vlist.vehicle_owner_name}}">{{vlist.vehicle_owner_name}}</option>
</datalist>

<datalist  id="jarlist">
    <option ng-repeat="jlist in jardata" value="{{jlist.jar_type}}">{{jlist.jar_type}}</option>
</datalist>

<!--
<div ng-repeat="clist in customerdata"> <div>{{clist.acustomer_name}}</div>
                          </div> -->
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="customer_name">Customer Name <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-user"></i></span>
                          <input type="text" placeholder=" Customer Name" class="form-control" ng-model="addaquaorder.customer_name" id="customer_name" class="form-control" name="customer_name" list="acustomerlist" required />
                        </div>
                          <p class="val-style" ng-show="addaquorderform.customer_name.$invalid && !addaquorderform.customer_name.$pristine" class="help-block">required</p>       
                       </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select Order Type <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-list-ul"></i></span>
                          <input type="text" placeholder="Select order type" class="form-control" ng-model="addaquaorder.jar_type" id="jar_type" class="form-control" name="jar_type" list="jarlist" required />
                        </div>
                          <p class="val-style" ng-show="addaquorderform.jar_type.$invalid && !addaquorderform.jar_type.$pristine" class="help-block">required</p>
                        </div>
                      </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="order_quantity">Order Quantity<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-dropbox"></i></span>
                          <input type="text" placeholder="Order Quantity" class="form-control" ng-model="addaquaorder.order_quantity" ng-pattern="/^\d+$/" id="order_quantity" class="form-control" name="order_quantity" required />
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
                          <input type="text" placeholder="Order Price" class="form-control" ng-model="addaquaorder.order_price" ng-pattern="/^\d+$/" id="order_price" class="form-control" name="order_price" required />
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
                          <p class="val-style" ng-show="addaquorderform.order_time.$invalid && !addaquorderform.order_time.$pristine" class="help-block"> time required</p>                       
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
                          <button type="submit" ng-click="reset()" class="btn btn-primary">Cancel</button>
                          <button ng-click="insertdata(addaquaorder)" ng-disabled="!addaquorderform.$valid"  id="send" type="submit" class="btn btn-success">Submit</button>
                           {{msg}}
                        </div>
                      </div>
                    </form>
                     </div>
                  </div>
