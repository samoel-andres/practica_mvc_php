<h1 align="left" width="100%"> :open_book: REGISTRO DE USUARIOS <img align="right" src="https://skillicons.dev/icons?i=vscode,php,bootstrap,html,css,mysql,github,git" height="37" alt="Tecnologias"> </h1>

## :pen: Acerca de este proyecto

Este es un proyecto sencillo usando el patrón MVC (Modelo-Vista-Controlador) y un CRUD con MySQL. La interfaz muestra un formulario que recibe 2 datos y un botón cuya funcionalidad es registrar lo que el usuario proporciona en la base de datos. Posteriormente se muestra una tabla en la que se cargan todos los registros que se encuentran en la base junto a sus respectivas acciones. Para el desarrollo de este proyecto he usado PHP, Bootstrap y MySQL.

### :pencil: ¿Que significa CRUD?

CRUD son siglas que refieren a las acciones elementales de una base de datos:

- **C**reate (crear)
  - Creación de nuevos registros.
- **R**ead (leer)
  - Leer los registros.
- **U**pdate (actualizar)
  - Actualización de registros.
- **D**elete (eliminar)
  - Eliminación de registros.

## :hammer: Estructura del proyecto

Como he mencionado antes, el contenido de este repositorio esta basado en el patrón de arquitectura MVC, los archivos y carpetas se agrupan de la siguiente manera:

- **Config**
  - Se almacenan los arhivos de configuración necesarios para el funcionamiento del proyecto. En este caso también contiene el archivo que hace la conexión a la base de datos.
- **Controller**
  - Se encuentran los archivos vitales para el funcionamiento de cada vista. Estos archivos contienen los métodos disponibles para cada interfaz.
- **Model**
  - En este lugar se encuentran los archivos cuya función se centra principalmente en las acciones relacionadas a la base de datos, es decir, son los métodos/funciones del CRUD encargados de interactuar directamente con la base.
- **Resources**
  - Esta carpeta contiene los archivos principales de las vistas (HTML). Al igual que en otros proyectos he creado un mini motor de plantillas que toma plantillas que contienen lenguaje de marcado HTML con marcadores de posición para datos, lógica y una fuente de datos que proporciona los valores para los marcadores de posición para finalmente representarlo en el navegador. En este caso es muy útil, ya que el proyecto manipula informacion dinámica e interactua con una base de datos.
- **Index**
  - Archivo principal que define la página de inicio que se visualiza de forma predeterminada al iniciar el sitio web.

## :package: Resultados

Vista inicial, se muestra el formulario para agregar nuevos usuarios y la tabla vacía.

<p align="center">
  <img src="https://raw.githubusercontent.com/samoel-andres/practica_mvc_php/main/public/evidence/empty_form.JPG" alt="Vista inicial">
</p>

Al agregar usuarios nuevos se muestra un mensaje que confirma si fue registrado correctamente o si ocurrio algún error y no se registro, también se actualiza la tabla inmediatamente para que se visualicen los cambios inmediatamente.

<p align="center">
  <img src="https://raw.githubusercontent.com/samoel-andres/practica_mvc_php/main/public/evidence/record_added.JPG" alt="Registro agregado">
</p>

Si se desea actualizar algun dato de los usuarios podemos pulsar el botón "Actualización" que nos dirige a un formulario en el cual debemos colocar la nueva información que queramos.

<p align="center">
  <img src="https://raw.githubusercontent.com/samoel-andres/practica_mvc_php/main/public/evidence/form_to_update.JPG" alt="Formulario para actualizar registros">
</p>

Una vez colocados los nuevos datos debemos pulsar el botón "Guardar", esto actualizará la informacion en la base de datos y nos devolverá a la pantalla principal donde se visualiza nuevamente un mensaje, en este caso confirmando la actualización del registro.

<p align="center">
  <img src="https://raw.githubusercontent.com/samoel-andres/practica_mvc_php/main/public/evidence/record_updated.JPG" alt="Registro actualizado">
</p>

La última acción de un CRUD es eliminar registros de la base, en este caso para eliminar un registro se debe pulsar el botón "Eliminar", con esto se elimina completamente el registro y se muestra un mensaje para confirmar la eliminación.

<p align="center">
  <img src="https://raw.githubusercontent.com/samoel-andres/practica_mvc_php/main/public/evidence/record_removed.JPG" alt="Registro eliminado">
</p>

## :pen: Conclusión

Este proyecto me ha permitido practicar el patrón de arquitectura MVC, además, también he conectado el proyecto a una base de datos en MySQL sencilla. Esto me permite seguir reforzando mi conocimiento sobre de las tecnologias que he usado para desarrollarlo.
