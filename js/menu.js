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
        $(`.filters .filter[data-filter=".${currentFilter}"]`).addClass('active');
        $('#menu-dish').mixitup('filter', `.${currentFilter}`);
    } else {
        $(`.filters .filter[data-filter=".all"]`).addClass('active');
        $('#menu-dish').mixitup('filter', '.all');
    }

    // Initialize MixItUp
    $('#menu-dish').mixitup({
        selectors: {
            target: '.dish-box-wp',
            filter: '.filter',
        },
        animation: {
            effects: 'fade',
            easing: 'ease-in-out',
        },
        load: {
            filter: `.${currentFilter}`,
        },
    });

    // Update the URL when a filter is selected
    $('.filters .filter').on('click', function () {
        const filterClass = $(this).data('filter').replace('.', ''); // Get the class name without the dot
        const url = new URL(window.location.href);
        url.searchParams.set('type', filterClass); // Update the 'type' parameter in the URL
        window.history.pushState({}, '', url); // Update the browser's URL without reloading the page

        // Apply the filter
        $('#menu-dish').mixitup('filter', `.${filterClass}`);

        // Highlight the active filter
        $('.filters .filter').removeClass('active');
        $(this).addClass('active');
    });

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

    // Initialize Parallax (check if you have included the Parallax library)
    const scene = $(".js-parallax-scene").get(0);
    const parallaxInstance = new Parallax(scene);
});

jQuery(window).on('load', function () {
    // Tab filter animation with GSAP
    const targets = document.querySelectorAll(".filter");
    let activeTab = 0;
    let old = 0;
    let animation;

    for (let i = 0; i < targets.length; i++) {
        targets[i].index = i;
        targets[i].addEventListener("click", moveBar);
    }

    // Initial position on first (All) filter
    gsap.set(".filter-active", {
        x: targets[0].offsetLeft,
        width: targets[0].offsetWidth,
    });

    function moveBar() {
        if (this.index !== activeTab) {
            if (animation && animation.isActive()) {
                animation.progress(1);
            }
            animation = gsap.timeline({ defaults: { duration: 0.2 } });
            old = activeTab;
            activeTab = this.index;

            animation.to(".filter-active", {
                x: targets[activeTab].offsetLeft,
                width: targets[activeTab].offsetWidth,
            });
            animation.to(targets[old], { color: "rgb(65, 100, 74)", ease: "none" }, 0);
            animation.to(targets[activeTab], { color: "#fff", ease: "none" }, 0);
        }
    }
});



