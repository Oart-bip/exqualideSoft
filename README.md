
## Executar

1. `composer install`
2. Copie `.env.example` para `.env`, defina `DB_CONNECTION=sqlite` e crie `database/database.sqlite`.
3. `php artisan key:generate && php artisan migrate:fresh --seed`
4. `php artisan serve`

Em outro terminal: `npm install` e `npx cypress open` (ou `npx cypress run`)
