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