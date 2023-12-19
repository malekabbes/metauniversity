<?php
   session_start();
   $_SESSION[ 'home' ] = false;
   $_SESSION[ 'events' ] = false;
   $_SESSION[ 'grades' ] = false;
   $_SESSION[ 'pages' ] = false;
   $_SESSION[ 'profiles' ] = true;
   ?>
<head>
   <meta charset = 'utf-8'>
   <meta name = 'viewport' content = 'width=device-width, initial-scale=1, shrink-to-fit=no'>
   <meta name = 'description' content = ''>
   <meta name = 'author' content = 'TemplateMo'>
   <link href = 'https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' rel = 'stylesheet'>
   <title>Meta UNIVERSITY</title>
   <!-- Bootstrap core CSS -->
   <link rel = 'stylesheet' href = 'https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css' integrity = 'sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm' crossorigin = 'anonymous'>
   <!-- Additional CSS Files -->
   <link rel = 'stylesheet' href = 'assets/css/fontawesome.css'>
   <link rel = 'stylesheet' href = 'assets/css/templatemo-edu-meeting.css'>
   <link rel = 'stylesheet' href = 'assets/css/owl.css'>
   <link rel = 'stylesheet' href = 'assets/css/lightbox.css'>
</head>
<?php
   include 'navbar.php'
   ?>
<section class = 'upcoming-meetings' id = 'meetings' style = "  background-image: url(./assets/images/meetings-bg.jpg)
   ;padding-top: 166px;" >
   <div class = 'container'>
      <div class = 'row'>
         <div class = 'col-lg-8 mb-12'>
            <div class = 'card' >
               <div class = 'd-flex align-items-end row'>
                  <div class = 'col-sm-7'>
                     <div class = 'card-body'>
                        <h5 class = 'card-title text-primary'>Congratulations Malek! 🎉</h5>
                        <p class = 'mb-4'>
                           You have done <span class = 'fw-medium'>72%</span> of your assignments today. and earned <span style = 'color:green;font-weight:900'>+250 Tokens</span> !
                        </p>
                     </div>
                  </div>
                  <div class = 'col-sm-5 text-center text-sm-left'>
                     <div class = 'card-body pb-0 px-0 px-md-4'>
                        <img
                           src = './assets/images/man-with-laptop-light.png'
                           height = '140'
                           alt = 'View Badge User'
                           >
                     </div>
                  </div>
               </div>
            </div>
            <br>
            <br>
            <div class = 'card' style="height: 300px;margin-bottom:3rem;">
               <div class = 'd-flex  row'>
                  <div class = 'col-sm-8'>
                     <div class = 'card-body' style="">
                      <?php include "uploadedfiles.php"; $_SESSION["filename"]="TP3" ;?>
                      <?php include "uploadedfiles.php"; $_SESSION["filename"]="Test B1"; ?>
                      <?php include "uploadedfiles.php"; $_SESSION["filename"]="TP1";?>

                     </div>
                  </div>
                  <div class = 'col-sm-4 text-center text-sm-left'>
                     <div class = 'card-body pb-0 px-0 px-md-4'>
                        <img
                           src = './assets/images/workhome.png'
                           height = '140'
                           alt = 'View Badge User'
                           >
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class = 'col-lg-4 mb-12' style="margin-bottom:3rem;">
            <div class = 'card h-100'>
               <div class = 'card-header d-flex align-items-center justify-content-between pb-0'>
                  <div class = 'card-title mb-0'>
                     <h5 class = 'm-0 me-2'>Points ( Tokens )</h5>
                     <small class = 'text-muted'>Total points</small>
                  </div>
                  <div class = 'dropdown'>
                     <button
                        class = 'btn p-0'
                        type = 'button'
                        id = 'orederStatistics'
                        data-bs-toggle = 'dropdown'
                        aria-haspopup = 'true'
                        aria-expanded = 'false'>
                     <i class = 'bx bx-dots-vertical-rounded'></i>
                     </button>
                     <div class = 'dropdown-menu dropdown-menu-end' aria-labelledby = 'orederStatistics'>
                        <a class = 'dropdown-item' href = 'javascript:void(0);'>Select All</a>
                        <a class = 'dropdown-item' href = 'javascript:void(0);'>Refresh</a>
                        <a class = 'dropdown-item' href = 'javascript:void(0);'>Share</a>
                     </div>
                  </div>
               </div>
               <div class = 'card-body'>
                  <div class = 'd-flex justify-content-between align-items-center mb-3'>
                     <div class = 'd-flex flex-column align-items-center gap-1'>
                        <h2  style = "display: flex;
                           flex-wrap: nowrap;
                           flex-direction: row;
                           align-items: center;">450 Tokens <span ><img src = './assets/images/xp.svg' height = '110' alt = 'xppoints'></span> </h2>
                        <span style = 'margin-top: -2vw;'>Total points earned</span>
                     </div>
                     <div id = 'orderStatisticsChart'></div>
                  </div>
                  <ul class = 'p-0 m-0'>
                     <li class = 'd-flex mb-4 pb-1'>
                        <div class = 'avatar flex-shrink-0 me-3'>
                           <span class = 'avatar-initial rounded bg-label-primary'
                              ><i class = 'bx bx-mobile-alt'></i
                              ></span>
                        </div>
                        <div class = 'd-flex w-100 flex-wrap align-items-center justify-content-between gap-2'>
                           <div class = 'me-2'>
                              <span class = 'badge badge-primary'>
                                 <h7 class = 'mb-0'>ML - Homework </h7>
                              </span>
                              <br>
                              <small class = 'text-muted'>Assignments submitted</small>
                           </div>
                           <div class = 'user-progress'>
                              <small class = 'fw-medium'>20</small>
                           </div>
                        </div>
                     </li>
                     <li class = 'd-flex mb-4 pb-1'>
                        <div class = 'avatar flex-shrink-0 me-3'>
                           <span class = 'avatar-initial rounded bg-label-success'><i class = 'bx bx-closet'></i></span>
                        </div>
                        <div class = 'd-flex w-100 flex-wrap align-items-center justify-content-between gap-2'>
                           <div class = 'me-2'>
                              <span class = 'badge badge-primary'>
                                 <h7 class = 'mb-0'>Formal Approach</h7>
                              </span>
                              <br>
                              <small class = 'text-muted'>Tests succeded</small>
                           </div>
                           <div class = 'user-progress'>
                              <small class = 'fw-medium'>50</small>
                           </div>
                        </div>
                     </li>
                     <li class = 'd-flex mb-4 pb-1'>
                        <div class = 'avatar flex-shrink-0 me-3'>
                           <span class = 'avatar-initial rounded bg-label-info'><i class = 'bx bx-home-alt'></i></span>
                        </div>
                        <div class = 'd-flex w-100 flex-wrap align-items-center justify-content-between gap-2'>
                           <div class = 'me-2'>
                              <span class = 'badge badge-primary'>
                                 <h7 class = 'mb-0'>Assignments completed</h7>
                              </span>
                              <br>
                              <small class = 'text-muted'>multiple assigments</small>
                           </div>
                           <div class = 'user-progress'>
                              <small class = 'fw-medium'>250</small>
                           </div>
                        </div>
                     </li>
                     <li class = 'd-flex'>
                        <div class = 'avatar flex-shrink-0 me-3'>
                           <span class = 'avatar-initial rounded bg-label-secondary'
                              ><i class = 'bx bx-football'></i
                              ></span>
                        </div>
                        <div class = 'd-flex w-100 flex-wrap align-items-center justify-content-between gap-2'>
                           <div class = 'me-2'>
                              <span class = 'badge badge-primary'>
                                 <h7 class = 'mb-0'>Online attendance</h7>
                              </span>
                              <br>
                              <small class = 'text-muted'>Participation in various activites</small>
                           </div>
                           <div class = 'user-progress'>
                              <small class = 'fw-medium'>130</small>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
               
            </div>
         </div>
         <div class = 'col-lg-12'>
            <div class = 'section-heading'>
               <h2>Homework</h2>
            </div>
         </div>
         <?php
            include 'homework.php'
            ?>
      </div>
   </div>
</section>