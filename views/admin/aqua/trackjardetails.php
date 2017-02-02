<h1>Add Jar details</h1>
<div class="trackjardetails" ng-controller="trackjardetailsctrl">
<form name="trackjardetailsform" class="form-horizontal form-label-left" nonvalidate>

                    <!--   <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                      </p> -->
                      <span class="section">Jar Info</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="customer_name">Jar Quantity <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="trackjardetails.order_name" id="order_name" class="form-control" name="order_name" required />
                          
                        </div>
                      </div>
                    <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select jar type<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" ng-model="trackjardetails.jar_type" name="jar_type" >
                            <option value="" selected>Jar Type</option>
                            <option value="normal jar ">normal jar </option>
                            
                              <option value="cool jar">cool jar</option>
                              <option value="only water">only water</option>
                          </select>
                         
                        </div>
                      </div>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Price<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="trackjardetails.jar_price" id="jar_price" class="form-control" name="jar_price" required />
                         
                        </div>
                      </div>

                     

                     <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Date<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="date" ng-model="trackjardetails.jar_date" id="jar_date" class="form-control" name="jar_date" required />
                         
                        </div>
                      </div>


                      

                      
                       
                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Vehicle Number<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="trackjardetails.vehicle_no" id="vehicle_no" class="form-control" name="vehicle_no" required />
                         
                        </div>
                      </div>

                     
                           <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Vehicle Owner Name <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="trackjardetails.vehicle_owner_name" id="vehicle_owner_name" class="form-control" name="vehicle_owner_name" required />
                        
                        </div>
                      </div>

                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">contact no <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="trackjardetails.contact_no" id="contact_no" class="form-control" name="contact_no" required />
                        
                        </div>
                      </div>

                       

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button ng-click="insertdata(trackjardetails)" ng-disabled="!trackjardetailsform.$valid" id="send" type="submit" class="btn btn-success">save</button>

                         <!--  {{msg}} -->
                        </div>
                      </div>
                    </form>
                     </div>
