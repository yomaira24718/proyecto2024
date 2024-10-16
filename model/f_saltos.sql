create database f_saltos;

use f_saltos;

create table RolUsuario
(
 idrolusuario int (10) primary key auto_increment,
 descriprolusuario varchar (20) default null,
 estadorolusuario varchar (10) default null
 );
 
 insert into RolUsuario  values(null, 'Administrador','Activo');
 insert into RolUsuario  values(null, 'Cliente','Activo');
 insert into RolUsuario  values(null, 'Domiciliario','Activo');
 
 select *from RolUsuario;
 
 -- Procedimiento almacenado  RolUsuario
 
 delimiter //
create procedure registroRol
(
  IN
 idrolusuario int (10) ,
 descriprolusuario varchar (20),
 estadorolusuario varchar (10)
)
begin
  insert into Rol values (null, descriprolusuario, estadorolusuario);
end//

delimiter ;

call registroRol (null,'Admin','Activado');

delimiter //
create procedure consultarRol
()
begin
 select *from RolUsuario;
end //
delimiter ;

delimiter //
create procedure consultarRolCodigo
(in
 idrolusuario1 int
)
begin
select  idrolusuario,  descriprolusuario, estadorolusuario from Rol where  idrolusuario=  idrolusuario1;
end//
delimiter ;

call consultarRolCodigo (1);

delimiter //
create procedure actualizarRol
(
in 
 idrolusuario1 int,
descriprolusuario varchar (20),
 estadorolusuario varchar (10)
)
begin
update RolUsuario
set descriprolusuario=descriprolusuario,   estadorolusuario = estadorolusuario where idrolusuario =idrolusuario1;
end //
delimiter ;
 
call actualizarRol (3,'Empleado', 'activo');

delimiter //
create procedure eliminarRol 
(
in
idrolusuario1 int
)
begin 
delete from Rol where idrolusuario= idrolusuario1;
end // 
delimiter ;




  
create table Usuario (
 idusuario int  primary key auto_increment,
 tipodoc varchar(15),
 nodoc int  null,
 nombreusuario varchar (15)  null, 
 apellidousuario varchar (15)  null,
 direccionusuario varchar (15)  null,
 telusuario int not null,
 correousuario varchar (25) null,
 claveusua varchar (15)  null,
 fotousua  varchar (100) null,
 estadousuario varchar(10)  null,
idrolusuariofk int,
foreign key( idrolusuariofk) references RolUsuario ( idrolusuario)
);

select * from Usuario;

 insert into usuario values(null,'cedula',1010211,'Dana','Saltos','Cra 35 no',454577,'dana@gmail.com',
				'123','','activo',2);
  insert into usuario values(null,'cedula',62105788,'Paula','Sanchez','Cra 35 no',454577,'paula@gmail.com',
				'123','','activo',1);
insert into usuario values(null,'tarj',1001012,'Felipe','Morales','Ave Boya',3174015,'felipe@gmail.com',
				'12345','','activo',2);



-- Procedimiento almacenado  Usuario
 
 delimiter //
create procedure registroUsuario
(
  IN
 idusuario int (10),
 tipodoc varchar(15),
nodoc int (15),
nombreusuario varchar (15),
 apellidousuario varchar (15),
 direccionusuario varchar (15),
 telusuario int (10),
 correousuario varchar (25),
 claveusua varchar (15),
 estadousuario varchar(10)
)
begin
  insert into Usuario values (null, idusuario, tipodoc, nodoc, nombreusuario, apellidousuario, dereccionusuario, telusuario, correousuario, claveusua, estadousuario);
end//

delimiter ;

call registroRol (null,'cedula',1010211,'Dana','Saltos','Cra 35 no',454577,'dana@gmail.com','123','','activo',2);

delimiter //
create procedure consultarUsuario
()
begin
 select *from Usuario;
end //
delimiter ;

delimiter //
create procedure consultarUsuarioCodigo
(in
 idusuario1 int
)
begin
select  idusuario,  tipodoc, nodoc, nombreusuario, apellidousuario, dereccionusuario, telusuario, correousuario, claveusua, estadousuario from Usuario where  idusuario=  idusuario1;
end//
delimiter ;

call consultarRolCodigo (1);

delimiter //
create procedure actualizarUsuario
(
in 
 idusuario1 int,
 tipodoc varchar(15),
 nodoc int (15),
 nombreusuario varchar (15),
 apellidousuario varchar (15),
 direccionusuario varchar (15),
 telusuario int (10),
 correousuario varchar (25),
 claveusua varchar (15),
 estadousuario varchar(10)
)
begin
update Usuario
set tipodoc=tipodoc, nodoc=nodoc, nombreusuario=nombreusuario, apellidousuario=apellidousuario, direccionusuario=direccionusuario, telusuario=telusuario, correousuario=correousuario, claveusua=claveusua, estadousuario=estadousuario where idusuario =idusuario1;
end //
delimiter ;
 
call actualizarRol ('tarj',1001012,'Felipe','Morales','Ave Boya',3174015,'felipe@gmail.com','12345','','activo',2);

delimiter //
create procedure eliminarUsuario 
(
in
idusuario1 int
)
begin 
delete from Usuario where idusuario= idusuario1;
end // 
delimiter ;


create table producto (
  idproducto int(11) primary key NOT NULL auto_increment,
  descripProducto varchar(100) null,
  precioproducto double null,
  categoriaproducto varchar(40) null,
  estadoproducto varchar(30) null
);


  insert into producto values (1, 'Bolso viajero', 7990, 'Llavero', 'Disponible');
insert into producto values(2,'Mochila escolar', 14990, 'Muñeco', 'Disponible');
insert into producto values (3, 'Carriel de hombre', 18990, 'Títere', 'Disponible');

create table pedido (
  idpedido int(11) primary key NOT NULL auto_increment,
  fechapedido date null,
  horapedido time null,
  totalpedido double null,
  estadopedido varchar(30) null,
  pedidoadomicilio char(3) null,
  idusuarioFK int NOT NULL,
  idProductoFK int (11) NOT NULL,
  foreign key (idUsuarioFK) references usuario (idusuario),
  foreign key (idProductoFK) references producto (idproducto)
) ;


insert into pedido values (1, '2023-11-28', '14:30:00', 20990, 'Procesando', 'Sí', 1, 1);
insert into pedido values (2, '2023-11-28', '15:30:00', 15990, 'Procesando', 'No', 2, 1);
insert into pedido values (3, '2023-11-28', '16:30:00', 18990, 'Procesando', 'Sí', 3, 1);
insert into  pedido values (4, '2023-11-28', '17:30:00', 27990, 'Procesando', 'No', 4, 1);


create table domicilio (
  idDomicilio int(11) primary key NOT NULL auto_increment,
  horaDomicilio time null,
  estadoDomicilio varchar(30) null,
  idpedidoFK int(11) null,
  idDomicilioFK int(11) null,
  foreign key (idpedidoFK) references pedido (idpedido)
) ;


insert into domicilio values (1, '13:30:00', 'En proceso', 1, 1);
insert into domicilio values (2, '14:45:00', 'En proceso', 2, 2);
insert into domicilio values (3, '16:15:00', 'Entregado', 3, 3);
insert into domicilio values (4, '17:30:00', 'Procesando', 4, 4);
