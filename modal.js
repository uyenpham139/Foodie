// $(document).ready(function () {
//     $('#searchForm, #searchFormSmall').submit(function (e) {
//         e.preventDefault(); // Prevent form from submitting

//         var searchTerm = $(this).find("input[name='search']").val(); // Get the search term

//         $.ajax({
//             url: 'includes/menu.inc.php',
//             method: 'GET',
//             data: {
//                 search: searchTerm,
//                 submit: true
//             },
//             success: function(response) {
//                 try {
//                     var data = JSON.parse(response); // Make sure response is JSON before parsing
//                     if (data.error) {
//                         $('#modal-error-message').text(data.error);
//                         $('#searchModal').modal('show');
//                     } else {
//                         console.log(data.success);
//                     }
//                 } catch (e) {
//                     console.error("Invalid JSON response", e); // Log if JSON is invalid
//                 }
//             }
//         });
//     });
// });

document.addEventListener("DOMContentLoaded", function () {
    let urlParams = new URLSearchParams(window.location.search);
    const error = urlParams.get('error');
    const success = urlParams.get('success');

    if (error) {
        document.getElementById('modalTitle').textContent = 'Error';
        document.getElementById('modalMessage').textContent = 'Product not found.';
        var searchModal = new bootstrap.Modal(document.getElementById('searchModal'));
        searchModal.show(); // Show the modal
    } 
    else if (success) {
        document.getElementById('modalTitle').textContent = 'Success';
        document.getElementById('modalMessage').textContent = 'Product found!';
        var searchModal = new bootstrap.Modal(document.getElementById('searchModal'));
        searchModal.show(); // Show the modal
    }
});