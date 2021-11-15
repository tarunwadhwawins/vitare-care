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
   <link rel="stylesheet" href="assets/css/font-awesome.min.css" type="text/css" />
   <link rel="stylesheet" href="assets/css/tagger.css" type="text/css" />
   <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
                     <button class="btn primaryBtn" data-bs-toggle="modal" data-bs-target="#exampleModal">Add New Patient</button>
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

   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Add New Patients</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="min-height:380px;">
               <div class="stepper">
                  <div class="stepperHead">
                     <div class="step active">
                        <div class="stepTitle">
                           <div class="title">Demographics</div>
                        </div>
                        <div class="stepperCard">
                           <div class="stepperBody">
                              <div class="row">
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Full Name</label>
                                       <input type="text" class="form-control" />
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Nick Name</label>
                                       <input type="text" class="form-control" />
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Date of Birth</label>
                                       <input type="date" class="form-control" />
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
                                       <label>Weight</label>
                                       <input type="text" class="form-control" />
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Height</label>
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
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Country</label>
                                       <input type="text" class="form-control" />
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>State</label>
                                       <input type="text" class="form-control" />
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>City</label>
                                       <input type="text" class="form-control" />
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Zipcode</label>
                                       <input type="text" class="form-control" />
                                    </div>
                                 </div>
                                 <div class="col-sm-12">
                                    <div class="form-group">
                                       <label>Address</label>
                                       <textarea class="form-control" name="" id="" cols="30" rows="3"></textarea>
                                    </div>
                                 </div>

                                 <div class="col-sm-12">
                                    <div class="formHeading">
                                       <h2>Primary Family Member</h2>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Full Name</label>
                                       <input type="text" class="form-control" />
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Gender</label>
                                       <input type="date" class="form-control" />
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Email Address</label>
                                       <input type="text" class="form-control" />
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Phone Number</label>
                                       <input type="text" class="form-control" />
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Relation</label>
                                       <input type="text" class="form-control" />
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
                           <div class="title">Conditions</div>
                        </div>
                        <div class="stepperCard">
                           <div class="stepperBody">
                              <div class="row mb-2">
                                 <div class="col-sm-12">
                                    <div class="formHeading">
                                       <h2>Health Conditions</h2>
                                    </div>
                                 </div>
                                 <div class="col-sm-4">
                                    <div class="checkBox">
                                       <label class="checkInput">Congestive Health Failure
                                          <input type="checkbox" checked="checked">
                                          <span class="checkmark"></span>
                                       </label>
                                    </div>
                                 </div>
                                 <div class="col-sm-4">
                                    <div class="checkBox">
                                       <label class="checkInput">COPD
                                          <input type="checkbox">
                                          <span class="checkmark"></span>
                                       </label>
                                    </div>
                                 </div>
                                 <div class="col-sm-4">
                                    <div class="checkBox">
                                       <label class="checkInput">Chronic Kidney Disease
                                          <input type="checkbox">
                                          <span class="checkmark"></span>
                                       </label>
                                    </div>
                                 </div>
                                 <div class="col-sm-4">
                                    <div class="checkBox">
                                       <label class="checkInput">Cardiovascular Disease
                                          <input type="checkbox">
                                          <span class="checkmark"></span>
                                       </label>
                                    </div>
                                 </div>
                                 <div class="col-sm-4">
                                    <div class="checkBox">
                                       <label class="checkInput">Depression
                                          <input type="checkbox">
                                          <span class="checkmark"></span>
                                       </label>
                                    </div>
                                 </div>
                                 <div class="col-sm-4">
                                    <div class="checkBox">
                                       <label class="checkInput">Diabetes
                                          <input type="checkbox">
                                          <span class="checkmark"></span>
                                       </label>
                                    </div>
                                 </div>
                                 <div class="col-sm-4">
                                    <div class="checkBox">
                                       <label class="checkInput">Hyper Tension
                                          <input type="checkbox">
                                          <span class="checkmark"></span>
                                       </label>
                                    </div>
                                 </div>
                                 <div class="col-sm-4">
                                    <div class="checkBox">
                                       <label class="checkInput">Stroke
                                          <input type="checkbox">
                                          <span class="checkmark"></span>
                                       </label>
                                    </div>
                                 </div>
                                 <div class="col-sm-4">
                                    <div class="checkBox">
                                       <label class="checkInput">Other
                                          <input type="checkbox">
                                          <span class="checkmark"></span>
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-sm-12">
                                    <div class="formHeading">
                                       <h2>Primary Physician</h2>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Name</label>
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
                                       <label>Email</label>
                                       <input type="text" class="form-control" />
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Phone No.</label>
                                       <input type="text" class="form-control" />
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
                           <div class="title">Programs</div>
                        </div>
                        <div class="stepperCard">
                           <div class="stepperBody">
                              <div class="row">
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Programs</label>
                                       <select class="form-select">
                                          <option value="0" selected> Choose Program</option>
                                          <option value="1">Program 1</option>
                                          <option value="2">Program 2</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-sm-3">
                                    <div class="form-group">
                                       <label>Start Date</label>
                                       <input type="date" class="form-control" />
                                    </div>
                                 </div>
                                 <div class="col-sm-3">
                                    <div class="form-group">
                                       <label>End Date</label>
                                       <input type="date" class="form-control" />
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Status </label>
                                       <div class="row">
                                          <div class="col-sm-3">
                                             <div class="radioForm">
                                                <label class="radioInput">Active
                                                   <input type="radio" checked="checked" name="radio">
                                                   <span class="checkmark"></span>
                                                </label>
                                             </div>
                                          </div>
                                          <div class="col-sm-3">
                                             <div class="radioForm">
                                                <label class="radioInput">Inactive
                                                   <input type="radio" name="radio">
                                                   <span class="checkmark"></span>
                                                </label>
                                             </div>
                                          </div>
                                       </div>
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
                                                <th>Program Name</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>Program 1</td>
                                                <td>Nov 12, 2021</td>
                                                <td>Dec 20, 2021</td>
                                                <td>Active</td>
                                                <td>
                                                   <ul class="action">
                                                      <li><a href="#" class="link-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                                      <li><a href="#" class="link-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                                   </ul>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>Program 2</td>
                                                <td>Nov 22, 2021</td>
                                                <td>Dec 28, 2021</td>
                                                <td>InActive</td>
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
                           <div class="title">Assessments</div>
                        </div>
                        <div class="stepperCard">
                           <div class="stepperBody">
                            <div class="row">
                                  <div class="col-sm-12">
                                    <div class="formHeading">
                                       <h2>Blood Pressure</h2>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Systolic</label>
                                       <input type="text" class="form-control" />
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Diastolic</label>
                                       <input type="text" class="form-control" />
                                    </div>
                                 </div>
                                 <div class="col-sm-12">
                                    <div class="formHeading">
                                       <h2>Pulse</h2>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>BPM</label>
                                       <input type="text" class="form-control" />
                                    </div>
                                 </div>
                                 <div class="col-sm-12">
                                    <div class="formHeading">
                                       <h2>Blood Oxygen Saturation</h2>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>SPO2</label>
                                       <input type="text" class="form-control" />
                                    </div>
                                 </div>
                                 <div class="col-sm-12">
                                    <div class="formHeading">
                                       <h2>Glucose</h2>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Fasting Blood Sugar</label>
                                       <input type="text" class="form-control" />
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Random Blood Sugar</label>
                                       <input type="text" class="form-control" />
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
                           <div class="title">Clinical Data</div>
                        </div>
                        <div class="stepperCard">
                           <div class="stepperBody">
                              <div class="row mb-3">
                                 <div class="col-sm-12">
                                    <div class="formHeading">
                                       <h2>Medicine History</h2>
                                    </div>
                                 </div>
                                 <div class="col-sm-12">
                                    <div class="form-group">
                                       <label>Medical History</label>
                                       <textarea class="form-control"></textarea>
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
                                                <th>History</th>
                                                <th>Actions</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>Program 1</td>
                                                <td>
                                                   <ul class="action">
                                                      <li><a href="#" class="link-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                                      <li><a href="#" class="link-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                                   </ul>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>Program 2</td>
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
                              <div class="row">

                                 <div class="col-sm-12">
                                    <div class="formHeading">
                                       <h2>Medicine Routine</h2>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Medicine</label>
                                       <input type="text" class="form-control">
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Routine</label>
                                       <input type="text" class="form-control">
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
                                                <th>Program Name</th>
                                                <th>Start Date</th>
                                                <th>End Date</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                             </tr>
                                          </thead>
                                          <tbody>
                                             <tr>
                                                <td>Program 1</td>
                                                <td>Nov 12, 2021</td>
                                                <td>Dec 20, 2021</td>
                                                <td>Active</td>
                                                <td>
                                                   <ul class="action">
                                                      <li><a href="#" class="link-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                                      <li><a href="#" class="link-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                                   </ul>
                                                </td>
                                             </tr>
                                             <tr>
                                                <td>Program 2</td>
                                                <td>Nov 22, 2021</td>
                                                <td>Dec 28, 2021</td>
                                                <td>InActive</td>
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
                           <div class="title">Billing</div>
                        </div>
                        <div class="stepperCard">
                           <div class="stepperBody">
                              <div class="row">
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Insurance Id</label>
                                       <input type="text" class="form-control" />
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Insurance Type</label>
                                       <input type="text" class="form-control" />
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label>Expiry Date</label>
                                       <input type="text" class="form-control" />
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
            <!-- <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
            </div> -->
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
   <script type="text/javascript" src="assets/js/tagger.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.29.0/apexcharts.min.js"></script>
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
      $(".js-example-tokenizer").select2({
         tags: true,
         tokenSeparators: [',', ' ']
      })
   </script>

   <!---->
</body>

</html>