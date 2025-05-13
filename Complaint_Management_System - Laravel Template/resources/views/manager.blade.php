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
            <a href="{{route('manager')}}" class="menu-item active">
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
                        <img src="" alt="User">
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
                    <li class="breadcrumb-item active" aria-current="page">Manager</li>
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
                                <i class="fas fa-user"></i>Dashboard
                            </button>
                        </li>
                        <!-- Tab 2: Complaint Raised -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="edit-bus-tab" data-bs-toggle="tab"
                                data-bs-target="#complaint-raised" type="button" role="tab">
                                <i class="fas fa-exclamation-circle tab-icon"></i>Raised ()
                            </button>
                        </li>

                        <!-- Tab 3: Principal Approval -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="schedule-bus-tab" data-bs-toggle="tab"
                                data-bs-target="#principal-approval" type="button" role="tab">
                                <i class="fas fa-user-check tab-icon"></i>Principal ()
                            </button>
                        </li>

                        <!-- Tab 4: Assigned -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="route-bus-tab" data-bs-toggle="tab" data-bs-target="#assigned"
                                type="button" role="tab">
                                <i class="fas fa-tasks tab-icon"></i>Assigned ()
                            </button>
                        </li>

                        <!-- Tab 5: Response -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="maintenance-bus-tab" data-bs-toggle="tab"
                                data-bs-target="#response" type="button" role="tab">
                                <i class="fas fa-reply tab-icon"></i>Response ()
                            </button>
                        </li>

                        <!-- Tab 6: Reassigned -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="history-bus-tab" data-bs-toggle="tab"
                                data-bs-target="#reassigned" type="button" role="tab">
                                <i class="fas fa-exchange-alt tab-icon"></i>Reassigned ()
                            </button>
                        </li>

                        <!-- Tab 7: Completed Works -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="update-bus-tab" data-bs-toggle="tab"
                                data-bs-target="#completed-works" type="button" role="tab">
                                <i class="fas fa-check-circle tab-icon"></i>Completed
                            </button>
                        </li>

                        <!-- Tab 8: Work Record -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="fleet-management-bus-tab" data-bs-toggle="tab"
                                data-bs-target="#work-record" type="button" role="tab">
                                <i class="fas fa-clipboard-list tab-icon"></i>Record
                            </button>
                        </li>

                        <!-- Tab 9: Workers Record -->
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="report-bus-tab" data-bs-toggle="tab"
                                data-bs-target="#workers-record" type="button" role="tab">
                                <i class="fas fa-users tab-icon"></i>Workers
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
                                            <h4 class="mb-0">Manager Dashboard</h4>
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
                        <div class="tab-pane fade" id="complaint-raised" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h4 class="mb-0">Complaint Raised</h4>
                                            <div class="dropdown">
                                                <button class="btn btn-primary dropdown-toggle" type="button"
                                                    id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="fas fa-user-plus"></i>&nbsp;&nbsp;Manage
                                                </button>
                                                <ul class="dropdown-menu" aria-labelledby="userDropdown">
                                                    <li>
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                            data-bs-target="#manageusermodal">
                                                            <i
                                                                class="fas fa-user-plus text-secondary"></i>&nbsp;&nbsp;Manage
                                                            User
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="#" data-bs-toggle="modal"
                                                            data-bs-target="#manageworkermodal">
                                                            <i class="fas fa-hard-hat"
                                                                style="color: #FF9800;"></i>&nbsp;&nbsp;Manage Worker
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="complaintTable"
                                                    class="table table-striped table-bordered custom-table">
                                                    <thead class="table-class">
                                                        <tr>
                                                            <th class="text-center"><b>S.No</b></th>
                                                            <th class="text-center"><b>Date</b></th>
                                                            <th class="text-center"><b>Department/Venue</b></th>
                                                            <th class="text-center"><b>Complaint</b></th>
                                                            <th class="text-center"><b>Image</b></th>
                                                            <th class="text-center"><b>Action</b></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">2025-01-01</td>
                                                            <td class="text-center">Semester</td>
                                                            <td class="text-center">
                                                                <button type="button" class="btn btn-info btn-sm"
                                                                    title="Complaint Detail" data-bs-toggle="modal"
                                                                    data-bs-target="#complaintDetailsModal">
                                                                    <i class="fas fa-eye"></i>
                                                                </button>
                                                            </td>
                                                            <td class="text-center">
                                                                <button type="button" class="btn btn-info btn-sm"
                                                                    title="Complaint Image" data-bs-toggle="modal"
                                                                    data-bs-target="#imageModal">
                                                                    <i class="fas fa-image"></i>
                                                                </button>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="d-flex gap-2 justify-content-center">
                                                                    <button type="button" class="btn btn-primary btn-sm"
                                                                        title="Principal Approval">
                                                                        <i class="fas fa-eye"></i>
                                                                    </button>
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
                        <div class="tab-pane fade" id="principal-approval" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h4 class="mb-0">Principal Approval</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="principalApprovalTable"
                                                    class="table table-striped table-bordered custom-table">
                                                    <thead class="table-class">
                                                        <tr>
                                                            <th class="text-center"><b>S.No</b></th>
                                                            <th class="text-center"><b>Date</b></th>
                                                            <th class="text-center"><b>Venue</b></th>
                                                            <th class="text-center"><b>Complaint</b></th>
                                                            <th class="text-center"><b>Picture</b></th>
                                                            <th class="text-center"><b>Action</b></th>
                                                            <th class="text-center"><b>Status</b></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">2025-01-09</td>
                                                            <td class="text-center">Semester</td>
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
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="d-flex gap-2 justify-content-center">
                                                                    <button type="button" class="btn btn-primary btn-sm"
                                                                        title="Complaint Image">
                                                                        <i class="fas fa-eye"></i>
                                                                    </button>
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
                                                            <td class="text-center">Pending</td>
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
                                            <h4 class="mb-0">Manager Assigned</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="assignedTable"
                                                    class="table table-striped table-bordered custom-table">
                                                    <thead class="table-class">
                                                        <tr>
                                                            <th class="text-center"><b>S.No</b></th>
                                                            <th class="text-center"><b>Complaint</b></th>
                                                            <th class="text-center"><b>Worker</b></th>
                                                            <th class="text-center"><b>Deadline</b></th>
                                                            <th class="text-center"><b>Picture</b></th>
                                                            <th class="text-center"><b>Status</b></th>
                                                            <th class="text-center"><b>Principal Query</b></th>
                                                            <th class="text-center"><b>Your Reply</b></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">
                                                                <button type="button" class="btn btn-info btn-sm"
                                                                    title="Complaint Detail" data-bs-toggle="modal"
                                                                    data-bs-target="#complaintDetailsModal">
                                                                    <i class="fas fa-eye"></i>
                                                                </button>
                                                            </td>
                                                            <td class="worker_detail">
                                                                <a href="tel:+918825756388" title="Call Worker"
                                                                    class="worker-contact">
                                                                    <i class="fas fa-phone"></i> 8825756388
                                                                </a>
                                                            </td>
                                                            <td class="text-center">2025-01-15</td>
                                                            <td class="text-center">
                                                                <!-- Button for viewing Before Image -->
                                                                <button type="button" class="btn btn-info btn-sm"
                                                                    title="before_image" data-bs-toggle="modal"
                                                                    data-bs-target="#imageModal">
                                                                    <i class="fas fa-image"></i>
                                                                </button>
                                                                <!-- Button for viewing After Image -->
                                                                <!-- <button type="button" class="btn btn-info btn-sm"
                                                                    title="View After Image">
                                                                    <i class="fas fa-images"></i>
                                                                </button> -->
                                                            </td>
                                                            <td class="text-center">In Progress</td>
                                                            <td class="text-center">Is it fixed?</td>
                                                            <td class="text-center text-warning">Work in progress</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="response" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="mb-0">Worker Response</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="workerResponseTable"
                                                    class="table table-striped table-bordered custom-table">
                                                    <thead class="table-class">
                                                        <tr>
                                                            <th class="text-center"><b>S.No</b></th>
                                                            <th class="text-center"><b>Complaint</b></th>
                                                            <th class="text-center"><b>Worker</b></th>
                                                            <th class="text-center"><b>Completion Date</b></th>
                                                            <th class="text-center"><b>Picture</b></th>
                                                            <th class="text-center"><b>Faculty Feedback</b></th>
                                                            <th class="text-center"><b>Status</b></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center"><button type="button"
                                                                    class="btn btn-info btn-sm" title="Complaint Detail"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#complaintDetailsModal">
                                                                    <i class="fas fa-eye"></i>
                                                                </button></td>
                                                            <td class="worker_detail">
                                                                <a href="tel:+918825756388" title="Call Worker"
                                                                    class="worker-contact">
                                                                    <i class="fas fa-phone"></i> 8825756388
                                                                </a>
                                                            </td>
                                                            <td class="text-center">2025-01-10</td>
                                                            <td class="text-center">
                                                                <button type="button" class="btn btn-info btn-sm"
                                                                    title="before_image" data-bs-toggle="modal"
                                                                    data-bs-target="#imageModal">
                                                                    <i class="fas fa-image"></i>
                                                                </button>
                                                            </td>
                                                            <td class="text-center">Good Work</td>
                                                            <td class="text-center">Completed</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="reassigned" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="mb-0">Manager Reassigned</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="reassignedTable"
                                                    class="table table-striped table-bordered custom-table">
                                                    <thead class="table-class">
                                                        <tr>
                                                            <th class="text-center"><b>S.No</b></th>
                                                            <th class="text-center"><b>Complaint</b></th>
                                                            <th class="text-center"><b>Worker</b></th>
                                                            <th class="text-center"><b>Date of Reassigned</b></th>
                                                            <th class="text-center"><b>Deadline</b></th>
                                                            <th class="text-center"><b>Picture</b></th>
                                                            <th class="text-center"><b>Faculty Feedback</b></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center"><button type="button"
                                                                    class="btn btn-info btn-sm" title="Complaint Detail"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#complaintDetailsModal">
                                                                    <i class="fas fa-eye"></i>
                                                                </button></td>
                                                            <td class="worker_detail">
                                                                <a href="tel:+918825756388" title="Call Worker"
                                                                    class="worker-contact">
                                                                    <i class="fas fa-phone"></i> 8825756388
                                                                </a>
                                                            </td>
                                                            <td class="text-center">2025-01-05</td>
                                                            <td class="text-center">2025-01-15</td>
                                                            <td class="text-center">
                                                                <button type="button" class="btn btn-info btn-sm"
                                                                    title="before_image" data-bs-toggle="modal"
                                                                    data-bs-target="#imageModal">
                                                                    <i class="fas fa-image"></i>
                                                                </button>
                                                            </td>
                                                            <td class="text-center">Needs more work</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="completed-works" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h4 class="mb-0">Work's Completed</h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="completedWorksTable"
                                                    class="table table-striped table-bordered custom-table">
                                                    <thead class="table-class">
                                                        <tr>
                                                            <th class="text-center"><b>S.No</b></th>
                                                            <th class="text-center"><b>Complaint</b></th>
                                                            <th class="text-center"><b>Worker</b></th>
                                                            <th class="text-center"><b>Date of Completion</b></th>
                                                            <th class="text-center"><b>Picture</b></th>
                                                            <th class="text-center"><b>Faculty Feedback</b></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center"><button type="button"
                                                                    class="btn btn-info btn-sm" title="Complaint Detail"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#complaintDetailsModal">
                                                                    <i class="fas fa-eye"></i>
                                                                </button></td>
                                                            <td class="worker_detail">
                                                                <a href="tel:+918825756388" title="Call Worker"
                                                                    class="worker-contact">
                                                                    <i class="fas fa-phone"></i> 8825756388
                                                                </a>
                                                            </td>
                                                            <td class="text-center">2025-01-08</td>
                                                            <td class="text-center">
                                                                <button type="button" class="btn btn-info btn-sm"
                                                                    title="View Picture">
                                                                    <i class="fas fa-file-alt"></i>
                                                                </button>
                                                            </td>
                                                            <td class="text-center">Satisfactory</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="work-record" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h4 class="mb-0">Work Completed Records</h4>
                                            <button type="button" class="btn btn-success" id="downloadWorkersRecord">
                                                <i class="fas fa-file-excel"></i>&nbsp;&nbsp;Download Work Record
                                            </button>
                                        </div>

                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="work_completed_table"
                                                    class="table table-striped table-bordered custom-table">
                                                    <thead class="table-class text-center">
                                                        <tr>
                                                            <th class="text-center"><b>S.No</b></th>
                                                            <th class="text-center"><b>Work ID</b></th>
                                                            <th class="text-center"><b>Venue Details</b></th>
                                                            <th class="text-center"><b>Completed Details</b></th>
                                                            <th class="text-center"><b>Item No</b></th>
                                                            <th class="text-center"><b>Amount Spent</b></th>
                                                            <th class="text-center"><b>Faculty Feedback</b></th>
                                                            <th class="text-center"><b>Manager Feedback</b></th>
                                                            <th class="text-center"><b>Completed On</b></th>
                                                            <th class="text-center"><b>Average Rating</b></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">WRK-001</td>
                                                            <td class="text-center">Hall A</td>
                                                            <td class="text-center">Electrical Fixes</td>
                                                            <td class="text-center">5</td>
                                                            <td class="text-center">$500</td>
                                                            <td class="text-center">Excellent</td>
                                                            <td class="text-center">Good</td>
                                                            <td class="text-center">2025-01-08</td>
                                                            <td class="text-center">4.5</td>
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
                        <div class="tab-pane fade" id="workers-record" role="tabpanel">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-header d-flex justify-content-between align-items-center">
                                            <h4 class="mb-0">Worker's Records</h4>
                                            <button type="button" class="btn btn-success" id="downloadWorkersRecord">
                                                <i class="fas fa-file-excel"></i>&nbsp;&nbsp;Download Workers Record
                                            </button>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="workers_table"
                                                    class="table table-striped table-bordered custom-table">
                                                    <thead class="table-class text-center">
                                                        <tr>
                                                            <th class="text-center"><b>S.No</b></th>
                                                            <th class="text-center"><b>Work ID</b></th>
                                                            <th class="text-center"><b>Worker Name</b></th>
                                                            <th class="text-center"><b>Department</b></th>
                                                            <th class="text-center"><b>Completed Works</b></th>
                                                            <th class="text-center"><b>Faculty Rating</b></th>
                                                            <th class="text-center"><b>Manager Rating</b></th>
                                                            <th class="text-center"><b>Average Rating</b></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">1</td>
                                                            <td class="text-center">WR-001</td>
                                                            <td class="text-center">John Doe</td>
                                                            <td class="text-center">Maintenance</td>
                                                            <td class="text-center">15</td>
                                                            <td class="text-center">4.5</td>
                                                            <td class="text-center">4.7</td>
                                                            <td class="text-center">4.6</td>
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
        <div class="footer-copyright" style="text-align: center;">
            <p>Copyright © 2024 Designed by <span style="background: linear-gradient(to right, #cb2d3e, #ef473a);"
                    -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip:
                    text;">Technology Innovation Hub - MKCE. </span>All rights reserved.</p>
        </div>
    </footer>
    <!-- Models -->
    <!-- View Complaint Modal -->
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
    <!-- Before Image Modal -->
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
    <!-- Manage User Modal -->
    <div class="modal fade" id="manageusermodal" tabindex="-1" aria-labelledby="manageusermodalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title fw-bold" id="manageusermodalLabel">
                        📋 Manage Users
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="mb-0">Users</h4>
                                    <button type="button" class="btn btn-primary" id="addUserButton">
                                        <i class="ti-user me-2"></i>Add User
                                    </button>
                                    <!-- <button type="button" class="btn btn-success" id="downloadWorkersRecord">
                                                <i class="fas fa-file-excel"></i>&nbsp;&nbsp;Download Work Record
                                            </button> -->
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="user_display" class="table table-striped table-bordered">
                                            <thead class="table-class">
                                                <tr>
                                                    <th class="text-center">S.No</th>
                                                    <th class="text-center">User Name</th>
                                                    <th class="text-center">User ID</th>
                                                    <th class="text-center">Contact</th>
                                                    <th class="text-center">Mail ID</th>
                                                    <th class="text-center">Department</th>
                                                    <th class="text-center">Role</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Existing rows here -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Manage Worker Modal -->
    <div class="modal fade" id="manageworkermodal" tabindex="-1" aria-labelledby="manageworkermodalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title fw-bold" id="manageworkermodalLabel">
                        📋 Manage Workers
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="mb-0">Users</h4>
                                    <button type="button" class="btn btn-primary" id="addWorkerButton">
                                        <i class="ti-user me-2"></i>Add Worker
                                    </button>
                                    <!-- <button type="button" class="btn btn-success" id="downloadWorkersRecord">
                                                <i class="fas fa-file-excel"></i>&nbsp;&nbsp;Download Work Record
                                            </button> -->
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="worker_display" class="table table-striped table-bordered">
                                            <thead class="table-class">
                                                <tr>
                                                    <th class="text-center">S.No</th>
                                                    <th class="text-center">Name</th>
                                                    <th class="text-center">Department</th>
                                                    <th class="text-center">Role</th>
                                                    <th class="text-center">Gender</th>
                                                    <th class="text-center">Contact</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Existing rows here -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Principal Approve Modal -->
    <div class="modal fade" id="principalModal" tabindex="-1" aria-labelledby="principalModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="principalModalLabel">Need Approval</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <form id="principal_Form">
                        <input type="hidden" name="id" id="complaint_id89">
                        <div class="mb-3">
                            <label for="approvalReason" class="form-label">Reason for Approval</label>
                            <textarea class="form-control" name="reason" id="approvalReason" rows="3"
                                placeholder="Type the reason here..."></textarea>
                        </div>
                    </form>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger" form="principal_Form">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Principal Query Modal -->
    <div class="modal fade" id="principalQueryModal" tabindex="-1" aria-labelledby="principalQueryLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="principalQueryLabel">Principal's Query</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <!-- Question from comment_query -->
                    <p id="commentQueryText"></p>

                    <!-- Input for reply -->
                    <div class="mb-3">
                        <label for="commentReply" class="form-label">Your Reply</label>
                        <input type="text" class="form-control" id="commentReply" placeholder="Enter your reply">
                    </div>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="submitReply">Submit Reply</button>
                </div>
            </div>
        </div>
    </div>
    <!-- After Image Modal -->
    <div class="modal fade" id="afterImageModal" tabindex="-1" aria-labelledby="afterImageModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="afterImageModalLabel">After Picture</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body text-center">
                    <img id="modalImage2" src="" alt="After" class="img-fluid">
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Faculty Feedback Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Faculty Feedback</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <h5>Rating: </h5>
                    <div class="stars" id="star-rating1">
                        <span data-value="1">&#9733;</span>
                        <span data-value="2">&#9733;</span>
                        <span data-value="3">&#9733;</span>
                        <span data-value="4">&#9733;</span>
                        <span data-value="5">&#9733;</span>
                        <br>
                    </div>
                    <h5>Feedback: </h5>
                    <textarea name="ffeed" id="ffeed" readonly class="form-control" rows="5"></textarea>
                    <input type="hidden" id="complaintfeed_id" value="">
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-bs-dismiss="modal" data-bs-toggle="modal"
                        data-bs-target="#DoneModal">Done</button>
                    <button type="button" class="btn btn-danger reass">Reassign</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Manager Feedback Modal for complete work -->
    <div class="modal fade" id="DoneModal" tabindex="-1" aria-labelledby="DoneModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="DoneModalLabel">Need Approval</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <form id="manager_feedback">
                        <div class="stars" id="star-rating">
                            <h5>Give Rating:</h5>
                            <span data-value="1">&#9733;</span>
                            <span data-value="2">&#9733;</span>
                            <span data-value="3">&#9733;</span>
                            <span data-value="4">&#9733;</span>
                            <span data-value="5">&#9733;</span>
                        </div>
                        <p id="rating-value">Rating: <span id="ratevalue">0</span></p>

                        <div class="mb-3">
                            <label for="feedback" class="form-label">Feedback</label>
                            <textarea name="feedback12" id="mfeedback" class="form-control" placeholder="Enter Feedback"
                                rows="5" required></textarea>
                        </div>
                    </form>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger" form="manager_feedback">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Reassign Deadline Modal -->
    <div class="modal fade" id="datePickerModal" tabindex="-1" aria-labelledby="datePickerModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="datePickerModalLabel">Set Reassign Deadline</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <label for="reassign_deadline" class="form-label">Reassign Deadline Date:</label>
                    <input type="date" id="reassign_deadline" name="reassign_deadline" class="form-control" required>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="saveDeadline">Set Deadline</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Principal Reject Reason Modal -->
    <div class="modal fade" id="princerejectres" tabindex="-1" aria-labelledby="princerejectresLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h5 class="modal-title" id="princerejectresLabel">Rejected Reason</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <textarea name="feedback" id="feedback" class="form-control" readonly rows="5"></textarea>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Worker Detail Modal -->
    <div class="modal fade" id="workerdetailmodal" tabindex="-1" aria-labelledby="workerdetailmodalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="workerdetailmodalLabel">Worker Mobile Number</h5>
                    <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <div class="d-flex justify-content-between align-items-center p-3 bg-light rounded shadow-sm">
                        <div>
                            <span id="worker_mobile" class="fw-bold fs-4 text-dark">9629613708</span>
                        </div>
                        <div>
                            <a href="#" id="callWorkerBtn" class="btn btn-success rounded-pill px-4">Call Worker</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Extend Deadline Date Modal -->
    <div class="modal fade" id="extend_date" tabindex="-1" aria-labelledby="extend_dateLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="extend_dateLabel">Dead-line Extend</h5>
                    <button type="button" class="btn-close text-white" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <form id="extenddead">
                        <input type="hidden" name="id" id="deadline_id">
                        <label for="extend_deadline" class="form-label">Extend Deadline Date:</label>
                        <input type="date" id="extend_deadline" name="extend_deadline" class="form-control" required>
                        <br><br>
                        <label for="extendReason" class="form-label">Reason for Extend:</label>
                        <textarea class="form-control" name="reason" id="extendReason" rows="3"
                            placeholder="Type the reason here..."></textarea>
                    </form>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" form="extenddead">Set Deadline</button>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/script/bootstrap.js"></script>
    <script src="assets/script/script.js"></script>

    <!-- Initialize DataTable -->
    <script>
    $(document).ready(function() {
        // Initialize all tables with common settings
        const tables = [
            '#complaintTable',
            '#principalApprovalTable',
            '#assignedTable',
            '#workerResponseTable',
            '#reassignedTable',
            '#completedWorksTable',
            '#work_completed_table',
            '#workers_table',
            '#user_display',
            '#worker_display'
        ];

        tables.forEach(function(tableId) {
            $(tableId).DataTable({
                paging: true,
                searching: true,
                ordering: true,
                lengthChange: true,
                pageLength: 10,
                responsive: true,
                dom: 'lBfrtip', // 'l' enables the "Show entries" dropdown, 'i' shows the info text
                buttons: tableId === '#work_completed_table' || tableId === '#workers_table' ?
            [{
                    extend: 'csvHtml5',
                    text: tableId === '#work_completed_table' ?
                        '<i class="fas fa-file-excel"></i> Download Work Record' :
                        '<i class="fas fa-file-excel"></i> Download Workers Record',
                    exportOptions: {
                        columns: ':visible'
                    }
                }] : []
            });
        });

        // Download Work Completed Record
        $('#downloadWorkCompletedRecord').click(function() {
            downloadCSV('#work_completed_table', [
                'S.No', 'Work ID', 'Venue Details', 'Completed Details', 'Item No',
                'Amount Spent', 'Faculty Feedback', 'Manager Feedback', 'Completed On',
                'Average Rating'
            ], 'Work_Completed_Record.csv');
        });

        // Download Workers Record
        $('#downloadWorkersRecord').click(function() {
            downloadCSV('#workers_table', [
                'S.No', 'Work ID', 'Worker Name', 'Department', 'Completed Works',
                'Faculty Rating', 'Manager Rating', 'Average Rating'
            ], 'Workers_Record.csv');
        });

        // Function to download CSV
        function downloadCSV(tableId, headers, filename) {
            var table = $(tableId).DataTable();
            var data = [headers];

            table.rows().every(function() {
                var rowData = this.data();
                data.push(rowData);
            });

            var csv = data.map(row => row.join(',')).join('\n');
            var blob = new Blob([csv], {
                type: 'text/csv;charset=utf-8;'
            });
            var link = document.createElement('a');
            link.href = URL.createObjectURL(blob);
            link.download = filename;
            link.click();
        }
    });
    </script>
    <script>
    document.addEventListener("DOMContentLoaded", function() {
        // Add event listeners for the "Add User" and "Add Worker" buttons
        document.getElementById("addUserButton").addEventListener("click", function() {
            addRow("user_display", "saveUser", "deleteUser");
        });
        document.getElementById("addWorkerButton").addEventListener("click", function() {
            addRow("worker_display", "saveWorker", "deleteWorker");
        });

        // Function to add a new row to the specified table
        function addRow(tableId, saveClass, deleteClass) {
            const tableBody = document.querySelector(`#${tableId} tbody`);
            const rowCount = tableBody.rows.length;
            const newRow = document.createElement("tr");

            // For User Table
            if (tableId === "user_display") {
                newRow.innerHTML = `
                    <td class="text-center">${rowCount + 1}</td>
                    <td class="text-center"><input type="text" class="form-control" placeholder="Enter User Name"></td>
                    <td class="text-center"><input type="text" class="form-control" placeholder="Enter User ID"></td>
                    <td class="text-center"><input type="text" class="form-control" placeholder="Enter Contact"></td>
                    <td class="text-center"><input type="email" class="form-control" placeholder="Enter Mail ID"></td>
                    <td class="text-center">
                        <select class="form-control">
                            <option value="">Select Department</option>
                            <option value="Freshman Engineering">Freshman Engineering</option>
                            <option value="Artificial Intelligence and Data Science">Artificial Intelligence and Data Science</option>
                            <option value="Artificial Intelligence and Machine Learning">Artificial Intelligence and Machine Learning</option>
                            <option value="Civil Engineering">Civil Engineering</option>
                            <option value="Computer Science and Business Systems">Computer Science and Business Systems</option>
                            <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                            <option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
                            <option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
                            <option value="Information Technology">Information Technology</option>
                            <option value="Master of Business Administration">Master of Business Administration</option>
                            <option value="Master of Computer Applications">Master of Computer Applications </option>
                            <option value="Mechanical Engineering">Mechanical Engineering</option>
                        </select>
                    </td>
                    <td class="text-center">
                        <select class="form-control">
                            <option value="">Select Role</option>
                            <option value="student">Student</option>
                            <option value="infra">Infra</option>
                        </select>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-success ${saveClass} me-2">Save</button>
                        <button type="button" class="btn btn-danger ${deleteClass}">Delete</button>
                    </td>
                `;
            }
            // For Worker Table
            else if (tableId === "worker_display") {
                newRow.innerHTML = `
                    <td class="text-center">${rowCount + 1}</td>
                    <td class="text-center"><input type="text" class="form-control" placeholder="Enter Name"></td>
                    <td class="text-center">
                        <select class="form-control">
                            <option value="">Select Department</option>
                            <option value="civil">Civil</option>
                            <option value="electrical">Electrical</option>
                            <option value="itkm">ITKM</option>
                            <option value="transport">Transport</option>
                            <option value="housekeeping">House Keeping</option>
                        </select>
                    </td>
                    <td class="text-center">
                        <select class="form-control">
                            <option value="">Select Role</option>
                            <option value="thala">Head</option>
                            <option value="kooli">Worker</option>
                        </select>
                    </td>
                    <td class="text-center">
                        <select class="form-control">
                            <option value="">Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="tg">Transgender</option>
                            <option value="rnt">Rather not to Say</option>
                        </select>
                    </td>
                    <td class="text-center"><input type="text" class="form-control" placeholder="Enter Contact"></td>
                    <td class="text-center">
                        <button type="button" class="btn btn-success ${saveClass} me-2">Save</button>
                        <button type="button" class="btn btn-danger ${deleteClass}">Delete</button>
                    </td>
                `;
            }

            // Append the new row to the table body
            tableBody.appendChild(newRow);

            // Event listener for the Save button
            newRow.querySelector(`.${saveClass}`).addEventListener("click", function() {
                const inputs = newRow.querySelectorAll("input, select");
                let data = [];
                inputs.forEach(input => {
                    data.push(input.value);
                });

                // Check if all input fields are filled
                if (data.every(value => value !== "")) {
                    newRow.innerHTML = `
                        <td class="text-center">${rowCount + 1}</td>
                        <td class="text-center">${data[0]}</td>
                        <td class="text-center">${data[1]}</td>
                        <td class="text-center">${data[2]}</td>
                        <td class="text-center">${data[3]}</td>
                        <td class="text-center">${data[4]}</td>
                        <td class="text-center">
                            <button type="button" class="btn btn-danger ${deleteClass}">Delete</button>
                        </td>
                    `;
                    // Add delete functionality after saving
                    newRow.querySelector(`.${deleteClass}`).addEventListener("click", function() {
                        tableBody.removeChild(newRow);
                        updateRowNumbers(tableBody);
                    });
                } else {
                    alert("All fields are required!");
                }
            });

            // Event listener for the Delete button
            newRow.querySelector(`.${deleteClass}`).addEventListener("click", function() {
                tableBody.removeChild(newRow);
                updateRowNumbers(tableBody);
            });
        }

        // Function to update row serial numbers after a row is deleted
        function updateRowNumbers(tableBody) {
            const rows = tableBody.querySelectorAll("tr");
            rows.forEach((row, index) => {
                const serialNumberCell = row.querySelector("td:first-child");
                serialNumberCell.textContent = index + 1;
            });
        }
    });
    </script>


</body>

</html>