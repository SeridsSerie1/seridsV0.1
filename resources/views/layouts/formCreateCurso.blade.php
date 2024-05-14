<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Curso</title>
</head>
<body>
    <div>
        <div class="container_desktop">
          <h4>Crea un Nuevo Curso</h4>
          <form action="" class="form_content box-espejo">
    
            <h6>Información general del Curso:</h6>
            <label for="nombre" class="label_text">Nombre del Curso</label>
            <input type="text" name="nombre" id="" class="input_text" placeholder="Nombre del curso" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]">
    
            <label for="descripcion" class="label_text">Descripción</label>
            <input type="text" name="descripcion" id="" class="input_text" placeholder="Descripción" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]">
            <label for="horas_academicas" class="label_text">Horas Académicas</label>
            <input type="number" name="horasAcademicas" id="horasAcademicas" class="input_text">
    
            <h6>Datos de la Certificación:</h6>
            <select name="tipo_certificacion" id="tipo_certificacion">
              <p>* Para foros, conversatorios y congresos:</p>
              <option value="">Constancia de asistencia</option>
              <option value="">Constancia de participación</option>
              <p>* Para Cursos:</p>
              <option value="">Certificado de curso por horas académicas</option>
              <p>* Para Programa de Formación:</p>
              <option value="">Diploma del Programa…</option>
              <p>* Para Técnicos:</p>
              <option value="">Especialista técnico…</option>
              <option value="">Profesional en…</option>
            </select>
            <label for="docente" class="label_text">Docente</label>
            <input type="text" name="docente" id="" class="input_text" placeholder="Docente" pattern="[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]">
            <label for="institucion" class="label_text">Institución</label>
            <input type="select" name="institucion" id="" class="input_text">
            <select name="para_quienes" id="">
            <p>¿A quién está dirigido?</p>
            <option value="todopublico">Todo público</option>
            <option value="estudiantessalud">Estudiantes de ciencias de la salud</option>
            <option value="personalsalud">Personal de la salud</option>
          </select><br>
          <input type="submit" value="Crear" class="input_submit">
          </form>
        </div>
      </div>
</body>
</html>