<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
	<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>
	<link rel="icon" type="image/png" href="assets/favicon.png" />
    
  <link rel="stylesheet" href="{{asset('assets/css/intlTelInput.css')}}">
  <link rel="stylesheet" href="{{asset('assets/css/demo.css')}}">
	<script src="https://kit.fontawesome.com/2c1e5308ba.js" crossorigin="anonymous"></script>
	<title>UNIRANKS</title>
	@livewireStyles
</head>

<body>
	<!--TOP NAV OPEN-->
	<nav class="navbar navbar-expand-lg navbar-dark bg-blue">
		<div class="container-fluid container px-md-0">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-4">
					<li class="nav-item"> <a class="nav-link active" aria-current="page" href="#">Home</a> </li>
					<li class="nav-item"> <a class="nav-link" href="#">Ranking</a> </li>
					<li class="nav-item"> <a class="nav-link" href="#">Events</a> </li>
					<li class="nav-item"> <a class="nav-link" href="#">Discover</a> </li>
					<li class="nav-item"> <a class="nav-link" href="#">Prepare</a> </li>
					<li class="nav-item"> <a class="nav-link" href="#">Apply</a> </li>
					<li class="nav-item"> <a class="nav-link" href="#">Careers</a> </li>
					<li class="nav-item"> <a class="nav-link" href="#">Community</a> </li>
				</ul>
				<form class="d-flex">
					<div class="btn-group">
						<button class="dropdown-toggle text-light" style="background-color: transparent !important;border:0px !important;" type="button" id="dropdownMenuClickableOutside" data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="false"> <img src="{{asset('assets/assets/avatar.png')}}" height="50"> <span class="text-light">David Scott</span></button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableOutside">
							<li><a class="dropdown-item" href="#">Settings</a></li>
							<li><a class="dropdown-item" href="#">Logout</a></li>
						</ul>
					</div>
				</form>
			</div>
		</div>
	</nav>
	<!--TOP NAV CLOSED-->
	<!-- HEADER START -->
	<nav id="navbar_top" class="navbar navbar-expand-lg  navbar-light bg-white" style="padding-top:0px !important">
		<div class="container-fluid container px-md-0">
			<a class="navbar-brand px-3" href="#"> <img src="{{asset('assets/assets/logo.png')}}" height="35"> </a>
			<div class="collapse navbar-collapse ms-5" id="navbarSupportedContent">
				<ul class="navbar-nav new-nav me-auto  mb-2 mb-lg-0 mt-3">
					<li class="nav-item">
						<a class="nav-link" href="#"> <i class="fa fa-home ic_style"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"> <i class="fa fa-clipboard ic_style"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"> <i class="fa fa-question ic_style"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"> <i class="fas fa-reply-all ic_style"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"> <i class="fa fa-group ic_style"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"> <i class="fa fa-bell ic_style"></i></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#"> <i class="fa fa-comments ic_style"></i></a>
					</li>
				</ul>
				<form class="d-flex">
					<ul class="navbar-nav mt-3 px-5">
						<li class="nav-link">
							<a class="nav-link" href="#"> <i class="fa fa-facebook ic_style"></i></a>
						</li>
						<li class="nav-link">
							<a class="nav-link" href="#"> <i class="fa fa-twitter ic_style"></i></a>
						</li>
						<li class="nav-link">
							<a class="nav-link" href="#"> <i class="fa fa-instagram ic_style"></i></a>
						</li>
						<li class="nav-link">
							<button class="btn btn-blue" type="submit">&nbsp;<img src="{{asset('assets/assets/icons/ic_world.png')}}" width="30">&nbsp;&nbsp;Language(En)</button>
						</li>
					</ul>
				</form>
			</div>
		</div>
	</nav>
	<div class="bg-blue">
		<div class="container px-md-0 p-3">
			<div class="row container px-md-0">
				<div class="col-lg-2"> <img src="{{asset('assets/assets/thomas.png')}}" height="150" class="float-end"> </div>
				<div class="col-lg-8 mt-4">
					<p class="h4 text-light mb-4">Thomas Jefferson High School for Science and Technology</p>
					<p class="h6 text-light mb-3">6560 Braddock Rd, Alexandria, Virginia</p>
					<p class="h6 text-light">School Counselor Account </p>
				</div>
				<div class="col-lg-2 mt-4">
					<p class="h4 text-light mb-4">Account Info</p>
					<p class="h6 text-light mb-3">Type A</p>
					<p class="h6 text-light">Balance 0 </p>
				</div>
			</div>
		</div>
	</div>
	<div class="container px-md-0">
		<div class="row container px-md-0">
			<div class="row shadow-sm mb-5 bg-white rounded">
				
				<div class="col-lg-1-2 mt-1 border-right2 mx-auto text-left tablinks activee tab_title" onclick="openTabb(event, 'event_lead')">
                    <p class="text-blue align-middle  mt-2"><i class="fa-solid fa-school-flag ic_style4"></i> My School</p>
                </div>
                <div class="col-lg-1-2 mt-1 border-right2 mx-auto text-left tablinks tab_title" onclick="openTabb(event, 'event_lead')">
                    <p class="text-blue align-middle mt-2"><i class="fa-solid fa-user-graduate ic_style4"></i> My Students</p>
                </div>
                <div class="col-lg-1-2 text-left text-primary mt-1 border-right2 mx-auto tab_title tablinks" onclick="openTabb(event, 'leads_repo')">
                    <p class="text-blue align-middle mt-2"><i class="fa-solid fa-database ic_style4"></i> Universities</p>
                </div>
                <div class="col-lg-1-2 mt-1 border-right2 mx-auto text-left tab_title tablinks" onclick="openTabb(event, 'schools')">
                    <p class="text-blue align-middle mt-2"><i class="fa-solid fa-chart-column ic_style4"></i> Statistic</p>
                </div>
                <div class="col-lg-1-2 mt-1 border-right2 mx-auto text-left tab_title tablinks" onclick="openTabb(event, 'applicationss')">
                    <p class="text-blue align-middle mt-2"><i class="fa-solid fa-address-card ic_style4"></i> Applications</p>
                </div>
				<div class="col-lg-3 mt-1">
					<div class="container w-75 float-end">
						<select class="text-start btn btn-outline-primary2 mt-1  h-100 w-100" aria-label="">
							<a class="dropdown-item" href="#">
								<option> Currency $ USD</option>
							</a>
							<option> EURO</option>
							<option> PKR</option>
						</select>
					</div>
					<!--               
			<div class="dropdown float-end w-50">
				<button class="btn btn-outline-primary dropdown-toggle text-muted  p-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"> Currency $ USD </button>
				<ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
					<li><a class="dropdown-item" href="#">EURO</a></li>
					<li><a class="dropdown-item" href="#">PKR</a></li>
				</ul>
			</div> --></div>
			</div>
		</div>
	</div>

    @yield('content')

    <footer class="bg-blue">
		<div class="container px-md-0">
			<div class="row">
				<div class="col-3 p-4"> <img src="{{asset('assets/assets/flogo.png')}}" class="w-75 mt-5 px-3"> </div>
				<div class="col-3 p-4">
					<ul class="list-group">
						<li class="list-group-item h3 fw-bold borderless mb-4">Rankings
							<div class="decorative-spacer mt-2"> </div>
						</li>
						<li class="list-group-item borderless">Top World Universities</li>
						<li class="list-group-item borderless">Top North America Universities</li>
						<li class="list-group-item">Top Latin America Universities</li>
						<li class="list-group-item borderless">Top Europe America Universities</li>
						<li class="list-group-item">Top Asia America Universities</li>
						<li class="list-group-item borderless">Top Africa America Universities</li>
						<li class="list-group-item">Top Arab America Universities</li>
						<li class="list-group-item">Top Oceania America Universities</li>
					</ul>
				</div>
				<div class="col-3 p-4">
					<ul class="list-group">
						<li class="list-group-item h3 fw-bold borderless mb-4">Stay in touch
							<div class="decorative-spacer mt-2"> </div>
						</li>
						<li class="list-group-item borderless">Contact Us</li>
						<li class="list-group-item borderless">Report an Issue</li>
						<li class="list-group-item">Send us Feedback</li>
						<li class="list-group-item borderless">Ranking Committee</li>
						<li class="list-group-item">Claim University Profile</li>
						<li class="list-group-item borderless">Register a University</li>
					</ul>
				</div>
				<div class="col-3 p-4">
					<ul class="list-group">
						<li class="list-group-item h3 fw-bold borderless mb-4">Follow Us
							<div class="decorative-spacer mt-2"> </div>
						</li>
					</ul>
					<ul class="list-group list-group-horizontal list-group-horizontal2">
						<li class="list-group-item">
							<a href="#"> <i class="fa-brands fa-square-facebook ic_style3"></i></a>
						</li>
						<li class="list-group-item">
							<a class="px-2" href="#"> <i class="fa fa-twitter ic_style3"></i></a>
						</li>
						<li class="list-group-item">
							<a href="#"> <i class="fa fa-instagram ic_style3"></i></a>
						</li>
					</ul>
					</ul>
				</div>
				<div class="normal-spacer mt-2 mx-auto"> </div>
			</div>
			<div class="row">
				<div class="col-lg-4">
					<div class="px-5 p-4">
						<ul class="list-group list-group-horizontal">
							<li class="list-group-item border-right">FAQ</li>
							<li class="list-group-item border-right">Partners</li>
							<li class="list-group-item border-right">Contact</li>
							<li class="list-group-item border-right">Privacy</li>
							<li class="list-group-item border-right">Cookies</li>
							<li class="list-group-item border-right">Terms</li>
						</ul>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="px-5 p-4 mx-auto text-center">
						<p class="text-light">2022 &copy; UNIBANKS All Right Reserved</p>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="px-5 p-4">
						<ul class="list-group list-group-horizontal">
							<li class="list-group-item border-right border-left">Jordan</li>
							<li class="list-group-item border-right">English</li>
							<li class="list-group-item border-right">العربي</li>
							<li class="list-group-item px-3">
								<div class="btn-group">
									<button class="btn btn-primary bg-danger dropdown-toggle custombtn" type="button" id="dropdownMenuClickableOutside" data-bs-toggle="dropdown" data-bs-auto-close="inside" aria-expanded="false"> English </button>
									<ul class="dropdown-menu" aria-labelledby="dropdownMenuClickableOutside">
										<li><a class="dropdown-item" href="#">Menu item</a></li>
										<li><a class="dropdown-item" href="#">Menu item</a></li>
										<li><a class="dropdown-item" href="#">Menu item</a></li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- FOOTER CLOSED -->
	@livewireScripts

</body>
<script>
document.addEventListener("DOMContentLoaded", function() {
	window.addEventListener('scroll', function() {
		if(window.scrollY > 50) {
			document.getElementById('navbar_top').classList.add('fixed-top');
			// add padding top to show content behind navbar
			navbar_height = document.querySelector('.navbar').offsetHeight;
			document.body.style.paddingTop = navbar_height + 'px';
		} else {
			document.getElementById('navbar_top').classList.remove('fixed-top');
			// remove padding top from body
			document.body.style.paddingTop = '0';
		}
	});
});

function changeProgress(progressBarId, progressValue, animDurPerStep = 15) {
	var progressBar = document.getElementById(progressBarId);
	var oldProgressValue = -parseInt(window.getComputedStyle(progressBar).getPropertyValue("background-position"));
	if(progressValue > 100) progressValue = 100;
	else if(progressValue < 0) progressValue = 0;
	else progressValue = Math.round(progressValue / 10) * 10;
	var steps = Math.abs(oldProgressValue - progressValue) / 10;
	var totalAnimDur = animDurPerStep * steps;
	progressBar.style.transition = totalAnimDur + "ms steps(" + steps + ")";
	progressBar.style.backgroundPosition = -10 + "%";
}
</script>
<script>
function openTabb(evt, cityName) {
	var i, tabcontent, tablinks;
	tabcontent = document.getElementsByClassName("tabcontent");
	for(i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}
	tablinks = document.getElementsByClassName("tablinks");
	for(i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" activee", "");
	}
	document.getElementById(cityName).style.display = "block";
	evt.currentTarget.className += " activee";
}


</script>

<script src="{{asset('assets/js/intlTelInput.js')}}"></script>
<script>
  var input = document.querySelector("#phone");
  window.intlTelInput(input, {
    // allowDropdown: false,
    // autoHideDialCode: false,
    // autoPlaceholder: "off",
    // dropdownContainer: document.body,
    // excludeCountries: ["us"],
    // formatOnDisplay: false,
    // geoIpLookup: function(callback) {
    //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
    //     var countryCode = (resp && resp.country) ? resp.country : "";
    //     callback(countryCode);
    //   });
    // },
    // hiddenInput: "full_number",
    // initialCountry: "auto",
    // localizedCountries: { 'de': 'Deutschland' },
    // nationalMode: false,
    // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
    // placeholderNumberType: "MOBILE",
    // preferredCountries: ['cn', 'jp'],
    // separateDialCode: true,
    utilsScript: "js/utils.js",
  });
</script>
</html>