
<div class="addgo-prod">
<h1>Sale Gogas Products</h1>
<div class="salegasproductform" ng-controller="Salegasproductctrl">
<form name="salegasproductform" class="form-horizontal form-label-left" nonvalidate>
                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select Product <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-list-ul "></i></span>
                          <select class="form-control" ng-model="salegasproduct.product" name="product"  ng-required="true">
                            <option ng-repeat="pinwardslist in getinwardsproducts" value="{{pinwardslist.product_id}}">{{pinwardslist.product_name}}</option>
                          </select>
                        </div>
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product Quantity<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                          <input type="text" placeholder="Product Quantity" ng-pattern="/^\d+$/"  ng-model="salegasproduct.product_quantity" id="product_quantity" class="form-control" name="product_quantity" required />
                         </div>
                          <p class="val-style" ng-show="salegasproductform.product_quantity.$invalid && !salegasproductform.product_quantity.$pristine" class="help-block"> Prize required accept only digits.</p>
                        </div>
                      </div>
                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product Price<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-building"></i></span>
                          <input type="text" placeholder="Product Price" ng-pattern="/^\d+$/"  ng-model="salegasproduct.Product_price" id="Product_price" class="form-control" name="Product_price" required />
                         </div>
                         <p class="val-style" ng-show="salegasproductform. Product_price.$invalid && !salegasproductform.Product_price.$pristine" class="help-block"> Prize required accept only digits.</p>
                        </div>
                      </div>

                     
                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product Total Price<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-building"></i></span>
                          <input type="text" placeholder="Product Total Price" ng-pattern="/^\d+$/" ng-model="salegasproduct.Product_tprice" id="Product_tprice" class="form-control" name="Product_tprice" required />
                         </div>
                          <p class="val-style" ng-show="salegasproductform.Product_tprice.$invalid && !salegasproductform.Product_tprice.$pristine" class="help-block"> Prize required accept only digits.</p>
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-5 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-4">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button ng-click="insertdata(salegasproduct)" ng-disabled="!salegasproductform.$valid" id="send" type="submit" class="btn btn-success">Submit</button>

                          {{msg}}
                        </div>
                      </div>
                    </form>
                     </div>
                    </div>
