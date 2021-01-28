CREATE TABLE restaurante (
    id serial PRIMARY KEY,
    nome VARCHAR ( 255 ) NOT NULL,
    endereco VARCHAR ( 255 ) NOT NULL,
    telefone VARCHAR ( 255 ) NOT NULL,
    whatsapp VARCHAR ( 255 ) NOT NULL
);

INSERT INTO restaurante (nome, endereco, telefone, whatsapp) VALUES ('Restaurante Andromeda', 'Avenida andromed, 399', '4444-5555','98888-7777')