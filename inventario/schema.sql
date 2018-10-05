create database invps593;
use invps593;
set sql_mode='';

create table user(
	id int not null auto_increment primary key,
	name varchar(50),
	lastname varchar(50),
	username varchar(50),
	email varchar(255),
	password varchar(60),
	image varchar(255),
	is_active boolean not null default 1,
	user_kind boolean not null default 0, 
	is_admin boolean not null default 0,
	created_at datetime
);

insert into user(name,lastname,email,password,is_active,is_admin,created_at) value ("Administrador", "","admin","90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad",1,1,NOW());

create table ruta(
	id int not null auto_increment primary key,
	name varchar(50),
	description text,
	created_at datetime
);

create table product(
	id int not null auto_increment primary key,
	barcode varchar(50),
	name varchar(50),
	description text,
	type_product boolean (2) not null,
	unidad_medida boolean (4) not null,
	tarifa_iva int (2) not null,
	reference_price float,
	user_id int,
	-- person_id int,
	created_at datetime,
	is_active boolean default 1,

	foreign key (user_id) references user(id)


);

/*
person kind
1.- Client
2.- Colaborador
*/
create table person(
	id int not null auto_increment primary key,
	type_identity boolean (4) not null,
	identity varchar (20) not null,
	code varchar (50) not null,
	rol boolean (2),
	name varchar (255) not null
	razon_social varchar(255) not null,
	company_name varchar(255),
	direccion varchar(50),
	telefono varchar(50),
	celular varchar(50),
	email varchar(50),
	saldo_inicial float,
	observacion text,
	kind int,
	is_active boolean not null default 1,
	created_at datetime,
	-- product_id int,
	-- product_barcode varchar(50),


	-- foreign key (product_id) references product(id)

);


create table operation_type(
	id int not null auto_increment primary key,
	name varchar(50)
);

insert into operation_type (name) value ("entrada");
insert into operation_type (name) value ("salida");

create table box(
	id int not null auto_increment primary key,
	created_at datetime
);


create table sell(
	id int not null auto_increment primary key,

	-- `id_producto` int(11) NOT NULL,
 --  `cantidad_tmp` int(11) NOT NULL,
 --  `precio_tmp` double(8,2) DEFAULT NULL,
 --  `session_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL

  
	person_id int ,
	user_id int ,
	operation_type_id int default 2,
	box_id int,

	total double,
	cash double,
	-- discount double,

	foreign key (box_id) references box(id),
	foreign key (operation_type_id) references operation_type(id),
	foreign key (user_id) references user(id),
	foreign key (person_id) references person(id),
	created_at datetime
);

create table operation(
	id int not null auto_increment primary key,
	product_id int,
	q float,
	operation_type_id int,
	sell_id int,
	created_at datetime,
	foreign key (product_id) references product(id),
	foreign key (operation_type_id) references operation_type(id),
	foreign key (sell_id) references sell(id)
);

/*
configuration kind
1.- Boolean
2.- Text
3.- Number
*/
create table configuration(
	id int not null auto_increment primary key,
	short varchar(255) unique,
	name varchar(255) unique,
	kind int,
	val varchar(255)
);
insert into configuration(short,name,kind,val) value("title","Titulo del Sistema",2,"Inventio Lite");
insert into configuration(short,name,kind,val) value("use_image_product","Utilizar Imagenes en los productos",1,0);
insert into configuration(short,name,kind,val) value("active_clients","Activar clientes",1,0);
insert into configuration(short,name,kind,val) value("active_providers","Activar proveedores",1,0);
insert into configuration(short,name,kind,val) value("active_categories","Activar categorias",1,0);
insert into configuration(short,name,kind,val) value("active_reports_word","Activar reportes en Word",1,0);
insert into configuration(short,name,kind,val) value("active_reports_excel","Activar reportes en Excel",1,0);
insert into configuration(short,name,kind,val) value("active_reports_pdf","Activar reportes en PDF",1,0);
