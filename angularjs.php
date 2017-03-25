<html><head><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide{display:none !important;}ng\:form{display:block;}.ng-animate-start{clip:rect(0,auto,auto,0);-ms-zoom:1.0001;}.ng-animate-active{clip:rect(-1px,auto,auto,0);-ms-zoom:1;}</style>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Angular Boilerplate - jsFiddle demo</title>
<!--scripts-->

<!--CDN_angular.js-->
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.1/angular.js"></script>

<!--my_script-->
<script src="js/angularscript.js"></script>
<!--/scripts-->


<!--stylesheets-->

<link rel="stylesheet" type="text/css" href="/css/normalize.css">
<link rel="stylesheet" type="text/css" href="/css/result-light.css">
<style type="text/css"></style>

<!--layout-->
<link rel="stylesheet" type="text/css" href="css/angularlayout.css">
  
<!--W3.css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">


<!--/stylesheets-->

</head>

<body ng-app="myApp" ng-controller="MyCtrl" class="ng-scope">
<p class="ng-binding">{{}}</p>
  <nav id="sidebar" class="navigation" >
  <br>
  <h3><b>Search Abbreviation:</b></h3>

<p><input id="box" type="text" ng-model="test">  <i class="fa fa-search w3-xlarge"></i></p>
  <ul >
  <li ng-repeat="x in names | filter:test"> <!--search_box-->
    {{ x }}
  </li>
</ul>
</nav>
<input type="checkbox" id="nav-trigger" class="nav-trigger" /> <!--hamburger_menu-->
<label for="nav-trigger"></label>

<div class="site-wrap">

<div  class="w3-container ">
<fieldset style="margin:10%">

    <legend ><h1>Currency Converter</h1></legend>


<h3 >Price:</h3><input type="number" name="quantity" min="1"  ng-model="price" ng-init="price=1"><br></br></br> <!--price_input and its validation-->
<div id="boxes">
<select id="box" ng-model="From" ng-options="x for (x, y) in foo" > <!--select_menu_from-->
</select>
</div>
<div id="boxes">
<h4><img id="image" src="images/convert-image.png" alt="converter"><h4></div>
<div id="boxes">
<select id="box" ng-model="To" ng-options="x for (x, y) in foo">   <!--select_menu_to-->
</select>
</div>
<br><br>
     
	<!--displaying_selected_value-->
    <div id="div1" ng-repeat="(key,value) in foo" ng-if="value == From">
    <p><h2>{{price}} <span id="text1">{{key}}</span> = </h2></p>
	</div>
	
	<!--conversion-->
	<div id="div1"ng-repeat="(key,value) in foo" ng-if="value == To">
	<p><h2>{{(To/From)*price}} <span id="text2" >{{key}}</span></h2></p>
	</div>
	
	<h1></h1>
	
	<!--displaying_selected_value-->
	<div id="div2" ng-repeat="(key,value) in foo" ng-if="value == To">
	<p><h2>{{price}} <span id="text2">{{key}}</span> = </h2></p>
	</div>
	
	<!--swapping-->
	<div id="div2" ng-repeat="(key,value) in foo" ng-if="value == From">
	<p><h2>{{(From/To)*price}} <span id="text1" >{{key}}</span></h2></p>
	</div>
    
</fieldset>

	</div>
<div/>


</body>
</html>
