<div class="adda-prod">
<h1>Add Aqua Products</h1>
<div class="addaquaproductform" ng-controller="Addaquaproductctrl">
<form name="addaquaproductform" class="form-horizontal form-label-left" nonvalidate>

                    <!--   <p>For alternative validation library <code>parsleyJS</code> check out in the <a href="form.html">form page</a>
                      </p> -->
                      <!-- <span class="section">Personal Info</span>
 -->
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="customer_name">Product Name <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-dropbox"></i></span>
                          <input type="text" placeholder="Product Name" ng-model="addaquaproduct.product_name" id="product_name" class="form-control" name="product_name" required />
                          </div>
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product Price <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                          <input type="text" placeholder="Product Price" ng-model="addaquaproduct.product_prize" id="product_prize" class="form-control" name="product_prize" required />
                         </div>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select Products type  <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-list-ul"></i></span>
                          <select class="form-control" ng-model="addaquaproduct.Product_category" name="Product_category" >
                            <option value="" selected>Product category</option>
                            <option value="minaral">Mineral</option>
                            <option value="Normal">Normal</option>
                          </select>
                          </div>
                        </div>
                      </div>
                       
                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product company <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-building"></i></span>
                          <input type="text" placeholder="Product company" ng-model="addaquaproduct.Product_company" id="Product_company" class="form-control" name="Product_company" required />
                        </div>
                        </div>
                      </div>

                     
                           <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product tax <span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                          <input type="text" placeholder="Product Tax" ng-model="addaquaproduct.product_tax" id="product_tax" class="form-control" name="Product_tax" required />
                          </div>
                        </div>
                      </div>

                       

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-5 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-4">
                          <button type="submit" ng-click="reset()" class="btn btn-primary">Cancel</button>
                          <button ng-click="insertdata(addaquaproduct)" ng-disabled="!addaquaproductform.$valid" id="send" type="submit" class="btn btn-success">Submit</button>

                          {{msg}}
                        </div>
                      </div>
                    </form>
                     </div>
                  </div>
