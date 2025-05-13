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
                <a href="{{route('work')}}" class="menu-item active">
                    <i class="fa-regular fa-folder text-warning"></i>
                    <span>Work</span>
                </a>
                <a href="{{route('worker')}}" class="menu-item">
                    <i class="fa-regular fa-folder-open text-warning"></i>
                    <span>Workall</span>
                </a>
            </div>
            <a href="{{route('principal')}}" class="menu-item">
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
                    <li class="breadcrumb-item active" aria-current="page">Worker</li>
                </ol>
            </nav>
        </div>

        <!-- Content Area -->
        <div class="container-fluid">
            <div class="container">
                <div class="custom-tabs">
                    <!-- Navigation Tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <!-- Tab 1: In Progress -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="add-bus-tab" data-bs-toggle="tab"
                                data-bs-target="#inprogress" type="button" role="tab">
                                <i class="fas fa-spinner tab-icon"></i> In Progress
                            </button>
                        </li>

                        <!-- Tab 2: Waiting For Approval -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="edit-bus-tab" data-bs-toggle="tab"
                                data-bs-target="#waitingapproval" type="button" role="tab">
                                <i class="fas fa-hourglass-half tab-icon"></i> Waiting For Approval
                            </button>
                        </li>

                        <!-- Tab 3: Not Approved -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="delete-bus-tab" data-bs-toggle="tab"
                                data-bs-target="#notapproved" type="button" role="tab">
                                <i class="fas fa-times-circle tab-icon"></i> Not Approved
                            </button>
                        </li>

                        <!-- Tab 4: Completed -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="view-bus-tab" data-bs-toggle="tab" data-bs-target="#completed"
                                type="button" role="tab">
                                <i class="fas fa-check-circle tab-icon"></i> Completed
                            </button>
                        </li>
                    </ul>
                    <!-- Tab Content -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="inprogress" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h4 class="mb-0">Complaint Management System</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="complaint_table"
                                                    class="table table-striped table-bordered custom-table">
                                                    <thead class="table-class">
                                                        <tr>
                                                            <th><b>S.No</b></th>
                                                            <th><b>Complaint Date</b></th>
                                                            <th><b>Task ID</b></th>
                                                            <th><b>Department</b></th>
                                                            <th><b>Complaint</b></th>
                                                            <th><b>Priority</b></th>
                                                            <th><b>Image</b></th>
                                                            <th><b>Deadline</b></th>
                                                            <th><b>Status</b></th>
                                                            <th><b>Action</b></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">01/01/2025</td>
                                                            <td class="text-center">TASK-001</td>
                                                            <td class="text-center">Maintenance</td>
                                                            <td class="text-center"><button type="button"
                                                                    class="btn btn-info btn-sm" title="Complaint Detail"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#complaintDetailsModal">
                                                                    <i class="fas fa-eye"></i>
                                                                </button></td>
                                                            <td class="text-center"><span
                                                                    class="badge bg-danger">High</span></td>
                                                            <td class="text-center"><button type="button"
                                                                    class="btn btn-info btn-sm" title="Complaint Detail"
                                                                    data-bs-toggle="modal" data-bs-target="#imageModal">
                                                                    <i class="fas fa-image"></i>
                                                                </button></td>
                                                            <td class="text-center">03/01/2025</td>
                                                            <td class="text-center"><span class="badge bg-warning">In
                                                                    Progress</span></td>
                                                            <td class="text-center">
                                                                <div class="d-flex gap-2 justify-content-center">
                                                                    <button type="button" class="btn btn-success btn-sm"
                                                                        title="Mark Completed">
                                                                        <i class="fas fa-check"></i> Complete
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <!-- Add more rows as necessary -->
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="waitingapproval" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h4 class="mb-0">Complaint Management System</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="waitingapproval_table"
                                                    class="table table-striped table-bordered custom-table">
                                                    <thead class="table-class">
                                                        <tr>
                                                            <th><b>S.No</b></th>
                                                            <th><b>Complaint Date</b></th>
                                                            <th><b>Task ID</b></th>
                                                            <th><b>Department</b></th>
                                                            <th><b>Complaint</b></th>
                                                            <th><b>Priority</b></th>
                                                            <th><b>Images</b></th>
                                                            <th><b>Deadline</b></th>
                                                            <th><b>Reason</b></th>
                                                            <th><b>Task Completion</b></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">02/01/2025</td>
                                                            <td class="text-center">TASK-002</td>
                                                            <td class="text-center">IT Support</td>
                                                            <td class="text-center"><button type="button"
                                                                    class="btn btn-info btn-sm" title="Complaint Detail"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#complaintDetailsModal">
                                                                    <i class="fas fa-eye"></i>
                                                                </button></td>
                                                            <td class="text-center"><span
                                                                    class="badge bg-danger">High</span></td>
                                                            <td class="text-center">
                                                                <button type="button" class="btn btn-info btn-sm"
                                                                    title="Complaint Detail" data-bs-toggle="modal"
                                                                    data-bs-target="#imageModal">
                                                                    <i class="fas fa-image"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-info btn-sm"
                                                                    title="Complaint Detail" data-bs-toggle="modal"
                                                                    data-bs-target="#imageModal">
                                                                    <i class="fas fa-images"></i>
                                                                </button>
                                                            </td>
                                                            <td class="text-center">03/01/2025</td>
                                                            <td class="text-center">Awaiting Supervisor Approval</td>
                                                            <td class="text-center">
                                                                <div class="d-flex gap-2 justify-content-center">
                                                                    <button type="button" class="btn btn-primary btn-sm"
                                                                        title="Approve">
                                                                        <i class="fas fa-check"></i> Approve
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <!-- Add more rows as necessary -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="notapproved" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h4 class="mb-0">Complaint Management System</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="notapproved_table"
                                                    class="table table-striped table-bordered custom-table">
                                                    <thead class="table-class">
                                                        <tr>
                                                            <th><b>S.No</b></th>
                                                            <th><b>Complaint Date</b></th>
                                                            <th><b>Task ID</b></th>
                                                            <th><b>Department</b></th>
                                                            <th><b>Complaint</b></th>
                                                            <th><b>Priority</b></th>
                                                            <th><b>Image</b></th>
                                                            <th><b>Deadline</b></th>
                                                            <th><b>Comments</b></th>
                                                            <th><b>Status</b></th>
                                                            <th><b>Action</b></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">04/01/2025</td>
                                                            <td class="text-center">TASK-003</td>
                                                            <td class="text-center">Maintenance</td>
                                                            <td class="text-center"><button type="button"
                                                                    class="btn btn-info btn-sm" title="Complaint Detail"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#complaintDetailsModal">
                                                                    <i class="fas fa-eye"></i>
                                                                </button></td>
                                                            <td class="text-center"><span
                                                                    class="badge bg-danger">High</span></td>
                                                            <td class="text-center">
                                                                <button type="button" class="btn btn-info btn-sm"
                                                                    title="Complaint Detail" data-bs-toggle="modal"
                                                                    data-bs-target="#imageModal">
                                                                    <i class="fas fa-image"></i>
                                                                </button>
                                                            </td>
                                                            <td class="text-center">06/01/2025</td>
                                                            <td class="text-center">Incomplete Work</td>
                                                            <td class="text-center"><span
                                                                    class="badge bg-warning">Waiting</span></td>
                                                            <td class="text-center">
                                                                <button type="button" class="btn btn-success btn-sm"
                                                                    title="Start Work">
                                                                    <i class="fas fa-play"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                        <!-- Add more rows as necessary -->
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
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h4 class="mb-0">Complaint Management System</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="completed_table"
                                                    class="table table-striped table-bordered custom-table">
                                                    <thead class="table-class">
                                                        <tr>
                                                            <th><b>S.No</b></th>
                                                            <th><b>Complaint Date</b></th>
                                                            <th><b>Task ID</b></th>
                                                            <th><b>Department</b></th>
                                                            <th><b>Complaint</b></th>
                                                            <th><b>Images</b></th>
                                                            <th><b>Deadline</b></th>
                                                            <th><b>Date of Completion</b></th>
                                                            <th><b>Status</b></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">03/01/2025</td>
                                                            <td class="text-center">TASK-004</td>
                                                            <td class="text-center">IT Support</td>
                                                            <td class="text-center"><button type="button"
                                                                    class="btn btn-info btn-sm" title="Complaint Detail"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#complaintDetailsModal">
                                                                    <i class="fas fa-eye"></i>
                                                                </button></td>
                                                            <td class="text-center">
                                                                <button type="button" class="btn btn-info btn-sm"
                                                                    title="Complaint Detail" data-bs-toggle="modal"
                                                                    data-bs-target="#imageModal">
                                                                    <i class="fas fa-image"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-info btn-sm"
                                                                    title="Complaint Detail" data-bs-toggle="modal"
                                                                    data-bs-target="#imageModal">
                                                                    <i class="fas fa-images"></i>
                                                                </button>
                                                            </td>
                                                            <td class="text-center">06/01/2025</td>
                                                            <td class="text-center">07/01/2025</td>
                                                            <td class="text-center">
                                                                <div class="d-flex gap-2 justify-content-center">
                                                                    <button type="button" class="btn btn-success btn-sm"
                                                                        title="View Details">Completed
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <!-- Add more rows as necessary -->
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
        <div class="footer-copyright" style="text-align: center; position: relative;">
            <p>
                Copyright © 2024 Designed by
                <span
                    style="background: linear-gradient(to right, #cb2d3e, #ef473a); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                    Technology Innovation Hub - MKCE.
                </span>
                All rights reserved.
            </p>
        </div>
    </footer>

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
    <div class="modal fade" id="facultymodal" tabindex="-1" aria-labelledby="facultymodalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header bg-gradient-primary text-white">
                    <h5 class="modal-title" id="facultymodalLabel">Faculty Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item">
                            <div class="fw-bold text-primary">Infra Name</div>
                            <b><span id="ifaculty_name"></span></b>
                        </li>
                        <li class="list-group-item">
                            <div class="fw-bold text-primary">Faculty Name</div>
                            <b><span id="faculty_name"></span></b>
                        </li>
                        <li class="list-group-item">
                            <div class="fw-bold text-primary">Faculty Department</div>
                            <b><span id="faculty_dept"></span></b>
                        </li>
                        <li class="list-group-item">
                            <div class="fw-bold text-primary">Faculty Designation</div>
                            <b><span id="faculty_desg"></span></b>
                        </li>
                        <li class="list-group-item">
                            <div class="fw-bold text-primary">Mobile Number</div>
                            <b><span id="ifaculty_contact"></span></b>
                        </li>
                        <li class="list-group-item">
                            <div class="fw-bold text-primary">E-mail</div>
                            <b><span id="ifaculty_mail"></span></b>
                        </li>
                    </ol>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Problem Description Modal -->
    <div class="modal fade" id="probdesc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Problem Description</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="addnewdetails">
                    <div class="modal-body">
                        <ol class="list-group list-group-numbered mb-0">
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold text-primary">Problem ID</div>
                                    <b><span id="id" class="text-muted"></span></b>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold text-primary">Type of Problem</div>
                                    <b><span id="type_of_problem" class="text-muted"></span></b>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold text-primary">Block</div>
                                    <b><span id="block_venue" class="text-muted"></span></b>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold text-primary">Venue Name</div>
                                    <b><span id="venue_name" class="text-muted"></span></b>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold text-primary">Problem Description</div>
                                    <b><span id="pd" class="text-muted"></span></b>
                                </div>
                            </li>
                        </ol>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Rejected reason Model -->
    <div class="modal fade" id="problemrejected" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="exampleModalLabel">Reason for Rejection</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="addnewdetails">
                    <div class="modal-body">
                        <textarea id="pdrej2" class="form-control" rows="6" disabled></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="assets/script/script.js"></script>
    <script src="assets/script/bootstrap.js"></script>

    <!-- DataTables Initialization -->
    <script>
    $(document).ready(function() {
        // Initialize DataTables for all tables
        $('#complaint_table, #waitingapproval_table, #notapproved_table, #completed_table').each(function() {
            $(this).DataTable({
                paging: true,
                searching: true,
                ordering: true,
                lengthChange: true,
                pageLength: 10,
                responsive: true,
                columnDefs: [{
                        targets: [0],
                        orderable: false
                    }, // Disable sorting on S.No column
                    {
                        targets: '_all',
                        className: 'text-center'
                    } // Center-align all columns
                ],
                language: {
                    search: "Search:", // Add the search label
                    searchPlaceholder: "Search records...",
                    lengthMenu: "Show _MENU_ entries",
                    info: "Showing _START_ to _END_ of _TOTAL_ entries",
                    paginate: {
                        previous: "Previous",
                        next: "Next"
                    }
                }
            });
        });
    });
    </script>

    <script>
    // Get today's date
    const today = new Date();

    // Calculate last month for From Date
    const lastMonth = new Date();
    lastMonth.setMonth(lastMonth.getMonth() - 1);

    // Format dates to YYYY-MM-DD
    const formatDate = (date) => date.toISOString().split('T')[0];

    // Set default values for From Date and To Date
    document.getElementById('fromDate').value = formatDate(lastMonth);
    document.getElementById('toDate').value = formatDate(today);

    // Optional: Ensure From Date is not after To Date
    document.getElementById('fromDate').addEventListener('change', function() {
        const fromDate = new Date(this.value);
        const toDate = new Date(document.getElementById('toDate').value);
        if (fromDate > toDate) {
            alert("From Date cannot be after To Date");
            this.value = formatDate(lastMonth);
        }
    });

    document.getElementById('toDate').addEventListener('change', function() {
        const fromDate = new Date(document.getElementById('fromDate')
            .value);
        const toDate = new Date(this.value);
        if (toDate < fromDate) {
            alert("To Date cannot be before From Date");
            this.value = formatDate(today);
        }
    });
    </script>


</body>

</html>