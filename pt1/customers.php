<?php
ob_start();
?>

<div class="card shadow border-0 border-start border-5 border-success mb-4">
    <div class="card-body">
        <h2 class="mb-1">Customers</h2>
        <p class="text-muted mb-0">Manage customer information</p>
    </div>
</div>

<div class="card shadow-sm mb-4">
    <div class="card-body">
        <div class="row g-0 align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-person-plus-fill text-primary me-2"></i>
                    Customer Form
                </h5>
                <small class="text-muted">Fill in the details of a customer</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-primary">* Required fields</span>
            </div>
        </div>
         
        <hr>

        <form action="" method="post" class="needs-validation" novalidate>
            <div class="row g-3">
                <div class="col-md-3">
                    <label for="pid" class="form-label">Customer ID <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="customer_num" id="customer_num" type="text" class="form-control" placeholder="Enter Customer ID" value="" required>
                </div>
                <div class="col-md-3">
                    <label for="name" class="form-label">Name <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="customer_name" id="name" type="text" class="form-control" placeholder="Enter Customer Name" value="" required>
                </div>
                <div class="col-md-3">
                    <label for="price" class="form-label">Gender <span class="text-danger" aria-hidden="true">*</span></label>
                    <select name="customer_gender" id="customer_gender" class="form-select" placeholder="Select Gender" required>
                        <option value="">Select Gender</option>
                        <option value="Cervelo">Male</option>
                        <option value="Cervelo">Female</option>
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="brand" class="form-label">Phone <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="customer_phone" id="customer_phone" type="text" class="form-control" placeholder="Enter Phone Number" value="" required>
                </div>

                <div class="col-md-3">
                    <label for="product_condition" class="form-label">Register Date <span class="text-danger" aria-hidden="true">*</span></label>
                    <input name="register_date" id="register_date" type="date" class="form-control" placeholder="Select Register Date" value="" required>
                </div>
        </form>
    </div>
</div>

<div class="card shadow-sm mb-4">
    <div class="card-body">
        <div class="row g-0 align-items-center mb-3">
            <div class="col">
                <h5 class="mb-0">
                    <i class="bi bi-table text-primary me-2"></i>
                    Customer List
                </h5>
                <small class="text-muted">View and manage all customers</small>
            </div>
            <div class="col-auto">
                <span class="badge bg-success">Total: 1 items</span>
            </div>
        </div>

        <div class="table-responsive">
            <table class="table table-striped align-middle mb-0">
                <thead class="table-dark">
                    <tr>
                        <th>Customer ID</th>
                        <th>Name</th>
                        <th>Gender</th>
                        <th>Phone</th>
                        <th>Register Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>C001</td>
                        <td>John Doe</td>
                        <td>Male</td>
                        <td>012-3456789</td>
                        <td>01-01-2026</td>
                        <td>
                            <a href="#" class="btn btn-sm btn-warning me-1" title="Edit"><i class="bi bi-pencil-fill text-white"></i></a>
                            <a href="#" class="btn btn-sm btn-danger" title="Delete"><i class="bi bi-trash-fill"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>