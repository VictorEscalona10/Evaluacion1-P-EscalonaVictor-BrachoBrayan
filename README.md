# Evaluación 1 - Sistema de Gimnasio (Suscripciones)

## Información del Proyecto
- **Universidad:** UNIVERSIDAD POLITÉCNICA TERRITORIAL DEL ESTADO ARAGUA “FEDERICO BRITO FIGUEROA”
- **Carrera:** Informatica
- **Asignatura:** Paradigmas de Programación
- **Profesor:** Elías Vargas
- **Fase:** III - 2025-3

## Integrantes
1. Bracho Braya
2. Escalona Victor

## Enunciado 9: Sistema de Gimnasio
Crear entidad Suscripcion con los atributos:
- ID
- Plan (string)
- CostoMensual (decimal)
- MaximoDias (integer)
- Vencimiento (date)

## Instrucciones de Ejecución

### Requisitos
- PHP 8.3+
- Composer
- MySQL o SQLite

### Pasos

1-Clonar repositorio:
git clone https://github.com/VictorEscalona10/Evaluacion1-P-EscalonaVictor-BrachoBrayan
cd Evaluacion1-P-GomezJuan-RodriguezAna

2-Instalar dependencias:
composer install

3-Configurar SQLite:
touch database/database.sqlite
cp .env.example .env

4-Configurar archivo .env:
 Editar .env y asegurar estas líneas:
 DB_CONNECTION=sqlite
 DB_DATABASE=database/database.sqlite

5-Generar clave de aplicación:
php artisan key:generate

6-Ejecutar migraciones y seeders:
php artisan migrate:fresh --seed

7-Iniciar servidor:
php artisan serve

8-Acceder en navegador:
http://localhost:8000/suscripciones