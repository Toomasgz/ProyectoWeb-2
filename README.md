# Proyecto Club Embajadores

Este proyecto forma parte del curso Web 2 y tiene como objetivo gestionar los datos de los socios de un club y sus respectivas cuotas, utilizando una base de datos relacional en MySQL.

## Estructura de la Base de Datos

La base de datos del club, llamada #club_embajadores, está compuesta por dos tablas principales:

1. **socios**: Almacena la información de los miembros del club.
2. **cuotas**: Registra los pagos de las cuotas correspondientes a cada socio, clasificadas por deporte y categoría.

## Relación entre Tablas

Las tablas están relacionadas mediante el campo `id_socio`, lo que crea una relación de 1 a N entre socios y cuotas. A continuación, se muestra el diagrama que ilustra esta relación:

![Diagrama de la relación](./diagrama.jpg)

## Scripts de SQL

- **Creación de tablas**: Se definen las tablas `socios` y `cuotas`, con claves primarias y foráneas.
- **Relaciones**: La clave foránea conecta `id_socio` en `cuotas` con `id_socio` en `socios`, permitiendo una relación de 1 socio a múltiples cuotas.
- **Inserción de datos**: Se incluye un
