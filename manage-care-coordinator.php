<!doctype html>
<html lang="en">

<head>
   <title>Virtare Care</title>
   <meta charset="UTF-8">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php include_once('common/common-css.php'); ?>
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
                     <button class="btn primaryBtn" data-bs-toggle="modal" data-bs-target="#manageCareCoordinator">Add New Coordinator</button>
                  </div>
               </div>
               <div class="row mb-4">
                  <div class="col-sm-6">
                     <div class="row">
                        <div class="col-12 mb-2">
                           <h5>Specialization</h5>
                        </div>
                        <div class="col ">
                           <div class="topBox manage two">
                              <i class="fa fa-user" aria-hidden="true"></i>
                              <h5>4</h5>
                              <p>Wellness</p>
                           </div>
                        </div>
                        <div class="col ">
                           <div class="topBox manage four">
                              <i class="fa fa-user" aria-hidden="true"></i>
                              <h5>5</h5>
                              <p>Behavior</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="row">
                     <div class="col-12 mb-2">
                           <h5>Network</h5>
                        </div>
                        <div class="col ">
                           <div class="topBox manage six">
                              <i class="fa fa-user" aria-hidden="true"></i>
                              <h5>5</h5>
                              <p>In</p>
                           </div>
                        </div>
                        <div class="col ">
                           <div class="topBox manage five">
                              <i class="fa fa-user" aria-hidden="true"></i>
                              <h5>6</h5>
                              <p>Out</p>
                           </div>
                        </div>
                     </div>
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
                                 <th>Specialization
                                    <span class="icon">
                                       <i class="fa fa-caret-up" aria-hidden="true"></i>
                                       <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </span>
                                 </th>
                                 <th>Network
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
                                 <td>Wellness</td>
                                 <td>In</td>
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
                                 <td>Behavior </td>
                                 <td>Out</td>
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
                                 <td>Wellness</td>
                                 <td>In</td>
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
                                 <td>Behavior </td>
                                 <td>Out</td>
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



   <?php include_once('common/modals.php'); ?>
   <?php include_once('common/common-js.php'); ?>
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
      $(".tags").select2({
         tags: true,
         tokenSeparators: [',', ' ']
      })
   </script>
   <!---->
</body>

</html>