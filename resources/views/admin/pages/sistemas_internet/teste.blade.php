
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Accordion Menu</title>
  <link rel='stylesheet' href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'>
  {{-- <link rel="stylesheet" href="./style.css"> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<script>
    function mostrar_ocultar() {
  document.getElementById("teste").style.display = "none";
}
    $("#leftside-navigation .sub-menu > a").click(function(e) {
  $("#leftside-navigation ul ul").slideUp(), $(this).next().is(":visible") || $(this).next().slideDown(),
  e.stopPropagation()
})
</script>
<style>
@import url('//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css');
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://fonts.gstatic.com/s/opensans/v17/mem5YaGs126MiZpBA-UN_r8OUuhs.ttf) format('truetype');
}
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://fonts.gstatic.com/s/opensans/v17/mem8YaGs126MiZpBA-UFVZ0e.ttf) format('truetype');
}
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://fonts.gstatic.com/s/opensans/v17/mem5YaGs126MiZpBA-UN7rgOUuhs.ttf) format('truetype');
}
body {
  color: #5D5F63;
  background: white;
  font-family: 'Open Sans', sans-serif;
  padding: 0;
  margin: 0;
  text-rendering: optimizeLegibility;
  -webkit-font-smoothing: antialiased;
}
.sidebar-toggle {
  margin-left: -240px;
}
.sidebar {
  width: 240px;
  height: 100%;
  background:white;
  position: absolute;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
  z-index: 100;
}
.sidebar #leftside-navigation ul,
.sidebar #leftside-navigation ul ul {
  margin: -2px 0 0;
  padding: 0;
}
.sidebar #leftside-navigation ul li {
  list-style-type: none;
  border-bottom: 1px solid rgba(255, 255, 255, 0.05);
}
.sidebar #leftside-navigation ul li.active > a {
  background-image: radial-gradient(ellipse at center,#17882c 1%,#00510f 100%);
  color: white;
}
.sidebar #leftside-navigation ul li.active ul {
  display: block;
}
.sidebar #leftside-navigation ul li a {
  color: #aeb2b7;
  text-decoration: none;
  display: block;
  padding: 18px 0 18px 25px;
  font-size: 12px;
  outline: 0;
  -webkit-transition: all 200ms ease-in;
  -moz-transition: all 200ms ease-in;
  -o-transition: all 200ms ease-in;
  -ms-transition: all 200ms ease-in;
  transition: all 200ms ease-in;
}
.sidebar #leftside-navigation ul li a:hover {
  color: #1abc9c;
}
.sidebar #leftside-navigation ul li a span {
  display: inline-block;
}
.sidebar #leftside-navigation ul li a i {
  width: 20px;
}
.sidebar #leftside-navigation ul li a i .fa-angle-left,
.sidebar #leftside-navigation ul li a i .fa-angle-right {
  padding-top: 3px;
}
.sidebar #leftside-navigation ul ul {
  display: block;
}
.sidebar #leftside-navigation ul ul li {
  /* background: #23313f; */
  margin-bottom: 0;
  margin-left: 0;
  margin-right: 0;
  border-bottom: block;
}
.sidebar #leftside-navigation ul ul li a {
  font-size: 12px;
  padding-top: 13px;
  padding-bottom: 13px;
  color: #aeb2b7;
}
</style>
</head>
<body>
<!-- partial:index.partial.html -->
<aside class="sidebar">
  <div id="leftside-navigation" class="nano">
    <ul class="nano-content">
      <li>
        <a href="index.html"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
      </li>
      <li class="sub-menu" >
        <a href="" ><i class="fa fa-cogs"></i><span onclick="mostrar_ocultar()">UI Elements</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>

          <li><a href="ui-alerts-notifications.html" id="teste">Alerts &amp; Notifications</a>
          </li>
          <li><a href="ui-panels.html">Panels</a>
          </li>
          <li><a href="ui-buttons.html">Buttons</a>
          </li>
          <li><a href="ui-slider-progress.html">Sliders &amp; Progress</a>
          </li>
          <li><a href="ui-modals-popups.html">Modals &amp; Popups</a>
          </li>
          <li><a href="ui-icons.html">Icons</a>
          </li>
          <li><a href="ui-grid.html">Grid</a>
          </li>
          <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a>
          </li>
          <li><a href="ui-nestable-list.html">Nestable Lists</a>
          </li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-table"></i><span>Tables</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li><a href="tables-basic.html">Basic Tables</a>
          </li>

          <li><a href="tables-data.html">Data Tables</a>
          </li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa fa-tasks"></i><span>Forms</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li><a href="forms-components.html">Components</a>
          </li>
          <li><a href="forms-validation.html">Validation</a>
          </li>
          <li><a href="forms-mask.html">Mask</a>
          </li>
          <li><a href="forms-wizard.html">Wizard</a>
          </li>
          <li><a href="forms-multiple-file.html">Multiple File Upload</a>
          </li>
          <li><a href="forms-wysiwyg.html">WYSIWYG Editor</a>
          </li>
        </ul>
      </li>
      <li class="sub-menu active">
        <a href="javascript:void(0);"><i class="fa fa-envelope"></i><span>Mail</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li class="active"><a href="mail-inbox.html">Inbox</a>
          </li>
          <li><a href="mail-compose.html">Compose Mail</a>
          </li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-bar-chart-o"></i><span>Charts</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li><a href="charts-chartjs.html">Chartjs</a>
          </li>
          <li><a href="charts-morris.html">Morris</a>
          </li>
          <li><a href="charts-c3.html">C3 Charts</a></li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-map-marker"></i><span>Maps</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li><a href="map-google.html">Google Map</a>
          </li>
          <li><a href="map-vector.html">Vector Map</a>
          </li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="typography.html"><i class="fa fa-text-height"></i><span>Typography</span></a>
      </li>
      <li class="sub-menu">
        <a href="javascript:void(0);"><i class="fa fa-file"></i><span>Pages</span><i class="arrow fa fa-angle-right pull-right"></i></a>
        <ul>
          <li><a href="pages-blank.html">Blank Page</a>
          </li>
          <li><a href="pages-login.html">Login</a>
          </li>
          <li><a href="pages-sign-up.html">Sign Up</a>
          </li>
          <li><a href="pages-calendar.html">Calendar</a>
          </li>
          <li><a href="pages-timeline.html">Timeline</a>
          </li>
          <li><a href="pages-404.html">404</a>
          </li>
          <li><a href="pages-500.html">500</a>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</aside>

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
{{-- <script  src="./script.js"></script> --}}

</body>
</html>
