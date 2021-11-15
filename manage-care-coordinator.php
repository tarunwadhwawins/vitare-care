<!doctype html>
<html lang="en">

<head>
   <title>Virtare Care</title>
   <meta charset="UTF-8">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" href="assets/images/logo.png" type="image/x-icon">
   <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
   <link rel="stylesheet" href="assets/css/common.css" type="text/css" />
   <link rel="stylesheet" href="assets/css/fonts.css" type="text/css" />
   <link rel="stylesheet" href="assets/css/font-awesome.min.css">
</head>

<body>
   <div class="main">
      <?php include_once('common/sidebar.php'); ?>
      <div class="pageWrapper">
         <?php include_once('common/header.php'); ?>
         <div class="contentWrapper">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-6">
                     <h2 class="pageTittle">Manange Care Coordinator</h2>
                  </div>
                  <div class="col-sm-6 text-end">
                     <button class="btn primaryBtn" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New Coordinator</button>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="table-responsive commonTable">
                        <table class="table">
                           <thead>
                              <tr>
                                 <th>First Name
                                 <span class="icon">
                                       <i class="fa fa-caret-up" aria-hidden="true"></i>
                                       <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </span>
                                 </th>
                                 <th>Last Name
                                 <span class="icon">
                                       <i class="fa fa-caret-up" aria-hidden="true"></i>
                                       <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </span>
                                 </th>
                                 <th>Role
                                 <span class="icon">
                                       <i class="fa fa-caret-up" aria-hidden="true"></i>
                                       <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </span>
                                 </th>
                                 <th>Created At
                                 <span class="icon">
                                       <i class="fa fa-caret-up" aria-hidden="true"></i>
                                       <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </span>
                                 </th>
                                 <th>Status
                                 <span class="icon">
                                       <i class="fa fa-caret-up" aria-hidden="true"></i>
                                       <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </span>
                                 </th>
                                 <th>Action</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>Jane</td>
                                 <td>Doe</td>
                                 <td>Physician</td>
                                 <td>Nov 10,2021</td>
                                 <td>Active</td>
                                 <td>
                                    <ul class="action">
                                       <li><a href="#" class="link-primary"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                       <li><a href="#" class="link-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                       <li><a href="#" class="link-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                    </ul>
                                 </td>
                              </tr>
                              <tr>
                                 <td>Steve </td>
                                 <td>Smith</td>
                                 <td>Cardiologist</td>
                                 <td>Nov 07,2021</td>
                                 <td>Active</td>
                                 <td>
                                    <ul class="action">
                                       <li><a href="#" class="link-primary"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                       <li><a href="#" class="link-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                       <li><a href="#" class="link-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                    </ul>
                                 </td>
                              </tr>
                              <tr>
                                 <td>Joseph </td>
                                 <td>William</td>
                                 <td>RN</td>
                                 <td>Nov 01,2021</td>
                                 <td>Active</td>
                                 <td>
                                    <ul class="action">
                                       <li><a href="#" class="link-primary"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                       <li><a href="#" class="link-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                       <li><a href="#" class="link-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                    </ul>
                                 </td>
                              </tr>
                              <tr>
                                 <td>Robert </td>
                                 <td>Henry</td>
                                 <td>Physician</td>
                                 <td>Nov 05,2021</td>
                                 <td>Active</td>
                                 <td>
                                    <ul class="action">
                                       <li><a href="#" class="link-primary"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                                       <li><a href="#" class="link-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                       <li><a href="#" class="link-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                    </ul>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Add New Coordinator</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="min-height:380px;">
               <div class="stepper">
                  <div class="stepperHead">
                     <div class="step active">
                        <div class="stepTitle">
                           <div class="title">Personal Information</div>
                        </div>
                        <div class="stepperCard">
                           <div class="stepperBody">
                              <div class="row">
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>First Name</label>
                                       <input type="text" class="form-control" />
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Last Name</label>
                                       <input type="text" class="form-control" />
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Designation</label>
                                       <input type="text" class="form-control" />
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Gender</label>
                                       <select class="form-select">
                                          <option value="0" selected> Choose </option>
                                          <option value="0"> Male </option>
                                          <option value="0"> Female </option>
                                          <option value="0"> Others </option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Email</label>
                                       <input type="text" class="form-control" />
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Phone No</label>
                                       <input type="number" class="form-control" />
                                    </div>
                                 </div>
                                 <!---->
                              </div>
                           </div>
                           <div class="stepperFooter">
                              <button class="btn next btn-primary">Next</button>
                           </div>
                        </div>
                     </div>
                     <div class="step">
                        <div class="stepTitle">
                           <div class="title">Contacts</div>
                        </div>
                        <div class="stepperCard">
                           <div class="stepperBody">
                           <div class="row">
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>First Name</label>
                                       <input type="text" class="form-control" />
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Last Name</label>
                                       <input type="text" class="form-control" />
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Email</label>
                                       <input type="email" class="form-control" />
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Phone No.</label>
                                       <input type="number" class="form-control" />
                                    </div>
                                 </div>
                                 <div class="col-sm-12">
                                    <div class="form-group text-end">
                                       <button class="btn btn-primary">Add</button>
                                    </div>
                                 </div>
                                 <div class="col-sm-12">
                                    <div class="table-responsive commonTable">
                                       <table class="table">
                                          <thead>
                                             <tr>
                                                <th>First Name</th>
                                                <th>Last Name</th>
                                                <th>Email</th>
                                                <th>Phone No</th>
                                                <th>Actions</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>John</td>
                                                <td>Goe</td>
                                                <td>john@aa.com</td>
                                                <td>999-2222-111</td>
                                                <td>
                                                   <ul class="action">
                                                      <li><a href="#" class="link-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                                      <li><a href="#" class="link-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                                   </ul>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>Steve</td>
                                                <td>Smith</td>
                                                <td>steve@smith.com</td>
                                                <td>999-2222-112</td>
                                                <td>
                                                   <ul class="action">
                                                      <li><a href="#" class="link-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                                      <li><a href="#" class="link-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                                   </ul>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                                 <!---->
                              </div>
                           </div>
                           <div class="stepperFooter">
                              <button class="btn back">Back</button>
                              <button class="btn next btn-primary">Next </button>
                           </div>
                        </div>
                     </div>
                     <div class="step">
                        <div class="stepTitle">
                           <div class="title">Availability </div>
                        </div>
                        <div class="stepperCard">
                           <div class="stepperBody">
                              <div class="row">
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Start Time</label>
                                       <select class="form-select">
                                          <option value="0" selected> Choose start Time</option>
                                          <option value="1">08:00 AM</option>
                                          <option value="1">08:30 AM</option>
                                          <option value="1">09:00 AM</option>
                                          <option value="1">09:30 AM</option>
                                          <option value="1">10:00 AM</option>
                                          <option value="1">10:30 AM</option>
                                          <option value="1">11:00 AM</option>
                                          <option value="1">11:30 AM</option>
                                          <option value="1">12:00 PM</option>
                                          <option value="1">12:30 PM</option>
                                          
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                    <label>End Time</label>
                                       <select class="form-select">
                                          <option value="0" selected> Choose End Time</option>
                                          <option value="1">2:00 PM</option>
                                          <option value="1">2:30 PM</option>
                                          <option value="1">3:00 PM</option>
                                          <option value="1">3:30 PM</option>
                                          <option value="1">4:00 PM</option>
                                          <option value="1">4:30 PM</option>
                                          <option value="1">5:00 PM</option>
                                          <option value="1">5:30 PM</option>
                                         
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-sm-12">
                                    <div class="form-group text-end">
                                       <button class="btn btn-primary">Add</button>
                                    </div>
                                 </div>
                                 <div class="col-sm-12">
                                    <div class="table-responsive commonTable">
                                       <table class="table">
                                          <thead>
                                             <tr>
                                                <th>Start Time</th>
                                                <th>End Time</th>
                                                <th>Actions</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>08:00 AM</td>
                                                <td>02:30 PM</td>
                                                <td>
                                                   <ul class="action">
                                                      <li><a href="#" class="link-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                                      <li><a href="#" class="link-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                                   </ul>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>09:00 AM</td>
                                                <td>03:30 PM</td>
                                                <td>
                                                   <ul class="action">
                                                      <li><a href="#" class="link-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                                      <li><a href="#" class="link-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                                   </ul>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>


                              </div>
                           </div>
                           <div class="stepperFooter">
                              <button class="btn back">Back</button>
                              <button class="btn next btn-primary">Next </button>
                           </div>
                        </div>
                     </div>
                     <div class="step">
                        <div class="stepTitle">
                           <div class="title">Documents </div>
                        </div>
                        <div class="stepperCard">
                           <div class="stepperBody">
                              <div class="row">
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Name</label>
                                       <input type="text" class="form-control" />
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Document</label>
                                       <input type="file" class="form-control" />
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Type</label>
                                       <select class="form-select">
                                          <option value="0" selected> Choose Type</option>
                                          <option value="1">Id Proof</option>
                                          <option value="2">Clinical</option>
                                          <option value="3">Insurance </option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Tags</label>
                                       <select class="form-control" multiple="multiple">
                                          <option selected="selected">orange</option>
                                          <option>white</option>
                                          <option selected="selected">purple</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-sm-12">
                                    <div class="form-group text-end">
                                       <button class="btn btn-primary">Add</button>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-sm-12">
                                    <div class="table-responsive commonTable">
                                       <table class="table">
                                          <thead>
                                             <tr>
                                                <th>Name</th>
                                                <th>Document</th>
                                                <th>Type </th>
                                                <th>Tags </th>
                                                <th>Actions</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>Program 1</td>
                                                <td>abc.pdf</td>
                                                <td>Voter Id</td>
                                                <td>Voter Id</td>
                                                <td>
                                                   <ul class="action">
                                                      <li><a href="#" class="link-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                                      <li><a href="#" class="link-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                                   </ul>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>Program 1</td>
                                                <td>abc.pdf</td>
                                                <td>Voter Id</td>
                                                <td>Voter Id</td>
                                                <td>
                                                   <ul class="action">
                                                      <li><a href="#" class="link-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                                      <li><a href="#" class="link-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                                   </ul>
                                                </td>
                                             </tr>
                                          </tbody>
                                       </table>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="stepperFooter">
                              <button class="btn back">Back</button>
                              <button class="btn save btn-primary">Save </button>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>
            </div>
           
         </div>
      </div>
   </div>




   <script type="text/javascript" src="assets/js/jquery.js"></script>
   <script type="text/javascript" src="assets/js/popper.js"></script>
   <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="assets/js/topup.js"></script>
   <script type="text/javascript" src="assets/js/custom.js"></script>
   <script type="text/javascript" src="assets/js/iconify.min.js"></script>
   <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
   <script type="text/javascript" src="assets/js/stepper.js"></script>
   <script>
      $(document).ready(function() {
         $(".next").click(function() {
            $('.stepper').parent().scrollTop(0);
            $(".stepperHead").find('.active').addClass('completed');
            $(".step").removeClass('active');
            console.log($(this).parent().parent().parent());
            $(this).parent().parent().parent().next().addClass('active');
         });
         $(".back").click(function() {
            $('.stepper').parent().scrollTop(0);

            $(".step").removeClass('active');
            $(this).parent().parent().parent().removeClass('completed');
            $(this).parent().parent().parent().prev().addClass('active');
         });
         $(".title").click(function() {
            $('.stepper').parent().scrollTop(0);
            var all_child = $(this).parent().parent().parent().children();
            var child = $(this).parent().parent()[0];
            var parent = child.parentNode;
            var index = Array.prototype.indexOf.call(parent.children, child);
            for (i = index; i < all_child.length; i++) {
               $(all_child[i]).removeClass('completed');
            }
            $(".step").removeClass('active');
            $(this).parent().parent().addClass('active');
         });
      })
   </script>
   <!---->
</body>

</html>