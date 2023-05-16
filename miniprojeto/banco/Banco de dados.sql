create database n8_miniprojeto;
use n8_miniprojeto;

create table usuario
(
	id_usuario int not null auto_increment primary key,
	nome_usuario varchar(50) not null  ,
	nascimento_usuario datetime not null  ,
	cadastro_usuario timestamp not null  ,
	usuario_usuario varchar(50) not null unique ,
	senha_usuario varchar(50) not null  ,
	img_usuario longblob not null  ,
	obs_usuario varchar(255) null  ,
	status_usuario varchar(30) not null  
);

insert into usuario
	(nome_usuario,nascimento_usuario,usuario_usuario,senha_usuario,img_usuario,obs_usuario,status_usuario)
values
	('Roger Guedes','10/10/1010','rg10','123',' ',' ','ativo'),
    ('Afonso','10/10/1010','afonso','123',' ',' ','ativo'),
    ('Pedro','10/10/1010','pedro','123',' ',' ','ativo'),
    ('Adm','10/10/1010','adm','123',' ',' ','ativo'),
    ('Gabriel',28/02/2003,'gabriel','123',' ',' ','ativo'),
    ('Teste3','2003/02/28','teste4','123',' ',' ','ativo');

update usuario set nascimento_usuario='2003/02/28' where id_usuario=8;
	#"datetime" tem que ser em padrão americano(burros) YYYY-MM-DD
    
select * from usuario;

create table categoria
(
	id_categoria int not null auto_increment primary key ,
	nome_categoria varchar(50) not null ,
	descricao_categoria varchar(200) null ,
	obs_categoria varchar(255) null ,
	status_categoria varchar(30) not null 
)

select * from categoria;

create table produto
(
	id_produto int not null auto_increment primary key,
	id_categoria_produto int not null  ,
	nome_produto varchar(50) not null  ,
	marca_produto varchar(50) not null  ,
	valorunitario_produto decimal(10.2) not null  ,
	valordecusto_produto decimal(10.2) not null  ,
	datacadastro_produto timestamp not null  ,
	obs_produto varchar(255) null  ,
	status_produto varchar(30) not null ,
    
    Constraint FK_ID_Categoria_Produto foreign key(id_categoria_produto) references categoria(id_categoria)
)

select * from produto;

create table historico
(
	id_historico int not null auto_increment primary key ,
	id_produto_historico int not null  ,
	id_usuario_historico int not null  ,
	valordavenda_historico decimal(10.2) not null  ,
	datamov_historico timestamp not null  ,
	qtde_historico int not null  ,
	descricao_historico varchar(255) not null  ,
	obs_historico varchar(255) null  ,
	status_historico varchar(30) not null  ,
    
	Constraint FK_ID_Produto_Historico foreign key(id_produto_historico) references produto(id_produto),
    Constraint FK_ID_Usuario_Historico foreign key(id_usuario_historico) references usuario(id_usuario)
)

#Tabelas para pesquisa
select * from usuario;
select * from categoria;
select * from produto;
select * from historico;

