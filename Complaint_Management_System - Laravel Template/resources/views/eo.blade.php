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
            <a href="{{route('eo')}}" class="menu-item active">
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
                    <li class="breadcrumb-item active" aria-current="page">Estate Officer</li>
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
                            <button class="nav-link active" id="delete-bus-tab" data-bs-toggle="tab"
                                data-bs-target="#dashboard" type="button" role="tab">
                                <i class="fas fa-tachometer-alt tab-icon"></i>Dashboard
                            </button>
                        </li>

                        <!-- Tab 2: Pending -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="fleet-management-bus-tab" data-bs-toggle="tab"
                                data-bs-target="#pending" type="button" role="tab">
                                <i class="fas fa-hourglass-half tab-icon"></i>Pending
                            </button>
                        </li>

                        <!-- Tab 3: Approved -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="edit-bus-tab" data-bs-toggle="tab" data-bs-target="#approved"
                                type="button" role="tab">
                                <i class="fas fa-check-circle tab-icon"></i>Approved
                            </button>
                        </li>

                        <!-- Tab 4: Completed -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="route-bus-tab" data-bs-toggle="tab" data-bs-target="#completed"
                                type="button" role="tab">
                                <i class="fas fa-tasks tab-icon"></i>Completed
                            </button>
                        </li>

                        <!-- Tab 5: Rejected -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="settings-bus-tab" data-bs-toggle="tab"
                                data-bs-target="#rejected" type="button" role="tab">
                                <i class="fas fa-times-circle tab-icon"></i>Rejected
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
                        <div class="tab-pane fade show" id="pending" role="tabpanel">
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
                                                <table id="pending_table"
                                                    class="table table-striped table-bordered custom-table">
                                                    <thead class="table-class">
                                                        <tr>
                                                            <th><b>S.No</b></th>
                                                            <th><b>Date</b></th>
                                                            <th><b>Faculty Name</b></th>
                                                            <th><b>Problem Description</b></th>
                                                            <th><b>Image</b></th>
                                                            <th><b>Action</b></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr data-course-id="">
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">01/01/2025</td>
                                                            <td class="text-center">
                                                                <button type="button" class="btn btn-info btn-sm"
                                                                    title="Faculty Details" data-bs-toggle="modal"
                                                                    data-bs-target="#facultymodal">Faculty Name</button>
                                                            </td>
                                                            <td class="text-center">
                                                                <button type="button" class="btn btn-info btn-sm"
                                                                    title="Problem Description" data-bs-toggle="modal"
                                                                    data-bs-target="#probdesc">View</button>
                                                            </td>
                                                            <td class="text-center">
                                                                <button type="button" class="btn btn-info btn-sm"
                                                                    title="before_image" data-bs-toggle="modal"
                                                                    data-bs-target="#imageModal">
                                                                    <i class="fas fa-image"></i>
                                                                </button>
                                                            </td>
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
                        <div class="tab-pane fade" id="approved" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="mb-0">Complaint Management System</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="approval_table"
                                                    class="table table-striped table-bordered custom-table">
                                                    <thead class="table-class">
                                                        <tr>
                                                            <th><b>S.No</b></th>
                                                            <th><b>Date</b></th>
                                                            <th><b>Faculty Name</b></th>
                                                            <th><b>Problem Description</b></th>
                                                            <th><b>Image</b></th>
                                                            <th><b>Status</b></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr data-course-id="">
                                                            <td class="text-center"></td>
                                                            <td class="text-center"></td>
                                                            <td class="text-center">
                                                                <button type="button" class="btn btn-info btn-sm"
                                                                    title="Faculty Details" data-bs-toggle="modal"
                                                                    data-bs-target="#facultymodal">Faculty Name</button>
                                                            </td>
                                                            <td class="text-center">
                                                                <button type="button" class="btn btn-info btn-sm"
                                                                    title="Problem Description" data-bs-toggle="modal"
                                                                    data-bs-target="#probdesc">View</button>
                                                            </td>
                                                            <td class="text-center">
                                                                <button type="button" class="btn btn-info btn-sm"
                                                                    title="Complaint Detail" data-bs-toggle="modal"
                                                                    data-bs-target="#imageModal">
                                                                    <i class="fas fa-image"></i>
                                                                </button>
                                                            </td>
                                                            <td class="text-center"></td>
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
                                                            <th class="text-center"><b>S.No</b></th>
                                                            <th class="text-center"><b>Date</b></th>
                                                            <th class="text-center"><b>Staff Name</b></th>
                                                            <th class="text-center"><b>Problem Description</b></th>
                                                            <th class="text-center"><b>Before Image</b></th>
                                                            <th class="text-center"><b>After Image</b></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr data-course-id="">
                                                            <td class="text-center"></td>
                                                            <td class="text-center"></td>
                                                            <td class="text-center">
                                                                <button type="button" class="btn btn-info btn-sm"
                                                                    title="Faculty Details" data-bs-toggle="modal"
                                                                    data-bs-target="#facultymodal">Faculty Name</button>
                                                            </td>
                                                            <td class="text-center">
                                                                <button type="button" class="btn btn-info btn-sm"
                                                                    title="Problem Description" data-bs-toggle="modal"
                                                                    data-bs-target="#probdesc">View</button>
                                                            </td>
                                                            <td class="text-center">
                                                                <button type="button" class="btn btn-info btn-sm"
                                                                    title="Complaint Detail" data-bs-toggle="modal"
                                                                    data-bs-target="#imageModal">
                                                                    <i class="fas fa-image"></i>
                                                                </button>
                                                            </td>
                                                            <td class="text-center">
                                                                <!-- Button for viewing After Image -->
                                                                <button type="button" class="btn btn-info btn-sm"
                                                                    onclick="" title="View After Image">
                                                                    <i class="fas fa-images"></i>
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
                        <div class="tab-pane fade" id="rejected" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="mb-0">Complaint Management System</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="rejected_table"
                                                    class="table table-striped table-bordered custom-table">
                                                    <thead class="table-class">
                                                        <tr>
                                                            <th><b>S.No</b></th>
                                                            <th><b>Date</b></th>
                                                            <th><b>Staff Name</b></th>
                                                            <th><b>Problem Description</b></th>
                                                            <th><b>Image</b></th>
                                                            <th><b>Reason</b></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr data-course-id="">
                                                            <td class="text-center"></td>
                                                            <td class="text-center"></td>
                                                            <td class="text-center">
                                                                <button type="button" class="btn btn-info btn-sm"
                                                                    title="Faculty Details" data-bs-toggle="modal"
                                                                    data-bs-target="#facultymodal">Faculty Name</button>
                                                            </td>
                                                            <td class="text-center">
                                                                <button type="button" class="btn btn-info btn-sm"
                                                                    title="Problem Description" data-bs-toggle="modal"
                                                                    data-bs-target="#probdesc">View</button>
                                                            </td>
                                                            <td class="text-center">
                                                                <button type="button" class="btn btn-info btn-sm"
                                                                    title="Complaint Detail" data-bs-toggle="modal"
                                                                    data-bs-target="#imageModal">
                                                                    <i class="fas fa-image"></i>
                                                                </button>
                                                            </td>
                                                            <td class="text-center">
                                                                <button type="button" class="btn btn-info btn-sm"
                                                                    title="Complaint Detail" data-bs-toggle="modal"
                                                                    data-bs-target="#problemrejected">
                                                                    <i class="fa-solid fa-clipboard-question"></i>
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
        $('#pending_table, #approval_table, #completed_table, #rejected_table').each(function() {
            $(this).DataTable({
                paging: true,
                searching: true,
                ordering: true,
                lengthChange: true,
                pageLength: 10,
            });
        });
    });
    </script>


</body>

</html>