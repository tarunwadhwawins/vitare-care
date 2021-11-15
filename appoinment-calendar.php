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
                        <button class="btn primaryBtn" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="fa fa-plus"></i> New Appoinment</button>
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

   <!-- Modal -->
   <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-scrollable modal-dialog-centered">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Appoinment Detail</h5>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <div class="row">
                  <div class="col-sm-6">
                     <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Patient</label>
                        <select class="form-select" aria-label="Default select example">
                           <option selected>Select Patient</option>
                           <option value="1">Jane Doe</option>
                           <option value="2">Steve Smith</option>
                           <option value="3">Joseph Spouse</option>
                           <option value="4">Robert Henry</option>
                        </select>
                     </div>
                  </div>
                  <!-- <div class="col-sm-4">
                     <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Phone Number</label>
                        <input type="text" class="form-control" aria-describedby="emailHelp">
                     </div>
                  </div> -->
                  <div class="col-sm-6">
                     <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Doctor</label>
                        <select class="form-select" aria-label="Default select example">
                           <option selected>Select a Doctor</option>
                           <option value="1">Jane Doe</option>
                           <option value="2">Steve Smith</option>
                           <option value="3">Joseph Spouse</option>
                           <option value="4">Robert Henry</option>
                        </select>
                     </div>
                  </div>
                  <!-- <div class="col-sm-6">
                     <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Address</label>
                        <textarea class="form-control" aria-describedby="emailHelp"></textarea>
                     </div>
                  </div> -->


                  <div class="col-sm-6">
                     <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Start Date</label>
                        <input type="date" class="form-control" aria-describedby="emailHelp">
                     </div>
                  </div>
                  <div class="col-sm-6">
                     <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"> Time</label>
                        <input type="time" class="form-control" aria-describedby="emailHelp">
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
   <script type="text/javascript" src="assets/js/main.js"></script>
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
   <!---->
</body>

</html>