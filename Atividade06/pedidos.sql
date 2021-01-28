CREATE TABLE pedidos (
    id serial PRIMARY KEY,
    alimentos_ids  VARCHAR ( 255 ) NOT NULL,
    bebidas_ids  VARCHAR ( 255 ) NOT NULL,
    restaurante_id INT,
    CONSTRAINT fk_restaurante
      FOREIGN KEY(restaurante_id) 
	  REFERENCES restaurante(id)
	  ON DELETE SET NULL
);

INSERT INTO pedidos (alimentos_ids, bebidas_ids, restaurante_id) VALUES ('1,2,3,4', '1,2,3,4',1)