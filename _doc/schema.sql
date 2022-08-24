DROP DATABASE IF EXISTS educacenso;
CREATE DATABASE educacenso;

use educacenso;

create table cursos(
    id_cursos int not null auto_increment,
    nome_cursos varchar(100) not null,
    nome_reduzido varchar(100) not null,
    primary key(id_cursos)
);

create table turmas(
    id_turmas int not null auto_increment,
    nome_turmas varchar(100) not null,
    curso_id int not null,
    primary key(id_turmas),
    CONSTRAINT FK_TurmasCursos FOREIGN KEY (curso_id) REFERENCES cursos(id_cursos) ON DELETE CASCADE
);

create table periodos(
    id_periodos int not null auto_increment,
    ano int not null,
    dt_inicio date not null,
    dt_fim date not null,
    primary key(id_periodos)
);

create table respostas(
    id_respostas int not null auto_increment,
    curso_id int not null,
    periodo_id int not null,
    nome_aluno varchar(100) not null,
    turma_id int not null,
    cpf varchar(15) not null,
    cidade varchar(100) not null,
    cidade_id int not null,
    uf char(2) not null,
    uf_id int not null,
    transporte ENUM('onibus','van','microonibus') not null,
    poder_publico_responsavel ENUM('municipio', 'estado') not null,
    diferenca_paga int not null default 0,
    primary key(id_respostas),
    CONSTRAINT FK_RespostasCursos FOREIGN KEY (curso_id) REFERENCES cursos(id_cursos) ON DELETE CASCADE
);

INSERT INTO cursos (nome_cursos, nome_reduzido) VALUES ('Informatica para a Internet', 'INFO'), ('Agropecuaria', 'AGRO'), ('Viticultura e Enologia', 'VITIENO'), ('Administracao', 'ADM'), ('Meio Ambiente', 'MEIO');

INSERT INTO turmas (nome_turmas, curso_id) VALUES ('1º Agro A 2021', 2), ('2º Agro A 2021', 2), ('1º Info 2022', 1), ('2º Info 2022', 1), ('3º Vitieno 2020', 3);

INSERT INTO periodos (ano, dt_inicio, dt_fim) VALUES (2022, '2022-01-01', '2022-01-31'), (2021, '2021-01-01', '2021-01-31'), (2022, '2022-07-15', '2022-08-31');

-- INSERT INTO respostas (periodo_id, nome_aluno, turma_id, cpf, cidade, cidade_id, uf, uf_id, transporte, poder_publico_responsavel, diferenca_paga) 
-- VALUES (1, 'Roberta Mineira', 3, '25836914725', 'Itajaí', , 'RS', , 'onibus', 'estado')