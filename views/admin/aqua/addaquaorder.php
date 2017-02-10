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
                          <input type="text" ng-model="addaquaorder.customer_name" id="customer_name" class="form-control" name="customer_name" list="acustomerlist" required />
                          
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" ng-model="addaquaorder.jar_type" id="jar_type" class="form-control" name="jar_type" list="jarlist" required />
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="order_quantity">Order Quantity<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="addaquaorder.order_quantity" id="order_quantity" class="form-control" name="order_quantity" required />
                         
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="order_price">Order Price<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="addaquaorder.order_price" id="order_price" class="form-control" name="order_price" required />
                         
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="order_address">Delivery Address<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="addaquaorder.order_address" id="order_address" class="form-control" name="order_address" required />
                         
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="order_date">Delivery Date<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="addaquaorder.order_date" id="order_date" class="form-control" name="order_date" required />
                         
                        </div>
                      </div>

                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="order_time">Order Time<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="addaquaorder.order_time" id="order_time" class="form-control" name="order_time" required />
                         
                        </div>
                      </div>
                           
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" ng-model="addaquaorder.vehicle" id="vehicle" class="form-control" name="vehicle" list="vehiclelist" required />
                        </div>
                      </div>
                       

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-5 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-4">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button ng-click="insertdata(addaquaorder)" id="send" type="submit" class="btn btn-success">Submit</button>
                           {{msg}}
                        </div>
                      </div>
                    </form>
                     </div>
                  </div>
