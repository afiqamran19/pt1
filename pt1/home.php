<?php
ob_start();
?>

<div class="card shadow border-0 border-start border-5 border-primary mb-4">
    <div class="card-body py-5 text-center">
        <h1 class="display-5 fw-bold mb-2">Welcome to Pedalster</h1>
        <p class="text-muted lead mb-4">Your ultimate destination for boutique guitar effects and stompboxes</p>
        <a href="products.php" class="btn btn-primary btn-lg"><i class="bi bi-box-seam me-2"></i>Explore Products</a>
    </div>
</div>

<div class="row g-4 mb-4">
    <div class="col-md-4">
        <div class="card shadow-sm h-100 border-0">
            <div class="card-body text-center p-4">
                <i class="bi bi-sliders fs-1 text-primary mb-3"></i>
                <h4>Boutique Tones</h4>
                <p class="text-muted">From lush analog delays to crushing high-gain distortion pedals.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm h-100 border-0">
            <div class="card-body text-center p-4">
                <i class="bi bi-shield-check fs-1 text-primary mb-3"></i>
                <h4>True Bypass</h4>
                <p class="text-muted">Preserve your pure guitar signal chain without tone coloration.</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm h-100 border-0">
            <div class="card-body text-center p-4">
                <i class="bi bi-truck fs-1 text-primary mb-3"></i>
                <h4>Fast Shipping</h4>
                <p class="text-muted">Gig-ready delivery right to your doorstep or studio.</p>
            </div>
        </div>
    </div>
</div>

<?php
$content = ob_get_clean();
require_once 'layout.php';
?>