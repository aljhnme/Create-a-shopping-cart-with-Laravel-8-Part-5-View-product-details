@if(!Auth::check())
<script type="text/javascript">
	window.location.href='/register';
</script>
@endif
<div class="top-header-area" id="sticker" style="background:#34495E;">
  <div class="container">
  	<div class="row">
  	  <div class="col-lg-12 col-sm-12 text-center">
  	  	<div class="main-menu-wrap">
  	  		
          <div class="site-logo">
          	<a><img src="{{ asset('assets/market.png') }}"></a>
          </div>

          <nav class="main-menu">
          	<ul>
          	  <li><a href="">Profile</a></li>
              <li><a href="{{ url('/Logout') }}">Logout</a></li>
          	  <li>
          	  <div class="header-icons">
          	    <div class="header-icons">
          	  	 <a class="shopping-cart" href=""><i class="fas fa-shopping-cart"></i></a>
				          <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
				           <a href="{{ url('/insert') }}" class="fas"><svg fill="#ECF0F1" height="24" viewBox="0 0 26 27" width="24" xmlns="http://www.w3.org/2000/svg"><path  d="M20.5 10.9589V22.4112C20.5 23.905 19.3 25.1 17.8 25.1H4.2C2.7 25.1 1.5 23.905 1.5 22.4112V3.78878C1.5 2.295 2.7 1.09998 4.2 1.09998H17.8C19.3 1.09998 20.5 2.295 20.5 3.78878V4.98379V6.07923" stroke="#4F4F4F" stroke-miterlimit="10" stroke-width="2"/><path d="M4.7 8.07092H16.7" stroke="#4F4F4F" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/><path d="M4.7 13.0502H13" stroke="#4F4F4F" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/><path d="M4.7 18.129H8.5" stroke="#4F4F4F" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2"/><path d="M21.7 4.58547L10.9 16.4361L10.1 19.7224L13.3 18.627L24.1 6.77634C24.5 6.27842 24.5 5.58132 24.1 5.18298L23.3 4.48588C22.9 4.08754 22.1 4.18713 21.7 4.58547Z" stroke="#4F4F4F" stroke-miterlimit="10" stroke-width="2"/><path d="M20.5 5.97968L22.9 8.17054" stroke="#4F4F4F" stroke-miterlimit="10" stroke-width="2"/><path d="M10.9 16.5356L13.3 18.6269" stroke="#4F4F4F" stroke-miterlimit="10" stroke-width="2"/></svg></a>

          	  	</div>
          	  	</div>
          	  </li>
          	</ul>
          </nav>
           <a class="mobile-show search-bar-icon" href="#">
			 <i class="fas fa-search"></i></a>
		    <div class="mobile-menu"></div>
  	  	</div>
  	  </div>	
  	</div>
  </div>
</div>