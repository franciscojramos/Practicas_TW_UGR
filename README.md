# Blog personal — práctica PHP (Tecnologías Web, UGR)

Proyecto web para la asignatura **Tecnologías Web** del **Grado en Ingeniería Informática** de la **Universidad de Granada (UGR)**.

**Autor:** Francisco José Ramos Moya

## Qué es

Sitio tipo **blog personal** servido con **PHP** y **Apache** en Docker. Incluye páginas con plantillas (`header.php`, `footer.php`), tabla de asignaturas leída desde **CSV**, formulario de contacto con procesamiento en **`register.php`**, cookie de “usuario” y estilos propios con **Bootstrap**.

El código de la aplicación está en **`src/`**. El directorio **`data/`** guarda los datos de **MariaDB** 

## Estructura principal

| Ruta / fichero | Descripción |
|----------------|-------------|
| `src/index.php` | Página principal (plantillas). |
| `src/sobremi.php` | Sobre mí; tabla dinámica desde `asignaturas.csv` con `utils.php`. |
| `src/contacto.php` | Formulario de contacto. |
| `src/register.php` | Procesa el envío del formulario (POST, cookie, validaciones). |
| `src/header.php` / `src/footer.php` | Cabecera y pie comunes. |
| `docker-compose.yml` | Servicios `app` (PHP) y `db` (MariaDB). |

