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
                  <div class="col-sm-12">
                     <h2 class="pageTittle">Dashboard</h2>
                  </div>
               </div>
               <div class="row">
                  <div class="col ">
                     <div class="topBox one">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        <h5>10</h5>
                        <p>Total Patients</p>
                     </div>
                  </div>
                  <div class="col ">
                     <div class="topBox two">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        <h5>12</h5>
                        <p>New Patients</p>
                     </div>
                  </div>
                  <div class="col ">
                     <div class="topBox three">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        <h5>10</h5>
                        <p>Critical Patients</p>
                     </div>
                  </div>
                  <div class="col ">
                     <div class="topBox four">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        <h5>15</h5>
                        <p>Abnormal Patients</p>
                     </div>
                  </div>
                  <div class="col ">
                     <div class="topBox five">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        <h5>22</h5>
                        <p>Active Patients</p>
                     </div>
                  </div>
                  <div class="col">
                     <div class="topBox six">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        <h5>7</h5>
                        <p>Inactive Patients</p>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-6">
                     <div class="card commonCard">
                        <div class="card-header">
                           <h4>Patients Stats</h4>
                        </div>
                        <ul class="list-group list-group-flush">
                           <li class="list-group-item">
                              <div class="img">
                                 <img src="assets/images/profile.jpg" alt="">
                              </div>
                              <div class="name">
                                 Jane Doe
                              </div>
                              <div class="progressBar">
                                 <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                              </div>
                           </li>
                           <li class="list-group-item">
                              <div class="img">
                                 <img src="assets/images/profile.jpg" alt="">
                              </div>
                              <div class="name">
                                 Jane Doe
                              </div>
                              <div class="progressBar">
                                 <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                              </div>
                           </li>
                           <li class="list-group-item">
                              <div class="img">
                                 <img src="assets/images/profile.jpg" alt="">
                              </div>
                              <div class="name">
                                 Jane Doe
                              </div>
                              <div class="progressBar">
                                 <div class="progress">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                 </div>
                              </div>
                           </li>
                        </ul>

                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="card commonCard">
                        <div class="card-header">
                           <div class="buttons">
                              <button class="btn">Virtual Waiting Room</button>
                              <button class="btn">Go to Calender</button>
                           </div>
                        </div>
                        <div class="card-body">
                           <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                              <li class="nav-item" role="presentation">
                                 <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">New Requests</button>
                              </li>
                              <li class="nav-item" role="presentation">
                                 <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Future Appointments</button>
                              </li>
                           </ul>
                           <table class="table table-borderless">
                              <thead>
                                 <tr>
                                    <th>Date</th>
                                    <th>Patient</th>
                                    <th>Action</th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td colspan="3" class="text-center">
                                       <p>No Appointment Request</p>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="chartBox">
                        <div id="chart">
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="chartBox">
                        <div id="chart2">
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
   <script>
      $(document).ready(function() {
         $('.js-example-basic-single').select2({
            placeholder: "Select a Patient",
         });
      });
   </script>
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
   <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
   <script>
      $(function() {
         $(".datepicker").datepicker();
      });
   </script>
   <script>
      $(".tags").select2({
         tags: true,
         tokenSeparators: [',', ' ']
      })
   </script>
   <!---->
</body>

</html>