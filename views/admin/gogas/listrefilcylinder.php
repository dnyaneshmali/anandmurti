<div class="listnew-conn">
<div class="connectionlist" ng-controller="Listrefilcylinderctrl">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List Refill Cylinder</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   <div class="item form-group">
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12 col-md-offset-6" >
                          <input type="text" ng-model="clisearch" id="clisearch" placeholder="&#xF002; Search for ..."  name="clisearch" >
                          
                        </div>
                      </div>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Customer Name</th>
                        <th>refil_cylinder_type</th>
                          <th>refil_payment_details</th>
                          <th>refil_amount</th>
                          
                          <th>refil_date</th>
                          <th>Action</th>
                           <th>Invoice</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr ng-repeat="refil in refildata | filter:clisearch" ng-form="subForm">
                          <td ng-if="!isedit(refil.refil_id)">{{refil.gcustomer_name}}</td>
                                <td ng-if="!isedit(refil.refil_id)">{{refil.refil_cylinder_type}}</td>
                                <!-- <td ng-if="refil.refil_cylinder_type==1">2 Kg</td>
                          <td ng-if="refil.refil_cylinder_type==2">5 Kg</td>
                          <td ng-if="refil.refil_cylinder_type==3">12 Kg</td> -->
                            <td ng-if="!isedit(refil.refil_id)">{{refil.refil_payment_details }}</td>
                          <td ng-if="!isedit(refil.refil_id)">{{refil.refil_amount}}</td>
                          <td ng-if="!isedit(refil.refil_id)">{{refil.refil_date}}</td>
                        
                          <td ng-if="!isedit(refil.refil_id)">
                  
                          <a data-toggle="tooltip" title="Delete"><button class="btn btn-danger" ng-click="deleterefil(refil.refil_id,$index);"><i class="fa fa-trash"></i></button></a></td>

                           <td><a data-toggle="tooltip" title="Complete"><button class="btn btn-success" ng-click="refilinvoice(refil.refil_id);"><i class="fa fa-list-alt" aria-hidden="true"></i>
                               </button></a></td>


                          <!-- <a data-toggle="tooltip" title="Edit"><button class="btn btn-warning" ng-value="{{btnName}}" ng-click="setedit(refil.refil_id,refil);"><i class="fa fa-edit"></i></button></a>

                        </td> 

                        
                         <td><a data-toggle="tooltip" title="Complete"><button class="btn btn-success" ng-click="refilinvoice(refil.refil_id);"><i class="fa fa-list-alt" aria-hidden="true"></i>
                               </button></a></td> 
                          <ng-form name="updaterefilform">
                            <td ng-if="isedit(refil.refil_id)">{{refil.gcustomer_name}}</td>

                         <td ng-if="isedit(refil.refil_id)">{{refil.refil_cylinder_type}}</td>

                          <td ng-if="isedit(refil.refil_id)">
                          <input type="text" ng-value="refil.refil_payment_details" ng-model="refil.refil_payment_details" name="refil_payment_details" style="width:auto;" required>
                          
                          <p style="color:red;" ng-show="subForm.refil_payment_details.$error.required"> details are required.</p>
                          </td>






                            <td ng-if="isedit(refil.refil_id)">
                          <input type="text" ng-pattern="/^\d+$/" ng-value="refil.refil_amount" ng-model="refil.  refil_amount" name="refil_amount" style="width:auto;" required>
                          <p style="color:red;" ng-show="subForm.refil_amount.$error.required"> required field.</p>
                           <p style="color:red;" ng-show="!subForm.refil_amount.$error.required && subForm. refil_amount.$invalid"> accept digits only.</p>
                          </td>



                           <td ng-if="isedit(refil.refil_id)">{{refil.refil_date}}</td>

                         <td ng-if="isedit(refil.refil_id)">
                               <a data-toggle="tooltip" title="Cancle"> <button class="btn btn-success"  ng-disabled="!subForm.$valid" ng-click="updategasrefil(refil,$index);"><i class="fa fa-check"></i></button> </a>
                               <a data-toggle="tooltip" title="Cancle"> <button class="btn btn-danger" value="{{btnName}}" ng-click="unsetedit($index);"><i class="fa fa-close"></i></button></a>
                            </td>
                            <ng-form> -->
                       



                      <!--  <td ng-if="isedit(refil.refil_id)">
                        <button class="btn btn-success" ng-disabled="!subForm.$valid" ng-click="updategasrefil(refil,$index);"><i class="fa fa-check"></i></button> 

                              <button class="btn btn-danger" value="{{btnName}}" ng-click="unsetedit(refil.refil_id);"><i class="fa fa-close"></i></button>

                               </td>
 -->



                           <ng-form>
                       </tr>

                      </tbody>
                    </table>
                  </div>
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
                        <h5><strong>Due Date:</strong> <input type="date" placeholder="Delivery Date" class="form-control" ng-model="duedate" id="duedate" style="width: 50%;" class="form-control" name="cdate" required /></h5>
                        </div>
                        </div>
                        <div class="col-md-6 id-section">
                        <h3 class="invoice-title">Invoice</h3>
                        <div class="row">

                        <h4 class="modal-title">Customer</h4>
                        <h5><strong>Name:</strong> <span ng-repeat="rinvoice in refilinvoicedata">{{rinvoice.gcustomer_name}}</span></h5>
                        <h5><strong>Email ID:</strong> <span ng-repeat="rinvoice in refilinvoicedata">{{rinvoice.gcustomer_email}}</span></h5>
                        <h5><strong>Address:</strong> <span ng-repeat="rinvoice in refilinvoicedata">{{rinvoice.gcustomer_landmark}} {{rinvoice.gcustomer_city}}, <br/>{{rinvoice.gcustomer_state}} {{rinvoice.gcustomer_pincode}}</span></h5>
                        <h5><strong>Number:</strong> <span ng-repeat="rinvoice in refilinvoicedata">{{rinvoice.gcustomer_number}}</span></h5>
                        </div>
                        </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Refil ID</th>
                          <th>Cylinder Type</th>
                          <th>Refil Amount</th>
                          <th>Refil Date</th>
                        </tr>
                      </thead>


                      <tbody>
<tr ng-repeat="rinvoice in refilinvoicedata">
                          <td>{{rinvoice.refil_id}}</td>
                          <td>{{rinvoice.refil_cylinder_type}}</td>
                          <td>{{rinvoice.refil_amount}}</td>
                          <td>{{rinvoice.refil_date}}</td>
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
                          <td><form name="taxform">
<input ng-change="changedrtax(rtax,refil_id)" type="text" class="form-control" ng-model="rtax" name="rtax" style="width:auto;" required>
<span class="val-style" ng-show="taxform.rtax.$touched && taxform.rtax.$invalid">The tax is required.</span></form>
                          </td>
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
                    <button ng-if="chkrefilinv == 0" type="button" ng-disabled="!taxform.$valid" class="btn btn-default" ng-click="saverefilinvoice(gcustomer_id,refil_id,rtax,stotal);">Save</button>
                    <button type="button" ng-disabled="!taxform.$valid" class="btn btn-default" ng-click="fprint(printSection);">Print</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->




              </div>
</div>