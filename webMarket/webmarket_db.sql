create database webmarket_database;
use webmarket_database;

create table usuarios(
    id int not null AUTO_INCREMENT,
    nombre varchar(30) not null,
    primerApellido varchar(30) not null,
    segundoApellido varchar(30),
    correo varchar(50) not null,
    contra varchar(50) not null,
    PRIMARY KEY(id),
    unique(correo)
);

insert into usuarios(nombre, primerApellido, segundoApellido, correo, contra)
VALUES ('Usuario', 'Demo', 'Demo', 'ejemplo@example.com', 123456);

create table productos(
    id int not null AUTO_INCREMENT,
    nombreProd varchar(50),
    descrip varchar(200),
    precio int not null,
    tipo int not null,
    rutaimg varchar(50),
    PRIMARY KEY(id),
);

insert into productos(nombreProd, descrip, precio, tipo, rutaimg)
values ('Manzana.','Una manzana estándar. Su color tan intenso la vuelve bastante jugosa.',15, 1,'manzanaA.png'),
('Manzana besucona.', 'Una manzana tan dulce que se siente como un beso.', 25, 1,'manzanaB.png'),
('Manzana fachera.', 'Una manzana que lleva unas gafas de sol. Siendo sinceros, esas gafas le sientan de maravilla.', 30, 1,'manzanaD.png'),
('Manzana fisgona.', 'Una manzana que gusta del chisme visual. Déjala en un lugar y luego ella, de alguna forma, te contará todo lo sucedido.', 30, 1,'manzanaE.png'),
('Manzana con sombrero.', 'Una manzana cuyos pasatiempos favoritos son leer y comer golosinas en compañía de otras manzanas. Tiene de amor platónico a la manzana fachera.', 20, 1,'manzanaF.png'),
('Manzana loca.', 'Una manzana con claros desórdenes mentales. Apoya firmemente la idea de que el COVID es invento del gobierno.', 10, 1,'manzanaG.png'),
('Pera.','Una pera estándar. Esta fruta es muy temerosa y siempre es opacada por su hermana: la manzana.',15,2,'peraA.png'),
('Pera fachera.','Una pera con gafas de sol. Debajo de esas gafas esconde una tristeza amarga.', 20, 2, 'peraB.png'),
('Pera con sombrero.','Una pera que porta un sombrero muy fresco para esos momentos al aire libre.', 25,2,'peraC.png'),
('Pera besucona.','Una pera con labios gruesos. Los besos de esta pera te dejarán mareado de lo fuertes que son.',30,2,'peraD.png'),
('Pera loca.','Una pera de gustos excéntricos... si por excéntricos nos referimos a una sopa instantánea con frituras.',17,2,'peraE.png'),
('Pera fisgona.','Una pera que ha visto lo más oscuro del internet. ¿De verdad quieres que te cuente?',40,2,'peraF.png'),
('Plátano.','Un plátano como cualquier otro: amarillo, largo, curveado... ¿Ya mencioné amarillo?',15,3,'bananaA.png'),
('Plátano fachero.','Un plátano muy galán. Este chico es bastante popular entre las chicas.',20,3,'bananaB.png'),
('Plátano con sombrero.','Un plátano con sombrero, así sin más.',25,3,'bananaC.png'),
('Plátano besucón.','Un plátano con gran habilidad de habla, sus dulces palabras son el preludio de un alimento alto en potasio.',20,3,'bananaD.png'),
('Plátano loco.','Un plátano con delírios de grandeza, asegura que llegará a quitarse el "-no" en su nombre para considerarse preciado.',15,3,'bananaE.png'),
('Plátano fisgón.','Un plátano con un ojo pispireto, tan pispireto que no sabes cuando parpadea ni cuando te hace un guiño.',25,3,'bananaF.png'),
('Durazno.','Un durazno rosado y voluptuoso, típico de estos.',15,4,'duraznoA.png'),
('Durazno fachero.','Un durazno con cualidades excepcionales, aunque detesta la luz del sol y por eso siempre lleva gafas.',25,4,'duraznoB.png'),
('Durazno con sombrero.','Un durazno que lleva un sombrerito, los demás duraznos la envidian porque a este le queda mejor.',30,4,'duraznoC.png'),
('Durazno besucón.','Un durazno fanático de tomarse fotografías de espalda y decir que ama su cabello.',25,4,'duraznoD.png'),
('Durazno loco.','Un durazno que se hace llamar princesa de un reino habitado por hongos variopintos.',30,4,'duraznoE.png'),
('Durazno fisgón.','Un durazno de un solo ojo. Este ojo le permite ver la verdad a través de los filtros de Instragram.',25,4,'duraznoF.png'),
('Naranja.','Una naranja anaranjada. Tiene piel rugosa y alto contenido de vitamina C.',15,5,'naranjaA.png'),
('Naranja fachera.','Una naranja que oculta su penoso pasado tras unas gafas oscuras.',30,5,'naranjaB.png'),
('Naranja con sombrero.','Una naranja que a pesar de llevar un sombrero muy lindo, aún tiene un centro muy ácido.',20,5,'naranjaC.png'),
('Naranja besucona.','Una naranja que no hace más que escupir verdades de lo más crueles y ácidos que puedas imaginar.',20,5,'naranjaD.png'),
('Naranja loca.','Una naranja que aún piensa ser un famoso presidente de los EUA, uno de piel muuuy anaranjada.',25,5,'naranjaE.png'),
('Naranja fisgona.','Una naranja con un ojo bastante saltón. Me pregunto si le gustará ver videos...',20,5,'naranjaF.png'),
('Kiwi.','El kiwi, un fruto que se caracteriza por su peludo y marrón exterior. No confundir con el ave del mismo nombre.',15,6,'kiwiA.png'),
('Kiwi fachero.','Un kiwi que aprendió a vestir genial e ignorar el tormento de sus primos lejanos: los kiwis.',30,6,'kiwiB.png'),
('Kiwi con sombrero.','Un kiwi que viste con un sombrerito muy cuqui. Este kiwi se siente orgulloso de tener algo que las aves no.',25,6,'kiwiC.png'),
('Kiwi besucón.','Un kiwi con una boquita seductiva y rosada, es la envidia entre el frutero.',20,6,'kiwiD.png'),
('Kiwi loco.','Un kiwi que por extraño que parezca no se la pasa comparándose con las aves, sino que se cree ministro de Filipinas.',15,6,'kiwiE.png'),
('Kiwi fisgón.','Un kiwi que le encanta ver a las aves a través de la ventana, a veces se atormenta por no haber nacido siendo una.',20,6,'kiwiF.png');

create table registro(
    id int not null AUTO_INCREMENT,
    idusu int not null,
    idprod int not null,
    fecha datetime not null,
    PRIMARY KEY(id)
);

create table carro(
    id int not null AUTO_INCREMENT,
    idProd int not null,
    idUsu int not null,
    nombreProd varchar(50) not null,
    descrip varchar(200) not null,
    precio int not null,
    rutaimg varchar(50) not null,
    PRIMARY KEY(id)
);