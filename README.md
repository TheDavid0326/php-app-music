# Proyecto: Top 10 Álbumes Musicales por Género aleatorio

Este proyecto muestra los 10 álbumes más populares de un género musical aleatorio utilizando la API de iTunes. Está desarrollado en PHP y utiliza técnicas de programación orientada a la web, como la separación de responsabilidades y el uso de plantillas.

---

<div align="center">
  <img src="https://i.imgur.com/dVUngER.jpeg" width="500">
</div>

---

## Características

- Muestra los 10 álbumes más populares de un género musical aleatorio.
- Incluye información como el nombre del álbum, el artista, la fecha de lanzamiento y enlaces a iTunes.
- Diseño responsivo y moderno.
- Uso de la API de iTunes para obtener datos en tiempo real.

---

## Tecnologías utilizadas

- **PHP**: Lenguaje de programación backend para manejar la lógica del proyecto.
- **HTML**: Estructura de la página web.
- **CSS**: Estilos para la interfaz de usuario.
- **API de iTunes**: Para obtener datos sobre álbumes musicales.
- **FontAwesome**: Iconos para mejorar la interfaz.
- **Markdown**: Para la documentación del proyecto.

---

## Estructura del proyecto

- **`index.php`**: Punto de entrada del proyecto. Carga los datos de la API y renderiza las plantillas.
- **`functions.php`**: Contiene funciones para obtener datos de la API y renderizar plantillas.
- **`const.php`**: Define constantes como los géneros musicales y la URL de la API.
- **`templates/head.php`**: Plantilla para la sección `<head>` del HTML.
- **`templates/body.php`**: Plantilla para la sección `<body>` del HTML.
- **`styles.php`**: Archivo de estilos CSS para la página.

---

## Aprendizajes clave

1. **Uso de APIs**:
   - Aprendí a consumir una API externa (iTunes) para obtener datos en tiempo real.
   - Manejo de respuestas JSON y conversión a arrays en PHP.

2. **Separación de responsabilidades**:
   - Dividí el código en funciones y plantillas para mantener el proyecto organizado y escalable.
   - Uso de `require` y `require_once` para modularizar el código.

3. **Programación orientada a la web**:
   - Uso de PHP para generar contenido dinámico en HTML.
   - Renderizado de plantillas con `ob_start()` y `ob_get_clean()`.

4. **Manejo de fechas**:
   - Aprendí a formatear fechas usando la clase `DateTime` de PHP.

5. **Diseño responsivo**:
   - Implementé estilos CSS para que la página se vea bien en dispositivos móviles y de escritorio.

6. **Buenas prácticas**:
   - Uso de `strict_types` para evitar conversiones automáticas de tipos.
   - Validación de datos antes de acceder a arrays para evitar errores.

---

## Cómo ejecutar el proyecto

1. Clona el repositorio:
   ```bash
   git clone https://github.com/tuusuario/top-10-albumes.git
  ```

2. Navega al directorio del proyecto:

  ```bash
  cd top-10-albumes
  ```

3. Inicia un servidor local (por ejemplo, con PHP):

  ```bash
  php -S localhost:8000
  ```

4. Abre tu navegador y visita:

  http://localhost:8000

## Licencia
Este proyecto está bajo la licencia MIT.
