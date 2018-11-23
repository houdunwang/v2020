//
// Dropdowns ==================================
//

'use strict';

var Dropdowns = (function() {

  //
  // Variables
  //

  var $dropdown = $('.dropup, .dropright, .dropdown, .dropleft');
  var $dropdownMenu = $('.dropdown-menu');
  var $dropdownSubmenu = $('.dropdown-menu .dropdown-menu');
  var $dropdownSubmenuToggle = $('.dropdown-menu .dropdown-toggle');


  //
  // Methods
  //

  // Toggle submenu
  function toggleSubmenu(toggle) {
    var $siblingDropdown = toggle.closest($dropdown).siblings($dropdown);
    var $siblingSubmenu = $siblingDropdown.find($dropdownMenu);

    // Hide sibling submenus
    $siblingSubmenu.removeClass('show');

    // Show / hide current submenu
    toggle.next($dropdownSubmenu).toggleClass('show');
  }

  // Hide submenu
  function hideSubmenu(dropdown) {
    var $submenu = dropdown.find($dropdownSubmenu);

    // Check if there is a submenu
    if ($submenu.length) {
      $submenu.removeClass('show');
    }
  }


  //
  // Events
  //

  // Toggle submenu
  $dropdownSubmenuToggle.on('click', function() {
    toggleSubmenu($(this));

    return false;
  });

  // Hide submenu
  $dropdown.on('hide.bs.dropdown', function() {
    hideSubmenu($(this));
  });

})();