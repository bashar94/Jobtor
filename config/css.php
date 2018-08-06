<!-- FontAwesome -->
<link rel="stylesheet" href="style/fonts/css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="style/bootstrap/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="style/bootstrap/css/bootstrap-theme.min.css">

<!-- jQuery CSS -->
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.min.css">

<!-- Font -->
<link href="https://fonts.googleapis.com/css?family=Raleway:100,400,300,500,600,700" rel="stylesheet">

<style>
/*--------------------footer styles-------------------------------------------------- */

	html, body {
	    height: 100%;
			font-family: 'Raleway', serif;
	}


	body {
			/*background-image: url("https://ae01.alicdn.com/kf/HTB1Yzc5RXXXXXXQXXXXq6xXFXXXl/New-Sale-Professional-Portable-font-b-Stethoscope-b-font-Dual-Head-font-b-Doctor-b-font.jpg");
			background-repeat:no-repeat;
			background-size:cover;*/

	    margin:0px;
	    padding: 0px;
	}
	.inline {
	  padding-top: 200px;
	}


	.navbar .navbar-header a,.nav.navbar-nav li a {
    color: #ffffff;
	}
	.navbar .navbar-header a:hover,.nav.navbar-nav li a:hover {
		color: #54baff;
	}

	.ui-datepicker {
		position: relative;
		 z-index: 10000 !important;
	 }

textarea {
    resize: none;
}


.panel-shadow, .alert, .jumbotron{
  box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
}



	.content{      /* navbar, body, footer all */
			height: auto;
	    margin: 0 auto -80px; /* footer height + space */
	    min-height: 100%;
	    padding: 0 0 80px; /* footer height + space */
	    box-sizing: border-box;
	    overflow: auto;
	}

	.main{
  		padding-top: 70px;
  		padding-bottom: 60px;
 	}

	.footer {
	    padding-top: 20px;
	    display: block;
	    margin-top: 20px; /* space between content and footer */
	    box-sizing: border-box;
	    position: relative;
	    width: 100%;
	    height: 60px;   /* Height of the footer */
	    background: #38393a;
	}

	a.about-page:hover{
		text-decoration: none;
		color: #54baff;
	}
	.about-page{
		color: #5e6a7c;
	}

	.btn-blue{
		background-color: #0084ff;
		color: #ffffff;
	}

	.btn-width{
		padding: 10px;
	}

	.panel-border{
		border-color: #333;
	}

	.navbar-inverse .navbar-nav .open .dropdown-menu>li>a,.navbar-inverse .navbar-nav .open .dropdown-menu, .btn-black, .input-group-addon, .panel-black, .pagination > li > a{
		background-color: #333;
		color: #ffffff;
		margin-bottom: 10px;
		border-color: #333;
	}


	.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:hover,.btn-black:hover, .pagination > li > a:hover, .pagination > li > span:focus{
		background-image:none !important;
		background-color: #333;
		color: #54baff;
	}
	.navbar-inverse .navbar-nav .open .dropdown-menu>li>a:focus,.btn-black:focus{
		color: #54baff;
	}

	.cpassword-success:focus {
	  border-color: #62c462;
	  outline: 0;
	  outline: thin dotted \9;
	  /* IE6-9 */

	  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(98, 196, 98, 0.6);
	  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(98, 196, 98, 0.6);
	  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(98, 196, 98, 0.6);
	}
	.cpassword:focus {
	  border-color: #BA3434;
	  outline: 0;
	  outline: thin dotted \9;
	  /* IE6-9 */

	  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(205, 95, 95, 0.6);
	  -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(205, 95, 95, 0.6);
	  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(205, 95, 95, 0.6);
	}

  .vr {
  		width: 1px; /* Line width */
      background-color: #c2c4c6; /* Line color */
      height: 520px; /* Override in-line if you want specific height. */
      float: left;
	 }

  	@-moz-document url-prefix() {  /* removes doted area in firefox */
	  a:focus {
	     outline: 0;
	  }
	}

  	@media screen and  (max-width: 767px){ /*mobile and tab view*/

			/*facebook button */
				#fb {
			  		padding-top: 100px;
				}

			select {
				padding: 5px;
				width: 100px;
		    margin-right: -20px;
		    -webkit-border-radius:4px;
		    -moz-border-radius:4px;
		    border-radius:4px;
		    border-color: #333;
		    background: #fff;
		    color:#000000;
		    outline:none;
		    display: inline-block;
		    -webkit-appearance:none;
		    -moz-appearance:none;
		    appearance:none;
		    cursor:pointer;
		}

			.nav-icon {   /*navbar icons positioning */
		    float: left;

		    color: #ffffff;
		    padding-top: 5px;
			}

			a.nav-icon:hover{
				color: #54baff;
				text-decoration: none;
			}

    	/*hide in large screen but visible in medium and small*/
    	.hide-ss{
    		display: none;
    	}

			.gap{
				padding-top: 10px;
			}

    	.center.navbar .nav,
    	.center.navbar .nav > a {
        	float:none;
        	display:inline-block;
        	*display:inline; /* ie7 fix */
        	*zoom:1; /* hasLayout ie7 trigger */
        	vertical-align: top;

    	}
    	.center .navbar-inner {
        	text-align:center;
    	}


    	.profile-sidebar {  /*profile sidebar */
			  padding-top: 20px;
			  padding-bottom: 10px;
			  background: #333;
			  position: relative;
			}

			/* Profile Content */
			.profile-content {
			  padding: 20px;
			}
  	}

  	@media screen and (min-width: 768px){   /*desktop view*/
  		/*hide in smallar screen but visible in large*/

		/*facebook button */
			#fb {
		  	padding-top: 10%;
			}

			select {
				padding: 5px;
				width: 150px;
		    margin-right: -20px;
		    -webkit-border-radius:4px;
		    -moz-border-radius:4px;
		    border-radius:4px;
		    border-color: #333;
		    background: #fff;
		    color:#000000;
		    outline:none;
		    display: inline-block;
		    -webkit-appearance:none;
		    -moz-appearance:none;
		    appearance:none;
		    cursor:pointer;
		}

    	.hide-lg{
    		display: none;
    	}

    	/*about page right column*/
    	.mar-col {
      	margin-top: 70px;
    	}


    	.profile-sidebar {   /*profile sidebar */
				padding-top: 20px;
				padding-bottom: 10px;
				background: #333;
				height: 100%;
				width: 23%;
				position: fixed;
			}

			/* Profile Content */
			.profile-content {
			  padding: 0px;
			}
} /* desktop view ends */

  	.help-title {
		  font-family: "Whitney SSm A", "Whitney SSm B", "Avenir", "Segoe UI", "Ubuntu", "Helvetica Neue", Helvetica, Arial, sans-serif;
		  color: #979faf;
		  font-size: 12px;
		  font-weight: 600;
		  margin-bottom: 15px;
		}



	/*signup and login form */
	#form {
  		padding-top: 30px;
	}



	/* ---------------- profile sidebar------------------ */

	/* Profile container */
	.profile {
	  margin: 20px 0;
	}

	/* Profile sidebar */


	.profile-userpic img {
	  float: none;
	  margin: 0 auto;
	  width: 50%;
	  height: 50%;
	  -webkit-border-radius: 50% !important;
	  -moz-border-radius: 50% !important;
	  border-radius: 50% !important;
	}

	.profile-usertitle {
	  text-align: center;
	  margin-top: 20px;
	}

	.profile-usertitle-name {
	  color: #ffffff;
	  font-size: 16px;
	  font-weight: 600;
	  /*margin-bottom: 7px;*/
	}

	.profile-usertitle-job {
	  font-family: "Whitney SSm A", "Whitney SSm B", "Avenir", "Segoe UI", "Ubuntu", "Helvetica Neue", Helvetica, Arial, sans-serif;
	  color: #979faf;
	  font-size: 12px;
	  font-weight: 600;
	  margin-top: -25px;
	}

	.profile-userbuttons {
	  text-align: center;
	  margin-top: 10px;
	}

	.profile-userbuttons .btn {
	  text-transform: uppercase;
	  font-size: 11px;
	  font-weight: 600;
	  padding: 6px 15px;
	  margin-right: 5px;
	}

	.profile-userbuttons .btn:last-child {
	  margin-right: 0px;
	}

	.profile-usermenu {
	  margin-top: 30px;
	}


	.profile-usermenu ul li a {
	  color: #ffffff;
	  font-size: 14px;
	  font-weight: 400;
	}

	.profile-usermenu ul li a i {
	  margin-right: 8px;
	  font-size: 14px;
	}

	.profile-usermenu ul li a:hover {
	  background-color: #333;
	  color: #54baff;
	}

	.profile-usermenu ul li.active {
	  border-bottom: none;
	}

	.profile-usermenu ul li.active a {
	  color: #ffffff;
	  background-color: #000;
	  border-left: 2px solid #5b9bd1;
	  margin-left: -2px;
	}



	/*toogle available starts */

	.tg-list {
	  text-align: center;
	  display: flex;
	  align-items: center;
	  list-style: none;
	  margin: 0;
	  padding: 0px;
	}

	.tg-list-item {
	  margin: 0 -1em;
	}
	.tgl {
	  display: none;
	}
	.tgl, .tgl:after, .tgl:before, .tgl *, .tgl *:after, .tgl *:before, .tgl + .tgl-btn {
	  box-sizing: border-box;
	}
	.tgl::selection, .tgl:after::selection, .tgl:before::selection, .tgl *::selection, .tgl *:after::selection, .tgl *:before::selection, .tgl + .tgl-btn::selection {
	  background: none;
	}
	.tgl + .tgl-btn {
	  outline: 0;
	  display: block;
	  width: 7em;
	  height: 2em;
	  position: relative;
	  cursor: pointer;
	  user-select: none;
	}
	.tgl + .tgl-btn:after, .tgl + .tgl-btn:before {
	  position: relative;
	  display: block;
	  content: "";
	  width: 50%;
	  height: 100%;
	}
	.tgl + .tgl-btn:after {
	  left: 0;
	}
	.tgl + .tgl-btn:before {
	  display: none;
	}
	.tgl:checked + .tgl-btn:after {
	  left: 50%;
	}

	.tgl-flip + .tgl-btn {
	  padding: 2px;
	  transition: all .2s ease;
	  font-family: sans-serif;
	  perspective: 100px;
	}
	.tgl-flip + .tgl-btn:after, .tgl-flip + .tgl-btn:before {
	  display: inline-block;
	  transition: all .4s ease;
	  width: 100%;
	  text-align: center;
	  position: absolute;
	  line-height: 2em;
	  font-weight: bold;
	  color: #fff;
	  position: absolute;
	  top: 0;
	  left: 0;
	  backface-visibility: hidden;
	  border-radius: 4px;
	}
	.tgl-flip + .tgl-btn:after {
	  content: attr(data-tg-on);
	  background: #02C66F;
	  transform: rotateY(-180deg);
	}
	.tgl-flip + .tgl-btn:before {
	  background: #FF3A19;
	  content: attr(data-tg-off);
	}
	.tgl-flip + .tgl-btn:active:before {
	  transform: rotateY(-20deg);
	}
	.tgl-flip:checked + .tgl-btn:before {
	  transform: rotateY(180deg);
	}
	.tgl-flip:checked + .tgl-btn:after {
	  transform: rotateY(0);
	  left: 0;
	  background: #7FC6A6;
	}
	.tgl-flip:checked + .tgl-btn:active:after {
	  transform: rotateY(20deg);
	}

	/*toggle available ends */
</style>
