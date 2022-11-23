create database getjobs;

use getjobs;

CREATE TABLE Usuario (
    id_usuario int PRIMARY KEY AUTO_INCREMENT,
    nmUsuario varchar(50),
    cpf varchar(12),
    dtNascimento Date,
    email varchar(50),
    endereco varchar(50),
    numero int,
    cep varchar(12),
    login varchar(50),
    senha varchar(32),
    ftPerfil varchar(200),
    descricao varchar(500),
	cargo varchar(50),
    ddd varchar(3),
    telefone varchar(9)
);


CREATE TABLE Servico (
    id_servico int PRIMARY KEY AUTO_INCREMENT,
    id_contratante int,
    id_usuario int,
    isrecusada bit,
    descricao varchar(500)
);

CREATE TABLE Contratante (
    id_contratante int PRIMARY KEY AUTO_INCREMENT,
    id_usuario int
);
 
 
ALTER TABLE Servico ADD CONSTRAINT FK_Servico_2
    FOREIGN KEY (id_contratante)
    REFERENCES Contratante (id_contratante);
 
ALTER TABLE Servico ADD CONSTRAINT FK_Servico_3
    FOREIGN KEY (id_usuario)
    REFERENCES Usuario (id_usuario);
 
ALTER TABLE Contratante ADD CONSTRAINT FK_Contratante_2
    FOREIGN KEY (id_usuario)
    REFERENCES Usuario (id_usuario);
    
SELECT * FROM Usuario;
SELECT * FROM Usuario as U where U.cargo = 'Designer';



INSERT INTO Usuario (nmUsuario, cpf, dtNascimento, email, endereco, numero, cep, login, senha, ftPerfil, descricao,cargo,ddd,telefone) 
		VALUES (
				'Douglas',
				'40586546360',
				'2001-10-05',
				'doug@gmail.com',
				'rua erval seco',
				95,
				06852546,
				'doug',
				md5('19190'),
				'https://akamai.sscdn.co/uploadfile/letras/fotos/e/f/d/9/efd9ba55e7245d54782ef93f9bdfe1a9.jpg',
				'Óla meu nome é Douglas',
                'Designer',
                '011',
                '955554444'
        );
        


INSERT INTO Usuario (nmUsuario, cpf, dtNascimento, email, endereco, numero, cep, login, senha, ftPerfil, descricao,cargo,ddd,telefone) 
		VALUES (
				'Bruno',
				'42820897843',
				'2001-07-30',
				'bruno.rufino2@outlook.com',
				'Rua Amelia Petrela Zuanazzi',
				21,
				04880100,
				'Br',
				md5('12345'),
				'img/user_standard.png',
				'Óla meu nome é Bruno',
                'Desenvolvedor',
				'011',
                '955554444'
        );
        
select id_usuario,nmUsuario from usuario where login = 'Br' and senha = md5('12345');