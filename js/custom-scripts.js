jQuery(document).ready(function() {
  console.log('custom');
  function mouseIn() {
    console.log('see me');
    jQuery(this).addClass('open');
  }
  function mouseOut() {
    console.log('see me out');
    jQuery(this).removeClass('open');
  }
  jQuery('.menu-item-has-children').hover(mouseIn,mouseOut);

  jQuery('#all-nav').on('click', function() {
    jQuery('.tile').show();
  });

  function filterNav(string) {

  }

  jQuery('#tax-nav>li').on('click', function() {
    string = jQuery(this).text().toLowerCase();
    console.log(string);
    if(string == 'all') {
      jQuery('.tile').show();
    } else {
      jQuery('.tile').hide();
      if(jQuery('.tile').hasClass(string)) {
        jQuery('.tile.' + string).show();
      }
    }
  })


});
