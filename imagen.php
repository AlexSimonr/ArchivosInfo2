<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />	

<form action="/target" class="dropzone" id="pubimage"></form>

<script>
  Dropzone.options.pubimage = { 
    paramName: "file", 
    maxFilesize: 2, 
    accept: function(file, done) {
      if (file.name == "justinbieber.jpg") {
        done("Naha, you don't.");
      }else { 
      	done(); 
      }
    }
  };
</script>


</head>
<body>
	


</body>
</html>