@extends('layouts/layoutMaster')

@section('title', 'User View - Pages')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css')}}">
<link rel="stylesheet" href="{{asset('assets/vendor/libs/animate-css/animate.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/select2/select2.css')}}" />
<link rel="stylesheet" href="{{asset('assets/vendor/libs/formvalidation/dist/css/formValidation.min.css')}}" />
@endsection

@section('page-style')
<link rel="stylesheet" href="{{asset('assets/vendor/css/pages/page-user-view.css')}}" />
<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/moment/moment.js')}}"></script>
<script src="{{asset('assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js')}}"></script>
<script src="{{asset('assets/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave.js')}}"></script>
<script src="{{asset('assets/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
<script src="{{asset('assets/vendor/libs/select2/select2.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/FormValidation.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js')}}"></script>
<script src="{{asset('assets/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js')}}"></script>
@endsection

@section('page-script')
<script src="{{asset('assets/js/modal-edit-user.js')}}"></script>
<script src="{{asset('assets/js/app-user-view.js')}}"></script>
<script src="{{asset('assets/js/app-user-view-account.js')}}"></script>
@endsection

@section('content')
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">User / View /</span> Account
</h4>
<div class="row">
  <!-- User Sidebar -->
 <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
    <!-- User Card -->
    <div class="card mb-4">
      <div class="card-body">
        <div class="user-avatar-section">
          <div class=" d-flex align-items-center flex-column">
            <img style="border-radius:100%" class="img-fluid my-4" src="{{asset('assets/img/avatars/10.png')}}" height="110" width="110" alt="User avatar">
            <div class="user-info text-center">
              <h4 class="mb-2"><img height="20px" src="{{asset('assets/img/medal-ribbon.jpeg')}}"> Alex Smith</h4>
               <p class="mb-2"><img height="20px" src="{{asset('assets/img/germany-flag-png.png')}}"> Rojava Qamishlo <img height="20px" src="{{asset('assets/img/germany-flag-png.png')}}"> Hannover</p>
                 <b><p class="mb-2 ">Standard User</p></b>
                  <span>User Id:123456778</span>
            </div>
          </div>
        </div>
      
        <h5 class="pb-2 border-bottom mb-4">Details</h5>
        <div class="info-container">
          <ul class="list-unstyled">
            <li class="mb-3">
              <span class="fw-bold me-2">Status:</span>
              <br>
              <span>Married</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Email:</span>
                  <br>
              <span>User Id:123456778</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Phone Number:</span>
                  <br>
                <span>User Id:123456778</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Member Since:</span>
                  <br>
              <span>12.10.2023</span>
            </li>
            <li class="mb-3">
              <span class="fw-bold me-2">Country</span>
                  <br>
              <span>Germany</span>
            </li>
            
           
           
          </ul>
          <!--<div class="d-flex justify-content-center pt-3">-->
          <!--  <a href="javascript:;" class="btn btn-primary me-3" data-bs-target="#editUser" data-bs-toggle="modal">Edit</a>-->
          <!--  <a href="javascript:;" class="btn btn-label-danger suspend-user">Suspended</a>-->
          <!--</div>-->
        </div>
      </div>
    </div>
    <!-- /User Card -->
    <!-- Plan Card -->
    <!--<div class="card mb-4">-->
    <!--  <div class="card-body">-->
    <!--    <div class="d-flex justify-content-between align-items-start">-->
    <!--      <span class="badge bg-label-primary">Standard</span>-->
    <!--      <div class="d-flex justify-content-center">-->
    <!--        <sup class="h5 pricing-currency mt-3 mb-0 me-1 text-primary">$</sup>-->
    <!--        <h1 class="display-5 mb-0 text-primary">99</h1>-->
    <!--        <sub class="fs-6 pricing-duration mt-auto mb-2">/month</sub>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--    <ul class="ps-3 g-2 my-4">-->
    <!--      <li class="mb-2">10 Users</li>-->
    <!--      <li class="mb-2">Up to 10 GB storage</li>-->
    <!--      <li>Basic Support</li>-->
    <!--    </ul>-->
    <!--    <div class="d-flex justify-content-between align-items-center mb-1">-->
    <!--      <span>Days</span>-->
    <!--      <span>65% Completed</span>-->
    <!--    </div>-->
    <!--    <div class="progress mb-1" style="height: 8px;">-->
    <!--      <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>-->
    <!--    </div>-->
    <!--    <span>4 days remaining</span>-->
    <!--    <div class="d-grid w-100 mt-4 pt-2">-->
    <!--      <button class="btn btn-primary" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">Upgrade Plan</button>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</div>-->
    <!-- /Plan Card -->
  </div>
  <!--/ User Sidebar -->


  <!-- User Content -->
  <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
    <!-- User Pills -->
    <ul class="nav nav-pills flex-column flex-md-row mb-3">
      <li class="nav-item"><a class="nav-link active" href="{{url('premium/app/user/view/Follower')}}"><i class="bx bx-user me-1"></i>Follower</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('premium/app/user/view/Post')}}"><i class="bx bx-detail me-1"></i>Post</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('premium/app/user/view/Videos')}}"><i class="bx bx-video me-1"></i>Videos</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('premium/app/user/view/Activity')}}"><i class="bx bx-bell me-1"></i>Activity</a></li>
      <li class="nav-item"><a class="nav-link" href="{{url('premium/app/user/view/Location')}}"><i class="bx bx-map-pin me-1"></i>Location</a></li>
    </ul>
    <!--/ User Pills -->

    <!-- Project table -->
    <!--<div class="card mb-4">-->
    <!--  <h5 class="card-header">User's Projects List</h5>-->
    <!--  <div class="table-responsive mb-3">-->
    <!--    <table class="table datatable-project border-top">-->
    <!--      <thead>-->
    <!--        <tr>-->
    <!--          <th></th>-->
    <!--          <th>Project</th>-->
    <!--          <th class="text-nowrap">Total Task</th>-->
    <!--          <th>Progress</th>-->
    <!--          <th>Hours</th>-->
    <!--        </tr>-->
    <!--      </thead>-->
    <!--    </table>-->
    <!--  </div>-->
    <!--</div>-->
    <!-- /Project table -->
<!--start-->
<div class="row">
    <div class="col-md-4">
      <div class="card mb-4">
       <div class="card-body">
         <div class="user-avatar-section">
           <div style="margin-top:30px" class=" d-flex align-items-center flex-column">
           <img style="border-radius: 100%;width:125px" class="img-fluid my-4 profile-img" src="{{asset('assets/img/avatars/10.png')}}" alt="User avatar">

             <div class="user-info text-center">
               <span class="d-flex"><img class="medal-pic" height="20px" src="{{asset('assets/img/dreamschat/images/medal-ribbon.jpeg')}}" alt=""><h4 class="mb-2"><b>   Alex Smith</b></h4></span>
             </div>
             <div class="user-info text-center">
               <span class="d-flex"><img style="margin-right: 5px;" height="20px" class="ger-flag-rounded" src="{{asset('assets/img/germany-flag-png.png')}}"> Rojava Qamishlo <img style="margin-right: 5px;margin-left:5px" height="20px" class="ger-flag-rounded" src="{{asset('assets/img/germany-flag-png.png')}}"> Hannover</span>
             </div>
             <div class="user-info text-center mt-2">
               <h6 style="margin-top:4px" class="mb-2"><b>Standard User</b></h6>
               <h6 class="mb-2">User ID: 123456789</h6>
             </div>
           </div>
         </div>
       </div>
     </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4">
       <div class="card-body">
         <div class="user-avatar-section">
           <div style="margin-top:30px" class=" d-flex align-items-center flex-column">
             <img style="border-radius: 100%;width:125px" class="img-fluid my-4 profile-img" src="{{asset('assets/img/avatars/10.png')}}" alt="User avatar">
             <div class="user-info text-center">
               <span class="d-flex"><img class="medal-pic" height="20px" src="{{asset('assets/dreamschat/images/medal-ribbon.jpeg')}}" alt=""><h4 class="mb-2"><b>Alex Smith</b></h4></span>
             </div>
             <div class="user-info text-center">
               <span class="d-flex"><img style="margin-right: 5px;" height="20px" class="ger-flag-rounded" src="{{asset('assets/img/germany-flag-png.png')}}"> Rojava Qamishlo <img style="margin-right: 5px;margin-left:5px" height="20px" class="ger-flag-rounded" src="{{asset('assets/img/germany-flag-png.png')}}"> Hannover</span>
           
             </div>
           
             <div class="user-info text-center mt-2">
               <h6 style="margin-top:4px" class="mb-2"><b>Standard User</b></h6>
               <h6 class="mb-2">User ID: 123456789</h6>
             </div>
           </div>
         </div>
       </div>
     </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4">
       <div class="card-body">
         <div class="user-avatar-section">
           <div style="margin-top:30px" class=" d-flex align-items-center flex-column">
             <img style="border-radius: 100%;width:125px" class="img-fluid my-4 profile-img" src="{{asset('assets/img/avatars/10.png')}}" alt="User avatar">
             <div class="user-info text-center">
               <span class="d-flex"><img class="medal-pic" height="20px" src="{{asset('assets/dreamschat/images/medal-ribbon.jpeg')}}" alt=""><h4 class="mb-2"><b>Alex Smith</b></h4></span>
             </div>
             <div class="user-info text-center">
               <span class="d-flex"><img style="margin-right: 5px;" height="20px" class="ger-flag-rounded" src="{{asset('assets/img/germany-flag-png.png')}}"> Rojava Qamishlo <img style="margin-right: 5px;margin-left:5px" height="20px" class="ger-flag-rounded" src="{{asset('assets/img/germany-flag-png.png')}}"> Hannover</span> 
             </div>
             <div class="user-info text-center mt-2">
               <h6 style="margin-top:4px" class="mb-2"><b>Standard User</b></h6>
               <h6 class="mb-2">User ID: 123456789</h6>
             </div>
           </div>
         </div>
       </div>
     </div>
    </div>

   </div>
<!--end-->
    <!-- Activity Timeline -->
    <!--<div class="card mb-4">-->
    <!--  <h5 class="card-header">User Activity Timeline</h5>-->
    <!--  <div class="card-body">-->
    <!--    <ul class="timeline">-->
    <!--      <li class="timeline-item timeline-item-transparent">-->
    <!--        <span class="timeline-point timeline-point-primary"></span>-->
    <!--        <div class="timeline-event">-->
    <!--          <div class="timeline-header mb-1">-->
    <!--            <h6 class="mb-0">12 Invoices have been paid</h6>-->
    <!--            <small class="text-muted">12 min ago</small>-->
    <!--          </div>-->
    <!--          <p class="mb-2">Invoices have been paid to the company</p>-->
    <!--          <div class="d-flex">-->
    <!--            <a href="javascript:void(0)" class="me-3">-->
    <!--              <img src="{{asset('assets/img/icons/misc/pdf.png')}}" alt="PDF image" width="15" class="me-2">-->
    <!--              <span class="fw-bold text-body">invoices.pdf</span>-->
    <!--            </a>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </li>-->
    <!--      <li class="timeline-item timeline-item-transparent">-->
    <!--        <span class="timeline-point timeline-point-warning"></span>-->
    <!--        <div class="timeline-event">-->
    <!--          <div class="timeline-header mb-1">-->
    <!--            <h6 class="mb-0">Client Meeting</h6>-->
    <!--            <small class="text-muted">45 min ago</small>-->
    <!--          </div>-->
    <!--          <p class="mb-2">Project meeting with john @10:15am</p>-->
    <!--          <div class="d-flex flex-wrap">-->
    <!--            <div class="avatar me-3">-->
    <!--              <img src="{{asset('assets/img/avatars/3.png')}}" alt="Avatar" class="rounded-circle" />-->
    <!--            </div>-->
    <!--            <div>-->
    <!--              <h6 class="mb-0">Lester McCarthy (Client)</h6>-->
    <!--              <span class="text-muted">CEO of {{ config('variables.creatorName') }}</span>-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </li>-->
    <!--      <li class="timeline-item timeline-item-transparent">-->
    <!--        <span class="timeline-point timeline-point-info"></span>-->
    <!--        <div class="timeline-event">-->
    <!--          <div class="timeline-header mb-1">-->
    <!--            <h6 class="mb-0">Create a new project for client</h6>-->
    <!--            <small class="text-muted">2 Day Ago</small>-->
    <!--          </div>-->
    <!--          <p class="mb-2">5 team members in a project</p>-->
    <!--          <div class="d-flex align-items-center avatar-group">-->
    <!--            <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Vinnie Mostowy">-->
    <!--              <img src="{{asset('assets/img/avatars/5.png')}}" alt="Avatar" class="rounded-circle">-->
    <!--            </div>-->
    <!--            <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Marrie Patty">-->
    <!--              <img src="{{asset('assets/img/avatars/12.png')}}" alt="Avatar" class="rounded-circle">-->
    <!--            </div>-->
    <!--            <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Jimmy Jackson">-->
    <!--              <img src="{{asset('assets/img/avatars/9.png')}}" alt="Avatar" class="rounded-circle">-->
    <!--            </div>-->
    <!--            <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Kristine Gill">-->
    <!--              <img src="{{asset('assets/img/avatars/6.png')}}" alt="Avatar" class="rounded-circle">-->
    <!--            </div>-->
    <!--            <div class="avatar pull-up" data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top" title="Nelson Wilson">-->
    <!--              <img src="{{asset('assets/img/avatars/14.png')}}" alt="Avatar" class="rounded-circle">-->
    <!--            </div>-->
    <!--          </div>-->
    <!--        </div>-->
    <!--      </li>-->
    <!--      <li class="timeline-item timeline-item-transparent">-->
    <!--        <span class="timeline-point timeline-point-success"></span>-->
    <!--        <div class="timeline-event">-->
    <!--          <div class="timeline-header mb-1">-->
    <!--            <h6 class="mb-0">Design Review</h6>-->
    <!--            <small class="text-muted">5 days Ago</small>-->
    <!--          </div>-->
    <!--          <p class="mb-0">Weekly review of freshly prepared design for our new app.</p>-->
    <!--        </div>-->
    <!--      </li>-->
    <!--      <li class="timeline-end-indicator">-->
    <!--        <i class="bx bx-check-circle"></i>-->
    <!--      </li>-->
    <!--    </ul>-->
    <!--  </div>-->
    <!--</div>-->
    <!-- /Activity Timeline -->

    <!-- Invoice table -->
    <!--<div class="card mb-4">-->
    <!--  <div class="table-responsive mb-3">-->
    <!--    <table class="table datatable-invoice border-top">-->
    <!--      <thead>-->
    <!--        <tr>-->
    <!--          <th></th>-->
    <!--          <th>ID</th>-->
    <!--          <th><i class='bx bx-trending-up'></i></th>-->
    <!--          <th>Total</th>-->
    <!--          <th>Issued Date</th>-->
    <!--          <th>Actions</th>-->
    <!--        </tr>-->
    <!--      </thead>-->
    <!--    </table>-->
    <!--  </div>-->
    <!--</div>-->
    <!-- /Invoice table -->
  </div>
  <!--/ User Content -->
</div>

<!-- Modal -->
@include('_partials/_modals/modal-edit-user')
@include('_partials/_modals/modal-upgrade-plan')
<!-- /Modal -->
@endsection
