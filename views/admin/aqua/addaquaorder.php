<h1>Add Aqua Order</h1>
<div class="addaquorderform" ng-controller="addaquaorderctrl">
<form name="addaquorderform" class="form-horizontal form-label-left" nonvalidate>

                    <!--   <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                      </p> -->
                      <span class="section">Personal Info</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="customer_name">Order Name <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="addaquaorder.order_name" id="order_name" class="form-control" name="order_name" required />
                          
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Order Address<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="addaquaorder.order_address" id="product_prize" class="form-control" name="order_address" required />
                         
                        </div>
                      </div>


                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Quantity<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="addaquaorder.quantity" id="product_prize" class="form-control" name="order_address" required />
                         
                        </div>
                      </div>

                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Order time<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="time" ng-model="addaquaorder.order_time" id="order_time" class="form-control" name="order_time" required />
                         
                        </div>
                      </div>

                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Order Date<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="date" ng-model="addaquaorder.order_date" id="order_date" class="form-control" name="order_date" required />
                         
                        </div>
                      </div>


                      

                      
                       
                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Advance payment <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="addaquaorder.advance_payment" id="advance_payment" class="form-control" name="advance_payment" required />
                         
                        </div>
                      </div>

                     
                           <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Remaining Payment <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="addaquaorder.remaining_payment" id="remaining_payment" class="form-control" name="remaining_payment" required />
                        
                        </div>
                      </div>

                       

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button ng-click="insertdata(addaquaorder)" ng-disabled="!addaquaorderform.$valid" id="send" type="submit" class="btn btn-success">save</button>

                         <!--  {{msg}} -->
                        </div>
                      </div>
                    </form>
                     </div>
