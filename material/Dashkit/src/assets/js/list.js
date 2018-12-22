//
// List.js ==================================
//

'use strict';

var Lists = (function() {

  //  //
  // Variables
  //  //

  var $lists = $('[data-toggle="lists"]');
  var $listsSort = $('[data-sort]');


  //
  // Methods
  //

  // Init
  function init($list) {
    new List($list.get(0), getOptions($list));
  }

  // Get options
  function getOptions($list) {
    var options = {
      valueNames: $list.data('lists-values'),
      listClass: $list.data('lists-class') ? $list.data('lists-class') : 'list'
    }

    return options;
  }


  //
  // Events
  //

  // Init
  if ($lists.length) {
    $lists.each(function() {
      init($(this));
    });
  }

  // Sort
  $listsSort.on('click', function() {
    return false;
  });

})();