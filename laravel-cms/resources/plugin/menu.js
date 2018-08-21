$(".sidebar-elements li.parent").click(function(){
   let i = $(".sidebar-elements li.parent").index(this);
   sessionStorage.setItem('current_menu_index',i);
});
let currentMenuIndex = sessionStorage.getItem('current_menu_index');
$(".sidebar-elements li.parent").eq(currentMenuIndex).addClass('open');