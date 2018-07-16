var Layout = function() {
	var handleMainMenu = function() {
    $('.menu_oc > a, .menu_oc > a + .dropdown-menus, #menu_hor > a, #menu_hor > a + .dropdown-menus, #menu_ver > a, #menu_ver > a + .dropdown-menus, #menu_ver_2 > a, #menu_ver_2 > a + .dropdown-menus, #menu_inline > a, #menu_inline > a + .dropdown-menus, #menu_metro > a, #menu_metro > a + .dropdown-menus, #menu_brands > a, #menu_brands > a + .dropdown-menus, .menu_custom_menu > a, .menu_custom_menu > a + .dropdown-menus, .menu_custom_block > a, .menu_custom_block > a + .dropdown-menus, .flexMenu-viewMore > a, .flexMenu-viewMore ul, .flexMenu-viewMore ul li').hover(function () {
      $('#bg-blur').addClass('blur');
    }, function () {
      $('#bg-blur').removeClass('blur');
    });

    $('ul.menu.flex-menu').flexMenu({
      linkText: '<i class="fa fa-circle"></i><i class="fa fa-circle"></i><i class="fa fa-circle"></i>',
      showOnHover: true,
      popupClass: 'flexMenu-popup dropdown-menus dropdown-menu-right'
    });
  }

	var handleHeaderSearch = function() {
		$.typeahead({
	    input: '.js-autocomplete-input',
	    minLength: 1,
	    order: "desc",
	    source: {
	    	data: [
          "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda",
          "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh",
          "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia",
          "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burma",
          "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Central African Republic", "Chad",
          "Chile", "China", "Colombia", "Comoros", "Congo, Democratic Republic", "Congo, Republic of the",
          "Costa Rica", "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti",
          "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador",
          "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Fiji", "Finland", "France", "Gabon",
          "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Greenland", "Grenada", "Guatemala", "Guinea",
          "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hong Kong", "Hungary", "Iceland", "India",
          "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan",
          "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South", "Kuwait", "Kyrgyzstan", "Laos",
          "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg",
          "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands",
          "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Mongolia", "Morocco", "Monaco",
          "Mozambique", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger",
          "Nigeria", "Norway", "Oman", "Pakistan", "Panama", "Papua New Guinea", "Paraguay", "Peru",
          "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Samoa", "San Marino",
          "Sao Tome", "Saudi Arabia", "Senegal", "Serbia and Montenegro", "Seychelles", "Sierra Leone",
          "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "Spain",
          "Sri Lanka", "Sudan", "Suriname", "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan",
          "Tajikistan", "Tanzania", "Thailand", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey",
          "Turkmenistan", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States",
          "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"
        ]
	    },
	    callback: {
        
	    },
	    debug: true
		});
	};

	// Handles the go to top button at the footer
	var handleGoTop = function() {
		var offset = 300;
		var duration = 500;

		if (navigator.userAgent.match(/iPhone|iPad|iPod/i)) { // ios supported
			$(window).bind("touchend touchcancel touchleave", function(e) {
				if ($(this).scrollTop() > offset) {
					$('.scroll-to-top').fadeIn(duration);
				} else {
					$('.scroll-to-top').fadeOut(duration);
				}
			});
		} else { // general 
			$(window).scroll(function() {
				if ($(this).scrollTop() > offset) {
					$('.scroll-to-top').fadeIn(duration);
				} else {
					$('.scroll-to-top').fadeOut(duration);
				}
			});
		}

		$('.scroll-to-top').click(function(e) {
			e.preventDefault();
			$('html, body').animate({
				scrollTop : 0
			}, duration);
			return false;
		});
	};
	
	var handleFlexImages = function() {
		$('.product .flexslider').flexslider({
			animation : "slide",
			controlNav : "thumbnails",
      slideshow: false
		});
	};
	
	var handleZoomImages = function() {
    $('.product .zoom').each(function() {
      var self = $(this);
      var thumbUrl = self.parent().data('zoom');
      self.zoom({
        url: thumbUrl,
      });
    });
	};
	
	var handleChosen = function() {
		$(".chosen-select").chosen();
	}

	return {
		init : function() {
      handleMainMenu();
			handleHeaderSearch();
			handleFlexImages();
			handleZoomImages();
			handleChosen();
		}
	};
}();

jQuery(document).ready(function() {
	Layout.init();
});
