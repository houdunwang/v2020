//
// Flatpickr ==================================
//

'use strict';

var Flatpickr = (function() {

  //
  // Variables
  //

  var $flatpickr = $('[data-toggle="flatpickr"]');


  //
  // Methods
  //

  function init($this) {
    var options = {
      mode: ( $this.data('flatpickr-mode') !== undefined ) ? $this.data('flatpickr-mode') : 'single'
    };

    // Init Flatpickr
    $this.flatpickr(options);
  }


  //
  // Events
  //

  if ($flatpickr.length) {
    $flatpickr.each(function() {
      init( $(this) );
    });
  }

})();