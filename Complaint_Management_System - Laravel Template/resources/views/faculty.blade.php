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
            <a href="{{route('faculty')}}" class="menu-item active">
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
                        <img src="#" alt="User">
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
                    <li class="breadcrumb-item active" aria-current="page">Faculty</li>
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
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="add-bus-tab" data-bs-toggle="tab"
                                data-bs-target="#dashboard" type="button" role="tab">
                                <i class="fas fa-tachometer-alt tab-icon"></i>Dashboard
                            </button>
                        </li>

                        <!-- Tab 2: Complaints -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="edit-bus-tab" data-bs-toggle="tab" data-bs-target="#complaints"
                                type="button" role="tab">
                                <i class="fas fa-exclamation-circle tab-icon"></i>Complaints
                            </button>
                        </li>

                        <!-- Tab 3: Work In Progress -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="schedule-bus-tab" data-bs-toggle="tab"
                                data-bs-target="#work-in-progress" type="button" role="tab">
                                <i class="fas fa-spinner tab-icon"></i>Work In Progress
                            </button>
                        </li>

                        <!-- Tab 4: Completed Work -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="route-bus-tab" data-bs-toggle="tab"
                                data-bs-target="#completed-work" type="button" role="tab">
                                <i class="fas fa-check-circle tab-icon"></i>Completed Work
                            </button>
                        </li>

                        <!-- Tab 5: Rejected Work -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="report-bus-tab" data-bs-toggle="tab"
                                data-bs-target="#rejected-work" type="button" role="tab">
                                <i class="fas fa-times-circle tab-icon"></i>Rejected Work
                            </button>
                        </li>

                        <!-- Tab 6: Reassigned Work -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="settings-bus-tab" data-bs-toggle="tab"
                                data-bs-target="#reassigned-work" type="button" role="tab">
                                <i class="fas fa-random tab-icon"></i>Reassigned Work
                            </button>
                        </li>


                    </ul>

                    <!-- Tab Content -->
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="dashboard" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="mb-0">Complaint Management System</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <!-- Pending -->
                                                <div class="col-12 col-md-3" style="margin-bottom: 40px">
                                                    <div class="cir">
                                                        <div class="bo">
                                                            <div class="content1">
                                                                <div class="stats-box text-center p-3"
                                                                    style="background-color:orange;">
                                                                    <i class="fas fa-clock"></i>
                                                                    <h1 class="font-light text-white">

                                                                    </h1>
                                                                    <small class="font-light">Pending</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Approved -->
                                                <div class="col-12 col-md-3">
                                                    <div class="cir">
                                                        <div class="bo">
                                                            <div class="content1">
                                                                <div class="stats-box text-center p-3"
                                                                    style="background-color:rgb(14, 86, 239);">
                                                                    <i class="fas fa-check"></i>
                                                                    <h1 class="font-light text-white">

                                                                    </h1>
                                                                    <small class="font-light">Approved</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Completed -->
                                                <div class="col-12 col-md-3">
                                                    <div class="cir">
                                                        <div class="bo">
                                                            <div class="content1">
                                                                <div class="stats-box text-center p-3"
                                                                    style="background-color:rgb(70, 160, 70);">
                                                                    <i class="fas fa-check-circle"></i>
                                                                    <h1 class="font-light text-white"></h1>
                                                                    <small class="font-light">Completed</small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Rejected -->
                                                <div class="col-12 col-md-3">
                                                    <div class="cir">
                                                        <div class="bo">
                                                            <div class="content1">
                                                                <div class="stats-box text-center p-3"
                                                                    style="background-color:red;">
                                                                    <i class="fas fa-exclamation"></i>
                                                                    <h1 class="font-light text-white">

                                                                    </h1>
                                                                    <small class="font-light">Rejected</small>
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
                        <div class="tab-pane fade show" id="complaints" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h4 class="mb-0">Complaint Management System</h4>
                                            <button type="button" class="btn btn-raise-complaint btn-danger"
                                                data-bs-toggle="modal" data-bs-target="#complaintModal">
                                                <i class="fas fa-bullhorn"></i>&nbsp;&nbsp;Raise Complaint
                                            </button>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="rc_table"
                                                    class="table table-striped table-bordered custom-table display nowrap"
                                                    style="width:100%">
                                                    <thead class="table-class">
                                                        <tr>
                                                            <th>S.No</th>
                                                            <th>Problem ID</th>
                                                            <th>Venue</th>
                                                            <th>Problem</th>
                                                            <th>Description</th>
                                                            <th>Date</th>
                                                            <th>Image</th>
                                                            <th>Status</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">PRB001</td>
                                                            <td class="text-center">Lab</td>
                                                            <td class="text-center">Electrical Issue</td>
                                                            <td class="text-center">Power outage in lab</td>
                                                            <td class="text-center">2025-01-10</td>
                                                            <td class="text-center">
                                                                <button type="button" class="btn btn-info btn-sm"
                                                                    title="before_image" data-bs-toggle="modal"
                                                                    data-bs-target="#imageModal">
                                                                    <i class="fas fa-image"></i>
                                                                </button>
                                                            </td>
                                                            <td class="text-center">Resolved</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="work-in-progress" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="mb-0">Complaint Management System</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="wip_table"
                                                    class="table table-striped table-bordered custom-table display nowrap"
                                                    style="width:100%">
                                                    <thead class="table-class">
                                                        <tr>
                                                            <th>S.No</th>
                                                            <th>Problem ID</th>
                                                            <th>Venue</th>
                                                            <th>Problem Description</th>
                                                            <th>Date</th>
                                                            <th>Deadline</th>
                                                            <th>Worker Detail</th>
                                                            <th>Feedback</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">PRB002</td>
                                                            <td class="text-center">Room 301</td>
                                                            <td class="text-center">AC malfunction</td>
                                                            <td class="text-center">01/10/2025</td>
                                                            <td class="text-center">01/12/2025</td>
                                                            <td class="worker_detail">
                                                                <a href="tel:+918825756388" title="Call Worker"
                                                                    class="worker-contact">
                                                                    <i class="fas fa-phone"></i> 8825756388
                                                                </a>
                                                            </td>
                                                            <td class="text-center">
                                                                <button type="button"
                                                                    class="btn btn-info btn-sm btn-feedback"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#feedback_modal">
                                                                    <i
                                                                        class="fas fa-comment-alt"></i>&nbsp;&nbsp;Feedback
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
                        <div class="tab-pane fade" id="completed-work" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="mb-0">Complaint Management System</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="cw_table"
                                                    class="table table-striped table-bordered custom-table display nowrap"
                                                    style="width:100%">
                                                    <thead class="table-class">
                                                        <tr>
                                                            <th class="text-center">S.No</th>
                                                            <th class="text-center">Problem ID</th>
                                                            <th class="text-center">Venue</th>
                                                            <th class="text-center">Problem</th>
                                                            <th class="text-center">Raised On</th>
                                                            <th class="text-center">Solved On</th>
                                                            <th class="text-center">Feedback</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">PRB005</td>
                                                            <td class="text-center">Lab 202</td>
                                                            <td class="text-center">Projector not working</td>
                                                            <td class="text-center">01/11/2025</td>
                                                            <td class="text-center">05/11/2025</td>
                                                            <td class="text-center">Feedback</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="rejected-work" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="mb-0">Complaint Management System</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="r_table"
                                                    class="table table-striped table-bordered custom-table display nowrap"
                                                    style="width:100%">
                                                    <thead class="table-class">
                                                        <tr>
                                                            <th class="text-center">S.No</th>
                                                            <th class="text-center">Problem ID</th>
                                                            <th class="text-center">Block</th>
                                                            <th class="text-center">Venue</th>
                                                            <th class="text-center">Problem Description</th>
                                                            <th class="text-center">Status</th>
                                                            <th class="text-center">Reason</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">PRB006</td>
                                                            <td class="text-center">Block A</td>
                                                            <td class="text-center">Lab 101</td>
                                                            <td class="text-center">AC not working</td>
                                                            <td class="text-center"><span
                                                                    class="badge bg-danger">Rejected</span></td>
                                                            <td class="text-center">Issue not valid</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="reassigned-work" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="mb-0">Complaint Management System</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="rw_table"
                                                    class="table table-striped table-bordered custom-table display nowrap"
                                                    style="width:100%">
                                                    <thead class="table-class">
                                                        <tr>
                                                            <th class="text-center">S.No</th>
                                                            <th class="text-center">Problem ID</th>
                                                            <th class="text-center">Venue</th>
                                                            <th class="text-center">Problem</th>
                                                            <th class="text-center">Description</th>
                                                            <th class="text-center">Date</th>
                                                            <th class="text-center">Worker Details</th>
                                                            <th class="text-center">Feedback</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">PRB010</td>
                                                            <td class="text-center">Room 203</td>
                                                            <td class="text-center">Electrical Issue</td>
                                                            <td class="text-center">Switchboard malfunction</td>
                                                            <td class="text-center">01/11/2025</td>
                                                            <td class="worker_detail text-center">
                                                                <a href="tel:+918825756388" title="Call Worker">
                                                                    <i class="fas fa-phone"></i> 8825756388
                                                                </a>
                                                            </td>
                                                            <td class="text-center">
                                                                <button type="button" class="btn btn-info btn-sm"
                                                                    title="Feedback" data-bs-toggle="modal"
                                                                    data-bs-target="#feedback_modal">
                                                                    <i
                                                                        class="fas fa-comment-alt"></i>&nbsp;&nbsp;Feedback
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

    <!-- Modal -->
    <div class="modal fade" id="complaintModal" tabindex="-1" aria-labelledby="complaintModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="complaintModalLabel">Raise Complaint</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <form id="complaintForm" enctype="multipart/form-data" onsubmit="handleSubmit(event)">
                        <!-- Choose Faculty -->
                        <div class="form-group">
                            <label for="cfaculty">Choose Faculty <span style="color: red;">*</span></label>
                            <select class="form-control" id="cfaculty" name="cfaculty" required>
                                <option value="">Select Faculty</option>
                                <option value="faculty1">Faculty 1</option>
                                <option value="faculty2">Faculty 2</option>
                            </select>
                        </div>
                        <br>
                        <!-- Type of Problem -->
                        <div class="form-group">
                            <label for="type_of_problem">Type of Problem <span style="color: red;">*</span></label>
                            <select class="form-control" id="type_of_problem" name="type_of_problem" required>
                                <option value="">Select</option>
                                <option value="electrical">Electrical</option>
                                <option value="civil">Civil</option>
                                <option value="it_infra">ITKM</option>
                                <option value="transport">Transport</option>
                                <option value="house_keeping">House Keeping</option>
                            </select>
                        </div>
                        <br>
                        <!-- Block -->
                        <div class="form-group">
                            <label for="block_venue">Block <span style="color: red;">*</span></label>
                            <input type="text" class="form-control" id="block_venue" name="block_venue"
                                placeholder="Eg: RK-206 / Transport: Bus No" required>
                        </div>
                        <br>
                        <!-- Venue -->
                        <div class="form-group">
                            <label for="venue_name">Venue <span style="color: red;">*</span></label>
                            <select class="form-control" id="venue_name" name="venue_name" required>
                                <option value="">Select Venue</option>
                                <option value="class">Class Room</option>
                                <option value="department">Department</option>
                                <option value="lab">Lab</option>
                                <option value="staff_room">Staff Room</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <br>
                        <!-- Problem Description -->
                        <div class="form-group">
                            <label for="problem_description">Problem Description <span
                                    style="color: red;">*</span></label>
                            <textarea class="form-control" id="problem_description" name="problem_description"
                                placeholder="Enter problem description" rows="3" required></textarea>
                        </div>
                        <br>
                        <!-- Item Number -->
                        <div class="form-group">
                            <label for="itemno">Item Number (for electrical/itkm work)</label>
                            <input type="text" class="form-control" id="itemno" name="itemno" placeholder="Eg: AC-102">
                        </div>
                        <br>
                        <!-- Image Upload -->
                        <div class="form-group">
                            <label for="images">Image (less than 2MB) <span style="color: red;">*</span></label>
                            <input type="file" class="form-control" id="images" name="images" accept="image/*" required>
                            <small class="form-text text-muted">No file chosen</small>
                        </div>
                        <br>

                        <!-- Submit Button -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
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
    <!-- Feedback Modal Starts -->
    <div class="modal fade" id="feedback_modal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="feedbackModalLabel">
                        <i class="fas fa-comments"></i>&nbsp; Feedback Form
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <form id="add_feedback">
                        <input type="hidden" name="id" id="feedback_id">

                        <!-- Satisfaction Dropdown -->
                        <div class="mb-3">
                            <label for="satisfaction" class="form-label">Satisfaction</label>
                            <select name="satisfaction" id="satisfaction" class="form-select" required>
                                <option value="" disabled selected>Select an option</option>
                                <option value="Satisfied">Satisfied</option>
                                <option value="Not Satisfied">Reassign</option>
                            </select>
                        </div>

                        <!-- Star Rating -->
                        <div class="stars" id="star-rating">
                            <h5>Give Rating:</h5>
                            <span class="star" data-value="1">&#9733;</span>
                            <span class="star" data-value="2">&#9733;</span>
                            <span class="star" data-value="3">&#9733;</span>
                            <span class="star" data-value="4">&#9733;</span>
                            <span class="star" data-value="5">&#9733;</span>
                        </div>
                        <p id="rating-value">Rating: <span id="ratevalue">0</span></p>

                        <!-- Feedback Textarea -->
                        <div class="mb-3">
                            <label for="feedback" class="form-label">Feedback</label>
                            <textarea name="feedback" id="feedback" class="form-control"
                                placeholder="Enter Feedback"></textarea>
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
    </div>

    <!-- Feedback Modal Ends -->

    <script src="assets/script/script.js"></script>
    <script src="assets/script/bootstrap.js"></script>
    <script>
    // Handle star rating clicks
    document.querySelectorAll('#star-rating .star').forEach(star => {
        star.addEventListener('click', function() {
            const value = this.getAttribute('data-value');
            document.getElementById('ratevalue').textContent = value;

            // Reset all stars
            document.querySelectorAll('#star-rating .star').forEach(s => s.classList.remove('active'));

            // Highlight selected stars
            for (let i = 0; i < value; i++) {
                document.querySelectorAll('#star-rating .star')[i].classList.add('active');
            }
        });
    });
    // Table 1
    $(document).ready(function() {
        $('#rc_table').DataTable({
            responsive: true,
            paging: true,
            searching: true,
            ordering: true,
            lengthChange: true,
            pageLength: 10,
            columnDefs: [{
                    targets: [6],
                    orderable: false
                } // Disable sorting for the Image column
            ]
        });
    });
    $(document).ready(function() {
        $('#wip_table').DataTable({
            responsive: true,
            paging: true,
            searching: true,
            ordering: true,
            lengthChange: true,
            pageLength: 10,
            columnDefs: [{
                    targets: [6, 7],
                    orderable: false
                } // Disable sorting for Worker Detail and Feedback columns
            ]
        });
    });
    $(document).ready(function() {
        $('#cw_table').DataTable({
            responsive: true,
            paging: true,
            searching: true,
            ordering: true,
            lengthChange: true,
            pageLength: 10,
            columnDefs: [{
                    targets: [6],
                    orderable: false
                } // Disable sorting for Feedback column
            ]
        });
    });
    $(document).ready(function() {
        $('#r_table').DataTable({
            responsive: true,
            paging: true,
            searching: true,
            ordering: true,
            lengthChange: true,
            pageLength: 10,
            columnDefs: [{
                    targets: [6],
                    orderable: false
                } // Disable sorting for Reason column
            ]
        });
    });
    $(document).ready(function() {
        $('#rw_table').DataTable({
            responsive: true,
            paging: true,
            searching: true,
            ordering: true,
            lengthChange: true,
            pageLength: 10,
            columnDefs: [{
                    targets: [6, 7],
                    orderable: false
                } // Disable sorting for Worker Details and Feedback columns
            ]
        });
    });
    </script>


</body>

</html>