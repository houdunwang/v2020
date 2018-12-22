//
// Popovers ==================================
//

'use strict';

var Popover = (function() {

  //
  // Variables
  //

  var $popover = $('[data-toggle="popover"]');


  //
  // Methods
  //

  function init() {
    $popover.popover();
  }


  //
  // Events
  //

  if( $popover.length ) {
    init();
  }
  
})();