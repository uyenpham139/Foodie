// $(document).ready(function(){
//     $('.search-input').each(function () {
//         const searchInput = $(this);
//         const dropdownMenu = searchInput.closest('div').find('.dropdown-menu');

//         // Handle input event
//         searchInput.on('input', function() {
//             const query = $(this).val().trim();

//             if (query.length > 0) {
//                 $.ajax({
//                     url: 'includes/livesearch.php',
//                     method: 'GET',
//                     data: { query: query},
//                     success: function (response) {
//                         dropdownMenu.empty();
//                         const results = JSON.parse(response);

//                         if (results.length > 0) {
//                             results.forEach(item => {
//                                 const menuItem =
//                                     <li>
//                                         <button class="dropdown-item" type="button" data-id="${item.id}">
//                                             ${item.item_name}
//                                         </button>
//                                     </li>
//                                 ;
//                                 dropdownMenu.append(menuItem);
//                             });
//                             dropdownMenu.addClass('show');
//                         } else {
//                             dropdownMenu.removeClass('show');
//                         }
//                     },
//                     error: function () {
//                         dropdownMenu.removeClass('show')
//                     }
//                 });
//             }

//             else {
//                 dropdownMenu.removeClass('show');
//             }
//         });

//         // Handle dropdown item selection 
//         $(document).on('click', '.dropdown-item', function () {
//             const selectedItem = $(this).text();
//             searchInput.val(selectedItem);
//             dropdownMenu.removeClass('show');
//         });

//         // Hide dropdown when clicking outside
//         $(document).on('click', function (e) {
//             if (!$(e.target).closest('form').length) {
//                 dropdownMenu.removeClass('show');
//             }
//         });
//     });
// });

$(document).ready(function() {
    const liveSearchResult = $('.live-search-result');

    $('.search-form input').keyup(function() {
        liveSearch($(this).val())
        if ($(this).val()) {
            liveSearchResult.show();
        }
    })

    $('.search-form input').blur(function() {
        liveSearchResult.hide();
    })

    $(document).on('mousedown', '.live-search-result a', function(e) {
        e.preventDefault(); // Prevent dropdown from closing before navigation
    });

    function liveSearch(keyword) {
        $.ajax({
            url: "includes/menusearch.inc.php",
            type: "GET",
            data: {
                action: 'search-product',
                keyword: keyword,
            },            
            dataType: "json",
            success: function(result) {
                const divSearchResult = $('.live-search-result .search-result');

                let html = `<li class="dropdown-header">Recommended product</li>`;

                if (result.length > 0) {
                    $.each(result, function(index, item) {
                        html += `<li>                                    
                                    <a class="row" href="index.php?page=menu-product&product-id=${item['menu_id']}">
                                        <div className="col col-xl-2">
                                            <img src="" alt="" />
                                        </div>
                                        <div className="col col-xl-10">
                                            <span>${item['item_name']}</span>
                                        </div>
                                    </a>
                                </li>`
                    })
                } else {
                    html = `<li class="dropdown-header" style="color: red; border: none">No matching product found</li>`
                }
                divSearchResult.html(html)
            },
            error: function(xhr, status, error) {
                console.error("AJAX Error:", status, error);
            }
        })
    }
})