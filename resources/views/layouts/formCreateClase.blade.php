<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crea una Clase</title>
</head>
<body>
    <div>
        <div class="container_desktop">
          <h4>Crea un Nuevo Curso</h4>
        <form action="" class="form_content box-espejo">
            <!---Informacion de la clase -->
            <label for="nombreClase" class="label_text">Título de la clase:</label>
            <input type="text" name="nombreCurso" id="" class="input_text" placeholder="Título de la clase">
    
            <label for="resumenClase" class="label_text">Breve Descripción:</label>
            <input type="text" name="resumen" id="" class="input_text" placeholder="Descripción">
    
            <!---input para material descargable-->
            <input type="file" name="materialClase" id=""  accept=".pdf, .doc, .docx .ppt, .pptx ">
            <label for="materialClase">Subir Documentos</label>
    
            <!--- input para material video-->
    
          <input type="file" name="videoClase" id="videoClase" accept=".mp4, .mkv">
          <label for="videoClase">Subir Video de Clase:</label><br><br>
    
          <input type="submit" value="Crear" class="input_submit">
    
        </form>
        </div>
      </div>
</body>
</html>