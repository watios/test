<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="favicon.ico">
<title>Subir imagen con progress bar usando jquery php - BaulPHP</title>

<!-- Bootstrap core CSS -->
<link href="dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="assets/sticky-footer-navbar.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.form.min.js"></script>
<script type="text/javascript">
  
$(document).ready(function () {
    $('#submitButton').click(function () {
    	    $('#uploadForm').ajaxForm({
    	        target: '#salidaImagen',
    	        url: 'CargarArchivos.php',
    	        beforeSubmit: function () {
    	        	  $("#salidaImagen").hide();
    	        	   if($("#uploadImage").val() == "") {
    	        		   $("#salidaImagen").show();
    	        		   $("#salidaImagen").html("<div class='error'>Elige un archivo para subir.</div>");
                    return false; 
                }
    	            $("#progressDivId").css("display", "block");
    	            var percentValue = '0%';

    	            $('#progressBar').width(percentValue);
    	            $('#percent').html(percentValue);
    	        },
    	        uploadProgress: function (event, position, total, percentComplete) {

    	            var percentValue = percentComplete + '%';
    	            $("#progressBar").animate({
    	                width: '' + percentValue + ''
    	            }, {
    	                duration: 5000,
    	                easing: "linear",
    	                step: function (x) {
                        percentText = Math.round(x * 100 / percentComplete);
    	                    $("#percent").text(percentText + "%");
                        if(percentText == "100") {
                        	   $("#salidaImagen").show();
                        }
    	                }
    	            });
    	        },
    	        error: function (response, status, e) {
    	            alert('Oops something went.');
    	        },
    	        
    	        complete: function (xhr) {
    	            if (xhr.responseText && xhr.responseText != "error")
    	            {
    	            	  $("#salidaImagen").html(xhr.responseText);
    	            }
    	            else{  
    	               	$("#salidaImagen").show();
        	            	$("#salidaImagen").html("<div class='error'>Problema al cargar el archivo.</div>");
        	            	$("#progressBar").stop();
    	            }
    	        }
    	    });
    });
});
</script>
</head>

<body>
<header> 
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark"> <a class="navbar-brand" href="#">BaulPHP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"> <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a> </li>
      </ul>
      <form class="form-inline mt-2 mt-md-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Busqueda</button>
      </form>
    </div>
  </nav>
</header>

<!-- Begin page content -->

<div class="container">
  <h3 class="mt-5">Subir imagen con progress bar usando jquery php</h3>
  <hr>
  <div class="row">
    <div class="col-12 col-md-12"> 
      <!-- Contenido -->
<div class="form-container"> 
  <form class="form-inline" action="CargarArchivos.php" id="uploadForm" name="frmupload" method="post" enctype="multipart/form-data">
    <div class="form-group mx-sm-3 mb-2">
      <input type="file" id="uploadImage" name="uploadImage" />
    </div>
    <button id="submitButton" type="submit" class="btn btn-primary mb-2" name='btnSubmit'>Cargar imagen</button>
  </form>
  <div class='progress' id="progressDivId">
    <div class='progress-bar' id='progressBar'></div>
    <div class='percent' id='percent'>0%</div>
  </div>
  <div style="height: 10px;"></div>
  <div id='salidaImagen'></div>
 </div> <!-- Fin Form-container -->     
      <!-- Fin Contenido --> 
    </div>
  </div>
  <!-- Fin row --> 
  
</div>
<!-- Fin container -->
<footer class="footer">
  <div class="container"> <span class="text-muted">
    <p>Códigos <a href="https://www.baulphp.com/" target="_blank">BaulPHP</a></p>
    </span> </div>
</footer>
<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script src="dist/js/bootstrap.min.js"></script>
</body>
</html>