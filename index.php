<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturing DBMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .dashboard-card {
            transition: transform 0.2s;
            cursor: pointer;
        }
        .dashboard-card:hover {
            transform: translateY(-5px);
        }
        .sidebar {
            min-height: 100vh;
            background-color: #343a40;
        }
        .nav-link {
            color: #fff;
        }
        .nav-link:hover {
            background-color: #495057;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-2 sidebar p-3">
                <h3 class="text-white mb-4">Manufacturing DBMS</h3>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="fas fa-home me-2"></i>Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-industry me-2"></i>Production</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-boxes me-2"></i>Inventory</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-tasks me-2"></i>Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-users me-2"></i>Employees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-chart-line me-2"></i>Reports</a>
                    </li>
                </ul>
            </div>

            <!-- Main Content -->
            <div class="col-md-10 p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h2>Dashboard</h2>
                    <div class="user-info">
                        <span class="me-3">Welcome, Admin</span>
                        <a href="#" class="btn btn-outline-danger btn-sm">Logout</a>
                    </div>
                </div>

                <!-- Quick Stats -->
                <div class="row mb-4">
                    <div class="col-md-3">
                        <div class="card bg-primary text-white">
                            <div class="card-body">
                                <h5 class="card-title">Active Orders</h5>
                                <h2 class="card-text">24</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-success text-white">
                            <div class="card-body">
                                <h5 class="card-title">Production Rate</h5>
                                <h2 class="card-text">85%</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-warning text-white">
                            <div class="card-body">
                                <h5 class="card-title">Inventory Items</h5>
                                <h2 class="card-text">1,234</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card bg-info text-white">
                            <div class="card-body">
                                <h5 class="card-title">Employees</h5>
                                <h2 class="card-text">45</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Quick Actions -->
                <h4 class="mb-3">Quick Actions</h4>
                <div class="row">
                    <div class="col-md-3 mb-3">
                        <div class="card dashboard-card">
                            <div class="card-body text-center">
                                <i class="fas fa-plus-circle fa-3x mb-3 text-primary"></i>
                                <h5>New Order</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card dashboard-card">
                            <div class="card-body text-center">
                                <i class="fas fa-box fa-3x mb-3 text-success"></i>
                                <h5>Add Inventory</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card dashboard-card">
                            <div class="card-body text-center">
                                <i class="fas fa-user-plus fa-3x mb-3 text-info"></i>
                                <h5>New Employee</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-3">
                        <div class="card dashboard-card">
                            <div class="card-body text-center">
                                <i class="fas fa-file-alt fa-3x mb-3 text-warning"></i>
                                <h5>Generate Report</h5>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity -->
                <h4 class="mb-3 mt-4">Recent Activity</h4>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Activity</th>
                                        <th>User</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2024-03-20</td>
                                        <td>New order #1234 created</td>
                                        <td>John Doe</td>
                                        <td><span class="badge bg-success">Completed</span></td>
                                    </tr>
                                    <tr>
                                        <td>2024-03-20</td>
                                        <td>Inventory update</td>
                                        <td>Jane Smith</td>
                                        <td><span class="badge bg-warning">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>2024-03-19</td>
                                        <td>Production schedule updated</td>
                                        <td>Mike Johnson</td>
                                        <td><span class="badge bg-info">In Progress</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
