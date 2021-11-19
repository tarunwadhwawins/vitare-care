<!doctype html>
<html lang="en">

<head>
   <title>Virtare Care</title>
   <meta charset="UTF-8">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">
   <?php include_once('common/common-css.php'); ?>
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
                     <button class="btn primaryBtn" data-bs-toggle="modal" data-bs-target="#addTask">Add Task</button>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-4">
                     <div class="taskBox">
                        <div class="taskHeader">
                           <h4>Waiting</h4>
                           <div class="actions">
                              <a href="#" class="addTask1"><i class="fa fa-plus"></i></a>
                              <div class="dropdown">
                                 <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                 </a>

                                 <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Add rule to section</a></li>
                                    <li><a class="dropdown-item" href="#">Rename section</a></li>
                                    <li><a class="dropdown-item" href="#">Add Section</a></li>
                                    <li><a class="dropdown-item" href="#">Delete Section</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="taskBody connectedSortable" id="sortable1">
                           <div class="taskCard new addTaskBox1 d-none">
                              <input type="text" class="form-control" placeholder="Write a task name">
                              <div class="assignCalendar">
                                 <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                       <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                       <div class="row">
                                          <div class="col-sm-12">
                                             <div class="form-group">
                                                <label>Assigned To</label>
                                                <select class="form-control tags" multiple="multiple">
                                                   <option selected="selected">Jane Doe</option>
                                                   <option>Steve Smith</option>
                                                   <option>Joseph William </option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-sm-12">
                                             <div class="form-group">
                                                <label>Category</label>
                                                <select class="form-control tags" multiple="multiple">
                                                   <option selected="selected">Admin</option>
                                                   <option>Clinical</option>
                                                   <option>Office</option>
                                                   <option>Personal</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-sm-12">
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
                                          <div class="col-sm-12">
                                             <div class="form-group">
                                                <label>Short Description</label>
                                                <input type="text" class="form-control">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                       <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                       <li class="me-2">
                                          <div class="form-group">
                                             <label>Start Date</label>
                                             <input type="text" class="form-control datepicker" placeholder="Select Date">
                                          </div>
                                       </li>
                                       <li>
                                          <div class="form-group">
                                             <label>Due Date</label>
                                             <input type="text" class="form-control datepicker" placeholder="Select Date">
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="taskCard">
                              <div class="dropdown dragIcon">
                                 <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                 </button>
                                 <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Edit Task Name</a></li>
                                    <li><a class="dropdown-item" href="#">View Detail</a></li>
                                    <li><a class="dropdown-item" href="#">Delete Task</a></li>
                                 </ul>
                              </div>
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
                              <div class="dropdown dragIcon">
                                 <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                 </button>
                                 <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Edit Task Name</a></li>
                                    <li><a class="dropdown-item" href="#">View Detail</a></li>
                                    <li><a class="dropdown-item" href="#">Delete Task</a></li>
                                 </ul>
                              </div>
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

                        </div>
                        <div class="addNewTask">
                           <a href="#" class="addTask1"><i class="fa fa-plus"></i> Add Task</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="taskBox">
                        <div class="taskHeader">
                           <h4>In Progress</h4>
                           <div class="actions">
                              <a href="#" class="addTask2"><i class="fa fa-plus"></i></a>
                              <div class="dropdown">
                                 <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                 </a>

                                 <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Add rule to section</a></li>
                                    <li><a class="dropdown-item" href="#">Rename section</a></li>
                                    <li><a class="dropdown-item" href="#">Add Section</a></li>
                                    <li><a class="dropdown-item" href="#">Delete Section</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="taskBody connectedSortable" id="sortable2">
                           <div class="new addTaskBox2 d-none">
                              <input type="text" class="form-control" placeholder="Write a task name">
                              <div class="assignCalendar">
                                 <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                       <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                       <div class="row">
                                          <div class="col-sm-12">
                                             <div class="form-group">
                                                <label>Assigned To</label>
                                                <select class="form-control tags" multiple="multiple">
                                                   <option selected="selected">Jane Doe</option>
                                                   <option>Steve Smith</option>
                                                   <option>Joseph William </option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-sm-12">
                                             <div class="form-group">
                                                <label>Category</label>
                                                <select class="form-control tags" multiple="multiple">
                                                   <option selected="selected">Admin</option>
                                                   <option>Clinical</option>
                                                   <option>Office</option>
                                                   <option>Personal</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-sm-12">
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
                                          <div class="col-sm-12">
                                             <div class="form-group">
                                                <label>Short Description</label>
                                                <input type="text" class="form-control">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                       <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                       <li class="me-2">
                                          <div class="form-group">
                                             <label>Start Date</label>
                                             <input type="text" class="form-control datepicker" placeholder="Select Date">
                                          </div>
                                       </li>
                                       <li>
                                          <div class="form-group">
                                             <label>Due Date</label>
                                             <input type="text" class="form-control datepicker" placeholder="Select Date">
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="taskCard">
                              <div class="dropdown dragIcon">
                                 <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                 </button>
                                 <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Edit Task Name</a></li>
                                    <li><a class="dropdown-item" href="#">View Detail</a></li>
                                    <li><a class="dropdown-item" href="#">Delete Task</a></li>
                                 </ul>
                              </div>
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
                              <div class="dropdown dragIcon">
                                 <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                 </button>
                                 <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Edit Task Name</a></li>
                                    <li><a class="dropdown-item" href="#">View Detail</a></li>
                                    <li><a class="dropdown-item" href="#">Delete Task</a></li>
                                 </ul>
                              </div>
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

                        </div>
                        <div class="addNewTask">
                           <a href="#" class="addTask2"><i class="fa fa-plus"></i> Add Task</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="taskBox">
                        <div class="taskHeader">
                           <h4>Completed</h4>
                           <div class="actions">
                              <a href="#" class="addTask3"><i class="fa fa-plus"></i></a>
                              <div class="dropdown">
                                 <a class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                 </a>

                                 <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Add rule to section</a></li>
                                    <li><a class="dropdown-item" href="#">Rename section</a></li>
                                    <li><a class="dropdown-item" href="#">Add Section</a></li>
                                    <li><a class="dropdown-item" href="#">Delete Section</a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="taskBody connectedSortable" id="sortable3">
                           <div class="taskCard new addTaskBox3 d-none">
                              <input type="text" class="form-control" placeholder="Write a task name">
                              <div class="assignCalendar">
                                 <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                       <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                       <div class="row">
                                          <div class="col-sm-12">
                                             <div class="form-group">
                                                <label>Assigned To</label>
                                                <select class="form-control tags" multiple="multiple">
                                                   <option selected="selected">Jane Doe</option>
                                                   <option>Steve Smith</option>
                                                   <option>Joseph William </option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-sm-12">
                                             <div class="form-group">
                                                <label>Category</label>
                                                <select class="form-control tags" multiple="multiple">
                                                   <option selected="selected">Admin</option>
                                                   <option>Clinical</option>
                                                   <option>Office</option>
                                                   <option>Personal</option>
                                                </select>
                                             </div>
                                          </div>
                                          <div class="col-sm-12">
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
                                          <div class="col-sm-12">
                                             <div class="form-group">
                                                <label>Short Description</label>
                                                <input type="text" class="form-control">
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="dropdown">
                                    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                       <i class="fa fa-calendar" aria-hidden="true"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                       <li class="me-2">
                                          <div class="form-group">
                                             <label>Start Date</label>
                                             <input type="text" class="form-control datepicker" placeholder="Select Date">
                                          </div>
                                       </li>
                                       <li>
                                          <div class="form-group">
                                             <label>Due Date</label>
                                             <input type="text" class="form-control datepicker" placeholder="Select Date">
                                          </div>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="taskCard">
                              <div class="dropdown dragIcon">
                                 <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                 </button>
                                 <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Edit Task Name</a></li>
                                    <li><a class="dropdown-item" href="#">View Detail</a></li>
                                    <li><a class="dropdown-item" href="#">Delete Task</a></li>
                                 </ul>
                              </div>
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
                              <div class="dropdown dragIcon">
                                 <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h" aria-hidden="true"></i>
                                 </button>
                                 <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Edit Task Name</a></li>
                                    <li><a class="dropdown-item" href="#">View Detail</a></li>
                                    <li><a class="dropdown-item" href="#">Delete Task</a></li>
                                 </ul>
                              </div>
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

                        </div>
                        <div class="addNewTask">
                           <a href="#" class="addTask3"><i class="fa fa-plus"></i> Add Task</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>


   <?php include_once('common/modals.php'); ?>
   <?php include_once('common/common-js.php'); ?>
   <script>
      $(function() {
         $(".datepicker").datepicker({});
      });

      $(function() {
         $("#sortable1, #sortable2, #sortable3").sortable({
            connectWith: ".connectedSortable"
         }).disableSelection();
      });

      $(".addTask1").click(function() {
         $(".addTaskBox1").removeClass("d-none");
      });
      $(".addTask2").click(function() {
         $(".addTaskBox2").removeClass("d-none");
      });
      $(".addTask3").click(function() {
         $(".addTaskBox3").removeClass("d-none");
      });
   </script>
   <script>
      $(document).ready(function() {
         $('.tags').select2({});
      });
   </script>

   <!---->
</body>

</html>