CREATE TABLE alimentos (
    id serial PRIMARY KEY,
    nome VARCHAR ( 255 ) NOT NULL,
    preco decimal NOT NULL,
    peso decimal 
);


INSERT INTO alimentos (nome, preco, peso) VALUES ('Pizza de Presunto', 30, 800);

INSERT INTO alimentos (nome, preco, peso) VALUES ('Pizza de Calabresa', 28, 700);

INSERT INTO alimentos (nome, preco, peso) VALUES ('Pizza Vegetariana', 300, 200);

INSERT INTO alimentos (nome, preco, peso) VALUES ('Pizza de Strogonoff', 60, 1000)
