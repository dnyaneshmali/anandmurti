<div class="listnew-conn">
<div class="connectionlist" ng-controller="Listnewconnectionctrl">
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>List New Connection</h2>
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
                          <th>Cylinder Type</th>
                          <th>Cylinder Deposit</th>
                          <th>Connection Cost</th>
                          <th>connection Depreciation</th>
                         <th>connection Hotplate</th> 
                          <th>connection passbook</th>
                          <th>connection stamp</th>
                           <th>connection tube</th>
                          <th>connection Lighter</th>
                          <th>Date</th>
                          <th>Action</th>
                          <th>Invoice</th>
                        </tr>
                      </thead>


                      <tbody>
                        <tr ng-repeat="Connection in data | filter:clisearch" ng-form="subForm" >
                          <td ng-if="!isedit(Connection.connection_id)">{{Connection.gcustomer_name}}</td>
                          <td ng-if="!isedit(Connection.connection_id)"><span ng-if="Connection.connection_type==1">2 Kg</span><span ng-if="Connection.connection_type==2">5 Kg</span><span ng-if="Connection.connection_type==3">12 Kg</span></td>
                          <td ng-if="!isedit(Connection.connection_id)">{{Connection.connection_cylinder_deposit}}</td>
                          <td ng-if="!isedit(Connection.connection_id)">{{Connection.connection_tprice}}</td>
                          <td ng-if="!isedit(Connection.connection_id)">{{Connection.connection_depreciation}}</td>
                         
                          <td ng-if="!isedit(Connection.connection_id)">{{Connection.connection_hotplate}}</td>
                         
                          <td ng-if="!isedit(Connection.connection_id)">{{Connection.connection_passbook}}</td>
                         <td ng-if="!isedit(Connection.connection_id)">{{Connection.connection_stamp}}</td>
                            <td ng-if="!isedit(Connection.connection_id)">{{Connection.connection_tube}}</td>
                             <td ng-if="!isedit(Connection.connection_id)">{{Connection.connection_lighter}}</td>
                              <!-- <td ng-if="!isedit(Connection.connection_id)">{{Connection.connection_other}}</td> -->
                               <td ng-if="!isedit(Connection.connection_id)">{{Connection.connection_date}}</td>

                             
              
                              <td ng-if="!isedit(Connection.connection_id)">

                          <a data-toggle="tooltip" title="Delete"><button class="btn btn-danger" ng-click="deleteuser(Connection.connection_id,$index);"><i class="fa fa-trash"></i></button></a>
                           <td><a data-toggle="tooltip" title="Complete"><button class="btn btn-success" ng-click="connectioninvoice(Connection.connection_id);"><i class="fa fa-list-alt" aria-hidden="true"></i>
                               </button></td>
                        <!--   <a data-toggle="tooltip" title="Edit"><button class="btn btn-warning" ng-value="{{btnName}}" ng-click="setedit(Connection.connection_id,Connection);"><i class="fa fa-edit"></i></button></a>
                        </td>
                         <td><a data-toggle="tooltip" title="Complete"><button class="btn btn-success" ng-click="connectioninvoice(Connection.connection_id);"><i class="fa fa-list-alt" aria-hidden="true"></i>
                               </button></a></td>  

                            <ng-form name="updateconnectionform">
                   <td ng-if="isedit(Connection.connection_id)">
                   {{Connection.gcustomer_name}}</td>


                            

                             <td ng-if="isedit(Connection.connection_id)">
                          <input type="text" ng-pattern="/^\d+$/" ng-value="Connection.connection_cylinder_deposit" ng-model="Connection.connection_cylinder_deposit" name="connection_cylinder_deposit" style="width:auto;" required>
                          <p style="color:red;" ng-show="subForm.connection_cylinder_deposit.$error.required"> required field.</p>
                           <p style="color:red;" ng-show="!subForm.connection_cylinder_deposit.$error.required && subForm.connection_cylinder_deposit.$invalid"> accept digits only.</p>
                          </td>

                           <td ng-if="isedit(Connection.connection_id)">
                          <input type="text" ng-value="Connection.connection_depreciation" ng-model="Connection.connection_depreciation" name="connection_depreciation" style="width:auto;" required>
                          <p style="color:red;" ng-show="subForm.connection_depreciation.$error.required"> required field.</p>
                          </td>

                        <td ng-if="isedit(Connection.connection_id)">
                          YES: <input type="radio" ng-model="Connection.connection_hotplate" name="connection_hotplate" style="width:auto;" value="Yes">
                          NO: <input type="radio" ng-model="Connection.connection_hotplate" name="connection_hotplate" style="width:auto;" value="No">
                          </td>


                          <td ng-if="isedit(Connection.connection_id)">
                          YES: <input type="radio" ng-model="Connection.connection_passbook" name="connection_passbook" style="width:auto;" value="Yes">
                          NO: <input type="radio" ng-model="Connection.connection_passbook" name="connection_passbook" style="width:auto;" value="No">
                          </td>

                           <td ng-if="isedit(Connection.connection_id)">
                          <input type="text" ng-value="Connection.connection_stamp" ng-model="Connection.connection_stamp" name="connection_stamp" style="width:auto;" required>
                          <p style="color:red;" ng-show="subForm.connection_stamp.$error.required"> required field.</p>
                          </td>


                          <td ng-if="isedit(Connection.connection_id)">
                          YES: <input type="radio" ng-model="Connection.connection_tube" name=" connection_tube" style="width:auto;" value="Yes">
                          NO: <input type="radio" ng-model="Connection. connection_tube" name=" connection_tube" style="width:auto;" value="No">
                          </td>

                           <td ng-if="isedit(Connection.connection_id)">
                          YES: <input type="radio" ng-model="Connection.connection_lighter" name=" connection_lighter" style="width:auto;" value="Yes">
                          NO: <input type="radio" ng-model="Connection. connection_lighter" name=" connection_lighter" style="width:auto;" value="No">
                          </td>


                           <td ng-if="isedit(Connection.connection_id)">{{Connection.connection_date}}</td>



                      <td ng-if="isedit(Connection.connection_id)">
                       <a data-toggle="tooltip" title="Update"> <button class="btn btn-success" ng-disabled="!subForm.$valid" ng-click="updategasconnection(Connection);"><i class="fa fa-check"></i></button> </a>

                              <a data-toggle="tooltip" title="Update"> <button class="btn btn-danger" value="{{btnName}}" ng-click="unsetedit($index);"><i class="fa fa-close"></i></button> </a>

                               </td>




                           <ng-form> -->
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
                        <img style="width: 100%;margin-left:-27px;" src="http://localhost/anandmurti/images/am_logo.png" alt="logo">
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
                        <h5><strong>Name:</strong> <span ng-repeat="cinvoice in connectioninvoice">{{cinvoice.gcustomer_name}}</span></h5>
                        <h5><strong>Email ID:</strong> <span ng-repeat="cinvoice in connectioninvoice">{{cinvoice.gcustomer_email}}</span></h5>
                        <h5><strong>Address:</strong> <span ng-repeat="cinvoice in connectioninvoice">{{cinvoice.gcustomer_landmark}} {{cinvoice.gcustomer_city}},<br/> {{cinvoice.gcustomer_state}} {{cinvoice.gcustomer_pincode}}</span></h5>
                        <h5><strong>Number:</strong> <span ng-repeat="cinvoice in connectioninvoice">{{cinvoice.gcustomer_number}}</span></h5>
                        </div>
                        </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Connection ID</th>
                          <th>Connection Deposit</th>
                          <th>Connection Depreciation</th>
                          <th>Connection Hotplate</th>
                          <th>Connection Passbook</th>
                          <th>Connection Stamp</th>
                          <th>Connection Tube</th>
                          <th>Connection Lighter</th>
                          <th>Connection Date</th>
                          
                        </tr>
                      </thead>


                      <tbody>
<tr ng-repeat="cinvoice in connectioninvoice">
                          <th>{{cinvoice.connection_id}}</th>
                          <th>{{cinvoice.connection_cylinder_deposit}}</th>
                          <th>{{cinvoice.connection_depreciation}}</th>
                          <th>{{cinvoice.connection_hotplate}}</th>
                          <th>{{cinvoice.connection_passbook}}</th>
                          <th>{{cinvoice.connection_stamp}}</th>
                          <th>{{cinvoice.connection_tube}}</th>
                          <th>{{cinvoice.connection_lighter}}</th>
                          <th>{{cinvoice.connection_date}}</th>
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
                          <td><form name="taxform"><input ng-change="changedctax(ctax,connection_id)" type="text" class="form-control" ng-model="ctax" name="ctax" style="width:auto;" required><span class="val-style" ng-show="taxform.ctax.$touched && taxform.ctax.$invalid">The tax is required.</span></form></td>
</tr>
<tr>
                          <td><strong>Total</strong></td>
                          <td>{{ftotal}}</td>
</tr>

                      </tbody>
                    </table>
                    </div>
                    </div>
                    </div>
                    <div class="modal-footer">
                    <button ng-if="checkconninv == 0" type="button" ng-disabled="!taxform.$valid" class="btn btn-default" ng-click="saveconnectioninvoice(gcustomer_id,connection_id,ctax,ctotal);">Save</button>
                    <button type="button" ng-disabled="!taxform.$valid" class="btn btn-default" ng-click="fprint(printSection);">Print</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->

              </div>
</div>