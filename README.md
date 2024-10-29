<h1 align="left" width="100%"> :open_book: REGISTRO DE USUARIOS <img align="right" src="https://skillicons.dev/icons?i=vscode,php,bootstrap,html,css,mysql,github,git" height="37" alt="Tecnologias"> </h1>

## :pen: Acerca de este proyecto

Este es un proyecto sencillo usando el patrón MVC (Modelo-Vista-Controlador) y un CRUD con MySQL. La interfaz muestra un formulario que recibe 2 breves datos y un botón cuya funcionalidad es registrar los datos en una tabla de la base de datos. Posteriormente se muestra una tabla en la que se listan todos los registros que se encuentran en la tabla junto a sus respectivas acciones. Para el desarrollo de este proyecto he usado PHP, Bootstrap y MySQL.

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
