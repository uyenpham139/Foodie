$(document).ready(function ($) {
    "use strict";

    // Parse URL to get the current filter (if any)
    function getUrlParameter(name) {
        const urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(name);
    }

    // Check if the 'type' parameter is set in the URL (default to 'all' if not)
    const currentFilter = getUrlParameter('type') || '';

    // Apply the initial filter based on URL parameter
    if (currentFilter !== '') {
        $(`.filters .filter[data-filter="${currentFilter}"]`).addClass('active');
    } else {
        $(`.filters .filter[data-filter="all"]`).addClass('active');
    }

    // Function to load menu items dynamically based on the filter
    function loadMenuItems(filter) {
        $.ajax({
            url: 'includes/menu.inc.php', // PHP file to handle fetching items
            method: 'GET',
            data: { type: filter }, // Send filter to server
            success: function (response) {
                $('#menu-dish').html(response); // Update the menu with the response (new items)
            },
            error: function () {
                alert('Error loading menu items. Please try again.');
            }
        });
    }

});

document.querySelectorAll('.dish-img, .dish-title').forEach(element => {
    element.addEventListener('click', function () {
        const productId = this.closest('.dish-box').getAttribute('data-id');
        window.location.href = `/foodie/index.php?page=menu-product&product-id=${productId}`;
    });
});

// For type filter
document.addEventListener('DOMContentLoaded', () => {
    const typeFilters = document.querySelectorAll('.type-filter .filter');

    // Handle filter click
    typeFilters.forEach(filter => {
        filter.addEventListener('click', () => {
            // Remove 'active' class from all filters
            typeFilters.forEach(f => f.classList.remove('active'));

            // Add 'active' class to the clicked filter
            filter.classList.add('active');

            // Get the filter's data-filter attribute
            const filterValue = filter.getAttribute('data-filter');

            // // Update the URL based on the selected filter type
            // const currentUrl = new URL(window.location.href);

            if (filterValue === 'all') {
                // Remove 'type' parameter for "All"
                window.location.href = `/foodie/index.php?page=menu`;
            } else {
                // Set 'type' parameter for other filters
                window.location.href = `/foodie/index.php?page=menu&type=${filterValue}`;
            }

            // // Reload the page with the updated URL
            // window.location.href = currentUrl.toString();
        });
    });

    // Mark the correct filter as active based on URL parameter
    // const urlParams = new URLSearchParams(window.location.search);
    // const typeParam = urlParams.get('type');
    // if (typeParam) {
    //     const activeFilter = [...typeFilters].find(f => f.getAttribute('data-filter').includes(typeParam));
    //     if (activeFilter) {
    //         typeFilters.forEach(f => f.classList.remove('active'));
    //         activeFilter.classList.add('active');
    //     }
    // } else {
    //     // Default to 'All' if no 'type' parameter in URL
    //     const allFilter = [...typeFilters].find(f => f.getAttribute('data-filter').includes('.all'));
    //     if (allFilter) {
    //         typeFilters.forEach(f => f.classList.remove('active'));
    //         allFilter.classList.add('active');
    //     }
    // }
});

