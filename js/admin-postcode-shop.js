jQuery(function($){
    // YubinBango.js
    var fm = $('form.metabox-location-normal');

    fm.addClass('h-adr');
    fm.prepend('<span class="p-country-name" style="display:none;">Japan</span>');
    $('[name="acf[field_63fac77ea356e]"]').addClass('p-postal-code');
    $('[name="acf[field_63fca1673cf99]"]').addClass('p-region');
    $('[name="acf[field_63fca1943cf9a]"]').addClass('p-locality');
    $('[name="acf[field_63fca1b93cf9b]"]').addClass('p-street-address p-extended-address');

    new YubinBango.MicroformatDom();
});

