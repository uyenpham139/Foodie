<?php
if (isset($_SESSION['product_not_found']) && $_SESSION['product_not_found']) {
    unset($_SESSION['product_not_found']); // Clear the session variable after displaying the modal
    ?>
    <script>
        $(document).ready(function() {
            $("#productNotFoundModal").modal("show");
        });
    </script>
    <?php
}
?>

<!-- Modal -->
<div class="modal fade" id="productNotFoundModal" tabindex="-1" aria-labelledby="productNotFoundLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="productNotFoundLabel">Product Not Found</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>The product you're looking for could not be found.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>