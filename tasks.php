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
   <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
</head>

<body>
   <div class="main">
      <?php include_once('common/sidebar.php'); ?>
      <div class="pageWrapper">
         <?php include_once('common/header.php'); ?>
         <div class="contentWrapper allTasks">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-6">
                     <h2 class="pageTittle">Tasks</h2>
                  </div>
                  <div class="col-sm-6 text-end">
                     <button class="btn primaryBtn" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Task</button>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-4">
                     <div class="taskBox">
                        <div class="taskHeader">
                           <h4>Waiting</h4>
                           <div class="actions">
                              <a href="#"><i class="fa fa-plus"></i></a>
                              <a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                           </div>
                        </div>
                        <div class="taskBody">
                           <div class="taskCard">
                              <a href="#" class="dragIcon"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                              <p class="title">Medical Record for P. Pan</p>
                              <p class="description">Request medical records from his PCP</p>
                              <div class="timeStaff">
                                 <div class="time">
                                    <p>2 day ago</p>
                                    <div class="category bg-primary">Onboard</div>
                                 </div>
                                 <div class="staff">
                                    <ul>
                                       <li><img src="assets/images/profile-1.jpg"></li>
                                       <li><img src="assets/images/profile-1.jpg"></li>
                                       <li><img src="assets/images/profile-1.jpg"></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="taskCard">
                              <a href="#" class="dragIcon"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                              <p class="title">Medical Record for P. Pan</p>
                              <p class="description">Request medical records from his PCP</p>
                              <div class="timeStaff">
                                 <div class="time">
                                    <p>2 day ago</p>
                                    <div class="category bg-primary">Onboard</div>
                                 </div>
                                 <div class="staff">
                                    <ul>
                                       <li><img src="assets/images/profile-1.jpg"></li>
                                       <li><img src="assets/images/profile-1.jpg"></li>
                                       <li><img src="assets/images/profile-1.jpg"></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="addNewTask">
                              <a href="#"><i class="fa fa-plus"></i> Add Task</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="taskBox">
                        <div class="taskHeader">
                           <h4>In Progress</h4>
                           <div class="actions">
                              <a href="#"><i class="fa fa-plus"></i></a>
                              <a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                           </div>
                        </div>
                        <div class="taskBody">
                           <div class="taskCard">
                              <a href="#" class="dragIcon"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                              <p class="title">Medical Record for P. Pan</p>
                              <p class="description">Request medical records from his PCP</p>
                              <div class="timeStaff">
                                 <div class="time">
                                    <p>2 day ago</p>
                                    <!-- <div class="category">Onboard</div> -->
                                 </div>
                                 <div class="staff">
                                    <ul>
                                       <li><img src="assets/images/profile-1.jpg"></li>
                                       <li><img src="assets/images/profile-1.jpg"></li>
                                       <li><img src="assets/images/profile-1.jpg"></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="taskCard">
                              <a href="#" class="dragIcon"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                              <p class="title">Medical Record for P. Pan</p>
                              <p class="description">Request medical records from his PCP</p>
                              <div class="timeStaff">
                                 <div class="time">
                                    <p>2 day ago</p>
                                    <div class="category bg-danger">Urgent</div>
                                 </div>
                                 <div class="staff">
                                    <ul>
                                       <li><img src="assets/images/profile-1.jpg"></li>
                                       <li><img src="assets/images/profile-1.jpg"></li>
                                       <li><img src="assets/images/profile-1.jpg"></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="addNewTask">
                              <a href="#"><i class="fa fa-plus"></i> Add Task</a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="taskBox">
                        <div class="taskHeader">
                           <h4>Completed</h4>
                           <div class="actions">
                              <a href="#"><i class="fa fa-plus"></i></a>
                              <a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                           </div>
                        </div>
                        <div class="taskBody">
                           <div class="taskCard">
                              <a href="#" class="dragIcon"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                              <p class="title">Medical Record for P. Pan</p>
                              <p class="description">Request medical records from his PCP</p>
                              <div class="timeStaff">
                                 <div class="time">
                                    <p>2 day ago</p>
                                    <div class="category bg-primary">Onboard</div>
                                 </div>
                                 <div class="staff">
                                    <ul>
                                       <li><img src="assets/images/profile-1.jpg"></li>
                                       <li><img src="assets/images/profile-1.jpg"></li>
                                       <li><img src="assets/images/profile-1.jpg"></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="taskCard">
                              <a href="#" class="dragIcon"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                              <p class="title">Medical Record for P. Pan</p>
                              <p class="description">Request medical records from his PCP</p>
                              <div class="timeStaff">
                                 <div class="time">
                                    <p>2 day ago</p>
                                    <div class="category bg-primary">Onboard</div>
                                 </div>
                                 <div class="staff">
                                    <ul>
                                       <li><img src="assets/images/profile-1.jpg"></li>
                                       <li><img src="assets/images/profile-1.jpg"></li>
                                       <li><img src="assets/images/profile-1.jpg"></li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="addNewTask">
                              <a href="#"><i class="fa fa-plus"></i> Add Task</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Add Task</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <label>Short Description</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <label>Category</label>
                        <select class="form-select">
                           <option value="0" selected> Choose Category</option>
                           <option value="1">Waiting</option>
                           <option value="2">Inprogress</option>
                           <option value="3">Completed</option>
                        </select>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <label>Priority</label>
                        <select class="form-select">
                           <option value="0" selected> Choose Priority</option>
                           <option value="1">Urgent</option>
                           <option value="2">Medium</option>
                           <option value="3">Normal </option>
                        </select>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <label>Assigned To</label>
                        <select class="form-select">
                           <option value="0" selected> Choose One</option>
                           <option value="1">Jane Doe</option>
                           <option value="2">Steve Smith</option>
                           <option value="3">Joseph William </option>
                        </select>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <label>Start Date</label>
                        <input type="text" class="form-control datepicker">
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <label>Due Date</label>
                        <input type="text" class="form-control datepicker">
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
               <button class="btn primaryBtn" data-bs-dismiss="modal">Save</button>
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
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.29.0/apexcharts.min.js"></script>
   <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
   <script>
       $(function() {
         $(".datepicker").datepicker();
      });
   </script>

   <!---->
</body>

</html>