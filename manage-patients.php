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
                     <h2 class="pageTittle">Manange Patients</h2>
                  </div>
                  <div class="col-sm-6 text-end">
                     <button class="btn primaryBtn" data-bs-toggle="modal" data-bs-target="#manangePatients">Add New Patient</button>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="table-responsive commonTable">
                        <table class="table text-nowrap  table-hover">
                           <thead>
                              <tr>
                                 <th rowspan="2">Flags
                                    <span class="icon">
                                       <i class="fa fa-caret-up" aria-hidden="true"></i>
                                       <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </span>
                                 </th>
                                 <th rowspan="2">First Name
                                    <span class="icon">
                                       <i class="fa fa-caret-up" aria-hidden="true"></i>
                                       <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </span>
                                 </th>
                                 <th rowspan="2">Last Name
                                    <span class="icon">
                                       <i class="fa fa-caret-up" aria-hidden="true"></i>
                                       <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </span>
                                 </th>
                                 <th rowspan="2">Age
                                    <span class="icon">
                                       <i class="fa fa-caret-up" aria-hidden="true"></i>
                                       <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </span>
                                 </th>
                                 <th rowspan="2">Sex
                                    <span class="icon">
                                       <i class="fa fa-caret-up" aria-hidden="true"></i>
                                       <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </span>
                                 </th>
                                 <th rowspan="2">Last Reading Date
                                    <span class="icon">
                                       <i class="fa fa-caret-up" aria-hidden="true"></i>
                                       <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </span>
                                 </th>
                                 <th rowspan="2">Non Compliance
                                    <span class="icon">
                                       <i class="fa fa-caret-up" aria-hidden="true"></i>
                                       <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </span>
                                 </th>
                                 <th rowspan="2">Last Message Sent
                                    <span class="icon">
                                       <i class="fa fa-caret-up" aria-hidden="true"></i>
                                       <i class="fa fa-caret-down" aria-hidden="true"></i>
                                    </span>
                                 </th>
                                 <th colspan="3">Last Reading Values</th>
                              </tr>
                              <tr>
                                 <th>Sp02</th>
                                 <th>BP</th>
                                 <th>Weight</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>
                                    <span class="box redBgColor"></span>
                                 </td>
                                 <td><a href="patient-summary" class="primary-color">Jane</a></td>
                                 <td><a href="patient-summary" class="primary-color">Doe</a></td>
                                 <td>85</td>
                                 <td>Male</td>
                                 <td>5 months ago</td>
                                 <td><i class="fa fa-exclamation-triangle yellowColor" aria-hidden="true"></i></td>
                                 <td>5 months ago</td>
                                 <td>95%</td>
                                 <td>115/81</td>
                                 <td>189.2</td>
                              </tr>
                              <tr>
                                 <td>
                                    <span class="box purpleBgColor"></span>
                                 </td>
                                 <td><a href="patient-summary" class="primary-color">Steve </a></td>
                                 <td><a href="patient-summary" class="primary-color">Smith</a></td>
                                 <td>78</td>
                                 <td>Female</td>
                                 <td>15 days ago</td>
                                 <td><i class="fa fa-exclamation-triangle yellowColor" aria-hidden="true"></i></td>
                                 <td>2 months ago</td>
                                 <td></td>
                                 <td>105/81</td>
                                 <td></td>
                              </tr>
                              <tr>
                                 <td>
                                    <span class="box blueBgColor"></span>
                                    <span class="box yellowBgColor"></span>
                                 </td>
                                 <td><a href="patient-summary" class="primary-color">Joseph</a> </td>
                                 <td><a href="patient-summary" class="primary-color">Spouse</a></td>
                                 <td>72</td>
                                 <td>Male</td>
                                 <td>2 months ago</td>
                                 <td><i class="fa fa-exclamation-triangle yellowColor" aria-hidden="true"></i></td>
                                 <td>4 months ago</td>
                                 <td>-</td>
                                 <td>-</td>
                                 <td>-</td>
                              </tr>
                              <tr>
                                 <td>
                                    <span class="box greenBgColor"></span>
                                 </td>
                                 <td><a href="patient-summary" class="primary-color">Robert </a></td>
                                 <td><a href="patient-summary" class="primary-color">Henry</a></td>
                                 <td>79</td>
                                 <td>Female</td>
                                 <td>4 months ago</td>
                                 <td><i class="fa fa-exclamation-triangle yellowColor" aria-hidden="true"></i></td>
                                 <td>15 days ago</td>
                                 <td>92%</td>
                                 <td></td>
                                 <td>181.2</td>
                              </tr>
                              <tr>
                                 <td>
                                    <span class="box yellowBgColor"></span>
                                 </td>
                                 <td><a href="patient-summary" class="primary-color">Jane</a></td>
                                 <td><a href="patient-summary" class="primary-color">Doe</a></td>
                                 <td>85</td>
                                 <td>Male</td>
                                 <td>5 months ago</td>
                                 <td><i class="fa fa-exclamation-triangle yellowColor" aria-hidden="true"></i></td>
                                 <td>5 months ago</td>
                                 <td>95%</td>
                                 <td>115/81</td>
                                 <td>189.2</td>
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

 
   <?php include_once('common/common-js.php'); ?>
   <?php include_once('common/modals.php'); ?>
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
      $(".tags").select2({
         tags: true,
         tokenSeparators: [',', ' ']
      })
   </script>
   <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
   <script>
      $(function() {
         $(".datepicker").datepicker();
      });
   </script>
   <!---->
</body>

</html>