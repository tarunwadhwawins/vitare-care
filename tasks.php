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
                              <a href="#"><i class="fa fa-plus"></i></a>
                              <a href="#"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
                           </div>
                        </div>
                        <div class="taskBody connectedSortable" id="sortable1">
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

                        </div>
                        <div class="addNewTask">
                           <a href="#"><i class="fa fa-plus"></i> Add Task</a>
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
                        <div class="taskBody connectedSortable" id="sortable2">
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

                        </div>
                        <div class="addNewTask">
                           <a href="#"><i class="fa fa-plus"></i> Add Task</a>
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
                        <div class="taskBody connectedSortable" id="sortable3">
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
   </script>

   <!---->
</body>

</html>