
# PHP-Nslookup

_Check Nslookup registro A / AAAA / CAA / MX / NS / TXT_

## Comenzando 🚀

_Estas simples instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas._

Mira **Deployment** para conocer como desplegar el proyecto.


### Pre-requisitos 📋

_Que cosas necesitas para instalar el software y como instalarlas_

```
Apache2
PHP

```

### Instalación 🔧

_Maquina Virtual, o Server_

_Install_ **Apache2** _,_ **PHP**

```
sudo apt install Apache2
sudo apt install php
```

## Archivos de Modificacion 🛠️

_Title_

 ```
title.php

**Cambiar** ----> <title>Php-Nslookup</title>

 ```
 _Registros a mostrar_

  ```
 function.php
.
.
.
.
Line 54 REG_AAAA($Dominio);   // Comentar '# o //' Ej: #REG_AAAA($Dominio); (No mostrara Registros de IPv6)
Line 55 REG_CAA($Dominio);    // Comentar '# o //' Ej: #REG_CAA($Dominio); (No mostrara Registros CAA)
Line 56 REG_MX($Dominio);     // Comentar '# o //' Ej: #REG_MX($Dominio); (No mostrara Registros MX)
Line 57 REG_NS($Dominio);     // Comentar '# o //' Ej: #REG_NS($Dominio); (No mostrara Registros NS)
Line 58 REG_TXT($Dominio);    // Comentar '# o //' Ej: #REG_TXT($Dominio); (No mostrara Registros TXT)
.
.
.
.
  ```


## Construido con 🛠️

_Herramientas de desarrollo_

* [Atom](https://atom.io/) - Text Editor
* [Apache](https://httpd.apache.org/) - Apache Server
* [bootstrap 4](https://getbootstrap.com/) - Para que se vea bonito

## Autores ✒️


* **Me** - *Trabajo Inicial* - [Rembmax](https://github.com/Rembmax)
* **Me** - *Documentación* - [Rembmax](https://github.com/Rembmax)

## Licencia 📄

Este proyecto está bajo la Licencia (GNU GENERAL PUBLIC LICENSE Version 3) - mira el archivo [LICENSE.md](https://github.com/Rembmax/PHP-Nslookup/blob/master/LICENSE) para detalles
