CREATE TABLE bebidas (
    id serial PRIMARY KEY,
    nome VARCHAR ( 255 ) NOT NULL,
    preco decimal NOT NULL,
    volume decimal
);

INSERT INTO bebidas (nome, preco, volume) VALUES ('Água', 6, 250);

INSERT INTO bebidas (nome, preco, volume) VALUES ('Coca-Cola', 7, 650);

INSERT INTO bebidas (nome, preco, volume) VALUES ('Guaraná', 7, 650);

INSERT INTO bebidas (nome, preco, volume) VALUES ('Suco de Laranja', 12, 500)


