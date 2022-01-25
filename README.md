# Team FrontEnd Developer # 87 ideas

>Seguir métodos en el desarrollo de proyectos que impliquen el uso de CSS, con el objeto de que sea entendible y escalable el código y el proyecto para todos los involucrados (existentes o por incorporarse).  Tanto para el nombramiento de sus archivos, así como el nombramiento y estructura de los componentes y las clases.
> 
>Es necesarios aplicar o desarrollar **convenciones** . 

### 📚 Convención de estructura de archivos.


~~~

├── assets
│   ├── css
│   	└── global.css      // Todas las clases que tenga impacto global (h1-h6....)
│   	└── normalize.css   // Proporciona coherencia entre navegadores en el estilos predeterminados.
│   	└── theme.css       // Se fijaran las variables coherentes a los elementos de estilos. (Colores, filtros, background).
│   	└── component.css   // Un archivo separado por componente. (Colores, filtros, background).
│   ├── fonts
│   	└── files.ttf
│   ├── img
│   	└── bebidas
│   		└── files.jpg
│   	└── empanadas
│   		└── files.jpg
│   	└── empanadas
│   	└── files.jpg
├── page
│   ├── index.html
│   ├── pizzas.html
│   ├── empanadas.html
│   ├── bebidas.html
│   ├── postres.html
│   ├── orden.html
└── 
~~~

#

### 📚 Convención de nombrado de archivos.


> - El nombre asignado estará formado por caracteres alfanuméricos: a-z y 0-9.
> - No debe contener caracteres no alfanuméricos, signos de puntuación, espacios en blanco, caracteres acentuados, eñes, etc.
> - No esta permitido subrayado _ y o el guión –

> - **NOTA**: En caso de ser necesario nombrar un archivo con dos palabras compuestas ejemplo carta y categoria.
> Se aplicara la convencion camelCase
> Ejemplo: cartaCategoria.css


#

### 📚 Convención de nombrado de estilos css.

> La convencion adoptada en el proyecto para el nombrado de clases css el la **Metodología** [**BEM**](http://getbem.com/introduction/)

> Si desea saber más sobre convenciones de nombrado de estilos de CSS, dirigirse [aquí](https://celsiusaray.notion.site/Convenciones-aplicadas-a-nombre-de-clases-en-CSS-BEM-OOCSS-SMACSS-f8c647e576624fd1b220a9789a79645a)
