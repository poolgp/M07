create database if not exists colecciones;

drop table colecciones.cantante;
create table if not exists cantante(
	idCantante int not null unique auto_increment,
    nameCantante varchar (50) unique,
    edadCantante date not null,
    paisCantante varchar (100),
    imgCantante varchar (200),
    primary key (idCantante)
);

drop table colecciones.cancion;
create table if not exists cancion(
	idCancion int not null unique auto_increment,
    nameCancion varchar (50),
    cantName varchar (50),
    primary key (idCancion)
);

drop table colecciones.pais;
create table if not exists pais(
	idPais int not null unique,
    namePais varchar (50) not null unique,
    primary key (idPais)
);

-- insert into paises values (1, 'Estados Unidos');
-- insert into paises values (2, 'Reino Unido');
-- insert into paises values (3, 'Canadá');
-- insert into paises values (4, 'Brasil');
-- insert into paises values (5, 'España');
-- insert into paises values (6, 'Italia');
-- insert into paises values (7, 'Francia');
-- insert into paises values (8, 'Argentina');
-- insert into paises values (9, 'Japón ');
-- insert into paises values (10, 'Australia');

-- SELECT * FROM colleccions.paises order by id_Pais;
-- select * from colleccions.cantantes;

-- delete from colleccions.cantantes where id_Cantante;

select * from colecciones.cantante;

select * from colecciones.cancion;

insert into cancion values (1, 'Prueba23', 'Pol');

SELECT cantante.idCantante, cantante.nameCantante,
        cantante.edadCantante, pais.namePais AS nombrePaisCantante, 
        cantante.imgCantante FROM colecciones.cantante INNER JOIN colecciones.pais 
        ON pais.idPais = cantante.paisCantante;