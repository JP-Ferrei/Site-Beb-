
-- EU TINHA CRIADO O BANCO DE DADOS PELO MYSQL WORKSPACE E NÃO FOI POR SCRIPT, N SEI SE ISSO AQUI VAI FUNCIONAR 
USE a2;

CREATE TABLE cliente (
    idCliente int(11) NOT NULL, 
    useName varchar(45) NOT NULL, 
    email varchar(100) NOT NULL, 
    senha varchar(45) NOT NULL, 
    telefone varchar(45) NOT NULL, 
    cpf varchar(14) NOT NULL,
    PRIMARY KEY (idCliente)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE produto (
    idProduto int(11) NOT NULL, 
    preco decimal(5,0) NOT NULL, 
    nome varchar(100) NOT NULL, 
    descricao varchar(180) NOT NULL, 
    categoria varchar(45) NOT NULL, 
    imagem longblob NOT NULL,
    PRIMARY KEY (idProduto)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;