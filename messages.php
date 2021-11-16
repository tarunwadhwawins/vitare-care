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
         <div class="contentWrapper">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-6">
                     <h2 class="pageTittle">Communications</h2>
                  </div>
                  <div class="col-sm-6 text-end">
                     <button class="btn primaryBtn" data-bs-toggle="modal" data-bs-target="#addMessage">Add Message</button>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="table-responsive commonTable">
                        <table class="table">
                           <thead>
                              <tr>
                                 <th>Type
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
                                 <th>Message Category
                                    <span class="icon">
                                       <i class="fa fa-caret-up" aria-hidden="true"></i>
                                       <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </span>
                                 </th>
                                 <th>Patient
                                    <span class="icon">
                                       <i class="fa fa-caret-up" aria-hidden="true"></i>
                                       <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </span>
                                 </th>
                                 <th>Sent To
                                    <span class="icon">
                                       <i class="fa fa-caret-up" aria-hidden="true"></i>
                                       <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </span>
                                 </th>
                                 <th>Sent
                                    <span class="icon">
                                       <i class="fa fa-caret-up" aria-hidden="true"></i>
                                       <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </span>
                                 </th>
                                 <th>Appt Type, Date, Time
                                    <span class="icon">
                                       <i class="fa fa-caret-up" aria-hidden="true"></i>
                                       <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </span>
                                 </th>
                                 <th>Resend</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td><i class="fa fa-commenting" aria-hidden="true"></i></td>
                                 <td>Delievered</td>
                                 <td>Appointment Reminder</td>
                                 <td>John</td>
                                 <td>22998876654</td>
                                 <td>Nov 11, 2021 - 11:30 Am</td>
                                 <td>OLS APPT TYPE </BR> Nov 11, 2021 - 11:30 Am</td>
                                 <td>
                                    <ul class="action">
                                       <li><a href="#" class="link-primary"><i class="fa fa-paper-plane" aria-hidden="true"></i></a></li>
                                    </ul>
                                 </td>
                              </tr>
                              <tr>
                                 <td><i class="fa fa-phone" aria-hidden="true"></i></td>
                                 <td>Voice Mail</td>
                                 <td>Recall Reminder</td>
                                 <td>Smith</td>
                                 <td>22998876654</td>
                                 <td>Nov 11, 2021 - 11:30 Am</td>
                                 <td>OLS APPT TYPE </BR> Nov 11, 2021 - 11:30 Am</td>
                                 <td>
                                    <ul class="action">
                                       <li><a href="#" class="link-primary"><i class="fa fa-paper-plane" aria-hidden="true"></i></a></li>
                                    </ul>
                                 </td>
                              </tr>
                              <tr>
                                 <td><i class="fa fa-phone" aria-hidden="true"></i></td>
                                 <td>Sent</td>
                                 <td>Patient Message </td>
                                 <td>Steve</td>
                                 <td>22998876654</td>
                                 <td>Nov 11, 2021 - 11:30 Am</td>
                                 <td>OLS APPT TYPE </BR> Nov 11, 2021 - 11:30 Am</td>
                                 <td>
                                    <ul class="action">
                                       <li><a href="#" class="link-primary"><i class="fa fa-paper-plane" aria-hidden="true"></i></a></li>
                                    </ul>
                                 </td>
                              </tr>
                              <tr>
                                 <td><i class="fa fa-envelope-o" aria-hidden="true"></i></td>
                                 <td>Sent</td>
                                 <td>Portal Invitation</td>
                                 <td>Robert</td>
                                 <td>22998876654</td>
                                 <td>Nov 11, 2021 - 11:30 Am</td>
                                 <td>OLS APPT TYPE </BR> Nov 11, 2021 - 11:30 Am</td>
                                 <td>
                                    <ul class="action">
                                       <li><a href="#" class="link-primary"><i class="fa fa-paper-plane" aria-hidden="true"></i></a></li>
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

   <!---->
</body>

</html>