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
         <div class="contentWrapper patientSummary">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <h2 class="pageTittle">Patient Summary</h2>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-3">
                     <div class="patientInfo">
                        <div class="patientImg">
                           <img src="assets/images/profile-4.jpg" alt="">
                        </div>
                        <p class="name">Jane Doe</p>
                        <table class="table table-sm">
                           <tbody>
                              <tr>
                                 <th>DOB</th>
                                 <td>Aug 05, 1988 <span>(33)</span></td>
                              </tr>
                              <tr>
                                 <th>Gender</th>
                                 <td>Male</td>
                              </tr>
                              <tr>
                                 <th>EHR ID</th>
                                 <td>123THJ</td>
                              </tr>
                              <tr>
                                 <th>Flag</th>
                                 <td>
                                    <div class="flags">
                                       <span class="flag redBg"></span>
                                       <span class="flag yellowBg"></span>
                                    </div>
                                 </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
                  <div class="col-sm-9">
                     <div class="alert alert-danger">
                        <p>Patient has dimentia. Talk to wife - Marry when calling. Prefers evening calling.</p>
                     </div>
                     <div class="patientDes">
                        <div class="accordion" id="accordionExample">
                           <div class="accordion-item">
                              <div class="accordion-header" id="headingOne">
                                 <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Patient Infomation
                                 </button>
                              </div>
                              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    <a href="#" class="edit"> <i class="fa fa-edit"></i> </a>
                                    <p><strong>Language</strong> : English</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <div class="accordion-header" id="headingTwo">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Contact Infomation
                                 </button>
                              </div>
                              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    <a href="#" class="edit"> <i class="fa fa-edit"></i> </a>
                                    <p><strong>Phone Number</strong> : (554) 856-5645</p>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <div class="accordion-header" id="headingThree">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Care Team
                                 </button>
                              </div>
                              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    <div class="row">
                                       <div class="col-sm-4">
                                          <h4>Health Team</h4>
                                          <ul>
                                             <li>
                                                <div class="profileImg">
                                                   <img src="assets/images/profile-1.jpg" alt="">
                                                </div>
                                                <div class="content">
                                                   <p class="name">ICC Health (Mental Health)</p>
                                                   <p class="role">Care Team</p>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="profileImg">
                                                   <img src="assets/images/profile-2.jpg" alt="">
                                                </div>
                                                <div class="content">
                                                   <p class="name">ICC Health (Medical)</p>
                                                   <p class="role">Care Team</p>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                       <div class="col-sm-4">
                                          <h4>Care Coordinators
                                             <span data-bs-toggle="modal" data-bs-target="#care"><i class="fa fa-plus"></i></span>
                                          </h4>
                                          <ul>
                                             <li>
                                                <div class="profileImg">
                                                   <img src="assets/images/profile-3.jpg" alt="">

                                                </div>
                                                <div class="content">
                                                   <p class="name">James Smith</p>
                                                   <p class="role">Pysician</p>
                                                   <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="profileImg">
                                                   <img src="assets/images/profile-4.jpg" alt="">
                                                </div>
                                                <div class="content">
                                                   <p class="name">Robin Roger</p>
                                                   <p class="role">Cardiologist</p>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                       <div class="col-sm-4">
                                          <h4>Family Coordinators
                                             <span data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa fa-plus"></i></span>
                                          </h4>
                                          <ul>
                                             <li>
                                                <div class="profileImg">
                                                   <img src="assets/images/user-1.jpg" alt="">
                                                </div>
                                                <div class="content">
                                                   <p class="name">Jane Doe</p>
                                                   <p class="role">Son</p>
                                                   <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="profileImg">
                                                   <img src="assets/images/user-2.jpg" alt="">
                                                </div>
                                                <div class="content">
                                                   <p class="name">Marina Williams</p>
                                                   <p class="role">Daughter</p>
                                                </div>
                                             </li>
                                             <li>
                                                <div class="profileImg">
                                                   <img src="assets/images/user-3.png" alt="">
                                                </div>
                                                <div class="content">
                                                   <p class="name">Jerica Dom</p>
                                                   <p class="role">Daughter</p>
                                                </div>
                                             </li>
                                          </ul>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="accordion-item">
                              <div class="accordion-header" id="headingFour">
                                 <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Insurance Infomation
                                 </button>
                              </div>
                              <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="collapseFour" data-bs-parent="#accordionExample">
                                 <div class="accordion-body">
                                    <a href="#" class="edit"> <i class="fa fa-edit"></i> </a>
                                    <p><strong>Primary Insurance</strong> : NA</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12">
                     <div class="patientTabs">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-Care-tab" data-bs-toggle="pill" data-bs-target="#pills-Care" type="button" role="tab" aria-controls="pills-Care" aria-selected="true">Care Plan</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link active" id="pills-Vitals-tab" data-bs-toggle="pill" data-bs-target="#pills-Vitals" type="button" role="tab" aria-controls="pills-Vitals" aria-selected="false">Patient Vitals</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-Documents-tab" data-bs-toggle="pill" data-bs-target="#pills-Documents" type="button" role="tab" aria-controls="pills-Documents" aria-selected="false">Documents</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-Time-tab" data-bs-toggle="pill" data-bs-target="#pills-Time" type="button" role="tab" aria-controls="pills-Time" aria-selected="false">Time Logs</button>
                           </li>
                           <li class="nav-item" role="presentation">
                              <button class="nav-link" id="pills-Notes-tab" data-bs-toggle="pill" data-bs-target="#pills-Notes" type="button" role="tab" aria-controls="pills-Notes" aria-selected="false">Notes</button>
                           </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                           <div class="tab-pane fade show active" id="pills-Vitals" role="tabpanel" aria-labelledby="pills-Vitals-tab">
                              <div class="row">
                                 <div class="col-sm-6">
                                    <div class="card">
                                       <div class="card-title">
                                          <h3>Blood Pressure</h3>
                                          <button class="btn primaryBtn">Detail</button>
                                       </div>
                                       <div class="card-body">
                                          <div class="row">
                                             <div class="col-sm-5">
                                                <div class="commonTable">
                                                   <table class="table table-bordered">
                                                      <thead>
                                                         <tr>
                                                            <th>Date Recorded</th>
                                                            <th>Value</th>
                                                         </tr>
                                                      </thead>
                                                      <tbody>
                                                         <tr>
                                                            <td>Nov 05, 2021 10:00 AM</td>
                                                            <td>120/80</td>
                                                         </tr>
                                                         <tr>
                                                            <td>Nov 06, 2021 10:00 AM</td>
                                                            <td>122/80</td>
                                                         </tr>
                                                         <tr>
                                                            <td>Nov 08, 2021 10:00 AM</td>
                                                            <td>125/95</td>
                                                         </tr>
                                                         <tr>
                                                            <td>Nov 09, 2021 10:00 AM</td>
                                                            <td>125/95</td>
                                                         </tr>
                                                         <tr>
                                                            <td>Nov 11, 2021 10:00 AM</td>
                                                            <td>125/95</td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                </div>
                                                <p>Average of last 5 : <strong>120.55</strong></p>
                                             </div>
                                             <div class="col-sm-7">
                                                <div id="chart1"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="card">
                                       <div class="card-title">
                                          <h3>Pulse</h3>
                                          <button class="btn primaryBtn">Detail</button>
                                       </div>
                                       <div class="card-body">
                                          <div class="row">
                                             <div class="col-sm-5">
                                                <div class="commonTable">
                                                   <table class="table table-bordered">
                                                      <thead>
                                                         <tr>
                                                            <th>Date Recorded</th>
                                                            <th>Value</th>
                                                         </tr>
                                                      </thead>
                                                      <tbody>
                                                         <tr>
                                                            <td>Nov 05, 2021 10:00 AM</td>
                                                            <td>68</td>
                                                         </tr>
                                                         <tr>
                                                            <td>Nov 06, 2021 10:00 AM</td>
                                                            <td>70</td>
                                                         </tr>
                                                         <tr>
                                                            <td>Nov 08, 2021 10:00 AM</td>
                                                            <td>75</td>
                                                         </tr>
                                                         <tr>
                                                            <td>Nov 09, 2021 10:00 AM</td>
                                                            <td>80</td>
                                                         </tr>
                                                         <tr>
                                                            <td>Nov 11, 2021 10:00 AM</td>
                                                            <td>60</td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                </div>
                                                <p>Average of last 5 : <strong>75.55</strong></p>
                                             </div>
                                             <div class="col-sm-7">
                                                <div id="chart2"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="card">
                                       <div class="card-title">
                                          <h3>Blood Glucose</h3>
                                          <button class="btn primaryBtn">Detail</button>
                                       </div>
                                       <div class="card-body">
                                          <div class="row">
                                             <div class="col-sm-5">
                                                <div class="commonTable">
                                                   <table class="table table-bordered">
                                                      <thead>
                                                         <tr>
                                                            <th>Date Recorded</th>
                                                            <th>Value</th>
                                                         </tr>
                                                      </thead>
                                                      <tbody>
                                                         <tr>
                                                            <td>Nov 05, 2021 10:00 AM</td>
                                                            <td>105</td>
                                                         </tr>
                                                         <tr>
                                                            <td>Nov 06, 2021 10:00 AM</td>
                                                            <td>100</td>
                                                         </tr>
                                                         <tr>
                                                            <td>Nov 08, 2021 10:00 AM</td>
                                                            <td>95</td>
                                                         </tr>
                                                         <tr>
                                                            <td>Nov 09, 2021 10:00 AM <i class="fa fa-cutlery" aria-hidden="true"></i> </td>
                                                            <td>120</td>
                                                         </tr>
                                                         <tr>
                                                            <td>Nov 11, 2021 10:00 AM <i class="fa fa-cutlery" aria-hidden="true"></i></td>
                                                            <td>130</td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                </div>
                                                <p>Average of last 5 : <strong>120.85</strong></p>
                                             </div>
                                             <div class="col-sm-7">
                                                <div id="chart3"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="card">
                                       <div class="card-title">
                                          <h3>Blood Oxygen Saturation</h3>
                                          <button class="btn primaryBtn">Detail</button>
                                       </div>
                                       <div class="card-body">
                                          <div class="row">
                                             <div class="col-sm-5">
                                                <div class="commonTable">
                                                   <table class="table table-bordered">
                                                      <thead>
                                                         <tr>
                                                            <th>Date Recorded</th>
                                                            <th>Value</th>
                                                         </tr>
                                                      </thead>
                                                      <tbody>
                                                         <tr>
                                                            <td colspan="2">No records found</td>
                                                         </tr>
                                                      </tbody>
                                                   </table>
                                                </div>
                                             </div>
                                             <div class="col-sm-7">
                                                <div id="chart4"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="tab-pane fade" id="pills-Care" role="tabpanel" aria-labelledby="pills-Care-tab">...</div>
                           <div class="tab-pane fade" id="pills-Documents" role="tabpanel" aria-labelledby="pills-Documents-tab">
                              <div class="commonTable">
                                 <table class="table">
                                    <thead>
                                       <tr>
                                          <th>Name</th>
                                          <th>Document</th>
                                          <th>Type</th>
                                          <th>Tags</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>Program 1</td>
                                          <td>abc.pdf</td>
                                          <td>Voter ID</td>
                                          <td>Voter ID</td>
                                          <td>
                                             <ul class="action">
                                                <li><a href="#" class="link-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                                <li><a href="#" class="link-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                             </ul>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>Program 2</td>
                                          <td>example.pdf</td>
                                          <td>Voter ID</td>
                                          <td>Voter ID</td>
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
                           <div class="tab-pane fade" id="pills-Time" role="tabpanel" aria-labelledby="pills-Time-tab">
                              <div class="commonTable">
                                 <table class="table">
                                    <thead>
                                       <tr>
                                          <th>Category</th>
                                          <th>Logged By</th>
                                          <th>Performed By</th>
                                          <th>Date</th>
                                          <th>Time Amount</th>
                                          <th>Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td>Daily monitoring of vitals</td>
                                          <td><a href="#">Jane Doe</a></td>
                                          <td><a href="#">Steve Smith</a></td>
                                          <td>Oct 25, 2021</td>
                                          <td>3:00</td>
                                          <td>
                                             <ul class="action">
                                                <li><a href="#" class="link-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                                <li><a href="#" class="link-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                             </ul>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>Provider Order For Lab</td>
                                          <td><a href="#">Jane Doe</a></td>
                                          <td><a href="#">Steve Smith</a></td>
                                          <td>Oct 28, 2021</td>
                                          <td>2:00</td>
                                          <td>
                                             <ul class="action">
                                                <li><a href="#" class="link-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></li>
                                                <li><a href="#" class="link-danger"><i class="fa fa-trash" aria-hidden="true"></i></a></li>
                                             </ul>
                                          </td>
                                       </tr>
                                       <tr>
                                          <td>Daily monitoring of vitals</td>
                                          <td><a href="#">Jane Doe</a></td>
                                          <td><a href="#">Joseph Spouse</a></td>
                                          <td>Oct 20, 2021</td>
                                          <td>1:30</td>
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
                           <div class="tab-pane fade" id="pills-Notes" role="tabpanel" aria-labelledby="pills-Notes-tab">
                              <div class="commonTable">
                                 <table class="table">
                                    <thead>
                                       <tr>
                                          <th>Date</th>
                                          <th>Note</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td class="text-nowrap">Nov 10, 2021</td>
                                          <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore voluptatibus dolore, vel error harum porro totam eveniet modi iusto eos, dolorum provident aliquid earum corporis veritatis? Officiis molestiae amet ullam?</td>
                                       </tr>
                                       <tr>
                                          <td class="text-nowrap">Nov 11, 2021</td>
                                          <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit saepe, ipsam molestias ducimus nemo fugit quos beatae. Explicabo consequatur cumque iusto magni laudantium saepe voluptas quasi eius, error quisquam quos?</td>
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
         </div>
      </div>
   </div>

   <!---->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Add Family Coordinators</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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
                        <input type="text" class="form-control" />
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <label>Phone No</label>
                        <input type="number" class="form-control" />
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="form-group">
                        <label>Relationship</label>
                        <select class="form-select">
                           <option value="0">Select Relationship</option>
                           <option value="1">Brother</option>
                           <option value="1">Sister</option>
                           <option value="1">Mother</option>
                           <option value="1">Father</option>
                        </select>
                     </div>
                  </div>


               </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary">Save changes</button>
            </div>
         </div>
      </div>
   </div>
   <!---->
   <div class="modal fade" id="care" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Add Care Coordinators</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="row">
                  <div class="col-sm-10">
                     <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Search Here..">
                     </div>
                  </div>
                  <div class="col-sm-2">
                     <div class="form-group">
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Add New</button>
                     </div>
                  </div>
                  <!---->
               </div>
               <div class="row">
                 <div class="col-sm-12">
                     <div class="table-responsive commonTable">
                        <table class="table">
                           <thead>
                              <tr>
                                 <th></th>
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
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td>
                                 <div class="checkBox">
                                       <label class="checkInput">
                                          <input type="checkbox">
                                          <span class="checkmark"></span>
                                       </label>
                                    </div>
                                 </td>
                                 <td>Jane</td>
                                 <td>Doe</td>
                                 <td>Physician</td>
                              </tr>
                              <tr>
                              <td>
                                 <div class="checkBox">
                                       <label class="checkInput">
                                          <input type="checkbox">
                                          <span class="checkmark"></span>
                                       </label>
                                    </div>
                                 </td>
                                 <td>Steve </td>
                                 <td>Smith</td>
                                 <td>Cardiologist</td>
                              </tr>
                              <tr>
                              <td>
                                 <div class="checkBox">
                                       <label class="checkInput">
                                          <input type="checkbox">
                                          <span class="checkmark"></span>
                                       </label>
                                    </div>
                                 </td>
                                 <td>Joseph </td>
                                 <td>William</td>
                                 <td>RN</td>
                              </tr>
                              <tr>
                              <td>
                                 <div class="checkBox">
                                       <label class="checkInput">
                                          <input type="checkbox">
                                          <span class="checkmark"></span>
                                       </label>
                                    </div>
                                 </td>
                                 <td>Robert </td>
                                 <td>Henry</td>
                                 <td>Physician</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
                 </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
               <button type="button" class="btn btn-primary">Save changes</button>
            </div>
         </div>
      </div>
   </div>
   <!---->
   <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl">
         <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalToggleLabel2">Add New Care Coordinators</h5>
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
            <!-- <div class="modal-footer">
            <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Back to first</button>
            </div> -->
         </div>
      </div>
      </div>
   <!---->
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
         series: [{
               name: "Systolic  ",
               data: [120, 125, 140, 110, 122],
               color: '#ff0000'
            },
            {
               name: "Diastolic ",
               data: [80, 82, 90, 60, 78],
               color: '#228B22'
            },
         ],
         chart: {
            toolbar: {
               show: false,
            },
            height: 280,
            type: 'line',
            zoom: {
               enabled: false
            },
         },
         dataLabels: {

         },
         stroke: {
            width: [5, 7, 5],
            curve: 'straight',
            dashArray: [0, 8, 5],
            colors: ['#ff0000', '#228B22']
         },

         legend: {
            tooltipHoverFormatter: function(val, opts) {
               return val + ' - ' + opts.w.globals.series[opts.seriesIndex][opts.dataPointIndex] + ''
            }
         },
         markers: {
            size: 0,
            hover: {
               sizeOffset: 6
            }
         },
         xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
         },
         tooltip: {
            y: [{
                  title: {
                     formatter: function(val) {
                        return val + " (mins)"
                     }
                  }
               },
               {
                  title: {
                     formatter: function(val) {
                        return val + " per session"
                     }
                  }
               },
               {
                  title: {
                     formatter: function(val) {
                        return val;
                     }
                  }
               }
            ]
         },
         grid: {
            borderColor: '#f1f1f1',
         }
      };

      var chart = new ApexCharts(document.querySelector("#chart1"), options);
      chart.render();
   </script>
   <script>
      var options = {
         series: [{
            name: "Heart Rate",
            data: [68, 70, 65, 80, 90],
            color: '#FFA500'
         }],
         chart: {
            toolbar: {
               show: false,
            },
            height: 280,
            type: 'line',
            zoom: {
               enabled: false
            },
         },
         dataLabels: {
            enabled: false
         },
         stroke: {
            width: [5, 7, 5],
            curve: 'straight',
            dashArray: [0, 8, 5],
            colors: ['#FFA500']
         },

         legend: {
            tooltipHoverFormatter: function(val, opts) {
               return val + ' - ' + opts.w.globals.series[opts.seriesIndex][opts.dataPointIndex] + ''
            }
         },
         markers: {
            size: 0,
            hover: {
               sizeOffset: 6
            }
         },
         xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
         },
         tooltip: {
            y: [{
                  title: {
                     formatter: function(val) {
                        return val + " (mins)"
                     }
                  }
               },
               {
                  title: {
                     formatter: function(val) {
                        return val + " per session"
                     }
                  }
               },
               {
                  title: {
                     formatter: function(val) {
                        return val;
                     }
                  }
               }
            ]
         },
         grid: {
            borderColor: '#f1f1f1',
         }
      };

      var chart = new ApexCharts(document.querySelector("#chart2"), options);
      chart.render();
   </script>
   <script>
      var options = {
         series: [{
               name: "  ",
               data: [0, 0, 0, 0, 0],
               colors: ['#000']
            },

         ],
         chart: {
            toolbar: {
               show: false,
            },
            height: 280,
            type: 'line',
            zoom: {
               enabled: false
            },
         },
         stroke: {
            width: [5, 7, 5],
            curve: 'straight',
            dashArray: [0, 8, 5],

         },

         legend: {
            tooltipHoverFormatter: function(val, opts) {
               return val + ' - ' + opts.w.globals.series[opts.seriesIndex][opts.dataPointIndex] + ''
            }
         },
         markers: {
            size: 0,
            hover: {
               sizeOffset: 6
            }
         },
         xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
         },
         tooltip: {
            y: [{
                  title: {
                     formatter: function(val) {
                        return val + " (mins)"
                     }
                  }
               },
               {
                  title: {
                     formatter: function(val) {
                        return val + " per session"
                     }
                  }
               },
               {
                  title: {
                     formatter: function(val) {
                        return val;
                     }
                  }
               }
            ]
         },
         grid: {
            borderColor: '#f1f1f1',
         }
      };

      var chart = new ApexCharts(document.querySelector("#chart4"), options);
      chart.render();
   </script>
   <script>
      var options = {
         series: [{
               name: "FBS  ",
               data: [115, 90, 100, 115, 105],
               color: '#ff0000'
            },
            {
               name: "RBS ",
               data: [130, 125, 140],
               color: '#FFA500'
            },
         ],
         chart: {
            toolbar: {
               show: false,
            },
            height: 280,
            type: 'line',
            zoom: {
               enabled: false
            },
         },
         dataLabels: {
            enabled: false
         },
         stroke: {
            width: [5, 7, 5],
            curve: 'straight',
            dashArray: [0, 8, 5],
            colors: ['#ff0000', '#FFA500']
         },

         legend: {
            tooltipHoverFormatter: function(val, opts) {
               return val + ' - ' + opts.w.globals.series[opts.seriesIndex][opts.dataPointIndex] + ''
            }
         },
         markers: {
            size: 0,
            hover: {
               sizeOffset: 6
            }
         },
         xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
         },
         tooltip: {
            y: [{
                  title: {
                     formatter: function(val) {
                        return val + " (mins)"
                     }
                  }
               },
               {
                  title: {
                     formatter: function(val) {
                        return val + " per session"
                     }
                  }
               },
               {
                  title: {
                     formatter: function(val) {
                        return val;
                     }
                  }
               }
            ]
         },
         grid: {
            borderColor: '#f1f1f1',
         }
      };

      var chart = new ApexCharts(document.querySelector("#chart3"), options);
      chart.render();
   </script>
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