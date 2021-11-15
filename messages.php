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
                     <h2 class="pageTittle">Communications</h2>
                  </div>
                  <div class="col-sm-6 text-end">
                     <button class="btn primaryBtn" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Message</button>
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

   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Messages & Notifications</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="row">
                  <div class="col-sm-6">
                     <div class="form-group">
                        <label>From</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <label>To</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <label>Patient</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <label>Subject</label>
                        <input type="text" class="form-control">
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <label>Message Category</label>
                        <select class="form-select">
                           <option value="0" selected> Choose Category</option>
                           <option value="1">Appointment Reminder</option>
                           <option value="2">Recall Reminder</option>
                           <option value="3">Portal Invitation </option>
                           <option value="3">Patient Message Notification </option>
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
                  <div class="col-sm-12">
                     <div class="form-group">
                        <label>Message</label>
                        <textarea class="form-control"></textarea>
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
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
   <script>
      var options = {
         series: [25, 15, 44, 55, 41, 17],
         chart: {
            width: '100%',
            type: 'pie',
            height: 365,
         },
         labels: ["Total Patients", "New Patients", "Critical Patients", "Abnormal Patients", "Active Patients", "Inactive Patients"],
         theme: {
            monochrome: {
               enabled: true
            }
         },
         plotOptions: {
            pie: {
               dataLabels: {
                  offset: -5
               }
            }
         },
         title: {
            text: "Total Patients Chart"
         },
         dataLabels: {
            formatter(val, opts) {
               const name = opts.w.globals.labels[opts.seriesIndex]
               return [name, val.toFixed(1) + '%']
            }
         },
         legend: {
            show: false
         }
      };

      var chart = new ApexCharts(document.querySelector("#chart"), options);
      chart.render();
   </script>
   <script>
      var options = {
         series: [{
            name: 'series1',
            data: [31, 40, 28, 51, 42, 109, 100]
         }],
         chart: {
            height: 350,
            type: 'area',
            toolbar: {
               show: false,
            }
         },
         title: {
            text: "Appointment Summary"
         },
         dataLabels: {
            enabled: false
         },
         stroke: {
            curve: 'smooth'
         },
         xaxis: {
            type: 'text',
            categories: ["Jan", "Feb", "Mar", "April", "May", "Jun", "July"]
         },
         tooltip: {
            toolbar: 'false',
            x: {
               format: 'dd/MM/yy HH:mm'
            },
         },
      };

      var chart = new ApexCharts(document.querySelector("#chart2"), options);
      chart.render();
   </script>
   <!---->
</body>

</html>