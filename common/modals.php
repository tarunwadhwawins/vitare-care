  <!--Add Message Modal -->
  <div class="modal fade" id="addMessage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl modal-fullscreen-xl-down">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Communications</h5>
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
                  <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                  <button class="btn primaryBtn" data-bs-dismiss="modal">Save</button>
              </div>
          </div>
      </div>
  </div>

  <!--Manange Care Coordinator Modal -->
  <div class="modal fade" id="manageCareCoordinator" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl modal-fullscreen-xl-down">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add New Coordinator</h5>
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
                                      <button class="btn next primaryBtn">Next</button>
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
                                                  <button class="btn primaryBtn">Add</button>
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
                                      <button class="btn next primaryBtn">Next </button>
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
                                                  <button class="btn primaryBtn">Add</button>
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
                                      <button class="btn next primaryBtn">Next </button>
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
                                                  <select class="form-control tags" multiple="multiple">
                                                      <option selected="selected">Tag One</option>
                                                      <option>Tag Two</option>
                                                      <option selected="selected">Tag Three</option>
                                                  </select>
                                              </div>
                                          </div>
                                          <div class="col-sm-12">
                                              <div class="form-group text-end">
                                                  <button class="btn primaryBtn">Add</button>
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
                                      <button class="btn save primaryBtn">Save </button>
                                  </div>
                              </div>
                          </div>

                      </div>
                  </div>
              </div>

          </div>
      </div>
  </div>
  <!-- Manange Patients Modal -->
  <div class="modal fade" id="manangePatients" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-xl modal-fullscreen-xl-down">
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
                                                  <input type="text" class="form-control datepicker" placeholder="Select Date">
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
                                      <button class="btn next primaryBtn">Next</button>
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
                                      <button class="btn next primaryBtn">Next </button>
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
                                                  <input type="text" class="form-control datepicker" placeholder="Select Date">
                                              </div>
                                          </div>
                                          <div class="col-sm-3">
                                              <div class="form-group">
                                                  <label>End Date</label>
                                                  <input type="text" class="form-control datepicker" placeholder="Select Date">
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
                                                  <button class="btn primaryBtn">Add</button>
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
                                      <button class="btn next primaryBtn">Next </button>
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
                                      <button class="btn next primaryBtn">Next </button>
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
                                                  <button class="btn primaryBtn">Add</button>
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
                                                  <button class="btn primaryBtn">Add</button>
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
                                      <button class="btn next primaryBtn">Next </button>
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
                                      <button class="btn next primaryBtn">Next </button>
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
                                                  <select class="form-control tags w-100" multiple="multiple">
                                                      <option selected="selected">Tag One</option>
                                                      <option>Tag Two</option>
                                                      <option selected="selected">Tag Three</option>
                                                  </select>
                                              </div>
                                          </div>
                                          <div class="col-sm-12">
                                              <div class="form-group text-end">
                                                  <button class="btn primaryBtn">Add</button>
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
                                      <button class="btn save primaryBtn">Save </button>
                                  </div>
                              </div>
                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <!--Add Appointment -->
  <div class="modal fade" id="addAppointment" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Appointment Detail</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body appoinmentDetailModal">
                  <div class="row">
                      <div class="col-sm-6">
                          <div class="mb-3 selectOption">
                              <label for="exampleInputEmail1" class="form-label">Patient</label>
                              <select class="js-example-basic-single">
                                  <option>Search & Select Patient</option>
                                  <option value="1">Jane Doe</option>
                                  <option value="2">Steve Smith</option>
                                  <option value="3">Joseph Spouse</option>
                                  <option value="4">Robert Henry</option>
                              </select>
                          </div>
                      </div>

                      <div class="col-sm-6">
                          <div class="mb-3 selectOption">
                              <label for="exampleInputEmail1" class="form-label">Staff</label>
                              <select class="js-example-basic-single">
                                  <option>Search & Select Staff</option>
                                  <option value="1">Jane Doe</option>
                                  <option value="2">Steve Smith</option>
                                  <option value="3">Joseph Spouse</option>
                                  <option value="4">Robert Henry</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Start Date</label>
                              <input type="text" class="form-control" id="datepicker" placeholder="Select Date">
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label"> Time</label>
                              <input type="text" class="form-control" id="timepicker" placeholder="Select Time">
                          </div>
                      </div>
                      <div class="col-sm-12">
                          <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Note</label>
                              <textarea class="form-control" aria-describedby="emailHelp"></textarea>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn" data-bs-dismiss="modal">Cancel</button>
                  <button type="button" class="btn primaryBtn" data-bs-dismiss="modal">Save</button>
              </div>
          </div>
      </div>
  </div>
  <!-- Add Task -->
  <div class="modal fade" id="addTask" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                              <input type="text" class="form-control datepicker" placeholder="Select Date">
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-group">
                              <label>Due Date</label>
                              <input type="text" class="form-control datepicker" placeholder="Select Date">
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