create table pelicula (
id_pelicula int,
director varchar(30),
nombre_pelicula varchar(40),
duracion varchar(30),
horarios varchar(100),
genero varchar(30),
descripcion varchar(400),
imagen varchar(255),
PRIMARY KEY(id_pelicula)
);

INSERT INTO pelicula(id_pelicula,director, nombre_pelicula, duracion, genero,descripcion) VALUES 
(1,'Anthony Russo', 'Averngers: End Game', '3h 20m', 'Accion', 'Adrift in space with no food or water, Tony Stark sends a message to Pepper Potts as his oxygen supply starts to dwindle. Meanwhile, the remaining Avengers -- Thor, Black Widow, Captain America and Bruce Banner -- must figure out a way to bring back their vanquished allies for an epic showdown with Thanos -- the evil demigod who decimated the planet and the universe.'),
(2,'Jordan Peele', 'Nosotros', '2h 1m', 'Misterio', 'Adelaide y su esposo viajan a la casa en la que ella creció junto a la playa. Tiene un presentimiento siniestro que precede a un encuentro espeluznante: cuatro enmascarados se presentan ante su casa. Lo aterrador viene cuando muestran sus rostros.'),
(3,'Nacho G. Velilla', 'No Manches Frida 2', '1hr 2m','Comedia', 'Un exconvicto intenta recuperar a su novia mientras entrena a un grupo de estudiantes de secundaria para competir en un torneo.'),
(4,'Michael Chaves', 'La maldicion de la llorona', '1h 33m', 'Terror', 'Los Ángeles, década de 1970. Un legendario fantasma que se oculta en la oscuridad de la noche aterra a los niños. Tras ignorar espeluzantes advertencias, una trabajadora social y sus hijos se adentran en un mundo sobrenatural repleto de misterio. Su única esperanza para sobrevivir a la Llorona radica en un sacerdote que practica el misticismo.'),
(5,'David Feiss', 'Parque magico', '86 min', 'Animada', 'Pronto podrás conocer el parque de diversiones más divertido que haya existido. Mira ahora el nuevo tráiler de Parque Mágico con Andrea Legarreta, Erik Rubín, Mía Rubín, Nina Rubín, Christian Martinoli y Luis García.'),
(6,'Tim Burton', 'Dumbo', '1h 52m', 'Aventura', 'El dueño de un circo en aprietos contrata a un hombre y sus dos hijos para cuidar de un elefante recién nacido que puede volar, que pronto se convierte en la atracción principal que revitaliza al circo.'),
(7,'Mamoru Hosoda','Mirai: Mi pequeña hermana', '1h 40m', 'Drama', 'Mirai no Mirai es una película japonesa de animación dirigida por Mamoru Hosoda. Fue estrenada en el Festival de Cannes en mayo de 2018. Se estrenó en Japón el 20 de julio de 2018'),
(8,'Roxann Dawson', 'Un amor inquebrantable', '1h 56m', 'Drama', 'Despúes de estabajo el agua durante más de 15 minutos, un niño de 14 años de Misuri continúa luchando por su vida mientras sus padres adoptivos y su pastor permanecen junto a su cama y rezan por un milagro.'),
(9,'Brian A. Miller', 'Amnesia', '96 min', 'Accion', 'Un criminal que ha perdido la memoria, quien resulta ser el único superviviente de un grupo delictivo que atracó un camión blindado, es extraído de su celda para ser llevado a un centro experimental'),
(10,'Johnathan Levine','Ni en Sueños', '125 min', 'Comedia', 'El periodista político Fred Flarsky se reencuentra con su ex-niñera y chica de sus sueños, Charlotte Field, ahora una humanitaria, trotamundos y renombrada diplomática de Estados Unidos'),
(11,'Sebastián del Amo', 'El Complot Mongol', '110 min', 'Thriller', 'Solo unos días antes de la visita a México del presidente de los Estados Unidos, Filiberto García, ex revolucionario mexicano es reclutado por la policía mexicana para investigar sobre un complot mongol.');