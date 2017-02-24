if(window.location.pathname.includes("/ru") ) {
  $("#locale a").removeClass('active');
  $("#locale").find("a[href='/ru']").addClass('active');
}
else if(window.location.pathname.includes("/en")) {
  $("#locale a").removeClass('active');
  $("#locale").find("a[href='/en']").addClass('active');
} else {
  $("#locale a").removeClass('active');
  $("#locale").find("a[href='/']").addClass('active');
}
