# PEST 2.9

Este repositorio corresponde a un proyecto desarrollado íntegramente en PHP y organizado siguiendo las buenas prácticas modernas del ecosistema PHP, incluyendo una estructura modular, uso de Composer para la gestión de dependencias y PHPUnit para la ejecución de pruebas automatizadas.  

## Estructura del Proyecto

A continuación se detalla el contenido de cada directorio y archivo incluido en el repositorio, junto con su función específica dentro del proyecto.

PEST2.9/\
│\
├── src/\
├── tests/\
├── vendor/\
│\
├── composer.json\
├── composer.lock\
├── phpunit.xml\
└── README.md

## `src/` — Código Fuente Principal

Este directorio contiene todos los archivos que conforman la lógica principal del proyecto.  
En proyectos PHP modernos estructurados con Composer, este directorio alberga:

- **Clases**
- **Interfaces**
- **Funciones**
- **Módulos internos**
- **Servicios del proyecto**

Su contenido es cargado automáticamente mediante *autoloading* gracias a Composer, lo que permite estructurar el código de manera limpia, clara y escalable.

## `tests/` — Pruebas Automatizadas (PHPUnit)

Este directorio contiene todos los test del proyecto. Aquí se encuentran archivos PHP con pruebas que hemos diseñado para validar:

- El comportamiento de las clases de `src/`
- La integridad funcional del proyecto
- La detección de errores ante cambios futuros

El framework utilizado es **PHPUnit**, uno de los estándares de la industria para pruebas en PHP.

Cada test está estructurado en:

- **Métodos `testX()`**
- **Asserts** para comparar resultados esperados y reales
- **Clases de pruebas extendiendo `PHPUnit\Framework\TestCase`**

## `vendor/` — Dependencias Instaladas por Composer

Esta carpeta es generada automáticamente tras ejecutar:

```bash 
composer install
```

Incluye todas las librerías externas necesarias para el funcionamiento del proyecto.  

Es importante destacar que:

- **No debe modificarse manualmente**
- **Suele ignorarse en sistemas de control de versiones**  
- **Contiene PHPUnit si se instaló como dependencia de desarrollo**

## `composer.json` — Configuración del Proyecto PHP

Este archivo es esencial en cualquier proyecto basado en Composer.  

Incluye:

- Metadatos del proyecto
- Dependencias requeridas
- Dependencias de desarrollo (como PHPUnit)
- Configuración de *autoload* 
- Versionado semántico de las librerías

Ejemplo de información habitual en él:

```json
{
    "require": {},
    "require-dev": {
        "phpunit/phpunit": "^9.0"
    },
    "autoload": {
        "psr-4": {
            "App\\": "src/"
        }
    }
}
```

## `composer.lock` — Versionado Exacto de Dependencias

Este archivo registra las versiones exactas de todas las dependencias instaladas.  
Su función es garantizar que cualquier persona que descargue el proyecto instale **exactamente las mismas versiones**, evitando incompatibilidades.

Como recomendación **no debe editarse manualmente.**

## `phpunit.xml` — Configuración del Framework de Pruebas

Este archivo define los parámetros con los que PHPUnit ejecutará las pruebas.  
Incluye configuraciones como:

- Directorio de pruebas (`tests/`)
- Configuración del autoloader
- Activación de colores en la salida
- Inclusión o exclusión de ciertos archivos

Ejemplo típico de su contenido:

```xml
<?xml version="1.0" encoding="UTF-8"?>
<phpunit colors="true" bootstrap="vendor/autoload.php">
    <testsuites>
        <testsuite name="Test Suite">
            <directory>tests</directory>
        </testsuite>
    </testsuites>
</phpunit>
```

## Cómo Instalar el Proyecto

Antes de ejecutar el proyecto o las pruebas, asegúrese de disponer de:

- PHP 7.4 o superior  
- Composer instalado correctamente  

### 1. Clonar el repositorio

```bash
git clone https://github.com/AlejandroMartinezASIR/PEST2.9.git
cd PEST2.9
```

### 2. Instalar dependencias

```bash
composer install
```

## Cómo Ejecutar las Pruebas

El proyecto utiliza PHPUnit instalado mediante Composer.  
Para ejecutarlas:

```bash
composer test
``` 