<html>
	<head>
		<title>Laravel SuiteCRM Advanced Open Portal</title>
	
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
	        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<style>
body {
  background-color: #F5F5F5;
}                    
h1,
h2,
h3,
h4,
h5,
h6 {
  font-weight: 100;
}
h1 {
  font-size: 30px;
}
h2 {
  font-size: 24px;
}
h3 {
  font-size: 16px;
}
h4 {
  font-size: 14px;
}
h5 {
  font-size: 12px;
}
h6 {
  font-size: 10px;
}
h3,
h4,
h5 {
  margin-top: 5px;
  font-weight: 600;
}
/* ERROR & LOGIN & LOCKSCREEN*/
.middle-box {
  max-width: 400px;
  z-index: 100;
  margin: 0 auto;
  padding-top: 40px;
}
.lockscreen.middle-box {
  width: 200px;
  padding-top: 110px;
}
.loginscreen.middle-box {
  width: 300px;
}
.loginColumns {
  max-width: 420px;
  margin: 0 auto;
  padding: 100px 20px 20px 20px;
}
.passwordBox {
  max-width: 460px;
  margin: 0 auto;
  padding: 100px 20px 20px 20px;
}
.logo-name {
  color: #e6e6e6;
  font-size: 180px;
  font-weight: 800px;
  margin-top: 10px;
  margin-bottom: 10px;
  
}
.middle-box h1 {
  font-size: 170px;
}
.wrapper .middle-box {
  margin-top: 140px;
}
.lock-word {
  z-index: 10;
  position: absolute;
  top: 110px;
  left: 50%;
  margin-left: -470px;
}
.lock-word span {
  font-size: 100px;
  font-weight: 600;
  color: #e9e9e9;
  display: inline-block;
}
.lock-word .first-word {
  margin-right: 160px;
}

.block {
  margin-bottom: 20px;
  clear: both;
  display: block;
  width: 100%;
}
.block.collapsed {
  overflow: hidden;
}
.block .block-heading {
  background: none repeat scroll 0 0 #ffffff;
  border-left: 1px solid #dedede;
  border-right: 1px solid #dedede;
  border-top: 1px solid #e6e6e6;
  -webkit-block-shadow: 1px 4px 4px rgba(0, 0, 0, 0.2) !important;
  -moz-block-shadow: 1px 4px 4px rgba(0, 0, 0, 0.2) !important;
  block-shadow: 1px 4px 4px rgba(0, 0, 0, 0.2) !important;
  padding: 15px;
  margin: 0 !important;
}
.block .block-heading + .block-content-outer {
  border-top: 0 !important;
}
.c-widget .c-widget-heading,
.block .block-heading {
  float: left;
  font-family: "Roboto", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 16px;
  width: 100%;
}
.c-widget .c-widget-heading .h2,
.c-widget .c-widget-heading .main-text,
.block .block-heading .h2,
.block .block-heading .main-text {
  float: left;
}
.block .block-heading .main-text .badge {
  margin-top: 6px;
}
.block .block-heading .block-controls {
  float: right;
  margin: 7px 0 0;
}
.block .block-heading .block-controls > a,
.block .block-heading .block-controls > button,
.block .block-heading .block-controls > div.btn-group {
  float: right;
  margin: 0 0 4px 4px;
}
.block .block-heading .block-controls > .icon {
  float: right;
  opacity: 0.5;
  margin: 0 0 0 4px;
  cursor: pointer;
  -webkit-transition: all 0.5s;
  -moz-transition: all 0.5s;
  -o-transition: all 0.5s;
  transition: all 0.5s;
}
.block .block-heading .block-controls .icon:hover {
  opacity: 1;
}
.block .block-content-outer {
  background: none repeat scroll 0 0 #ffffff;
  border-left: 1px solid #dedede;
  border-right: 1px solid #dedede;
  border-top: 1px solid #e6e6e6;
  border-bottom: 3px solid #4596f1;
  padding: 10px;
  clear: both;
  position: relative;
  -moz-border-radius: 0 0 5px 5px !important;
  -webkit-border-radius: 0 0 5px 5px !important;
  border-radius: 0 0 5px 5px !important;
  -webkit-block-shadow: 1px 4px 4px rgba(0, 0, 0, 0.2) !important;
  -moz-block-shadow: 1px 4px 4px rgba(0, 0, 0, 0.2) !important;
  block-shadow: 1px 4px 4px rgba(0, 0, 0, 0.2) !important;
}
.block.collapsed .block-heading {
  -moz-border-radius: 0 0 5px 5px !important;
  -webkit-border-radius: 0 0 5px 5px !important;
  border-radius: 0 0 5px 5px !important;
}
.block.collapsed .block-content-outer {
  display: none;
}
.block.collapsed .block-heading .block-controls .icon.block-control-collapse {
  color: #FF0000;
  -webkit-transform: rotate(90deg);
  -moz-transform: rotate(90deg);
  -o-transform: rotate(90deg);
  -ms-transform: rotate(90deg);
  transform: rotate(90deg);
}
 .block-toggle {
    position: absolute;
    top: 50%;
    right: 0;
    margin-top: -8px;
  }
/* Block Colors */
.block.highlight-color-green,
.block.highlight-color-orange,
.block.highlight-color-yellow,
.block.highlight-color-blue,
.block.highlight-color-red,
.block.highlight-color-lime,
.block.highlight-color-purple {
  border-bottom: 0 !important;
}
.block.highlight-color-green .block-content-outer {
  border-bottom: 3px solid #6ec06e;
}
.block.highlight-color-orange .block-content-outer {
  border-bottom: 3px solid #ff8b1a;
}
.block.highlight-color-yellow .block-content-outer {
  border-bottom: 3px solid #ffd040;
}
.block.highlight-color-blue .block-content-outer {
  border-bottom: 3px solid #4596f1;
}
.block.highlight-color-red .block-content-outer {
  border-bottom: 3px solid #c93232;
}
.block.highlight-color-lime .block-content-outer {
  border-bottom: 3px solid #b2cd4d;
}
.block.highlight-color-purple .block-content-outer {
  border-bottom: 3px solid #ff4db6;
}
/* Block Sizes */
.block .block-content-outer .block-content-inner {
  min-height: 300px;
  margin-left: 55px;
}
.block .block-size-medium .block-content-outer .block-content-inner{
  height: 283px;
  overflow: hidden;
}
.block .block-size-normal .block-content-outer .block-content-inner {
  height: 210px;
  overflow: hidden;
}
.block .block-size-login .block-content-outer .block-content-inner {
  height: 210px;
  overflow: hidden;
  width: 100px;
}
.block .block-size-large .block-content-outer .block-content-inner {
  height: 920px;
  overflow: hidden;
}

/* enable absolute positioning */
.inner-addon { 
    position: relative; 
}

/* style icon */
.inner-addon .glyphicon {
  position: absolute;
  padding: 10px;
  pointer-events: none;
}

/* align icon */
.left-addon .glyphicon  { left:  0px;}
.right-addon .glyphicon { right: 0px;}

/* add padding  */
.left-addon input  { padding-left:  30px; }
.right-addon input { padding-right: 30px; }

.btn-custom {
  background-color: #c93232;
  border-color: #c93232;
  color: #fff;
}
.btn-custom:hover,
.btn-custom:focus,
.btn-custom:active,
.btn-custom.active {
  background-color: #b52d2d;
  border-color: #a02828;
  color: #fff;

}
.btn-custom.disabled:hover,
.btn-custom.disabled:focus,
.btn-custom.disabled:active,
.btn-custom.disabled.active,
.btn-custom[disabled]:hover,
.btn-custom[disabled]:focus,
.btn-custom[disabled]:active,
.btn-custom[disabled].active,
fieldset[disabled] .btn-custom:hover,
fieldset[disabled] .btn-custom:focus,
fieldset[disabled] .btn-custom:active,
fieldset[disabled] .btn-custom.active {
  background-color: #c93232;
  border-color: #c93232;
  color: #fff; 
}
</style>
	</head>
	<body>
            
            
                                    @yield('content')

</body>
</html>
