( function( window, document ) {
  function restaurant_fast_food_keepFocusInMenu() {
    document.addEventListener( 'keydown', function( e ) {
      const restaurant_fast_food_nav = document.querySelector( '.sidenav' );
      if ( ! restaurant_fast_food_nav || ! restaurant_fast_food_nav.classList.contains( 'open' ) ) {
        return;
      }
      const elements = [...restaurant_fast_food_nav.querySelectorAll( 'input, a, button' )],
        restaurant_fast_food_lastEl = elements[ elements.length - 1 ],
        restaurant_fast_food_firstEl = elements[0],
        restaurant_fast_food_activeEl = document.activeElement,
        tabKey = e.keyCode === 9,
        shiftKey = e.shiftKey;
      if ( ! shiftKey && tabKey && restaurant_fast_food_lastEl === restaurant_fast_food_activeEl ) {
        e.preventDefault();
        restaurant_fast_food_firstEl.focus();
      }
      if ( shiftKey && tabKey && restaurant_fast_food_firstEl === restaurant_fast_food_activeEl ) {
        e.preventDefault();
        restaurant_fast_food_lastEl.focus();
      }
    } );
  }
  restaurant_fast_food_keepFocusInMenu();
} )( window, document );