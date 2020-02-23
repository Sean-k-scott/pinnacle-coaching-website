jQuery( function( $ ) {

  $( '.toggle-menu' ).click( function() {
		$( '.slideout' ).toggleClass( 'active' );
		$( 'body' ).toggleClass( 'menu-open' );
	});

  function headerScroll() {
    var scroll = $( window ).scrollTop();
    if ( 85 < scroll ) {
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

console.log('%cY%c%cE%c%cE%c%cT', 'color: red;', '', 'color: green;', '', 'color: blue;', '', 'color: pink;', '');
