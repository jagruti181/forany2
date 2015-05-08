<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" ng-app="firstapp">

<head ng-controller="headerctrl">
    <title ng-bind="'For Any Information - '+template.title">For Any Information</title>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <script type="text/javascript">
        FileAPI = {
            debug: true,
        };
    </script>
    <link href="lib/css/bootstrap.min.css" rel="stylesheet">
    <link href="lib/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/css/prettyPhoto.css" rel="stylesheet">
    <link href="lib/css/price-range.css" rel="stylesheet">
    <link href="lib/css/animate.css" rel="stylesheet">
    <link href="lib/css/main.css" rel="stylesheet">
    <link href="lib/css/responsive.css" rel="stylesheet">
    <link href="lib/css/ng-tags-input.bootstrap.min.css" rel="stylesheet">
    <link href="lib/css/ng-tags-input.min.css" rel="stylesheet">
    <link href="lib/css/ngDialog.css" rel="stylesheet">
    <link href="lib/css/ngDialog-theme-default.css" rel="stylesheet">
    <link href="lib/css/ngDialog-theme-plain.css" rel="stylesheet">
 
    <!--[if lt IE 9]>
    <script src="lib/js/html5shiv.js"></script>
    <script src="lib/js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="lib/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="lib/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="lib/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="lib/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="lib/images/ico/apple-touch-icon-57-precomposed.png">

    <script src="lib/js/jquery.js"></script>
    <script src="lib/js/lightbox.js"></script>
    
    <script src="lib/js/jquery-1.8.2.min.js"></script>
    <script src="lib/js/bootstrap.min.js"></script>
    <script src="lib/js/jquery.scrollUp.min.js"></script>
    <script src="lib/js/price-range.js"></script>
    <script src="lib/js/jquery.prettyPhoto.js"></script>
    <script src="lib/js/main.js"></script>
<!--    <script src="lib/js/angular.js"></script>-->
   
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script>
    
    
<!--
    <script src="http://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.6.0.js"></script>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
-->
    
    
    <script src="lib/js/ng-tags-input.min.js"></script>
    <script src="lib/js/ngDialog.js"></script>
    <script src="lib/js/demo2.js"></script>
    
<!--    <script src="lib/js/miniPopup.js"></script>-->
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false" type="text/javascript"></script>
    <script src="bower_components/angularjs-geolocation/dist/angularjs-geolocation.min.js"></script>
   
    
<!--    toster-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/angularjs-toaster/0.4.9/toaster.min.css" rel="stylesheet" />
 <script src="https://code.angularjs.org/1.2.0/angular-animate.min.js" ></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.10/angular-sanitize.min.js" ></script>-->
<!--  <link href="lib/js/ngToast.min.css" rel="stylesheet" />-->
   
<script src="https://cdnjs.cloudflare.com/ajax/libs/angularjs-toaster/0.4.9/toaster.min.js"></script>
<!--<script src="lib/js/ngToast.min.js"></script>-->
    
    
    
<!--    <script src="https://maps.googleapis.com/maps/api/js"></script>-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

    <script src="lib/js/angular-route.min.js"></script>
    <script src="lib/js/angular-ui-router.min.js"></script>
    <script src="lib/js/ui-utils.min.js"></script>
    <script src="lib/js/ui-bootstrap-tpls-0.11.0.min.js"></script>
<!--    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>-->
    <script src="lib/js/jstorage.js"></script>
    
    <script src="lib/js/underscore-min.js"></script>
    
    
<!--    <script src="http://maps.googleapis.com/maps/api/js?sensor=false&language=en"></script>-->
<!--	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.3/angular.min.js"></script>-->
	<script src="lib/js/angular-google-maps.js"></script>

    <!--       <script src="lib/js/angular-treeview.js"></script>-->


    <script src="js/app.js"></script>
    <script src="js/rest.js"></script>
    <script src="js/templateservice.js"></script>
    <script src="js/controllers.js"></script>

    <script src="lib/js/angularimage/angular-file-upload-shim.js"></script>
    <script src="lib/js/angularimage/angular-file-upload.js"></script>
    <script src="lib/js/lightbox.js"></script>
    



    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">
        stLight.options({
            publisher: "2ebe6d3e-901b-4387-ab96-bdc6fee3912a",
            doNotHash: false,
            doNotCopy: false,
            hashAddressBar: false
        });
    </script>

    <style>
        .drop-box {
            width: 220px;
            height: 40px;
            color: black;
            background: rgb(228, 241, 255);
            padding: 10px;
        }
    </style>
    <style>
        .rating{
  color: #a9a9a9;
  margin: 0;
  padding: 0;
}

ul.rating {
  display: inline-block;
}

.rating li {
  list-style-type: none;
  display: inline-block;
  padding: 1px;
  text-align: center;
  font-weight: bold;
  cursor: pointer;
}

.rating .filled {
  color: #21568b;
}

    </style>



</head>

<body>

    <div id="fb-root"></div>
    <script>
        
    </script>

    <div class="repeated-item" ng-view></div>

    <script>
        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError);
            } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        function showPosition(position) {
            var latlon = position.coords.latitude + "," + position.coords.longitude;
            console.log(position.coords);
        }

        function showError(error) {
            switch (error.code) {
            case error.PERMISSION_DENIED:
                x.innerHTML = "User denied the request for Geolocation."
                break;
            case error.POSITION_UNAVAILABLE:
                x.innerHTML = "Location information is unavailable."
                break;
            case error.TIMEOUT:
                x.innerHTML = "The request to get user location timed out."
                break;
            case error.UNKNOWN_ERROR:
                x.innerHTML = "An unknown error occurred."
                break;
            }

        }

        function showError(error) {
            switch (error.code) {
            case error.PERMISSION_DENIED:
                x.innerHTML = "User denied the request for Geolocation."
                break;
            case error.POSITION_UNAVAILABLE:
                x.innerHTML = "Location information is unavailable."
                break;
            case error.TIMEOUT:
                x.innerHTML = "The request to get user location timed out."
                break;
            case error.UNKNOWN_ERROR:
                x.innerHTML = "An unknown error occurred."
                break;
            }
        }
    </script>

</html>
