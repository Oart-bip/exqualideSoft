# Estoque Fácil

Projeto Laravel para a lista de exercícios de Cypress e PHPUnit. Inclui produtos, clientes, pedidos com baixa automática de estoque, fretes e seletores `data-cy`.

## Executar

1. `composer install`
2. Copie `.env.example` para `.env`, defina `DB_CONNECTION=sqlite` e crie `database/database.sqlite`.
3. `php artisan key:generate && php artisan migrate:fresh --seed`
4. `php artisan serve`

Em outro terminal: `npm install` e `npx cypress open` (ou `npx cypress run`).

## Testes

`php artisan test` executa os cenários de rota, CRUD, validação e baixa/insuficiência de estoque. O arquivo `cypress/e2e/estoque.cy.js` cobre navegação, fixtures, comandos customizados, validação e pedido.
