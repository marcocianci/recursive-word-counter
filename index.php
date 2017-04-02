
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Recursive Word Counter | Contador de Palavras Recursivo</title>
<style type="text/css">
body {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 12px;
}

fieldset {
  padding: 1em;
  font:80%/1 sans-serif;
  }
label {
  float:left;
  width:25%;
  margin-right:0.5em;
  padding-top:0.2em;
  text-align:right;
  font-weight:bold;
  }
.btn {
	width:25%;
  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
  background-image: -moz-linear-gradient(top, #3498db, #2980b9);
  background-image: -ms-linear-gradient(top, #3498db, #2980b9);
  background-image: -o-linear-gradient(top, #3498db, #2980b9);
  background-image: linear-gradient(to bottom, #3498db, #2980b9);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 12px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}
.btn:hover {
  background: #3cb0fd;
  background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
  background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
  background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
  text-decoration: none;
}
</style>
</head>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
  $( "#btn_send" ).on( "click", function(event) {
    var $form = $( '#counterForm' ),$textos2 = $form.find( "textarea[name='textos[]']" ).val();
    var sendTxt = { textos: $textos2 };
	  $.ajax({
        type: "POST",
        url: './class.conta_palavras.php',
        dataType: "json",
        data: sendTxt,
        success: function (data) {
        if (data) {
          if (data.erro) {
            alert(data.erro);
            return;
          }
          $ulli = '<ul>';
          $.each(data.PalavrasUnicas, function(key, value) {
            $ulli += '<li>'+key+' : '+value+'</li>';
          });
          $ulli += '</ul>';
          $( "#result" ).empty().html('Total de Palavras: '+ data.TotalPalavras +'<br />'+ 'Palavras únicas: <br />' + $ulli);
        } else {
          alert("erro!");
        }
      }
    });
  });
});
</script>
<body>
<div id="content">
	<form id="counterForm" action="" method="POST">
	  <fieldset>
	  <legend>Contador de Palavras</legend>
	    <label for="name">Digite aqui suas palavras e/ou frases:</label>
	    <textarea rows="4" cols="50" name="textos[]"></textarea>
	    <br />
	    <center>
	    	<button id="btn_send" class="btn" type="button">calcular</button>
	    </center>
	    <br />
	    <div id="result"></div>
	  </fieldset>
	</form>
</div>
</body>
</html>
