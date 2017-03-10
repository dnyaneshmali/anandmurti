<div class="userlist" ng-controller="Listsalegasproductctrl">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List Sold Gas Products</h2>
                    <div class="clearfix"></div>
                  </div>
                    </p> 
                   <div class="item form-group">
                       <!--  <label class="control-label col-md-3 col-sm-3 col-xs-12">Search for <span class="required">*</span>
                        </label> -->
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12 col-md-offset-6" >
                          <input type="text" ng-model="clisearch" id="clisearch" placeholder="&#xF002; Search for ..." name="clisearch" >
                          
                        </div>
                      </div>
                  <div class="x_content">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Product Name</th>
                          <th>Customer Name</th>
                          <th>Product Quantity</th>
                          <th>Product Price</th>
                          <th>Product Total Price</th>
                          <th>product Sold Date</th>
                          <th>Action</th>
                          <th>Invoice</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr ng-repeat="soldproduct in soldproducts | filter:clisearch" ng-form="subForm">
                          <td  ng-if="!isedit(soldproduct.sale_product_id)">{{soldproduct.product_name}}</td>
                          <td  ng-if="!isedit(soldproduct.sale_product_id)">{{soldproduct.gcustomer_name}}</td>
                          <td ng-if="!isedit(soldproduct.sale_product_id)">{{soldproduct.sale_product_quantity}}</td>
                          <td ng-if="!isedit(soldproduct.sale_product_id)">{{soldproduct.sale_product_price}}</td>
                          <td ng-if="!isedit(soldproduct.sale_product_id)">{{soldproduct.sale_total_price}}</td>
                          <td ng-if="!isedit(soldproduct.sale_product_id)">{{soldproduct.sale_product_date}}</td>

                           <td ng-if="!isedit(soldproduct.sale_product_id)">
                           <a data-toggle="tooltip" title="Delete"><button class="btn btn-danger" ng-click="deletesoldproduct(soldproduct.sale_product_id,$index);"><i class="fa fa-trash"></i></button></a>
                           <td><a data-toggle="tooltip" title="Complete"><button class="btn btn-success" ng-click="saleinvoice(soldproduct.sale_product_id);"><i class="fa fa-list-alt" aria-hidden="true"></i>
                               </button></a></td> 
                           

                          <!-- <button class="btn btn-warning" value="{{btnName}}" ng-click="setedit(soldproduct.sale_product_id,soldproduct);"><i class="fa fa-edit"></i></button>
                      </td>
                      <td><a data-toggle="tooltip" title="Complete"><button class="btn btn-success" ng-click="saleinvoice(soldproduct.sale_product_id);"><i class="fa fa-list-alt" aria-hidden="true"></i>
                               </button></a></td> 
                           
                           <ng-form name="updatelistsaleform">
                           <td ng-if="isedit(soldproduct.sale_product_id)">{{soldproduct.product_name}}</td>

                               <td ng-if="isedit(soldproduct.sale_product_id)">
                          <input type="text" ng-pattern="/^\d+$/" ng-value="soldproduct.sale_product_quantity" ng-model="soldproduct.sale_product_quantity" name="sale_product_quantity" style="width:auto;" required>
                          <p style="color:red;" ng-show="subForm.sale_product_quantity.$error.required"> required field.</p>
                           <p style="color:red;" ng-show="!subForm.sale_product_quantity.$error.required && subForm.sale_product_quantity.$invalid"> accept digits only.</p>
                          </td>



                         <td ng-if="isedit(soldproduct.sale_product_id)">
                          <input type="text" ng-pattern="/^\d+$/" ng-value="soldproduct.sale_product_price" ng-model="soldproduct.sale_product_price" name="sale_product_price" style="width:auto;" required>
                          <p style="color:red;" ng-show="subForm.sale_product_price.$error.required"> required field.</p>
                           <p style="color:red;" ng-show="!subForm.sale_product_price.$error.required && subForm.sale_product_price.$invalid"> accept digits only.</p>
                          </td>


                           <td ng-if="isedit(soldproduct.sale_product_id)">
                          <input type="text" ng-pattern="/^\d+$/" ng-value="soldproduct.sale_total_price" ng-model="soldproduct.sale_total_price" name="sale_total_price" style="width:auto;" required>
                          <p style="color:red;" ng-show="subForm.sale_total_price.$error.required"> required field.</p>
                           <p style="color:red;" ng-show="!subForm.sale_total_price.$error.required && subForm.sale_total_price.$invalid"> accept digits only.</p>
                          </td>


                         <td ng-if="isedit(soldproduct.sale_product_id)">{{soldproduct.sale_product_date}}</td>


                          



                      <td ng-if="isedit(soldproduct.sale_product_id)">
                       <button class="btn btn-success" ng-disabled="!subForm.$valid" ng-click="updatesoldproduct(soldproduct,$index);"><i class="fa fa-check"></i></button>

                              <a data-toggle="tooltip" title="Update"> <button class="btn btn-danger" value="{{btnName}}" ng-click="unsetedit($index);"><i class="fa fa-close"></i></button> </a>

                        </td>
                           <ng-form> -->

                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>


                 <div class="modal fade" id="printSection" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog  modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                    <style type="text/css">
                      
 .invoice_logo {
    padding-top: 10px;
    padding-bottom: 25px;
}

.invoice-title{
    background-color: #66B845;
    margin-bottom: 24px;
    color: #fff;
    padding: 10px;
  }
  .in-footer-right {
    float: right;
}
h3.invoice-title {
    text-align: center;
}


  @media screen {
  
  #printSection {
      display: none;
  }

}

@media print {
  body * {
    visibility:hidden;
  }
  #printSection, #printSection * {
    visibility:visible;
  }
}
      </style>


<style type="text/css" media="print">
.modal-footer
{ display: none; }
</style>
            

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <div class="row">
                            <div class="col-md-6 logo-section">
                            <div class="row">
                            <div class="invoice_logo">
                        <img style="width: 100%;margin-left: -27px;" src="http://localhost/anandmurti/images/am_logo.png" alt="logo">
                        </div>
                        <h4 class="modal-title">Anandmurti Group Limited</h4>
                        <h5>(CIN:L14106UP1995PLC019017),</h5>
                        <h5>Sector-128, Pune - 411410,</h5>
                        <h5>Maharashtra, India,</h5>
                        <h5>Ph No: (120) 4609000, 2470800,</h5>
                        <h5>Fax: (120) 4609464, 4609496</h5>
                        </div>
                        <div class="row">
                        <h5><strong>Invoice ID:</strong> {{cinvoiceid}}</h5>
                        <h5><strong>Invoice Date:</strong> {{cdate | date:'yyyy-MM-dd'}}</h5>
                     <!--   <h5><strong>Due Date:</strong> <input type="date" placeholder="Delivery Date" class="form-control" ng-model="duedate" id="duedate" style="width: 50%;" class="form-control" name="cdate" required /></h5> -->
                        </div>
                        </div>
                        <div class="col-md-6 id-section">
                        <h3 class="invoice-title">Invoice</h3>
                        <div class="row">

                        <h4 class="modal-title">Customer</h4>
                        <h5><strong>Name:</strong> <span ng-repeat="sinvoice in saleinvoice">{{sinvoice.gcustomer_name}}</span></h5>
                        <h5><strong>Email ID:</strong> <span ng-repeat="sinvoice in saleinvoice">{{sinvoice.gcustomer_email}}</span></h5>
                        <h5><strong>Address:</strong> <span ng-repeat="sinvoice in saleinvoice">{{sinvoice.gcustomer_landmark}} {{rinvoice.gcustomer_city}} {{rinvoice.gcustomer_state}} {{sinvoice.gcustomer_pincode}}</span></h5>
                        <h5><strong>Number:</strong> <span ng-repeat="sinvoice in saleinvoice">{{sinvoice.gcustomer_number}}</span></h5>
                        </div>
                        </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Sale ID</th>
                          <th>Product Name</th>
                          <th>Product Quantity</th>
                          <th>Product Price</th>
                          <th>Product Total Price</th>
                          <th>Sale Date</th>
                        </tr>
                      </thead>


                      <tbody>
<tr ng-repeat="sinvoice in saleinvoice">
                          <td>{{sinvoice.sale_product_id}}</td>
                          <td>{{sinvoice.product_name}}</td>
                          <td>{{sinvoice.sale_product_quantity}}</td>
                          <td>{{sinvoice.sale_product_price}}</td>
                          <td>{{sinvoice.sale_total_price}}</td>
                          <td>{{sinvoice.sale_product_date}}</td>
</tr>

                      </tbody>
                    </table>
                    <div class="row invoice-footer">
                    <div class="in-footer-left col-md-6">
                    <span><strong>Remark/Instruction:</strong></span>
                    <h3 style="text-align: center;">Thank You</h3>
                    </div>
                    <div class="in-footer-right col-md-6">
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <tbody>
<tr>
                          <td><strong>Subtotal</strong></td>
                          <td>{{subotal}}</td>
</tr>
<tr>

                          <td><strong>Tax</strong></td>
                          <td><form name="taxform"><input ng-change="changedstax(stax,sale_product_id)" type="text" class="form-control" ng-model="stax" name="stax" style="width:auto;" required><span class="val-style" ng-show="taxform.stax.$touched && taxform.stax.$invalid">The tax is required.</span></form></td>
</tr>
<tr>
                          <td><strong>Total</strong></td>
                          <td>{{stotal}}</td>
</tr>

                      </tbody>
                    </table>
                    </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                    <button ng-if="chksaleinvoice == 0" type="button" ng-disabled="!taxform.$valid" class="btn btn-default" ng-click="savesaleinvoice(gcustomer_id,sale_product_id,stax,stotal);">Save</button>
                    <button type="button" ng-disabled="!taxform.$valid" class="btn btn-default" ng-click="fprint(printSection);">Print</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->



              </div>

