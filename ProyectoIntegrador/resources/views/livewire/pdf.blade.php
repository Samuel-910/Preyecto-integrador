<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Carta de Presentación - Prácticas Pre Profesionales</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      margin: 20px;
    }
    .header {
      text-align: center;
      margin-bottom: 20px;
    }
    .institucion {
      font-weight: bold;
    }
    .info {
      margin-bottom: 20px;
    }
    .signature {
      float: right;
    }
  </style>
</head>
<body>
  <div class="header">
    <h1>Carta de Presentación</h1>
  </div>
  <?php

    $ultimoDato = \App\Models\CartaPresentacion::latest()->first();

  ?>

  <div class="info">
    <p><span class="institucion"><?php echo $ultimoDato->carta_institucion; ?></span></p>
    <p><span class="institucion">RUC:</span> <?php echo $ultimoDato->carta_ruc; ?></p>
    <p><span class="institucion">Representante:</span> <?php echo $ultimoDato->carta_representante; ?></p>
    <p><span class="institucion">Cargo del Representante:</span> <?php echo $ultimoDato->carta_cargo; ?></p>
    <p><span class="institucion">Fecha:</span> <?php echo $ultimoDato->carta_fecha; ?></p>
  </div>

  <div class="content">
    <p>Estimado(a) Sr./Sra. <?php echo $ultimoDato->carta_representante; ?>,</p>
    <p>Me dirijo a usted con el propósito de expresar mi interés en realizar mis prácticas pre profesionales como estudiante de Ingeniería de Sistemas en la Municipalidad de Ejemplo. Como parte de mi formación académica, estoy en búsqueda de la oportunidad de aplicar y desarrollar mis habilidades en un entorno profesional.</p>
    <p>Estoy entusiasmado(a) por la posibilidad de contribuir con mi pasión por la tecnología y el desarrollo de software a los proyectos que se llevan a cabo en la municipalidad. A lo largo de mi carrera académica, he adquirido conocimientos en programación, diseño de sistemas y gestión de bases de datos, los cuales estoy deseoso(a) de poner en práctica en un contexto laboral real.</p>
    <p>Adjunto a esta carta, encontrarás mi currículum vitae que detalla mi educación, habilidades técnicas y experiencia académica relevante. Estoy disponible para una entrevista en la que podamos discutir cómo mi perfil y motivación pueden ser de beneficio para la Municipalidad de Ejemplo.</p>
    <p>Agradezco su consideración y la oportunidad de aprender y crecer en un entorno profesional tan relevante como el de su institución. Quedo a la espera de su pronta respuesta.</p>
    <p>Atentamente,</p>
    <p class="signature">Nombre del Estudiante<br>
    Estudiante de Ingeniería de Sistemas</p>
  </div>
</body>
</html>


