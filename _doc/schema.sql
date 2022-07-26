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
    CONSTRAINT FK_TurmasCursos FOREIGN KEY (curso_id) REFERENCES cursos(id_cursos)
);

create table periodos(
    id_periodos int not null auto_increment,
    ano date not null,
    dt_inicio date not null,
    dt_fim date not null,
    primary key(id_periodos)
);

create table respostas(
    id_repostas int not null auto_increment,
    periodo_id int not null,
    nome_aluno varchar(100) not null,
    turma_id int not null,
    cpf varchar(11) not null,
    cidade varchar(100) not null,
    cidade_id int not null,
    uf char(2) not null,
    transporte ENUM('onibus','van','microonibus') not null,
    poder_publico_responsavel ENUM('municipio', 'estado'),
    diferença_paga int not null,
    primary key(id_repostas)
)

// uf
// uf_id