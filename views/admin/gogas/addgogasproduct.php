<h1>Add Aqua Products</h1>
<div class="addgogasproductform" ng-controller="Addgogasproductctrl">
<form name="addgogasproductform" class="form-horizontal form-label-left" nonvalidate>

                    <!--   <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                      </p> -->
                      <span class="section">Personal Info</span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="customer_name">Product Name <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="addgogasproduct.product_name" id="product_name" class="form-control" name="product_name" required />
                          
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product price <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="addgogasproduct.product_prize" id="product_prize" class="form-control" name="product_prize" required />
                         
                        </div>
                      </div>

                     
                     

                      

                      
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" ng-model="addgogasproduct.Product_category" name="Product_category" >
                            <option value="" selected>Product category</option>
                            <option value="cylinder">cylinder</option>
                            <option value="cooktop">cooktop</option>
                            <option value="pipe">pipe</option>
                            <option value="lighter">lighter</option>
                          </select>
                          
                        </div>
                      </div>
                       
                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product company <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="addgogasproduct.Product_company" id="Product_company" class="form-control" name="Product_company" required />
                         
                        </div>
                      </div>

                     
                           <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product tax <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12" >
                          <input type="text" ng-model="addgogasproduct.product_tax" id="product_tax" class="form-control" name="Product_tax" required />
                        
                        </div>
                      </div>

                       

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button ng-click="insertdata(addgogasproduct)" ng-disabled="!addgogasproductform.$valid" id="send" type="submit" class="btn btn-success">Submit</button>

                          {{msg}}
                        </div>
                      </div>
                    </form>
                     </div>
