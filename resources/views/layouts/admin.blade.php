<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="icon" href="https://brijesh2534.github.io/ipodetails/ipodetails.jpeg" type="image/icon type">
        <meta charset="utf-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>
        <meta name="description" content="Ipo Details - Check All New Ipo Date, Latest Gmp And Details">
        <meta name="keywords" content="IpoDetails, Ipo Gmp, Graymarket Premium, Ipo Dates, Latest Ipo Details">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
  @import url(https://fonts.googleapis.com/css?family=Raleway);
h2 {
vertical-align: center;
text-align: center;
}

html, body {
margin: 0;
height: 100%;
}

* {
font-family: "Raleway";
box-sizing: border-box;
}

.top-nav {
display: flex;
flex-direction: row;
align-items: center;
justify-content: space-between;
background-color: #00BAF0;
background: linear-gradient(to left, #f46b45, #eea849);
/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
color: #FFF;
height: 50px;
padding: 1em;
}

.menu {
display: flex;
flex-direction: row;
list-style-type: none;
margin: 0;
padding: 0;
}

.menu > li {
margin: 0 1rem;
overflow: hidden;
}

.menu-button-container {
display: none;
height: 100%;
width: 30px;
cursor: pointer;
flex-direction: column;
justify-content: center;
align-items: center;
}

#menu-toggle {
display: none;
}

.menu-button,
.menu-button::before,
.menu-button::after {
display: block;
background-color: #fff;
position: absolute;
height: 4px;
width: 30px;
transition: transform 400ms cubic-bezier(0.23, 1, 0.32, 1);
border-radius: 2px;
}

.menu-button::before {
content: '';
margin-top: -8px;
}

.menu-button::after {
content: '';
margin-top: 8px;
}

#menu-toggle:checked + .menu-button-container .menu-button::before {
margin-top: 0px;
transform: rotate(405deg);
}

#menu-toggle:checked + .menu-button-container .menu-button {
background: rgba(255, 255, 255, 0);
}

#menu-toggle:checked + .menu-button-container .menu-button::after {
margin-top: 0px;
transform: rotate(-405deg);
}

@media (max-width: 700px) {
.menu-button-container {
display: flex;
}
.menu {
position: absolute;
top: 0;
margin-top: 50px;
left: 0;
flex-direction: column;
width: 100%;
justify-content: center;
align-items: center;
}
#menu-toggle ~ .menu li {
height: 0;
margin: 0;
padding: 0;
border: 0;
transition: height 400ms cubic-bezier(0.23, 1, 0.32, 1);
}
#menu-toggle:checked ~ .menu li {
border: 1px solid #333;
height: 2.5em;
padding: 0.5em;
transition: height 400ms cubic-bezier(0.23, 1, 0.32, 1);
}
.menu > li {
display: flex;
justify-content: center;
margin: 0;
padding: 0.5em 0;
width: 100%;
color: rgb(22, 22, 22);
background-color: rgb(246, 241, 241);
}
.menu > li:not(:last-child) {
border-bottom: 1px solid #444;
}
}
</style>    
	    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4016979694677670"
     crossorigin="anonymous"></script>
	    
	    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-251002060-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-251002060-1');
</script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

</head>
<body>
<section class="top-nav">
      <div>
        <img src="https://brijesh2534.github.io/ipodetails/ipodetails.jpeg" style="width:50px;height: 50px; border-style:solid;">
      </div>
      <input id="menu-toggle" type="checkbox" />
      <label class='menu-button-container' for="menu-toggle">
      <div class='menu-button'></div>
    </label>
      <ul class="menu">
        <li><b><a href="/admin/ipos">Ipo data</a></b></li>
        <li><b><a href="/admin/smes">Sme data</a></b></li>
        <li><b><a href="/admin/gmp">Gmp data</a></b></li>
        <li><b><a href="/admin/subscriptions">Subscription data</a></b></li>
        <li><b><a href="/admin/companydetails">Companydetails data</a></b></li>
        <li><b><a href="/admin/reviews">Reviews data</a></b></li>
        <li><b><a href="/admin/marketnews">Marketnews data</a></b></b></li>
      </ul>
      <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button class="w3-button w3-block w3-orange" type="submit">Logout</button>
        </form>
    </section>
    <hr>

    <div class="w3-container">
        @yield('content')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </div>
</body>
</html>
