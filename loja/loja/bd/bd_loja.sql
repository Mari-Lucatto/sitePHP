  CREATE DATABASE loja;
  USE loja;

  CREATE TABLE tbl_tamanho (
    id_tamanho INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
    tipo VARCHAR(20)  NULL    ,
  PRIMARY KEY(id_tamanho));


  CREATE TABLE tbl_cor (
    id_cor INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
    nome VARCHAR(20)  NOT NULL  ,
    tom VARCHAR(20)  NULL    ,
  PRIMARY KEY(id_cor));



  CREATE TABLE tbl_categoria (
    id_categoria INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
    nome VARCHAR(20)  NULL  ,
    descricao VARCHAR(255)  NULL    ,
  PRIMARY KEY(id_categoria));



  CREATE TABLE tbl_roupa (
    id_roupa INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
    tbl_tamanho_id_tamanho INTEGER UNSIGNED  NOT NULL  ,
    tbl_categoria_id_categoria INTEGER UNSIGNED  NOT NULL  ,
    tbl_cor_id_cor INTEGER UNSIGNED  NOT NULL  ,
    img VARCHAR(255) NOT NULL,
    nome VARCHAR(45)  NOT NULL  ,
    qtd INTEGER UNSIGNED  NULL  ,
    preco INTEGER UNSIGNED  NOT NULL  ,
    detalhes VARCHAR(255)  NULL    ,
  PRIMARY KEY(id_roupa)  ,
  INDEX tbl_roupa_FKIndex1(tbl_cor_id_cor)  ,
  INDEX tbl_roupa_FKIndex2(tbl_categoria_id_categoria)  ,
  INDEX tbl_roupa_FKIndex3(tbl_tamanho_id_tamanho),
    FOREIGN KEY(tbl_cor_id_cor)
      REFERENCES tbl_cor(id_cor)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION,
    FOREIGN KEY(tbl_categoria_id_categoria)
      REFERENCES tbl_categoria(id_categoria)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION,
    FOREIGN KEY(tbl_tamanho_id_tamanho)
      REFERENCES tbl_tamanho(id_tamanho)
        ON DELETE NO ACTION
        ON UPDATE NO ACTION);

        CREATE TABLE usuario(
        login varchar(255),
        senha varchar(255));
        
        INSERT INTO usuario VALUES ("Mario", "12345");
        SELECT * FROM usuario;
        
        INSERT INTO tbl_tamanho values (default, 'P');
INSERT INTO tbl_categoria values (default, 'infantil', 'roupas para crianças');
INSERT INTO tbl_cor values (default, 'azul', 'marinho');
INSERT INTO tbl_roupa values (default, 1, 1, 1, 'gato.jpg', 'camiseta', 2, 'R$15,00', default);

select*from tbl_tamanho;
select*from tbl_categoria;
select*from tbl_cor;
select*from tbl_roupa;

create view view_roupa as
select
r.id_roupa as id_roupa,
t.tipo as tamanho,
c.nome as cor,
cat.nome as categoria,
r.img as imagem,
r.nome as nome,
r.qtd as quantidade,
r.preco as preço,
r.detalhes as detalhes from
tbl_roupa as r inner join tbl_tamanho as t on r.tbl_tamanho_id_tamanho= t.id_tamanho
inner join tbl_cor as c on r.tbl_cor_id_cor= c.id_cor
inner join tbl_categoria as cat on r.tbl_categoria_id_categoria= cat.id_categoria;
select*from view_roupa;