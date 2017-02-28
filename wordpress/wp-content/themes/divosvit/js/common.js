$("#locale a").each(function() {
  let winPath = window.location.pathname;
  if(winPath.includes('/ru') || winPath.includes('/en')) {
    if(this.pathname != "/") {
      this.pathname = this.pathname + winPath.slice(3);
    } else {
      this.pathname = winPath.slice(3);
    }
  } else {
    if(this.pathname != "/") {
      this.pathname = this.pathname + winPath;
    }
  }
});

if(window.location.pathname.includes("/ru") ) {
  $("#locale a").removeClass('active');
  $("#locale").find(".ru").addClass('active');
  hrefLocalize("/ru");
}
else if(window.location.pathname.includes("/en")) {
  $("#locale a").removeClass('active');
  $("#locale").find(".en").addClass('active');
  hrefLocalize("/en");
} else {
  $("#locale a").removeClass('active');
  $("#locale").find(".ua").addClass('active');
}


function hrefLocalize(locale) {
  $("a:not(.no-locale)").each(function(el) {
    if(!this.pathname.includes(locale)) {
      this.pathname = locale + this.pathname;
    }
  });
}
