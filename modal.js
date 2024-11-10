document.addEventListener("DOMContentLoaded", function () {
    let urlParams = new URLSearchParams(window.location.search);
    const page = urlParams.get('page');
    const error = urlParams.get('error');
    const success = urlParams.get('success');

    if (page === 'search') {
        // Display modal based on error or success parameters
        if (error) {
            document.getElementById('modalTitle').textContent = 'Error';
            document.getElementById('modalMessage').textContent = 'Product not found.';
            var searchModal = new bootstrap.Modal(document.getElementById('searchModal'));
            searchModal.show(); // Show the modal
        } else if (success) {
            document.getElementById('modalTitle').textContent = 'Success';
            document.getElementById('modalMessage').textContent = 'Product found!';
            var searchModal = new bootstrap.Modal(document.getElementById('searchModal'));
            searchModal.show(); // Show the modal
        }
    }
});
