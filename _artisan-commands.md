# Artisan Commands

## Create controller
php artisan make:controller ControllerName

## Create resource controller
php artisan make:controller ControllerName -r


## Database Migration
php artisan migrate


## create a new migration
php artisan make:migration create_posts_table


## restart the migration from scratch
php artisan migrate:fresh


## undo last migration
php artisan migrate:rollback

## undo specific migration steps
php artisan migrate:rollback


## create a model
php artisan make:model PostStatus

## create a model with migration
php artisan make:model PostStatus -m

## create a model with 7 other files(classes)
php artisan make:model PostStatus -a

## run database seeder
php artisan db:seed

## Run specific seed
php artisan db:seed --class=ReactionTypeSeeder

## Run the migration and the seeder at once
php artisan migrate --seed

## Run the migration from start (fresh) and the seeder at once
php artisan migrate:fresh --seed
