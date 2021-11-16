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
         <div class="contentWrapper appointmentCalendar">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-6">
                     <h2 class="pageTittle">Appointment Calendar</h2>
                  </div>
                  <div class="col-sm-6 text-end">
                     <button class="btn primaryBtn fullCalendarBtn">Full Calendar View</button>
                     <button class="btn primaryBtn HideCalendarBtn d-none">Hide Full Calendar View</button>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-3 leftCalendarView">
                     <div class="text-center mb-3">
                        <button class="btn primaryBtn" data-bs-toggle="modal" data-bs-target="#addAppointment"> <i class="fa fa-plus"></i> New Appointment</button>
                     </div>
                     <div class="calendar">
                        <div class="header">
                           <a data-action="prev-month" href="javascript:void(0)" title="Previous Month"><i></i></a>
                           <div class="text" data-render="month-year"></div>
                           <a data-action="next-month" href="javascript:void(0)" title="Next Month"><i></i></a>
                        </div>
                        <div class="months" data-flow="left">
                           <div class="month month-a">
                              <div class="render render-a"></div>
                           </div>
                           <div class="month month-b">
                              <div class="render render-b"></div>
                           </div>
                        </div>
                     </div>
                     <div class="doctors">
                        <p class="title">Physicians</p>
                        <ul>
                           <li>
                              <div class="img">
                                 <img src="assets/images/profile-1.jpg" alt="">
                                 <div class="check one">
                                    <span>&check;</span>
                                 </div>

                              </div>
                              <p>Jane Doe</p>
                           </li>
                           <li>
                              <div class="img">
                                 <img src="assets/images/profile-2.jpg" alt="">
                                 <div class="check two">
                                    <span>&check;</span>
                                 </div>
                              </div>
                              <p>Steve Smith</p>
                           </li>
                           <li>
                              <div class="img">
                                 <img src="assets/images/profile-3.jpg" alt="">
                                 <div class="check three">
                                    <span>&check;</span>
                                 </div>

                              </div>
                              <p>Joseph Spouse</p>
                           </li>
                           <li>
                              <div class="img">
                                 <img src="assets/images/profile-4.jpg" alt="">
                                 <div class="check four">
                                    <span>&check;</span>
                                 </div>

                              </div>
                              <p>Robert Henry</p>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-sm-9 rightCalendarView">
                     <div class="row">
                        <div class="col-sm-6">
                           <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                              <li class="nav-item" role="presentation">
                                 <button class="nav-link active" id="pills-day-tab" data-bs-toggle="pill" data-bs-target="#pills-day" type="button" role="tab" aria-controls="pills-day" aria-selected="true">Day</button>
                              </li>
                              <li class="nav-item" role="presentation">
                                 <button class="nav-link" id="pills-tommorrow-tab" data-bs-toggle="pill" data-bs-target="#pills-tommorrow" type="button" role="tab" aria-controls="pills-tommorrow" aria-selected="false">Tommorrow</button>
                              </li>
                              <li class="nav-item" role="presentation">
                                 <button class="nav-link" id="pills-week-tab" data-bs-toggle="pill" data-bs-target="#pills-week" type="button" role="tab" aria-controls="pills-week" aria-selected="false">Week</button>
                              </li>
                              <li class="nav-item" role="presentation">
                                 <button class="nav-link" id="pills-month-tab" data-bs-toggle="pill" data-bs-target="#pills-month" type="button" role="tab" aria-controls="pills-month" aria-selected="false">Month</button>
                              </li>
                           </ul>
                        </div>
                        <div class="col-sm-6 text-end">
                           <p>November 12, 2021</p>
                        </div>
                        <div class="col-sm-12">
                           <div class="tab-content" id="pills-tabContent">
                              <div class="tab-pane fade show active" id="pills-day" role="tabpanel" aria-labelledby="pills-day-tab">
                                 <div class="row">
                                    <div class="col-sm-12">
                                       <div class="dayCalendar">
                                          <table class="table table-bordered">
                                             <tbody>
                                                <tr>
                                                   <th>08:00 AM</th>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <th>09:00 AM</th>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <th>10:00 AM</th>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <th>11:00 AM</th>
                                                   <td>
                                                      <div class="dropdown one">
                                                         <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <p><span>Smith Joseph</span>
                                                               <span>10:00 AM - 11:00 AM</span>
                                                            </p>
                                                            <img src="assets/images/profile-1.jpg" alt="">
                                                         </button>
                                                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</li>
                                                         </ul>
                                                      </div>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <th>12:00 PM</th>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <th>01:00 PM</th>
                                                   <td>
                                                      <div class="dropdown two">
                                                         <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <p><span>Jane Doe</span>
                                                               <span>01:00 PM - 02:00 PM</span>
                                                            </p>
                                                            <img src="assets/images/profile-2.jpg" alt="">
                                                         </button>
                                                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</li>
                                                         </ul>
                                                      </div>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <th>02:00 PM</th>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <th>03:00 PM</th>
                                                   <td>
                                                      <div class="dropdown three">
                                                         <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <p><span>Joseph William</span>
                                                               <span>03:00 PM - 03:30 PM</span>
                                                            </p>
                                                            <img src="assets/images/profile-3.jpg" alt="">
                                                         </button>
                                                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</li>
                                                         </ul>
                                                      </div>
                                                      <div class="dropdown four">
                                                         <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <p><span>Robert Henry</span>
                                                               <span>03:30 PM - 04:00 PM</span>
                                                            </p>
                                                            <img src="assets/images/profile-4.jpg" alt="">
                                                         </button>
                                                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</li>
                                                         </ul>
                                                      </div>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <th>04:00 PM</th>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <th>05:00 PM</th>
                                                   <td>
                                                      <div class="dropdown one">
                                                         <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <p><span>Steve Smith</span>
                                                               <span>05:00 PM - 06:00 PM</span>
                                                            </p>
                                                            <img src="assets/images/profile-1.jpg" alt="">
                                                         </button>
                                                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</li>
                                                         </ul>
                                                      </div>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="pills-tommorrow" role="tabpanel" aria-labelledby="pills-tommorrow-tab">
                                 <div class="row">
                                    <div class="col-sm-12">
                                       <div class="dayCalendar">
                                          <table class="table table-bordered">
                                             <tbody>
                                                <tr>
                                                   <th>08:00 AM</th>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <th>09:00 AM</th>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <th>10:00 AM</th>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <th>11:00 AM</th>
                                                   <td>
                                                      <div class="dropdown one">
                                                         <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <p><span>Smith Joseph</span>
                                                               <span>10:00 AM - 11:00 AM</span>
                                                            </p>
                                                            <img src="assets/images/profile-1.jpg" alt="">
                                                         </button>
                                                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</li>
                                                         </ul>
                                                      </div>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <th>12:00 PM</th>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <th>01:00 PM</th>
                                                   <td>
                                                      <div class="dropdown two">
                                                         <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <p><span>Jane Doe</span>
                                                               <span>01:00 PM - 02:00 PM</span>
                                                            </p>
                                                            <img src="assets/images/profile-2.jpg" alt="">
                                                         </button>
                                                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</li>
                                                         </ul>
                                                      </div>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <th>02:00 PM</th>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <th>03:00 PM</th>
                                                   <td>
                                                      <div class="dropdown three">
                                                         <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <p><span>Joseph William</span>
                                                               <span>03:00 PM - 03:30 PM</span>
                                                            </p>
                                                            <img src="assets/images/profile-3.jpg" alt="">
                                                         </button>
                                                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</li>
                                                         </ul>
                                                      </div>
                                                      <div class="dropdown four">
                                                         <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <p><span>Robert Henry</span>
                                                               <span>03:30 PM - 04:00 PM</span>
                                                            </p>
                                                            <img src="assets/images/profile-4.jpg" alt="">
                                                         </button>
                                                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</li>
                                                         </ul>
                                                      </div>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <th>04:00 PM</th>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <th>05:00 PM</th>
                                                   <td>
                                                      <div class="dropdown one">
                                                         <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <p><span>Steve Smith</span>
                                                               <span>05:00 PM - 06:00 PM</span>
                                                            </p>
                                                            <img src="assets/images/profile-1.jpg" alt="">
                                                         </button>
                                                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</li>
                                                         </ul>
                                                      </div>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="pills-week" role="tabpanel" aria-labelledby="pills-week-tab">
                                 <div class="row">
                                    <div class="col-sm-12">
                                       <div class="dayCalendar">
                                          <table class="table table-bordered">
                                             <tbody>
                                                <tr>
                                                   <th>Mon</th>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <th>Tue</th>
                                                   <td>
                                                      <div class="dropdown one">
                                                         <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <p><span>Smith Joseph</span>
                                                               <span>10:00 AM - 11:00 AM</span>
                                                            </p>
                                                            <img src="assets/images/profile-1.jpg" alt="">
                                                         </button>
                                                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</li>
                                                         </ul>
                                                      </div>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <th>Wed</th>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <th>Thu</th>
                                                   <td>
                                                      <div class="dropdown two">
                                                         <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <p><span>Jane Doe</span>
                                                               <span>01:00 PM - 02:00 PM</span>
                                                            </p>
                                                            <img src="assets/images/profile-2.jpg" alt="">
                                                         </button>
                                                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</li>
                                                         </ul>
                                                      </div>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <th>Fri</th>
                                                   <td></td>
                                                </tr>
                                                <tr>
                                                   <th>Sat</th>
                                                   <td>
                                                      <div class="dropdown three">
                                                         <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <p><span>Joseph William</span>
                                                               <span>03:00 PM - 03:30 PM</span>
                                                            </p>
                                                            <img src="assets/images/profile-3.jpg" alt="">
                                                         </button>
                                                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</li>
                                                         </ul>
                                                      </div>
                                                      <div class="dropdown four">
                                                         <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <p><span>Robert Henry</span>
                                                               <span>03:30 PM - 04:00 PM</span>
                                                            </p>
                                                            <img src="assets/images/profile-4.jpg" alt="">
                                                         </button>
                                                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</li>
                                                         </ul>
                                                      </div>
                                                   </td>
                                                </tr>

                                                <tr>
                                                   <th>Sun</th>
                                                   <td>
                                                      <div class="dropdown one">
                                                         <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <p><span>Steve Smith</span>
                                                               <span>05:00 PM - 06:00 PM</span>
                                                            </p>
                                                            <img src="assets/images/profile-1.jpg" alt="">
                                                         </button>
                                                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</li>
                                                         </ul>
                                                      </div>
                                                   </td>
                                                </tr>
                                             </tbody>
                                          </table>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="tab-pane fade" id="pills-month" role="tabpanel" aria-labelledby="pills-month-tab">
                                 <div class="row">
                                    <div class="col-sm-12">
                                       <div class="monthCalendar dayCalendar table-responsive">

                                          <table class="table table-bordered">
                                             <thead>
                                                <tr>
                                                   <th>Mon</th>
                                                   <th>Tue</th>
                                                   <th>Wed</th>
                                                   <th>Thu</th>
                                                   <th>Fri</th>
                                                   <th>Sat</th>
                                                   <th>Sun</th>
                                                </tr>
                                             </thead>
                                             <tbody>
                                                <tr>
                                                   <td>
                                                      <span class="date">1</span>
                                                      <div class="dropdown one">
                                                         <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <p><span>Steve Smith</span>
                                                               <span>05:00 PM - 06:00 PM</span>
                                                            </p>

                                                         </button>
                                                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li><img src="assets/images/profile-1.jpg" alt=""> <span>Jane Doe</span></li>
                                                            <li> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</li>
                                                         </ul>
                                                      </div>
                                                      <div class="dropdown two">
                                                         <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <p><span>Jane Doe</span>
                                                               <span>04:00 PM - 05:00 PM</span>
                                                            </p>
                                                         </button>
                                                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li><img src="assets/images/profile-2.jpg" alt=""> <span>Jane Doe</span></li>
                                                            <li> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</li>
                                                         </ul>
                                                      </div>
                                                   </td>
                                                   <td>
                                                      <span class="date">2</span>

                                                   </td>
                                                   <td>
                                                      <span class="date">3</span>
                                                      <div class="dropdown three">
                                                         <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <p><span>Joseph Spouse</span>
                                                               <span>04:00 PM - 05:00 PM</span>
                                                            </p>
                                                         </button>
                                                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li><img src="assets/images/profile-3.jpg" alt=""> <span>Jane Doe</span></li>
                                                            <li> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</li>
                                                         </ul>
                                                      </div>

                                                   </td>
                                                   <td>
                                                      <span class="date">4</span>
                                                      <div class="dropdown four">
                                                         <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <p><span>Robert Henry</span>
                                                               <span>11:00 AM - 12:00 AM</span>
                                                            </p>
                                                         </button>
                                                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li><img src="assets/images/profile-3.jpg" alt=""> <span>Jane Doe</span></li>
                                                            <li> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</li>
                                                         </ul>
                                                      </div>
                                                   </td>
                                                   <td>
                                                      <span class="date">5</span>

                                                   </td>
                                                   <td>
                                                      <span class="date">6</span>
                                                   </td>
                                                   <td>
                                                      <span class="date">7</span>

                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>
                                                      <span class="date">8</span>
                                                      <div class="dropdown one">
                                                         <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <p><span>Steve Smith</span>
                                                               <span>05:00 PM - 06:00 PM</span>
                                                            </p>

                                                         </button>
                                                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li><img src="assets/images/profile-1.jpg" alt=""> <span>Jane Doe</span></li>
                                                            <li> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</li>
                                                         </ul>
                                                      </div>
                                                   </td>
                                                   <td>
                                                      <span class="date">9</span>
                                                   </td>
                                                   <td>
                                                      <span class="date">10</span>
                                                      <div class="dropdown three">
                                                         <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <p><span>Joseph Spouse</span>
                                                               <span>04:00 PM - 05:00 PM</span>
                                                            </p>
                                                         </button>
                                                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li><img src="assets/images/profile-3.jpg" alt=""> <span>Jane Doe</span></li>
                                                            <li> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</li>
                                                         </ul>
                                                      </div>
                                                   </td>
                                                   <td>
                                                      <span class="date">11</span>
                                                   </td>
                                                   <td>
                                                      <span class="date">12</span>
                                                      <div class="dropdown four">
                                                         <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <p><span>Robert Henry</span>
                                                               <span>11:00 AM - 12:00 AM</span>
                                                            </p>
                                                         </button>
                                                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li><img src="assets/images/profile-3.jpg" alt=""> <span>Jane Doe</span></li>
                                                            <li> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</li>
                                                         </ul>
                                                      </div>
                                                   </td>
                                                   <td>
                                                      <span class="date">13</span>
                                                   </td>
                                                   <td>
                                                      <span class="date">14</span>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>
                                                      <span class="date">15</span>
                                                      <div class="dropdown four">
                                                         <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <p><span>Robert Henry</span>
                                                               <span>11:00 AM - 12:00 AM</span>
                                                            </p>
                                                         </button>
                                                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li><img src="assets/images/profile-3.jpg" alt=""> <span>Jane Doe</span></li>
                                                            <li> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</li>
                                                         </ul>
                                                      </div>
                                                   </td>
                                                   <td>
                                                      <span class="date">16</span>
                                                   </td>
                                                   <td>
                                                      <span class="date">17</span>
                                                   </td>
                                                   <td>
                                                      <span class="date">18</span>
                                                      <div class="dropdown three">
                                                         <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <p><span>Joseph Spouse</span>
                                                               <span>04:00 PM - 05:00 PM</span>
                                                            </p>
                                                         </button>
                                                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li><img src="assets/images/profile-3.jpg" alt=""> <span>Jane Doe</span></li>
                                                            <li> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</li>
                                                         </ul>
                                                      </div>
                                                   </td>
                                                   <td>
                                                      <span class="date">19</span>
                                                   </td>
                                                   <td>
                                                      <span class="date">20</span>
                                                      <div class="dropdown one">
                                                         <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <p><span>Steve Smith</span>
                                                               <span>05:00 PM - 06:00 PM</span>
                                                            </p>

                                                         </button>
                                                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li><img src="assets/images/profile-1.jpg" alt=""> <span>Jane Doe</span></li>
                                                            <li> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</li>
                                                         </ul>
                                                      </div>
                                                   </td>
                                                   <td>
                                                      <span class="date">21</span>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>
                                                      <span class="date">22</span>
                                                   </td>
                                                   <td>
                                                      <span class="date">23</span>
                                                   </td>
                                                   <td>
                                                      <span class="date">24</span>
                                                      <div class="dropdown four">
                                                         <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <p><span>Robert Henry</span>
                                                               <span>11:00 AM - 12:00 AM</span>
                                                            </p>
                                                         </button>
                                                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li><img src="assets/images/profile-3.jpg" alt=""> <span>Jane Doe</span></li>
                                                            <li> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</li>
                                                         </ul>
                                                      </div>
                                                   </td>
                                                   <td>
                                                      <span class="date">25</span>
                                                      <div class="dropdown one">
                                                         <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <p><span>Steve Smith</span>
                                                               <span>05:00 PM - 06:00 PM</span>
                                                            </p>

                                                         </button>
                                                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li><img src="assets/images/profile-1.jpg" alt=""> <span>Jane Doe</span></li>
                                                            <li> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</li>
                                                         </ul>
                                                      </div>
                                                   </td>
                                                   <td>
                                                      <span class="date">26</span>
                                                   </td>
                                                   <td>
                                                      <span class="date">27</span>
                                                      <div class="dropdown three">
                                                         <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <p><span>Joseph Spouse</span>
                                                               <span>04:00 PM - 05:00 PM</span>
                                                            </p>
                                                         </button>
                                                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li><img src="assets/images/profile-3.jpg" alt=""> <span>Jane Doe</span></li>
                                                            <li> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</li>
                                                         </ul>
                                                      </div>
                                                   </td>
                                                   <td>
                                                      <span class="date">28</span>
                                                      <div class="dropdown one">
                                                         <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <p><span>Steve Smith</span>
                                                               <span>05:00 PM - 06:00 PM</span>
                                                            </p>

                                                         </button>
                                                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li><img src="assets/images/profile-1.jpg" alt=""> <span>Jane Doe</span></li>
                                                            <li> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</li>
                                                         </ul>
                                                      </div>
                                                   </td>
                                                </tr>
                                                <tr>
                                                   <td>
                                                      <span class="date">29</span>
                                                   </td>
                                                   <td>
                                                      <span class="date">30</span>
                                                      <div class="dropdown three">
                                                         <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <p><span>Joseph Spouse</span>
                                                               <span>04:00 PM - 05:00 PM</span>
                                                            </p>
                                                         </button>
                                                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li><img src="assets/images/profile-3.jpg" alt=""> <span>Jane Doe</span></li>
                                                            <li> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</li>
                                                         </ul>
                                                      </div>
                                                   </td>
                                                   <td>
                                                      <span class="date">1</span>
                                                   </td>
                                                   <td>
                                                      <span class="date">2</span>
                                                   </td>
                                                   <td>
                                                      <span class="date">3</span>
                                                   </td>
                                                   <td>
                                                      <span class="date">4</span>
                                                      <div class="dropdown four">
                                                         <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <p><span>Robert Henry</span>
                                                               <span>11:00 AM - 12:00 AM</span>
                                                            </p>
                                                         </button>
                                                         <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                            <li><img src="assets/images/profile-3.jpg" alt=""> <span>Jane Doe</span></li>
                                                            <li> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it</li>
                                                         </ul>
                                                      </div>
                                                   </td>
                                                   <td>
                                                      <span class="date">5</span>
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
         $("#datepicker").datepicker();
      });
   </script>
   <script>
      $('.fullCalendarBtn').click(function() {
         $('.leftCalendarView').addClass('d-none');
         $('.rightCalendarView').addClass('col-sm-12');
         $('.fullCalendarBtn').addClass('d-none');
         $('.rightCalendarView').removeClass('col-sm-9');
         $('.HideCalendarBtn').removeClass('d-none');
      });
      $('.HideCalendarBtn').click(function() {
         $('.leftCalendarView').removeClass('d-none');
         $('.rightCalendarView').removeClass('col-sm-12');
         $('.rightCalendarView').addClass('col-sm-9');
         $('.HideCalendarBtn').addClass('d-none');
         $('.fullCalendarBtn').removeClass('d-none');
      });
   </script>
   <script>
      $(document).ready(function() {
         $('.js-example-basic-single').select2({
            placeholder: "Select a Patient",
         });
      });
   </script>
   <!---->
</body>

</html>