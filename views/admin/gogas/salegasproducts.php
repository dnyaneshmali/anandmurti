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
                          <select class="form-control" ng-model="product" name="product"  ng-required="true" ng-change="changedspname(product)">
                            <option ng-repeat="pinwardslist in getinwardsproducts" value="{{pinwardslist.product_id}}">{{pinwardslist.product_name}}</option>
                          </select>
                        </div>
                        <div ng-if="availquantity>0">
                        <span ng-if="availquantity">Total Available Quantity : {{availquantity}}</span>
                        <div ng-if="remainquantity>0">
                        <span ng-if="remainquantity">Remaining Quantity : {{remainquantity}}</span>
                        </div>
                        <span class="text-danger" ng-if="remainquantity<0"><strong>Entered quantity Should not  be greater than available quantity</strong></span>
                        </div>
                        <span class="text-danger" ng-if="availquantity==0"><strong>Out Of Stock</strong></span>
                        </div>
                      </div>
                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product Quantity<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                          <span class="input-group-addon"><i class="fa fa-flask"></i></span>
                          <input type="text" placeholder="Product Quantity" ng-pattern="/^\d+$/"  ng-model="product_quantity" ng-change="changedsquantity(product_quantity,product)" id="product_quantity" class="form-control" name="product_quantity" required />
                         </div>
                          <p class="val-style" ng-show="salegasproductform.product_quantity.$invalid && !salegasproductform.product_quantity.$pristine" class="help-block"> Prize required accept only digits.</p>
                        </div>
                      </div>
                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product Price<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                          <input type="text" placeholder="Product Price" ng-pattern="/^\d+$/"  ng-model="Product_price" readonly id="Product_price" class="form-control" name="Product_price" required />
                         </div>
                         <p class="val-style" ng-show="salegasproductform. Product_price.$invalid && !salegasproductform.Product_price.$pristine" class="help-block"> Prize required accept only digits.</p>
                        </div>
                      </div>
                        <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Product Total Price<span class="required">*</span>
                        </label>
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                           <span class="input-group-addon"><i class="fa fa-rupee"></i></span>
                          <input type="text" placeholder="Product Total Price" ng-pattern="/^\d+$/" ng-model="Product_tprice" readonly id="Product_tprice" class="form-control" name="Product_tprice" required />
                         </div>
                          <p class="val-style" ng-show="salegasproductform.Product_tprice.$invalid && !salegasproductform.Product_tprice.$pristine" class="help-block"> Prize required accept only digits.</p>
                        </div>
                      </div>

                       <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="textarea">Select Customer <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-list-ul "></i></span>
                          <select class="form-control" ng-model="customer" name="customer"  ng-required="true">
                            <option ng-repeat="gclist in gcustomerdata" value="{{gclist.gcustomer_id}}">{{gclist.gcustomer_name}}</option>
                          </select>
                        </div>
                        </div>
                      </div>


                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-5 col-sm-6 col-sm-offset-3 col-xs-6 col-xs-offset-4">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button ng-click="insertdata()" ng-disabled="!salegasproductform.$valid" id="send" type="submit" class="btn btn-success">Submit</button>
                          {{msg}}
                        </div>
                      </div>
                    </form>
                     </div>
                    </div>
