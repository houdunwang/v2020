//
// Select2.js ==================================
//

'use strict';

var Select2 = (function() {

  //
  // Variables
  //

  var $select = $('[data-toggle="select"]');


  //
  // Methods
  //

  function init($this) {
    var options = {
      dropdownParent: $this.closest('.modal').length ? $this.closest('.modal') : $(document.body),
      minimumResultsForSearch: $this.data('minimum-results-for-search'),
      templateResult: formatAvatar
    };

    $this.select2(options);
  }

  function formatAvatar(avatar) {
    if ( !avatar.id ) {
      return avatar.text;
    }

    var $option = $(avatar.element);
    var optionAvatar = $option.data('avatar-src');
    var output;

    if ( optionAvatar ) {
      output = $('<span class="avatar avatar-xs mr-3"><img class="avatar-img rounded-circle" src="' + optionAvatar + '" alt="' + avatar.text + '"></span><span>' + avatar.text + '</span>');
    } else {
      output = avatar.text;
    }

    return output;
  }


  //
  // Events
  //

  if ( $select.length ) {

    // Init selects
    $select.each(function() {
      init( $(this) );
    });
  }

})();
