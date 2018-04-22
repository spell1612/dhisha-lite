<?php
   header("Expires: Tue, 03 Jul 2001 06:00:00 GMT");
   header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
   header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
   header("Cache-Control: post-check=0, pre-check=0", false);
   header("Pragma: no-cache");
   header("Connection: close");
?>


<!doctype html>
<html lang="en">
<head>

	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/icon.ico') }}">
	<link rel="icon" type="image/png" href="{{ asset('assets/img/icon.ico') }}">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<!-- SEO elements -->
	<title>Dhisha - A charity Organization based in kerala.</title>
	<meta name="description" content="">
	<link rel="icon" href="{{ asset('image/icon.ico') }}" type="image/gif" sizes="16x16">
	<!-- SEO elements ends -->
	{{-- CSRF Token --}}
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="{{ asset('bootstrap3/css/bootstrap.css') }}" rel="stylesheet" />
	<link href="{{ asset('assets/css/gsdk.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet" />
		<link href="{{ asset('css/logo.css') }}" rel="stylesheet" />

		<!-- login links -->
		<!-- <link href="{{ asset('login-register.css') }}" rel="stylesheet" />
		<script src="{{ asset('login-register.js') }}" type="text/javascript"></script> -->

		<!-- scroll js -->
		<script src="{{ asset('js/scroll.js') }}" type="text/javascript"></script>
    <!--     Font Awesome     -->
    <link href="{{ asset('bootstrap3/css/font-awesome.css') }}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>

		<!-- card -->
		<link href="{{ asset('assets/css/hipster_cards.css') }}" rel="stylesheet"/>
		<link href="{{ asset('assets/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />
		<!-- contact -->
		<link href="{{ asset('assets/css/contact.css') }}" rel="stylesheet" />
		<!-- iframe -->
		<link href="{{ asset('assets/css/iframec.css') }}" rel="stylesheet" />
		<!-- blog -->
		<link href="{{ asset('assets/css/blog.css') }}" rel="stylesheet" />
		<!-- footer -->
		<link href="{{ asset('assets/css/footer.css') }}" rel="stylesheet" />


</head>
<body>
<div id="navbar-full">
    <div class="container">
        <nav class="navbar navbar-ct-blue navbar-transparent navbar-fixed-top" role="navigation">

          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                     <div class="logo-container">
                        <a href="#dhisha">
                        <div class="navbar-brand">
                            DHISHA
                        </div>
                    </div>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-center">
						<li><a href="#par1">Who We Are</a></li>
						<li><a href="#par2">What We Do</a></li>
						<li><a href="#gallery">Gallery</a></li>
						<li><a href="#contact">Contact Us</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<!-- @if (Auth::guest())
						<li><a href="javascript:void(0)" data-toggle="modal" onclick="openLoginModal();" class="btn btn-round btn-default"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Login / Sign-Up</a></li>
						@else
						<li><a href="/home"  class="btn btn-round btn-default"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{ Auth::user()->name }}</a></li>
						<li><a href="{{ route('logout') }}"
								onclick="event.preventDefault();
												 document.getElementById('logout-form').submit();" value="{{ csrf_token() }}" class="btn btn-round btn-default">
												 <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
								{!! trans('titles.logout') !!} {{csrf_field()}}
						</a></li>


						<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;" value="{{ csrf_token() }}">
								{{ csrf_field() }}
						</form>
						@endif -->
						<li><a href="#" class="btn btn-round btn-default" data-toggle="modal" data-target="#blModal"> <span class="glyphicon glyphicon-tint" aria-hidden="true"></span> Blood Donors</a></li>
					</ul>

            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
				<div class="modal fade" id="blModal" tabindex="-1" role="dialog" aria-labelledby="BloodDonDL" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h4><span class="glyphicon glyphicon-search glyphblue" aria-hidden="true"></span> Search for Blood Donor</h4>
							</div>

							<form action='/donorlist' method='post'>
							<div class="modal-body">



								<div class="row">





							<div class="" style="padding-left: 20%; padding-right: 20%;">
								<div class="form-group  label-floating">
									<label class="control-label">Blood Group</label>
									<select name="bgroup" class="form-control" required>
										<option disabled="" selected=""></option>
										<option value="...">Search All</option>
										<option value="A+VE">A+</option>
										<option value="A-VE">A-</option>
										<option value="A1+">A1+</option>
										<option value="A1-">A1-</option>
										<option value="A1B+">A1B+</option>
										<option value="A1B-">A1B-</option>
										<option value="A2+">A2+</option>
										<option value="A2-">A2-</option>
										<option value="A2B+">A2B+</option>
										<option value="A2B-">A2B-</option>
										<option value="AB+">AB+</option>
										<option value="AB-">AB-</option>
										<option value="B+VE">B+</option>
										<option value="B-VE">B-</option>
										<option value="Bombay Blood Group">Bombay Blood Group</option>
										<option value="INRA">INRA</option>
										<option value="O+VE">O+</option>
										<option value="O-VE">O-</option>

									</select>
                  <label class="control-label">Location</label>
                  <select placeholder="District" name="bgloc" class="form-control" required>
                    <option disabled="" selected=""></option>
                    <option value="...">Search All</option>
                    <option value=AL>Alappuzha</option>
                    <option value=ER>Ernakulam</option>
                    <option value=ID>Idukki</option>
                    <option value=KN>Kannur</option>
                    <option value=KS>Kasaragod</option>
                    <option value=KL>Kollam</option>
                    <option value=KT>Kottayam</option>
                    <option value=KZ>Kozhikode</option>
                    <option value=MA>Malappuram</option>
                    <option value=PL>Palakkad</option>
                    <option value=PT>Pathanamthitta</option>
                    <option value=TV>Thiruvananthapuram</option>
                    <option value=TS>Thrissur</option>
                    <option value=WA>Wayanad</option>
                  </select>
								</div>
							</div>





						</div>
						<div class="row">
							<div class="col-sm-12 text-center">
								<button type="button" class="btn btn-danger btn-round" data-dismiss="modal"><span class="glyphicon glyphicon-remove glyphred" aria-hidden="true"></span> Cancel</button>
								<button type="submit" value="Search" class="btn btn-primary btn-round ">
								<span class="glyphicon glyphicon-search glyphblue" aria-hidden="true"></span> Search</button>
							</div>

						</div>





		<!-- wizard container -->

		</div>
		{{csrf_field()}}
		</form>

		<!-- <div class="modal-footer">

		<div class="divider"></div>

		<button type="button" class="btn btn-primary btn-round btn-sm"><span class="glyphicon glyphicon-search glyphblue" aria-hidden="true"></span> Search</button>
		</div> -->
		</div>
		</div>
		</div>
		<!-- blood donors modal ends -->

		<!-- login form starts -->

		<!-- login form ends -->

    </div><!--  end container-->

		<div id="dhisha" class="blurred-container">

			<div class="img-src bghome1 " ></div>
			<div class='img-src blur bghome2' ></div>

        <!-- <div class="motto">
            <div>Get</div>
            <div class="border no-right-border">Sh</div><div class="border">it</div>
            <div>Done</div>
        </div> -->
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="motto">
					<div id="overlay_image"><img class="imgsi" src = "{{ asset('assets/img/logo.png') }}" align="center" ></div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="heromotto">

					<h1 class="heroh1">HELP CHANGE A CHILD'S LIFE</h1>
					<div><p class="heropara">All children have the right to a healthy, happy and fulfilling life. Donate Money & Support Charity to Keep children safe & free from harm.
						<br/><br/><a href='/donate' ><button class="btn btn-info btn-round btn-fill" >DONATE</button></a></p>
					</p>
					</div>

				</div>
			</div>
	</div>

    </div>

</div>



<div class="space-100"></div>


<div  class="main">
	<div class="space-100"></div>
	<div class=" tim-container col-md-12 container">
	    <div id="map">

				<div id=par1 class="row">
					<div class="col-md-5 col-sm-12">
						<div  class="text-center">
							<h1 class="text-center">Who We Are

								<small class="subtitle">Get to know us</small></h1>
								<hr>
							</div>
					</div>
							<div class="col-md-7 col-md-offset-0 col-sm-10 col-sm-offset-1">
							<p style="text-align: justify;text-justify: inter-word;">
								ജീവിതത്തിൽ ഏറ്റവും സുന്ദരമായ കാലഘട്ടം എന്ന് വിശേഷിപ്പിക്കാറുള്ളത് യുവത്വത്തെ ആയിരിക്കും .അതോടൊപ്പം തന്നെ ഏറെ കുറ്റപ്പെടുത്തലുകളും ഉണ്ടാകാറുള്ളത് യുവത്വത്തിന് നേരെ തന്നെ ആണ് . മദ്യത്തിനും മയക്കുമരുന്നിനും കീഴടങ്ങി സെൽഫി സ്റ്റിക്കിലും സോഷ്യൽ സൈറ്റുകളിലും മാത്രം അഭിരമിക്കുന്ന ധൂർത്ത്‌ ജീവിതങ്ങളായാണ് ഇന്ന് യുവത്വം നിർവചിക്കപ്പെടുന്നത് .
							</p>
							<p style="text-align: justify;text-justify: inter-word;">
								ഒരു പക്ഷെ 'ദിശ'യെ കുറിച് സംസാരിച്ചു തുടങ്ങേണ്ടതും ഇവിടെ നിന്ന് തന്നെയാണ് .പണത്തട്ടു തൂക്കി ഭാവിയെ സ്വപ്നം കാണാൻ ചെറുപ്പക്കാരെ പഠിപ്പിക്കുന്ന പുതിയ കാലത്തിന്റെ പ്രവണതകളോട് പൂർണമായി മുഖം തിരിച്ചു കൊണ്ട് നാം ജീവിക്കുന്ന സമൂഹത്തോട് നമുക്ക് നിർവഹിക്കാൻ ഉത്തരവാദിത്തങ്ങൾ ഏറെയുണ്ട് എന്ന കാഴ്ചപാട് ദിശയുടെ അന്തസത്ത : അത് ഞങ്ങളുടെ യുവത്വത്തിന് വസന്തം വിരിയിക്കാനാകുമെന്ന വലിയ ഓർമപ്പെടുത്തൽ കൂടിയാണ് .രാഷ്ട്രീയ മത പ്രസ്ഥാനങ്ങളുടെ കീഴിൽ പ്രവർത്തിക്കുന്ന ഒരു പാട് സാമൂഹിക സംഘടനകൾ നമുക്ക് ചുറ്റും ഉണ്ട് .സ്ഥാപിത താല്പര്യങ്ങൾക്ക് അപ്പുറത്തേക്ക് എത്രത്തോളം സ്വതന്ത്രമായ ഇടപെടലുകൾ അവയ്ക്ക് സാധ്യമാകും എന്ന് ചിന്തിച്ചിടത്ത് നിന്നു തന്നെയാണ് 'ദിശ ' എന്ന യുവ വിദ്യാർത്ഥി കൂട്ടായ്മ ആരംഭിക്കുന്നത്.നന്മ തന്നെയാണ് ജാതീയും മതവും നന്മയുടേത് തന്നെയാണ് രാഷ്ട്രീയവും എന്ന വിശാലമായ കാഴ്ചപ്പാടോടുകൂടി ഒരു വർഷത്തിലുപരിയായി ദിശ ജനങ്ങൾക്കിടയിൽ പ്രവർത്തിക്കുന്നു . കൂട്ട് ,പച്ച ,ഇടം എന്നിങ്ങനെ വ്യത്യസ്ത വിങ്ങുകളായാണ് ദിശയുടെ പ്രവർത്തങ്ങൾ.
							</p>


						</div>

					</div>


			</div> <!-- This one wants to be 100% height -->
	</div>
<div class="space-100"></div>



<div id=par2 class="tim-container">
	<div class="col-md-12 container">
	    <div id="map">

				<div class="row">
					<div class="col-sm-12">
						<div  class="text-center">
							<h1 class="text-center">What We Do

								<small class="subtitle">Our Divisions</small></h1>
								<h5>വിവിധ വിങ്ങുകളായാണ് ദിശയുടെ പ്രവർത്തനങ്ങൾ</h5>
								<hr>
							<!-- <img src="assets/img/dulau.jpg" alt="Rounded Image" class="img-rounded img-responsive img-dog"> -->
						</div>
					</div>
					<div class="main container">
						<!-- card1 -->
					<div class="card-box col-md-4">
							<div class="card card-with-border" data-background="image" data-src="{{ asset('assets/img/pacha.jpg') }}">
									<div class="header">
									</div>

									<div class="content text-center">
											<h4 class="title text-center">പച</h4>
											<p class="description" style="font-size: 13px;">മണ്ണും മനുഷ്യനുമായിട്ടുള്ള ബന്ധം വലിയ ഒരു സംസ്ക്കാരമായി തന്നെ നമുക്കിടയിൽ വളർന്നുവന്നിട്ടുള്ളതാണ് .പരസ്പര ആശ്രിതത്വത്തിന്റെ വലിയ സംസ്കാരം.അതിനെ മുറുകെ പിടിക്കാനാണ് പച്ച യുടെ ലക്ഷ്യം.</p>
									</div>
									<div class="text-center">
											 <a href="#" class="btn btn-info btn-fill btn-round">More</a>
									</div>
									<div class="filter"></div>
							</div> <!-- end card -->
					</div>
						<!-- card2 -->
						<div class="card-box col-md-4">
								<div class="card card-with-border" data-background="image" data-src="{{ asset('assets/img/idam.jpg') }}">
										<div class="header">
										</div>

										<div class="content text-center">
												<h4 class="title text-center">ഇടo</h4>
												<p class="description">സ്ത്രീക്കും പുരുഷനും തുല്യ അവകാശങ്ങളുള്ള സ്വന്തന്ത്രമായ പൊതുഇടങ്ങൾ എന്ന പ്രഖ്യാപനമാണ് ദിശയുടെ ഇടം എന്ന വിങ് .</p>
										</div>
										<div class="text-center">
												 <a href="#" class="btn btn-info btn-fill btn-round">More</a>
										</div>
										<div class="filter"></div>
								</div> <!-- end card -->
						</div>
						<!-- card3 -->
						<div class="card-box col-md-4">
								<div class="card card-with-border" data-background="image" data-src="{{ asset('assets/img/kootu.jpg') }}">
										<div class="header">
										</div>

										<div class="content text-center">
												<h4 class="title text-center">കൂട്ട്</h4>
												<p class="description" style="font-size: 13px;">കളിച്ചു നടക്കേണ്ട പ്രായത്തിൽ തന്നെ വേദനകളോട് പൊരുതേണ്ടി വന്ന ഞങ്ങളുടെ കൂടെ പിറപ്പുകൾ .അവർക്ക് പണവും ഒരു പക്ഷെ അതിലുപരിയായി മുറുകെ പിടിക്കാൻ ഒരു കൈവിരലകനാണ് കൂട്ട് ശ്രമിക്കുന്നത് .</p>
										</div>
										<div class="text-center">
												 <a href="#" class="btn btn-info btn-fill btn-round">More</a>
										</div>
										<div class="filter"></div>
								</div> <!-- end card -->
						</div>
					</div>


					</div>


			</div> <!-- This one wants to be 100% height -->
	</div>
</div>
<div class="space-100"></div>
<div class="tim-container">
<section class="publicaciones-blog-home">
      <div class="container">
        <div class="">
          <h2>News  <b>&<b> Blog</b></h2>
          <div class="row-page row">
            <div class="col-page col-sm-8 col-md-6">
              <a href="" class="black fondo-publicacion-home">
                <div class="img-publicacion-principal-home">
                  <img class="" src="https://placeholdit.imgix.net/~text?txtsize=34&txt=&w=500&h=300">
                </div>
                <div class="contenido-publicacion-principal-home">
                  <h3>Neque porro quisquam est qui dolorem ipsum</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat porta ex, sed ullamcorper ipsum lacinia nec.<span>...</span></p>
                </div>
                <div class="mascara-enlace-blog-home">
                  <span>Read More</span>
                </div>
              </a>
            </div>
            <div class="col-page col-sm-4 col-md-3">
              <a href=""  class="fondo-publicacion-home">
                <div class="img-publicacion-home">
                  <img class="img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=34&txt=&w=500&h=300">
                </div>
                <div class="contenido-publicacion-home">
                  <h3>Neque porro quisquam est qui dolorem ipsum</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat porta ex, sed ullamcorper ipsum lacinia nec.<span>...</span></p>
                </div>
                <div class="mascara-enlace-blog-home">
                  <span>Read More</span>
                </div>
              </a>
            </div>
            <div class="col-page col-sm-4 col-md-3">
              <a href="" class="fondo-publicacion-home">
                <div class="img-publicacion-home">
                  <img class="img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=34&txt=&w=500&h=300">
                </div>
                <div class="contenido-publicacion-home">
                  <h3>Neque porro quisquam est qui dolorem ipsum</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat porta ex, sed ullamcorper ipsum lacinia nec.<span>...</span></p>
                </div>
                <div class="mascara-enlace-blog-home">
                  <span>Read More</span>
                </div>
              </a>
            </div>
            <div class="col-page col-sm-4 col-md-3">
              <a href="" class="fondo-publicacion-home">
                <div class="img-publicacion-home">
                  <img class="img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=34&txt=&w=500&h=300">
                </div>
                <div class="contenido-publicacion-home">
                  <h3>Neque porro quisquam est qui dolorem ipsum</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat porta ex, sed ullamcorper ipsum lacinia nec.<span>...</span></p>
                </div>
                <div class="mascara-enlace-blog-home">
                  <span>Read More</span>
                </div>
              </a>
            </div>
            <div class="hidden-sm col-page col-sm-4 col-md-3">
              <a href="" class="fondo-publicacion-home">
                <div class="img-publicacion-home">
                  <img class="img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=34&txt=&w=500&h=300">
                </div>
                <div class="contenido-publicacion-home">
                  <h3>Neque porro quisquam est qui dolorem ipsum</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat porta ex, sed ullamcorper ipsum lacinia nec.<span>...</span></p>
                </div>
                <div class="mascara-enlace-blog-home">
                  <span>Read More</span>
                </div>
              </a>
            </div>
            <div class="hidden-sm col-page col-sm-4 col-md-3">
              <a href="" class="fondo-publicacion-home">
                <div class="img-publicacion-home">
                  <img class="img-responsive" src="https://placeholdit.imgix.net/~text?txtsize=34&txt=&w=500&h=300">
                </div>
                <div class="contenido-publicacion-home">
                  <h3>Neque porro quisquam est qui dolorem ipsum</h3>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed placerat porta ex, sed ullamcorper ipsum lacinia nec.<span>...</span></p>
                </div>
                <div class="mascara-enlace-blog-home">
                  <span>Read More</span>
                </div>
              </a>
            </div>
            <div class="col-page col-sm-4 col-md-3">
              <a href="#" class="todas-las-publicaciones-home">
                  <span>Neque porro quisquam est qui dolorem ipsum</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
	</div>

<div class="space-100"></div>

	<div class="tim-container">
		<div  class="text-center">
			<h1 class="text-center">Facebook Page

				<small class="subtitle">Connect with us through Facebook</small></h1>
		</div>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-6 text-center">
						<img style="padding-left: 70px;" src="{{ asset('assets/img/fb.png') }}" class="img-responsive img-center">


					</div>

					<div class="col-md-6 text-center">
						<div class="iframe-container">
		    <!-- embed code here -->
<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fdhishakerala%2F&tabs=timeline&width=500&height=500&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=false&appId" width="500" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

					</div>
					</div>
				</div>
			</div>
		</section>
	</div>


<div class="space-100"></div>

<div class="tim-container">
	<div  class="text-center">
		<h1 class="text-center">Contact Us

			<small class="subtitle">Connect with us</small></h1>
	</div>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-5">
					<aside class="sidebar">
						<div class="single contact-info">
							<h3 class="side-title">Contact Information</h3>
							<ul class="list-unstyled">
								<li>
									<div class="icon"><i class="fa fa-map-marker"></i></div>
									<div class="info"><p>Kurumbani Nagar<br>Opposite Rajas HSS<br>Changuvetty Kottakal</p></div>
								</li>
								<li>
									<div class="icon"><i class="fa fa-phone"></i></div>
									<div class="info"><p>+91 9400630581<br>+91 9645909333</p></div>
								</li>
								<li>
									<div class="icon"><i class="fa fa-envelope"></i></div>
									<div class="info"><p>info@dhisha.in<br>dhisha@gmail.com</p></div>
								</li>
							</ul>
						</div>
					</aside>
				</div>
				<div class="col-md-8 col-sm-7 text-center">
					<div class="iframe-container">
	    <!-- embed code here -->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3922.5567638277416!2d76.2118920640113!3d10.535533770033307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba7ee57619569c1%3A0x5d52563713bac6f!2sDhisha+charitable+trust!5e0!3m2!1sen!2s!4v1493346092621" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

				</div>
				</div>
			</div>
		</div>
	</section>
</div>

<div class="space-100"></div>


<div class="bluemain tim-container">
	<div  class="text-center" style="padding: 25px;">
		<h1 class="text-center" style="color: #ffffff;">Suggestions
		<small class="subtitle" style="color: #ffffff;"> Your ideas and suggestions are always welcome!</small></h1>
	</div>

		<div class="container">
			<div class="row">
										<div class="col-md-12">
												<form method='post' action='/getfeed'>

														<div class="row">
																<div class="col-md-5">
																		<div class="form-group">
																				<input type="text" class="form-control" name=fbname placeholder="Your Name *" id="name" required="" data-validation-required-message="Please enter your name.">
																				<p class="help-block text-danger"></p>
																		</div>
																		<div class="form-group">
																				<input type="email" class="form-control" name=fbemail placeholder="Your Email *" id="email" required="" data-validation-required-message="Please enter your email address.">
																				<p class="help-block text-danger"></p>
																		</div>
																		<div class="form-group">
																				<div class="g-recaptcha" data-sitekey="6LetbxwUAAAAAPSFjCi2CCtRZMZoyIaP8jCTO9Mq"></div>
																				<p class="help-block text-danger"></p>
																		</div>
																		<!-- <div class="form-group">
																				<input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required="" data-validation-required-message="Please enter your phone number.">
																				<p class="help-block text-danger"></p>
																		</div> -->
																</div>
																<div class="col-md-7">
																		<div class="form-group">
																				<textarea rows="4" class="form-control" name=fbmatter placeholder="Your Message *" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
																				<p class="help-block text-danger"></p>
																		</div>
																</div>
																<div class="clearfix"></div>
																<div class="col-lg-12 text-center" style="padding: 20px;`">
																		<!-- <div id="success" style="color:#fff; border-color:#fff; "></div> -->
																		<button type="submit" class="btn btn-fill btn-round btn-default">Send Message</button>
																</div>
														</div>

												</form>
										</div>

								</div>


		</div>

</div>


<!-- end main -->


<footer>
<div class="container">
<div class="row">
<div class="col-md-6 col-sm-12 right-border">
<div class="footer-about">
<h2 class="footer-title">About Us</h2>
<p>DHISHA is an organization of socially committed students and youth. The organisation is registered under societies act with registration number MPM/CA/294/2015.</p>
</div>
<div class="copyright hidden-sm hidden-xs">
<p>Copyrights &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://nextbootstrap.com/" title="">Dhisha</a>. All Right Reserved.</p>
<p>Developed By : <a href="#" title="">RSRV</a></p>
</div>
</div>
<div class="col-md-6 col-sm-12">
<div class="col-md-6 col-sm-6">
<div class="contact-info">
<h2 class="footer-title">Contact Info</h2>
<div class="single">
	<i class="fa fa-map-marker"></i>

	<p>Kurumbani Nagar,<br>
Changuvetty, Kottakal</p>
</div>
<div class="single">
	<i class="fa fa-phone"></i>
	<p>+91 9400630581</p>
</div>

<div class="single">
	<i class="fa fa-envelope"></i>
	<p>info@dhisha.in</p>
</div>

<div class="social-icon">
	<ul class="list-inline">
		<li><a href="https://www.facebook.com/dhishakerala/" title=""><i class="fa fa-facebook"></i></a></li>
		<li><a href="http://sirseni.com/" title=""><i class="fa fa-twitter"></i></a></li>
		<!-- <li><a href="http://sirseni.com/" title=""><i class="fa fa-instagram"></i></a></li> -->
		<!-- <li><a href="http://sirseni.com/" title=""><i class="fa fa-linkedin"></i></a></li> -->
	</ul>
</div>
</div>
</div>
<div class="col-md-6 col-sm-6 left-border">
<div class="navigation">
<h2 class="footer-title">Navigation</h2>
<ul class="list-unstyled">
	<li><a href="http://centerend.com/" title="">Home</a></li>
	<li><a href="http://centerend.com/" title="">Donate</a></li>
	<li><a href="http://centerend.com/" title="">Blood Donation</a></li>
	<li><a href="http://centerend.com/" title="">News & Blog</a></li>
	<li><a href="http://centerend.com/" title="">Contact Us</a></li>
	<!-- <li><a href="http://centerend.com/" title="">Career</a></li>
	<li><a href="http://centerend.com/" title="">Sitemap</a></li>
	<li><a href="http://centerend.com/" title="">Contact Us</a></li> -->
</ul>
</div>
</div>
<div class="clearfix"></div>
<div class="copyright visible-sm visible-xs">
	<p>Copyrights &copy; <script>document.write(new Date().getFullYear())</script> <a href="http://nextbootstrap.com/" title="">Dhisha</a>. All Right Reserved.</p>
	<p>Developed By : <a href="#" title="">RSRV</a></p>
</div>
</div>
</div>
</div>
</footer>


</div>
<!-- <div class="row">
		 <div class="col-md-12 text-center">
				<div class="credits">
						&copy; <script>document.write(new Date().getFullYear())</script> Get Shit Done Kit by <a href="http://creative-tim.com"> Creative Tim</a>, made with <i class="fa fa-heart heart" alt="love"></i> for a better web.
				</div>
		</div>
</div> -->

</body>

		<script src="https://www.google.com/recaptcha/api.js?onload=CaptchaCallback&render=explicit" async defer></script>
    <script src="{{ asset('jquery/jquery-1.10.2.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/jquery-ui-1.10.4.custom.min.js') }}" type="text/javascript"></script>

	<script src="{{ asset('bootstrap3/js/bootstrap.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/js/gsdk-checkbox.js') }}"></script>
	<script src="{{ asset('assets/js/gsdk-radio.js') }}"></script>
	<script src="{{ asset('assets/js/gsdk-bootstrapswitch.js') }}"></script>
	<script src="{{ asset('assets/js/get-shit-done.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>
	<script src="{{ asset('assets/js/hipster-cards.js') }}"></script>


	<script type="text/javascript">
	var CaptchaCallback = function() {
		$('.g-recaptcha').each(function(index, el) {
			grecaptcha.render(el, {'sitekey' : '6LetbxwUAAAAAPSFjCi2CCtRZMZoyIaP8jCTO9Mq'});
		});
	};
	</script>

<script type="text/javascript">

    $('.btn-tooltip').tooltip();
    $('.label-tooltip').tooltip();
    $('.pick-class-label').click(function(){
        var new_class = $(this).attr('new-class');
        var old_class = $('#display-buttons').attr('data-class');
        var display_div = $('#display-buttons');
        if(display_div.length) {
        var display_buttons = display_div.find('.btn');
        display_buttons.removeClass(old_class);
        display_buttons.addClass(new_class);
        display_div.attr('data-class', new_class);
        }
    });
    $( "#slider-range" ).slider({
		range: true,
		min: 0,
		max: 500,
		values: [ 75, 300 ],
	});
	$( "#slider-default" ).slider({
			value: 70,
			orientation: "horizontal",
			range: "min",
			animate: true
	});
	$('.carousel').carousel({
      interval: 4000
    });


</script>
</html>
