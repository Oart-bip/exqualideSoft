describe('Estoque Fácil', () => { beforeEach(() => cy.visit('/'));
 it('exibe marca e navega pelos módulos', () => { cy.contains('Estoque Fácil'); ['Produtos','Clientes','Pedidos','Fretes'].forEach((item) => cy.contains(item).click()); cy.url().should('include','fretes'); });
 it('cadastra produto por fixture e mostra alerta de estoque baixo', () => { cy.fixture('produto').then((p) => { p.stock='2'; cy.criarProduto(p); }); cy.get('[data-cy=low-stock]').should('exist'); });
 it('valida campos obrigatórios e valores negativos', () => { cy.visit('/produtos/create'); cy.get('[data-cy=save-product]').click(); cy.get('[data-cy=errors]').should('exist'); cy.get('[data-cy=product-price]').type('-1'); });
 it('cria cliente e pedido', () => { cy.fixture('cliente').then(c=>cy.criarCliente(c)); cy.fixture('produto').then(p=>cy.criarProduto(p)); cy.visit('/pedidos/novo'); cy.get('[data-cy=order-quantity]').type('1'); cy.get('[data-cy=order-form]').submit(); cy.contains('Pedido registrado'); });
});
