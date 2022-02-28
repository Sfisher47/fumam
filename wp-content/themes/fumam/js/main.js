(function($) {
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
    })

    $(document).ready(function() {
        $('[data-ref="btn-search-toggle"]').on('click', function() {
            $this = $(this);
            if ( $('.handheld-header-wrap .navbar').hasClass('toggle-search') ) {
                $this.find('i').removeClass('bi-x-lg').addClass('bi-search');
                $('.handheld-header-wrap .navbar').removeClass('toggle-search');                
            } else {
                $this.find('i').removeClass('bi-search').addClass('bi-x-lg');
                $('.handheld-header-wrap .navbar').addClass('toggle-search');
                $('.navbar.toggle-search .search-form-container').hide();
            }
            $('.navbar .search-form-container').fadeToggle(300);
        });
    });
})(jQuery);