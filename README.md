# prueba_tecnica
 Prueba Técnica

Cordial Saludo.

El CRUD está basado en las tablas relacionales 'Canciones' y 'Artistas', con una relación de uno a muchos con el Gestor de BD SQLSERVER. El back up de la BD se encuentra con el nombre 'Musica.bak'.

Ingresando a app/Config/Database.php, se configura la base de datos teniendo en cuenta los atributos generales y el puerto dinámico con el cual está trabajando el Gestor de BD (muy importante. PD: Esta configuración también se puede realizar desde el archivo .env).

La dirección raíz es http://localhost/prueba_tecnica/public/

Está enfocado en el diseño de una aplicación web trabajándolo de forma local con el servidor web APACHE mediante XAMPP.

Todo el proyecto está diseñado en CodeIgniter (por con defecto PHP), teniendo en cuenta su diseño MVC y rutas, por lo que los principales archivos de trajo se encuentran en app/Controllers, app/Models y app/Views. Por otro lado, se implemento Bootstrap 4 para el front-end.

Cuenta con un Login y Registro de Usuarios conectado a una tabla en BD llamada 'Usuarios' (La parte de validación del Login no está funcional, pues se presentó un error y a causa del tiempo no se pudo solucionar).

Luego de entrar desde el Login, lo primero en mostrar por defecto son las canciones registradas y su Artista.

Se presentan las opciones de Crear, Modificar y Borrar una Canción (el Buscar se trae en el anterior punto).

El CRUD trabaja sobre la Tabla 'Canciones' la cual contiene una llave foránea para traer la información del 'Artista'.

Se dan 3 opciones de generación de Reporte en PDF:

   -La primera utiliza la librería DOMPDF la cual está dentro de 'app/Libraries'.
   -La segunda opción muestra una tabla más limpia con la opción de Imprimir la ventana mediante JavaScript.
   -La terca opción permite Imprimir la Ventana tal como se muestra al ingresar después del Login mediante JavaScript.

Como un plus rápido, la aplicación cuanta con un chatbot proporcionado por zendesk.com para que el usuario se comunique con el desarrollador o relacionado en caso de alguna duda.Adicional a esto, se crea el archivo .htaccess y se ingresan algunas restricciones que reducen algunas vulnerabilidades a ataques como protección contra XSS, prevención de que la pagina sea abierta en un frame o iframe, Negación de acceso al archivo raíz, ocultación de cabeceras/encabezados, reducción de ataques basados en confusión de tipos mime. Agregaciones de buenas prácticas en HTML para evitar robo de información.

PD: No se alcanzó a crear API para consumir una tabla.
