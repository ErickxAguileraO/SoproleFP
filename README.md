
[![N|Solid](https://soprolefoodprofessionals.aeurus.cl/public/web/imagenes/logo.svg)]

# Soprole Food Professional 
## Descripción:
Sitio web enfocado en los cliente empresa de Soprole, donde se presenta información que puede servir como complemento a los negocios de los clientes.

## Antecedentes:
Antiguamente existía un sitio para lo mismo, pero estaba antiguo y por otra parte, la empresa (Soprole) fue vendida y tiene un nuevo dueño, por lo que era necesario realizar un cambio de servidores.

## Objetivo:
Se busca realziar al actualización del sitio web existente

## Documentación comercial:
Puede verse desde el siguiente enlace: https://docs.google.com/document/d/1v05l48M3Qy2MDC0_3rHPc6j2QxkLg1W0vRlLqv6BDgE/edit#


## Miembros del equipo
| Nombre | Cargo |
| ------ | ------ |
| Joel Salazar | Desarrolador |
| Sebastian Pérez | Desarrolador |
| Juan Pablo Urra | QA |
| Bastián Coloma | Maqueta |
| Mauricio Vilugron | Jefe de proyecto |

## Contenido Técnico
| Herramienta | Versión |
| ------ | ------ |
| Laravel | 8 |
| MySQL | 8.0.33 |
| PHP | 7.4 |


## Versiones entre ambientes
| Productivo | Versión |
| ------ | ------ |
| Laravel | 8 |
| MySQL | 8.0.33 |
| PHP | 7.4 |

| Desarrollo | Versión |
| ------ | ------ |
| Laravel | 8 |
| MySQL | 8.0.33 |
| PHP | 7.4 |

| Testing | Versión |
| ------ | ------ |
| Laravel | 8 |
| MySQL | 8.0.33 |
| PHP | 7.4 |

## CRON
No posee

## Consideraciones:
- Al montar el sistema en local, se debe cambiar la variable "secure" a false en el archivo /config/session.php, debido a que al estar activa, el sistema no permite crear sesiones si el dominio no posee HTTPS
- La variable APP_ENV en el archivo .ENV siempre debe ser local en el ambiente local, de lo contrario puede causar problemas en la carga de contenido externos a la web, como imagenes, css y/o js importado mediante url
