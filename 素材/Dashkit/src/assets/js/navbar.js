//
// Navbar ==================================
//

'use strict';

var Navbar = (function() {

  //
  // Variables
  //

  var $nav = $('.navbar-nav, .navbar-nav .nav');
  var $navCollapse = $('.navbar-nav .collapse');


  //
  // Methods
  //

  function accordion($this) {
    $this.closest($nav).find($navCollapse).not($this).collapse('hide');
  }


  //
  // Events
  //

  $navCollapse.on({
    'show.bs.collapse': function() {
      accordion( $(this) );
    }
  })
  
})();