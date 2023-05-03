jQuery(function($){
    // YubinBango.js
    var fm = $('form.metabox-location-normal');

    fm.addClass('h-adr');
    fm.prepend('<span class="p-country-name" style="display:none;">Japan</span>');
    $('[name="acf[field_63fad08c1cec9]"]').addClass('p-postal-code');
    $('[name="acf[field_63fc4fd7912ce]"]').addClass('p-region');
    $('[name="acf[field_63fc500f912cf]"]').addClass('p-locality');
    $('[name="acf[field_63fc873fff617]"]').addClass('p-street-address p-extended-address');

    new YubinBango.MicroformatDom();
});

