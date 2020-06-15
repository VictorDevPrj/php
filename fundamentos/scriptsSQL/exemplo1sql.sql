CREATE TABLE tb_usuario (
	id INT NOT NULL auto_incremenT PRIMARY KEY,
    deslogin VARCHAR(64) NOT NULL,
    desenha VARCHAR(256) NOT NULL,
    dtcadastro TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP()
);

INSERT INTO tb_usuario (deslogin, desenha) VALUES('root', '!345565d');


SELECT * FROM tb_usuario;

UPDATE tb_usuario
SET desenha = 123456
WHERE id = 1;

DELETE FROM tb_usuario
WHERE id = 1;

TRUNCATE TABLE tb_usuario;