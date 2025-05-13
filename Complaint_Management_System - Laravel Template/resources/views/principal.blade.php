<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaints Management System</title>
    <link rel="icon" type="image/png" sizes="32x32" href="image/icons/mkce_s.png">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/tabs.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/datatable.css">
    <link rel="stylesheet" href="assets/css/font.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

</head>

<body>
    <!-- Sidebar -->
    <div class="mobile-overlay" id="mobileOverlay"></div>
    <div class="sidebar" id="sidebar">
        <div class="logo">
            <img src="image/mkce.png" alt="College Logo">
            <img class='s_logo' src="image/mkce_s.png" alt="College Logo">
        </div>

        <div class="menu">
            <a href="{{route('admin')}}" class="menu-item">
                <i class="fas fa-home text-primary"></i>
                <span>Dashboard</span>
            </a>
            <a href="{{route('faculty')}}" class="menu-item">
                <i class="fa-solid fa-users text-info"></i>
                <span>Infra</span>
            </a>
            <a href="{{route('hod')}}" class="menu-item">
                <i class="fa-solid fa-address-book text-success"></i>
                <span>HOD</span>
            </a>
            <a href="{{route('eo')}}" class="menu-item">
                <i class="fa-solid fa-building text-secondary"></i>
                <span>Estate Officer</span>
            </a>
            <a href="{{route('manager')}}" class="menu-item">
                <i class="fa-regular fa-handshake text-danger"></i>
                <span>Manager</span>
            </a>
            <div class="menu-item has-submenu">
                <i class="fa-solid fa-gears text-primary"></i>
                <span>Worker</span>
            </div>
            <div class="submenu">
                <a href="{{route('workDash')}}" class="menu-item">
                    <i class="fas fa-chart-pie text-warning"></i>
                    <span>Dashboard</span>
                </a>
                <a href="{{route('work')}}" class="menu-item">
                    <i class="fa-regular fa-folder text-warning"></i>
                    <span>Work</span>
                </a>
                <a href="{{route('worker')}}" class="menu-item">
                    <i class="fa-regular fa-folder-open text-warning"></i>
                    <span>Workall</span>
                </a>
            </div>
            <a href="{{route('principal')}}" class="menu-item active">
                <i class="fa-solid fa-user-tie text-white"></i>
                <span>Principal</span>
            </a>
            <!-- <a href="" class="menu-item">
            <i class="fas fa-cog text-secondary"></i>
            <span>Settings</span>
        </a> -->
        </div>
    </div>

    <!-- Main Content -->
    <div class="content">

        <div class="loader-container" id="loaderContainer">
            <div class="loader"></div>
        </div>

        <!-- Topbar -->
        <div class="topbar">
            <div class="hamburger" id="hamburger">
                <i class="fas fa-bars"></i>
            </div>
            <!-- <div class="brand-logo">
                <i class="fas fa-chart-line"></i>
                MIC
            </div> -->
            <div class="user-profile">
                <div class="user-menu" id="userMenu">
                    <div class="user-avatar">
                        <img src="/api/placeholder/35/35" alt="User">
                        <div class="online-indicator"></div>
                    </div>
                    <div class="dropdown-menu">
                        <a class="dropdown-item">
                            <i class="fas fa-key"></i>
                            Change Password
                        </a>
                        <a class="dropdown-item">
                            <i class="fas fa-sign-out-alt"></i>
                            Logout
                        </a>
                    </div>
                </div>
                <span>TIH</span>
            </div>
        </div>

        <!-- Breadcrumb -->
        <div class="breadcrumb-area">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Principal</li>
                </ol>
            </nav>
        </div>

        <!-- Content Area -->
        <div class="container-fluid">
            <div class="container">
                <div class="custom-tabs">
                    <!-- Navigation Tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <!-- Tab 1: Dashboard -->
                        <!-- Tab 1: Dashboard -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="add-bus-tab" data-bs-toggle="tab"
                                data-bs-target="#dashboard" type="button" role="tab">
                                <i class="fas fa-tachometer-alt tab-icon"></i>Dashboard
                            </button>
                        </li>

                        <!-- Tab 2: Requirements -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="edit-bus-tab" data-bs-toggle="tab"
                                data-bs-target="#requirements" type="button" role="tab">
                                <i class="fas fa-list-alt tab-icon"></i>Requirements
                            </button>
                        </li>

                        <!-- Tab 3: Completed Works -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="route-bus-tab" data-bs-toggle="tab" data-bs-target="#completed"
                                type="button" role="tab">
                                <i class="fas fa-check-circle tab-icon"></i>Completed Works
                            </button>
                        </li>

                        <!-- Tab 4: Work Assigned -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="delete-bus-tab" data-bs-toggle="tab" data-bs-target="#assigned"
                                type="button" role="tab">
                                <i class="fas fa-tasks tab-icon"></i>Work Assigned
                            </button>
                        </li>


                    </ul>

                    <!-- Tab Content -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="dashboard" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h4 class="mb-0">Complaint Management System</h4>
                                            <button type="button" class="btn btn-work-category btn-primary"
                                                data-bs-toggle="modal" data-bs-target="#piechart">
                                                <i class="fas fa-tasks"></i>&nbsp;&nbsp;Work Category
                                            </button>
                                        </div>

                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-12">
                                                    <div class="cir">
                                                        <div class="bo">
                                                            <div class="content1">
                                                                <div class="stats-box text-center p-3"
                                                                    style="background-color: #f563fe ;">
                                                                    <i class="fas fa-bell m-b-5 font-20"></i>
                                                                    <h5 class="text-white"><span
                                                                            id="complainCount"></span></h5>
                                                                    <small class="font-light">Total Complaints</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-12">
                                                    <div class="cir">
                                                        <div class="bo">
                                                            <div class="content1">
                                                                <div class="stats-box text-center p-3"
                                                                    style="background-color: #28df49;">
                                                                    <i class="fas fa-check m-b-5 font-20"></i>
                                                                    <h5 class="text-white"><span
                                                                            id="completedCount"></span></h5>
                                                                    <small class="font-light">Completed</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-12">
                                                    <div class="cir">
                                                        <div class="bo">
                                                            <div class="content1">
                                                                <div class="stats-box text-center p-3"
                                                                    style="background-color: #ecc908;">
                                                                    <i class="fas fa-exclamation m-b-5 font-16"></i>
                                                                    <h5 class="text-white"><span
                                                                            id="inprogresscount"></span></h5>
                                                                    <small class="font-light">In Progress</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><br>
                                            <div class="row">
                                                <div class="col-lg-4 col-sm-12">
                                                    <div class="cir">
                                                        <div class="bo">
                                                            <div class="content1">
                                                                <div class="stats-box text-center p-3"
                                                                    style="background-color: #f1521b;">
                                                                    <i class="fas fa-question m-b-5 font-16"></i>

                                                                    <h5 class="text-white"><span
                                                                            id="pendingCount"></span></h5>
                                                                    <small class="font-light">Pending</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-12">
                                                    <div class="cir">
                                                        <div class="bo">
                                                            <div class="content1">
                                                                <div class="stats-box text-center p-3"
                                                                    style="background-color: #47b2c8  ;">
                                                                    <i class="fa-solid fa-spinner"></i>
                                                                    <h5 class="text-white"><span
                                                                            id="requestCount"></span></h5>
                                                                    <small class="font-light">Request</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-sm-12">
                                                    <div class="cir">
                                                        <div class="bo">
                                                            <div class="content1">
                                                                <div class="stats-box text-center p-3"
                                                                    style="background-color: #545557;">
                                                                    <i class="fas fa-redo m-b-5 font-20"></i>
                                                                    <h5 class="text-white"><span
                                                                            id="reassignCount"></span></h5>
                                                                    <small class="font-light">Reassign</small>
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
                        <div class="tab-pane fade show" id="requirements" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h4 class="mb-0">Complaint Management System</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="requirements_table"
                                                    class="table table-striped table-bordered custom-table">
                                                    <thead class="table-class">
                                                        <tr>
                                                            <th>S.No</th>
                                                            <th>Block/Venue</th>
                                                            <th>Complaint</th>
                                                            <th>Image</th>
                                                            <th>Date Raised</th>
                                                            <th>Requirements</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">Block A</td>
                                                            <td class="text-center"><button type="button"
                                                                    class="btn btn-info btn-sm" title="Complaint Detail"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#complaintDetailsModal">
                                                                    <i class="fas fa-eye"></i>
                                                                </button></td>
                                                            <td class="text-center">
                                                                <button type="button" class="btn btn-info btn-sm"
                                                                    title="before_image" data-bs-toggle="modal"
                                                                    data-bs-target="#imageModal">
                                                                    <i class="fas fa-image"></i>
                                                                </button>
                                                            </td>
                                                            <td class="text-center">01/01/2025</td>
                                                            <td class="text-center">Plumber Required</td>
                                                            <td class="text-center">
                                                                <div class="d-flex gap-2 justify-content-center">
                                                                    <button type="button" class="btn btn-success btn-sm"
                                                                        title="Approve">
                                                                        <i class="fas fa-check"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-danger btn-sm"
                                                                        title="Reject">
                                                                        <i class="fas fa-times"></i>
                                                                    </button>
                                                                </div>
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
                        <div class="tab-pane fade" id="completed" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="mb-0">Complaint Management System</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="completed_table"
                                                    class="table table-striped table-bordered custom-table">
                                                    <thead class="table-class">
                                                        <tr>
                                                            <th>S.No</th>
                                                            <th>Block/Venue</th>
                                                            <th>Complaint</th>
                                                            <th>Deadline</th>
                                                            <th>Date of Completion</th>
                                                            <th>Pictures</th>
                                                            <th>Faculty Feedback</th>
                                                            <th>Manager Feedback</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr data-course-id="">
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">RK-314</td>
                                                            <td class="text-center"><button type="button"
                                                                    class="btn btn-info btn-sm" title="Complaint Detail"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#complaintDetailsModal">
                                                                    <i class="fas fa-eye"></i>
                                                                </button></td>
                                                            <td class="text-center">28/12/2025</td>
                                                            <td class="text-center">18/11/2025</td>
                                                            <td class="text-center">
                                                                <div class="d-flex gap-2 justify-content-center">
                                                                    <button type="button" class="btn btn-info btn-sm"
                                                                        title="before_image" data-bs-toggle="modal"
                                                                        data-bs-target="#imageModal">
                                                                        <i class="fas fa-image"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-info btn-sm"
                                                                        title="before_image" data-bs-toggle="modal"
                                                                        data-bs-target="#imageModal">
                                                                        <i class="fas fa-images"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">Satisfied</td>
                                                            <td class="text-center">Good</td>
                                                            <td class="text-center">Partially Completed</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="assigned" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="mb-0">Complaint Management System</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="assigned_table"
                                                    class="table table-striped table-bordered custom-table">
                                                    <thead class="table-class">
                                                        <tr>
                                                            <th class="text-center"><b>S.No</b></th>
                                                            <th class="text-center"><b>Block/Venue</b></th>
                                                            <th class="text-center"><b>Complaint</b></th>
                                                            <th class="text-center"><b>Assigned Date</b></th>
                                                            <th class="text-center"><b>Deadline</b></th>
                                                            <th class="text-center"><b>Pictures</b></th>
                                                            <th class="text-center"><b>Comments</b></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr data-course-id="">
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">RK-314</td>
                                                            <td class="text-center"><button type="button"
                                                                    class="btn btn-info btn-sm" title="Complaint Detail"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#complaintDetailsModal">
                                                                    <i class="fas fa-eye"></i>
                                                                </button></td>
                                                            <td class="text-center">17/11/2025</td>
                                                            <td class="text-center">18/11/2025</td>
                                                            <td class="text-center">
                                                                <div class="d-flex gap-2 justify-content-center">
                                                                    <button type="button" class="btn btn-info btn-sm"
                                                                        title="before_image" data-bs-toggle="modal"
                                                                        data-bs-target="#imageModal">
                                                                        <i class="fas fa-image"></i>
                                                                    </button>
                                                                    <button type="button" class="btn btn-info btn-sm"
                                                                        title="before_image" data-bs-toggle="modal"
                                                                        data-bs-target="#imageModal">
                                                                        <i class="fas fa-images"></i>
                                                                    </button>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <button type="button" class="btn btn-info btn-sm"
                                                                    data-bs-toggle="modal" data-bs-target="#comment"
                                                                    title="Comments">
                                                                    <i
                                                                        class="fa-solid fa-clipboard-question"></i>&nbsp;&nbsp;Query
                                                                </button>
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
    <!-- Footer -->
    <footer class="footer">
        <div class="footer-copyright" style="text-align: center;">
            <p>Copyright © 2024 Designed by <span style="background: linear-gradient(to right, #cb2d3e, #ef473a);"
                    -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip:
                    text;">Technology Innovation Hub - MKCE. </span>All rights reserved.</p>
        </div>
        <!-- <div class="footer-links">
            <a href="#"><i class="fab fa-linkedin"></i></a>
        </div> -->
    </footer>
    <!-- Before Image Modal Starts -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Complaint Image</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img id="modalImage" src="" alt="Image" class="img-fluid">
                    <!-- src will be set dynamically -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Before Image Model Ends -->
    <!-- View Complaint Modal Starts -->
    <div class="modal fade" id="complaintDetailsModal" tabindex="-1" role="dialog"
        aria-labelledby="complaintDetailsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="complaintDetailsModalLabel">
                        📋 Complaint Details
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">

                    <!-- Complaint Info Section arranged in two-column layout -->
                    <div class="row">
                        <!-- Left Column -->
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="fw-bold">Complaint ID</label>
                                <div class="text-muted"><b id="id"></b></div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="fw-bold">Infra Name</label>
                                <div class="text-muted"><b id="faculty_name"></b></div>
                            </div>
                        </div>

                        <!-- Right Column -->
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="fw-bold">Mobile Number</label>
                                <div class="text-muted"><b id="faculty_contact"></b></div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="fw-bold">E-mail</label>
                                <div class="text-muted"><b id="faculty_mail"></b></div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="fw-bold">Faculty Name</label>
                                <div class="text-muted"><b id="fac_name"></b></div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="fw-bold">Faculty ID</label>
                                <div class="text-muted"><b id="fac_id"></b></div>
                            </div>
                        </div>

                        <!-- New row for Venue and Type of Problem -->
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="fw-bold">Venue Name</label>
                                <div class="text-muted"><b id="venue_name"></b></div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="fw-bold">Type of Problem</label>
                                <div class="text-muted"><b id="type_of_problem"></b></div>
                            </div>
                        </div>

                        <!-- Full width for Problem Description -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="fw-bold">Problem Description</label>
                                <div class="alert alert-light" role="alert">
                                    <span id="problem_description"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Modal Footer with Save Button -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- View Complaint Modal Ends -->
    <div class="modal fade" id="comment" tabindex="-1" aria-labelledby="rejectModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="rejectModalLabel">Comment Forum</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Form for Comment Details -->
                <form id="comment_det">
                    <div class="modal-body">
                        <!-- Hidden Task ID Field -->
                        <input type="hidden" name="task_id" id="task_id">

                        <!-- Query Input -->
                        <div class="mb-3">
                            <label for="comment_query" class="form-label">Query*</label>
                            <input type="text" class="form-control" id="comment_query" name="comment_query"
                                placeholder="Enter your query here" required>
                        </div>

                        <!-- Date of Query Input -->
                        <div class="mb-3">
                            <label for="query_date" class="form-label">Date of Query Submission</label>
                            <input type="text" class="form-control" id="query_date" name="query_date"
                                placeholder="Enter the date">
                        </div>

                        <!-- Reply Input (Read-Only) -->
                        <div class="mb-3">
                            <label for="comment_reply" class="form-label">Reply*</label>
                            <input type="text" class="form-control" id="comment_reply" name="comment_reply"
                                placeholder="Reply will be displayed here" readonly>
                        </div>
                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Work Category Model -->
    <div class="modal fade" id="piechart" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Work Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <canvas id="chartId" aria-label="chart" class="w-100" height="350" width="580"></canvas>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Download</button>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/script/script.js"></script>
    <script src="assets/script/bootstrap.js"></script>
    <script>
    $(document).ready(function() {
        // Common DataTable configuration
        const commonConfig = {
            paging: true,
            searching: true,
            ordering: true,
            lengthChange: true,
            pageLength: 10,
            info: true
        };
        // Initialize DataTables for all tables
        $('#requirements_table').DataTable(commonConfig);
        $('#completed_table').DataTable(commonConfig);
        $('#assigned_table').DataTable(commonConfig);
    });
    </script>
</body>

</html>