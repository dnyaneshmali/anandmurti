<div class="listaquaorder" ng-controller="Listaquaorder">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel" >
                  <div class="x_title">
                    <h2>List Aqua Order</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div class="item form-group">
                         <div class=" form-group col-md-6 col-sm-6 col-xs-12 col-md-offset-6" >
                          <input type="text" ng-model="clisearch" id="clisearch" placeholder="&#xF002 Search for ..." name="clisearch" >
                          
                        </div>
                      </div>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Customer Name</th>
                          <th>Order Address</th>
                          <th>Quantity</th>
                          <th>Order time</th>
                          <th>Order Date</th>
                          <th>Vehicle Name</th>
                          <th>Action</th>
                          <th>Order Status</th>
                          <th>Reminder</th>
                          <th>Invoice</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr ng-repeat="aquaorder in data | filter:clisearch" ng-form="subForm">
                          <td ng-if="!isedit(aquaorder.order_id)">{{aquaorder.acustomer_name}}</td>
                          <td ng-if="!isedit(aquaorder.order_id)">{{aquaorder.order_delivery_address}}</td>
                          <td ng-if="!isedit(aquaorder.order_id)">{{aquaorder.order_quantity}}</td>
                          <td ng-if="!isedit(aquaorder.order_id)">{{aquaorder.order_delivery_time | date:'h:mm'}}</td>
                          <td ng-if="!isedit(aquaorder.order_id)">{{aquaorder.order_delivery_date | date:'MM/dd/yyyy'}}</td>
                          <td ng-if="!isedit(aquaorder.order_id)">{{aquaorder.vehicle_name}}</td>
                          <td ng-if="!isedit(aquaorder.order_id)">
                       <a data-toggle="tooltip" title="Delete"> <button class="btn btn-danger" ng-click="deleteorder(aquaorder.order_id);"><i class="fa fa-trash"></i></button></a></td>
                         <!-- <a data-toggle="tooltip" title="Edit"> <button class="btn btn-warning" ng-value="{{btnName}}" ng-click="setedit(aquaorder.order_id,aquaorder);"><i class="fa fa-edit"></i></button></a>
                        </td>
                        <ng-form name="listordertailsform">
                               <td ng-if="isedit(aquaorder.order_id)">
                          <input type="text" class="form-control" ng-value="aquaorder.acustomer_name" ng-model="aquaorder.acustomer_name" name="acustomer_name" style="width:auto;" required>
                          <p style="color:red;" ng-show="subForm.acustomer_name.$error.required"> Name is required.</p>

                          </td>

                            <td ng-if="isedit(aquaorder.order_id)">
                          <input type="text" ng-value="aquaorder.order_delivery_address" ng-model="aquaorder.order_delivery_address" class="form-control" name="order_delivery_address" style="width:auto;" required>
                          <p style="color:red;" ng-show="subForm.order_delivery_address.$error.required"> Destination Address is required.</p>

                          </td>

                         
                          <td ng-if="isedit(aquaorder.order_id)">
                          <input type="text" class="form-control" ng-pattern="/^\d+$/"  ng-value="aquaorder.order_quantity" ng-model="aquaorder.order_quantity" name="order_quantity" style="width:auto;" required>
                          <p style="color:red;" ng-show="subForm.order_quantity.$error.required"> quantity is required.</p>
                           <p style="color:red;" ng-show="!subForm.order_quantity.$error.required && subForm.order_quantity.$invalid"> accept digits only.</p>
                          </td>

                          <td ng-if="isedit(aquaorder.order_id)">
                          <input type="text" class="form-control" ng-value="aquaorder.order_delivery_time" ng-model="aquaorder.order_delivery_time" name="order_delivery_time" style="width:auto;" required>
                          <p style="color:red;" ng-show="subForm.order_delivery_time.$error.required">time is required.</p>
                          </td>
                          <td ng-if="isedit(aquaorder.order_id)">
                          <input type="text"  class="form-control" ng-value="aquaorder.order_delivery_date" ng-model="aquaorder.order_delivery_date" name="order_delivery_date" style="width:auto;" required>
                         <p style="color:red;" ng-show="subForm.order_delivery_date.$error.required">time is required.</p>
                          </td>
                      
                     <td ng-if="isedit(aquaorder.order_id)">
                         <select class="form-control" ng-model="aquaorder.vehicle_name" name="vehicle_name" class="{'has-errors' : subForm.vehicle_name.$invalid, 'no-errors' : subForm.vehicle_name.$valid}" ng-required="true">
                            <option value="" ng-selected="aquaorder.vehicle_name == ''">Vehicle Name </option>
                            <option value="HMT" ng-selected="aquaorder.vehicle_name == 'HMT'">HMT</option>
                            <option value="Testowner" ng-selected="aquaorder.vehicle_name == 'Testowner'">Testowner</option>
                              <option value="test" ng-selected="listordertailsform.vehicle_name == 'test'">Only water</option>
                          </select>
                          <div class="error-container" ng-show="subForm.vehicle_name.$dirty && subForm.vehicle_name.$invalid" ng-messages="subForm.vehicle_name.$error">
                         <div class="val-style" class="error" ng-message="required">select vehicle name </div>
                          </div>
                            </td>


                             <td ng-if="isedit(aquaorder.order_id)">

                              <a data-toggle="tooltip" title="Update"><button class="btn btn-success" ng-disabled="!subForm.$valid" ng-click="updateaquaorder(aquaorder,$index);"><i class="fa fa-check"></i></button></a> 

                              <a data-toggle="tooltip" title="Cancle"><button class="btn btn-danger" value="{{btnName}}" ng-click="unsetedit($index);"><i class="fa fa-close"></i></button></a> -->
                             <td ng-if="aquaorder.order_status==0"><a data-toggle="tooltip" title="Pending"><button class="btn btn-danger" ng-click="setstatus(aquaorder.order_id);"><i class="fa fa-spinner"></i></button></a></td>
                          <td ng-if="aquaorder.order_status==1"><a data-toggle="tooltip" title="Complete"><button class="btn btn-success" ng-click="unsetstatus(aquaorder.order_id);"><i class="fa fa-check-circle"></i></button></a></td>

                          <td ng-if="aquaorder.order_reminder==0"><a data-toggle="tooltip" title="Set Reminder"><button class="btn btn-danger" ng-click="setreminder(aquaorder.order_id,$index);"><i class="fa fa-bell"></i></button></a></td>
                          <td ng-if="aquaorder.order_reminder==1"><a data-toggle="tooltip" title="Unset Reminder"><button class="btn btn-active" ng-click="unsetreminder(aquaorder.order_id,$index);"><i class="fa fa-bell-slash"></i></button></a></td>

                          <td><a data-toggle="tooltip" title="Complete"><button class="btn btn-success" ng-click="geninvoice(aquaorder.order_id);"><i class="fa fa-list-alt" aria-hidden="true"></i>
                               </button></a></td>            
                          </td>

                          <ng-form>
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
input#duedate {
    display: inline-block;
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
                        <h5 ng-if="checkorderinv == 0"><strong>Invoice ID:</strong> {{cinvoiceid}}</h5>
                        <h5 ng-if="checkorderinv == 1"><strong>Invoice ID:</strong> {{invoice_id}}</h5>
                        <h5 ng-if="checkorderinv == 0"><strong>Invoice Date:</strong> {{cdate | date:'yyyy-MM-dd'}}</h5>
                        <h5 ng-if="checkorderinv == 1"><strong>Invoice Date:</strong> {{invoice_date | date:'yyyy-MM-dd'}}</h5>
                        <!-- <h5><strong>Due Date:</strong> <input type="date" placeholder="Delivery Date" class="form-control" ng-model="duedate" id="duedate" style="width: 50%;" class="form-control" name="cdate" required /></h5> -->
                        </div>
                        </div>
                        <div class="col-md-6 id-section">
                        <h3 class="invoice-title">Invoice</h3>
                        <div class="row">

                        <h4 class="modal-title">Customer</h4>
                        <h5><strong>Name:</strong> <span ng-repeat="invoice in orderinvoicedata">{{invoice.acustomer_name}}</span></h5>
                        <h5><strong>Email ID:</strong> <span ng-repeat="invoice in orderinvoicedata">{{invoice.acustomer_email}}</span></h5>
                        <h5><strong>Address:</strong> <span ng-repeat="invoice in orderinvoicedata">{{invoice.acustomer_address}}</span></h5>
                        <h5><strong>Number:</strong> <span ng-repeat="invoice in orderinvoicedata">{{invoice.acustomer_number}}</span></h5>
                        </div>
                        </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Order ID</th>
                          <th>Jar Type</th>
                          <th>Order Quantity</th>
                          <th>Rate</th>
                          <th>Order Date</th>
                          
                        </tr>
                      </thead>


                      <tbody>
<tr ng-repeat="invoice in orderinvoicedata">
                          <td>{{invoice.order_id}}</td>
                          <td>{{invoice.jar_type}}</td>
                          <td>{{invoice.order_quantity}}</td>
                          <td>{{invoice.jar_price}}</td>
                          <td>{{invoice.order_delivery_date}}</td>
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
                          <td><form name="taxform"><input ng-if="checkorderinv == 0" ng-change="changedtax(ptax,orderinvoicedata.order_id)" type="text" class="form-control" ng-model="ptax" name="ptax" style="width:auto;" required><span class="val-style" ng-show="taxform.ptax.$touched && taxform.ptax.$invalid">The tax is required.</span></form>
                            <span ng-if="checkorderinv == 1">{{invoice_tax}}</span>
                          </td>
</tr>
<tr>
                          <td><strong>Total</strong></td>
                          <td><span ng-if="checkorderinv == 0">{{ftotal}}</span>
                          <span ng-if="checkorderinv == 1">{{invoice_amount}}</span>
                          </td>
</tr>

                      </tbody>
                    </table>
                    </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                    <button ng-if="checkorderinv == 0" ng-disabled="!taxform.$valid" type="button" class="btn btn-default" ng-click="saveinvoice(customer_id,orderinvoicedata.order_id,ptax,ftotal);">Save</button>
                    <button ng-disabled="!taxform.$valid" type="button" class="btn btn-default" ng-click="fprint(printSection);">Print</button>
                    <button  type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
              </div>
              </div>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );

</script>
