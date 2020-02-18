jQuery( function( $ ) {

  $( '.toggle-menu' ).click( function() {
		$( '.slideout' ).toggleClass( 'active' );
		$( 'body' ).toggleClass( 'menu-open' );
	});

  function headerScroll() {
    var scroll = $( window ).scrollTop();
    if ( 120 < scroll ) {
      $( 'header' ).addClass( 'header-transform' );
    }  else {
      $( 'header' ).removeClass( 'header-transform' );
    }
  }

  headerScroll();

  $( window ).scroll( function() {
    headerScroll();
  });

});
