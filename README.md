![image](https://api-donremolo.vercel.app/donRemoloLogo.svg)
# Team FrontEnd Developer # 87 idforideas

## Desarrollo de la idea #3

> 💡 Leer documentación de los requisitos del proyecto #3 [aqui](https://api-donremolo.vercel.app/descripcionIdea3.pdf)

>Seguir métodos en el desarrollo de proyectos que impliquen el uso de CSS, con el objeto de que sea entendible y escalable el código y el proyecto para todos los involucrados (existentes o por incorporarse).  Tanto para el nombramiento de sus archivos, así como el nombramiento y estructura de los componentes y las clases.
>
>Es necesarios aplicar o desarrollar **convenciones** .

## 📚 Convención para trabajar en git en nuevos componentes.

> 💡 Vas a trabajar en un **nuevo componente** o un **new feature?**
>
>// Se debe de iniciar una nueva rama con un nombre simple que se deberia colocar posteriermente en trello como CARD NUMBER
>


>1. Debes de crear una nueva rama que emerge de la rama **frontend**.
> Ejemplo de Sintaxis.  
> git checkout -b nombreDeLaRamaFeature RamaDeDondeEmerge

Ejemplo de Comando
~~~
git checkout -b pagePedido frontend
~~~

>2. Trabaja en tu rama libremente generando los push necesarios.
>  Una vez de culminado tus feature. 
> Y **antes** de incorporarlo a la rama **frontend**.
> Asegurate de que no dará problemas al implementarlo.
>
>Esto se logra actualizando tu rama con el estado actual de la rama principal, que en nuesto caso es la rama **frontend**
>
> Ejecutan el comando git rebase 
> Ejemplo de Sintaxis.
> git rebase **nombreDeLaRamaDesdeDondeDeseasActualizar**
> Recuerda que debes estar en la rama de tu feature.

~~~
git rebase frontend
~~~

>3. Estando todo como es deseado. Se pasara a implementar tu componente o feature a la rama **frontend**. 
>
>**Esto se logra realizando los siguientes pasos.**

>3.1. Cambia a la rama donde se va a implementar el nuevo componente o feature. 
~~~
git checkout frontend
~~~

>3.2. Fusiona la rama del componente creado a la rama frontend
>Ejemplo de Sintaxis.
> git merge **nombreDeLaRamaFeature**
~~~
git merge pagePedido
~~~

> 💡 Deseas saber mas de comandos de [**git y en español**](https://www.atlassian.com/es/git/tutorials/learn-git-with-bitbucket-cloud)
>


## 📚 Convención de estructura de archivos.


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
> - No debe contener **caracteres no alfanuméricos**, **signos de puntuación**, **espacios en blanco**, **caracteres acentuados**, **eñes**, etc.
> - No esta permitido subrayado **_** y o el guión **–**

> - **NOTA**: En caso de ser necesario nombrar un archivo con dos palabras compuestas ejemplo carta y categoria.
> Se aplicara la convención **camelCase**
> Ejemplo: **cartaCategoria.css**


#

### 📚 Convención de nombrado de estilos css.

> La convención adoptada en el proyecto para el nombrado de clases css el la **Metodología** [**BEM**](http://getbem.com/introduction/)

Ejemplo
![image](https://api-donremolo.vercel.app/bemExample.png)



> Si desea saber más sobre convenciones de nombrado de estilos de CSS, dirigirse [aquí](https://celsiusaray.notion.site/Convenciones-aplicadas-a-nombre-de-clases-en-CSS-BEM-OOCSS-SMACSS-f8c647e576624fd1b220a9789a79645a)
