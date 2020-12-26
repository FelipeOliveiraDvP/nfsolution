/**
 * Controls sidebar responsive mode
 */

var $toggle = $('.site-sidebar .menu-toggle');
var $menu = $('.site-sidebar ul');

$toggle.on('click', function() {
   $menu.toggle('fast');
})