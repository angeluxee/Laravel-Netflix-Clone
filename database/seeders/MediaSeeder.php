<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Media;

class MediaSeeder extends Seeder
{
    /**
     * Ejecuta los seeders de la base de datos.
     *
     * @return void
     */
    public function run()
    {
        // Peliculas
        Media::create([
            'title' => 'El Laberinto del Fauno',
            'sinopsis' => 'En la España de 1944, una niña se traslada con su madre a vivir con su cruel padrastro, un oficial del ejército franquista, donde descubre un laberinto mágico que le presenta desafíos oscuros y peligrosos.',
            'year' => 2006,
            'director' => 'Guillermo del Toro',
            'cast' => 'Ivana Baquero, Sergi López, Maribel Verdú',
            'type' => 'movie',
            'genre' => 'Drama, Fantasía, Guerra',
            'duration' => 118, // Duración en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'Torrente, el brazo tonto de la ley',
            'sinopsis' => 'Torrente es un policía corrupto, machista y racista que intenta resolver un caso de tráfico de drogas mientras vive una vida de excesos y decadencia en España.',
            'year' => 1998,
            'director' => 'Santiago Segura',
            'cast' => 'Santiago Segura, Javier Cámara, Neus Asensi',
            'type' => 'movie',
            'genre' => 'Comedia, Crimen',
            'duration' => 97, // Duración en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'Mar adentro',
            'sinopsis' => 'Basada en la vida real de Ramón Sampedro, un hombre tetrapléjico que luchó durante años por el derecho a morir dignamente, esta película relata su historia y las dificultades legales y éticas que enfrentó.',
            'year' => 2004,
            'director' => 'Alejandro Amenábar',
            'cast' => 'Javier Bardem, Belén Rueda, Lola Dueñas',
            'type' => 'movie',
            'genre' => 'Biografía, Drama',
            'duration' => 125, // Duración en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'Los Otros',
            'sinopsis' => 'En la inmediata posguerra española, una mujer vive con sus dos hijos en una casa oscura y aislada, creyendo que están poseídos por espíritus malignos. Cuando contrata a un grupo de sirvientes, su presencia desencadena eventos sobrenaturales.',
            'year' => 2001,
            'director' => 'Alejandro Amenábar',
            'cast' => 'Nicole Kidman, Fionnula Flanagan, Christopher Eccleston',
            'type' => 'movie',
            'genre' => 'Drama, Terror, Misterio',
            'duration' => 104, // Duración en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'El secreto de sus ojos',
            'sinopsis' => 'Un oficial retirado de la justicia argentina intenta escribir una novela basada en un caso sin resolver de violencia y amor que lo obsesionó durante años.',
            'year' => 2009,
            'director' => 'Juan José Campanella',
            'cast' => 'Ricardo Darín, Soledad Villamil, Pablo Rago',
            'type' => 'movie',
            'genre' => 'Crimen, Drama, Misterio',
            'duration' => 129, // Duración en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'Relatos salvajes',
            'sinopsis' => 'Una serie de seis historias independientes que exploran la naturaleza salvaje de la humanidad y los extremos a los que puede llegar cuando se enfrenta a la injusticia y la traición.',
            'year' => 2014,
            'director' => 'Damián Szifron',
            'cast' => 'Ricardo Darín, Oscar Martínez, Leonardo Sbaraglia',
            'type' => 'movie',
            'genre' => 'Comedia, Crimen, Drama',
            'duration' => 122, // Duración en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'Ocho apellidos vascos',
            'sinopsis' => 'Un hombre andaluz intenta impresionar a una mujer vasca haciéndose pasar por vasco, lo que desencadena una serie de eventos cómicos y enredos culturales mientras intenta ganarse el afecto de su familia y amigos.',
            'year' => 2014,
            'director' => 'Emilio Martínez-Lázaro',
            'cast' => 'Dani Rovira, Clara Lago, Karra Elejalde',
            'type' => 'movie',
            'genre' => 'Comedia, Romance',
            'duration' => 98, // Duración en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'La piel que habito',
            'sinopsis' => 'Un cirujano plástico atormentado por un pasado oscuro y una obsesión por crear una piel sintética perfecta experimenta con un misterioso paciente en su mansión aislada.',
            'year' => 2011,
            'director' => 'Pedro Almodóvar',
            'cast' => 'Antonio Banderas, Elena Anaya, Marisa Paredes',
            'type' => 'movie',
            'genre' => 'Drama, Terror, Thriller',
            'duration' => 120, // Duración en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'Tesis',
            'sinopsis' => 'Una estudiante de cine investiga sobre la violencia en los medios de comunicación y descubre una serie de grabaciones snuff que la llevan a enfrentarse a un peligroso asesino.',
            'year' => 1996,
            'director' => 'Alejandro Amenábar',
            'cast' => 'Ana Torrent, Fele Martínez, Eduardo Noriega',
            'type' => 'movie',
            'genre' => 'Misterio, Thriller',
            'duration' => 125, // Duración en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'Volver',
            'sinopsis' => 'Después de la muerte de su esposo, una mujer vuelve a su pueblo natal en España y se reúne con su hermana y su madre, donde se enfrenta a secretos familiares y asuntos pendientes.',
            'year' => 2006,
            'director' => 'Pedro Almodóvar',
            'cast' => 'Penélope Cruz, Carmen Maura, Lola Dueñas',
            'type' => 'movie',
            'genre' => 'Comedia, Drama',
            'duration' => 121, // Duración en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'Mujeres al borde de un ataque de nervios',
            'sinopsis' => 'Cuando una actriz descubre que su amante está dejándola, se embarca en una serie de eventos caóticos y cómicos que involucran a su mejor amiga, el hijo de su amante y un secuestrador.',
            'year' => 1988,
            'director' => 'Pedro Almodóvar',
            'cast' => 'Carmen Maura, Antonio Banderas, Julieta Serrano',
            'type' => 'movie',
            'genre' => 'Comedia, Drama',
            'duration' => 89, // Duración en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'Hable con ella',
            'sinopsis' => 'Dos hombres solitarios se conectan a través de su cuidado de dos mujeres en coma, mientras enfrentan sus propios dilemas emocionales y luchan por encontrar significado en sus vidas.',
            'year' => 2002,
            'director' => 'Pedro Almodóvar',
            'cast' => 'Javier Cámara, Darío Grandinetti, Leonor Watling',
            'type' => 'movie',
            'genre' => 'Drama, Misterio, Romance',
            'duration' => 112, // Duración en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'Abre los ojos',
            'sinopsis' => 'Un joven rico se ve desfigurado en un accidente y debe enfrentarse a una nueva realidad llena de confusión y misterio, mientras lucha por descubrir la verdad detrás de su situación.',
            'year' => 1997,
            'director' => 'Alejandro Amenábar',
            'cast' => 'Eduardo Noriega, Penélope Cruz, Chete Lera',
            'type' => 'movie',
            'genre' => 'Drama, Misterio, Ciencia ficción',
            'duration' => 117, // Duración en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'Todo sobre mi madre',
            'sinopsis' => 'Una mujer se embarca en un viaje a Barcelona para encontrar al padre de su hijo, enfrentándose a la muerte de su hijo, su propia identidad y una serie de relaciones complicadas en el camino.',
            'year' => 1999,
            'director' => 'Pedro Almodóvar',
            'cast' => 'Cecilia Roth, Marisa Paredes, Candela Peña',
            'type' => 'movie',
            'genre' => 'Drama',
            'duration' => 101, // Duración en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'Tacones lejanos',
            'sinopsis' => 'Una exitosa cantante se enfrenta a su madre, una famosa presentadora de televisión, mientras desentrañan secretos del pasado y luchan por encontrar un sentido de identidad y reconciliación.',
            'year' => 1991,
            'director' => 'Pedro Almodóvar',
            'cast' => 'Victoria Abril, Marisa Paredes, Miguel Bosé',
            'type' => 'movie',
            'genre' => 'Drama, Misterio',
            'duration' => 112, // Duración en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'Carne trémula',
            'sinopsis' => 'La vida de un policía y una mujer embarazada cambia para siempre cuando un accidente los une en una trama de traición, deseo y venganza en el Madrid de los años 90.',
            'year' => 1997,
            'director' => 'Pedro Almodóvar',
            'cast' => 'Javier Bardem, Francesca Neri, Liberto Rabal',
            'type' => 'movie',
            'genre' => 'Drama, Misterio, Romance',
            'duration' => 103, // Duración en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'Vacas',
            'sinopsis' => 'En un pueblo vasco en el siglo XIX, dos familias se enfrentan en una sangrienta disputa que se extiende a lo largo de varias generaciones, afectando a sus vidas y relaciones de maneras inesperadas.',
            'year' => 1992,
            'director' => 'Julio Médem',
            'cast' => 'Emma Suárez, Carmelo Gómez, Ana Torrent',
            'type' => 'movie',
            'genre' => 'Drama',
            'duration' => 96, // Duración en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'Todo sobre mi madre',
            'sinopsis' => 'Una mujer se embarca en un viaje a Barcelona para encontrar al padre de su hijo, enfrentándose a la muerte de su hijo, su propia identidad y una serie de relaciones complicadas en el camino.',
            'year' => 1999,
            'director' => 'Pedro Almodóvar',
            'cast' => 'Cecilia Roth, Marisa Paredes, Candela Peña',
            'type' => 'movie',
            'genre' => 'Drama',
            'duration' => 101, // Duración en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'La Lengua de las Mariposas',
            'sinopsis' => 'En la España de 1936, un niño se hace amigo de su maestro republicano, pero su relación se ve amenazada por la creciente presencia del fascismo y la violencia política.',
            'year' => 1999,
            'director' => 'José Luis Cuerda',
            'cast' => 'Fernando Fernán Gómez, Manuel Lozano, Uxia Blanco',
            'type' => 'movie',
            'genre' => 'Drama',
            'duration' => 96, // Duración en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'Amores perros',
            'sinopsis' => 'Tres historias entrelazadas exploran la vida en la Ciudad de México, donde el amor, la traición y la tragedia chocan en un paisaje urbano vibrante y caótico.',
            'year' => 2000,
            'director' => 'Alejandro González Iñárritu',
            'cast' => 'Emilio Echevarría, Gael García Bernal, Goya Toledo',
            'type' => 'movie',
            'genre' => 'Drama, Thriller',
            'duration' => 154, // Duración en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        // Series
        Media::create([
            'title' => 'La Casa de Papel',
            'sinopsis' => 'Un misterioso hombre conocido como "El Profesor" recluta a ocho delincuentes con habilidades especiales para llevar a cabo un ambicioso plan de atraco a la Fábrica Nacional de Moneda y Timbre de España.',
            'year' => 2017,
            'director' => 'Álex Pina',
            'cast' => 'Úrsula Corberó, Álvaro Morte, Itziar Ituño',
            'type' => 'serie',
            'genre' => 'Crimen, Drama, Suspenso',
            'duration' => 70, // Duración promedio por episodio en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'El Internado',
            'sinopsis' => 'Un grupo de estudiantes y profesores de un internado aislado luchan por descubrir la verdad detrás de una serie de eventos misteriosos que suceden en el pasado y el presente.',
            'year' => 2007,
            'director' => 'Daniel Écija, Laura Belloso',
            'cast' => 'Marta Torné, Martiño Rivas, Yon González',
            'type' => 'serie',
            'genre' => 'Drama, Misterio, Thriller',
            'duration' => 50, // Duración promedio por episodio en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'Las Chicas del Cable',
            'sinopsis' => 'En la década de 1920, cuatro mujeres jóvenes trabajan como operadoras de telefonía en una empresa de telecomunicaciones en Madrid, luchando por su independencia en un mundo dominado por hombres.',
            'year' => 2017,
            'director' => 'Ramón Campos, Teresa Fernández-Valdés, Gema R. Neira',
            'cast' => 'Blanca Suárez, Yon González, Ana Fernández',
            'type' => 'serie',
            'genre' => 'Drama, Historia, Romance',
            'duration' => 50, // Duración promedio por episodio en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'Élite',
            'sinopsis' => 'En Las Encinas, una exclusiva escuela privada en España, la llegada de tres estudiantes de clase trabajadora provoca conflictos entre los alumnos y desencadena un asesinato.',
            'year' => 2018,
            'director' => 'Darío Madrona, Carlos Montero',
            'cast' => 'Itzan Escamilla, Miguel Bernardeau, Álvaro Rico',
            'type' => 'serie',
            'genre' => 'Crimen, Drama, Misterio',
            'duration' => 50, // Duración promedio por episodio en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'Gran Hotel',
            'sinopsis' => 'Un joven llega al Gran Hotel en busca de su hermana desaparecida, solo para descubrir los oscuros secretos y peligros que acechan en el lujoso hotel y entre su personal.',
            'year' => 2011,
            'director' => 'Ramón Campos, Teresa Fernández-Valdés, Carlos Sedes',
            'cast' => 'Yon González, Amaia Salamanca, Adriana Ozores',
            'type' => 'serie',
            'genre' => 'Crimen, Drama, Misterio',
            'duration' => 70, // Duración promedio por episodio en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'Vis a Vis',
            'sinopsis' => 'Una joven ingresa a prisión acusada de cometer delitos fiscales, donde debe aprender a sobrevivir y adaptarse a la dura vida carcelaria mientras lucha por su libertad.',
            'year' => 2015,
            'director' => 'Daniel Écija, Iván Escobar, Álex Pina',
            'cast' => 'Maggie Civantos, Najwa Nimri, Carlos Hipólito',
            'type' => 'serie',
            'genre' => 'Crimen, Drama, Thriller',
            'duration' => 50, // Duración promedio por episodio en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'Los Serrano',
            'sinopsis' => 'La vida de una familia se complica cuando el viudo Antonio Serrano, dueño de una ferretería, se casa con una mujer divorciada con tres hijos, fusionando así dos familias muy diferentes.',
            'year' => 2003,
            'director' => 'Daniel Écija, Álex Pina',
            'cast' => 'Antonio Resines, Belén Rueda, Fran Perea',
            'type' => 'serie',
            'genre' => 'Comedia, Drama, Romance',
            'duration' => 70, // Duración promedio por episodio en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'Física o Química',
            'sinopsis' => 'Un grupo de jóvenes estudiantes y profesores de un instituto español enfrentan los desafíos de la adolescencia mientras lidian con temas como el amor, la amistad, el sexo y las drogas.',
            'year' => 2008,
            'director' => 'Carlos Montero, Darío Madrona',
            'cast' => 'Andrea Duro, Javier Calvo, Angy Fernández',
            'type' => 'serie',
            'genre' => 'Drama, Romance',
            'duration' => 50, // Duración promedio por episodio en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'Los hombres de Paco',
            'sinopsis' => 'Un grupo de policías en un vecindario de Madrid enfrenta crímenes, dramas personales y situaciones cómicas mientras luchan por hacer cumplir la ley y mantener la paz.',
            'year' => 2005,
            'director' => 'Daniel Écija, Álex Pina',
            'cast' => 'Paco Tous, Pepón Nieto, Carlos Santos',
            'type' => 'serie',
            'genre' => 'Acción, Comedia, Crimen',
            'duration' => 70, // Duración promedio por episodio en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'Hospital Central',
            'sinopsis' => 'La vida profesional y personal de los médicos, enfermeras y pacientes en un hospital de Madrid se entrelazan en una serie de casos médicos y dramas personales.',
            'year' => 2000,
            'director' => 'José Luis Moreno',
            'cast' => 'Jordi Rebellón, Lluís Homar, Patricia Vico',
            'type' => 'serie',
            'genre' => 'Drama, Médico',
            'duration' => 70, // Duración promedio por episodio en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'Aquí no hay quien viva',
            'sinopsis' => 'Los residentes de un edificio de apartamentos en Madrid lidian con una variedad de problemas, conflictos y situaciones cómicas en su vida diaria.',
            'year' => 2003,
            'director' => 'Antonio Sánchez, Alberto Caballero',
            'cast' => 'Eduardo Gómez, Mariví Bilbao, Eva Isanta',
            'type' => 'serie',
            'genre' => 'Comedia',
            'duration' => 50, // Duración promedio por episodio en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'Cuéntame cómo pasó',
            'sinopsis' => 'Una familia española de clase trabajadora a lo largo de varias décadas, desde finales de los años 60 hasta la actualidad, enfrenta los cambios sociales, políticos y económicos de la historia de España.',
            'year' => 2001,
            'director' => 'Miguel Ángel Bernardeau, Ana León, Sergio Cabrera',
            'cast' => 'Imanol Arias, Ana Duato, Ricardo Gómez',
            'type' => 'serie',
            'genre' => 'Comedia, Drama, Familia',
            'duration' => 60, // Duración promedio por episodio en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'El Barco',
            'sinopsis' => 'La tripulación y los pasajeros de un barco escuela se enfrentan a una catástrofe global cuando una misteriosa pandemia aniquila la población mundial mientras navegan en alta mar.',
            'year' => 2011,
            'director' => 'Álex Pina, Iván Escobar, Esther Martínez Lobato',
            'cast' => 'Mario Casas, Blanca Suárez, Juanjo Artero',
            'type' => 'serie',
            'genre' => 'Aventura, Drama, Misterio',
            'duration' => 75, // Duración promedio por episodio en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'Aída',
            'sinopsis' => 'Una mujer de clase trabajadora en un vecindario de Madrid lucha por criar a sus dos hijos y enfrenta una serie de situaciones cómicas y problemas cotidianos con su peculiar familia y amigos.',
            'year' => 2005,
            'director' => 'Miguel Albaladejo, Laura Caballero, Alberto Caballero',
            'cast' => 'Paco León, Carmen Machi, Mariano Peña',
            'type' => 'serie',
            'genre' => 'Comedia',
            'duration' => 45, // Duración promedio por episodio en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'Los Protegidos',
            'sinopsis' => 'Una familia común descubre que cada uno de sus hijos posee habilidades especiales, y se ven obligados a huir y ocultarse de una organización gubernamental que los persigue.',
            'year' => 2010,
            'director' => 'Antonio Mercero, Jorge Torregrossa',
            'cast' => 'Antonio Garrido, Ana Fernández, Luis Fernández',
            'type' => 'serie',
            'genre' => 'Acción, Drama, Fantasía',
            'duration' => 50, // Duración promedio por episodio en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'Los Misterios de Laura',
            'sinopsis' => 'Una detective de la policía de Madrid lidia con los desafíos de su trabajo y las complicaciones de ser madre soltera mientras resuelve casos criminales con su astucia e intuición.',
            'year' => 2009,
            'director' => 'Carlos Vila, Javier Holgado',
            'cast' => 'María Pujalte, Fernando Guillén Cuervo, Oriol Tarrasón',
            'type' => 'serie',
            'genre' => 'Comedia, Crimen, Misterio',
            'duration' => 50, // Duración promedio por episodio en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'Los hombres de Paco',
            'sinopsis' => 'Un grupo de policías en un vecindario de Madrid enfrenta crímenes, dramas personales y situaciones cómicas mientras luchan por hacer cumplir la ley y mantener la paz.',
            'year' => 2005,
            'director' => 'Daniel Écija, Álex Pina',
            'cast' => 'Paco Tous, Pepón Nieto, Carlos Santos',
            'type' => 'serie',
            'genre' => 'Acción, Comedia, Crimen',
            'duration' => 70, // Duración promedio por episodio en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'El Ministerio del Tiempo',
            'sinopsis' => 'Un equipo especial del gobierno español viaja a través del tiempo para proteger la historia y enfrentarse a amenazas que buscan cambiar el curso de eventos históricos.',
            'year' => 2015,
            'director' => 'Javier Olivares, Pablo Olivares',
            'cast' => 'Julián Villagrán, Nacho Fresneda, Macarena García',
            'type' => 'serie',
            'genre' => 'Aventura, Comedia, Drama',
            'duration' => 70, // Duración promedio por episodio en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'Hospital Central',
            'sinopsis' => 'La vida profesional y personal de los médicos, enfermeras y pacientes en un hospital de Madrid se entrelazan en una serie de casos médicos y dramas personales.',
            'year' => 2000,
            'director' => 'José Luis Moreno',
            'cast' => 'Jordi Rebellón, Lluís Homar, Patricia Vico',
            'type' => 'serie',
            'genre' => 'Drama, Médico',
            'duration' => 70, // Duración promedio por episodio en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);

        Media::create([
            'title' => 'El Internado: Las Cumbres',
            'sinopsis' => 'En un internado aislado en los Pirineos, un grupo de adolescentes problemáticos descubre oscuros secretos y fuerzas sobrenaturales que acechan en los bosques cercanos.',
            'year' => 2021,
            'director' => 'Laura Belloso, Asier Anduenza, Sara Belloso',
            'cast' => 'Albert Salazar, Daniel Arias, Claudia Riera',
            'type' => 'serie',
            'genre' => 'Crimen, Drama, Misterio',
            'duration' => 50, // Duración promedio por episodio en minutos
            'poster' => '/storage/posters/venom.webp',
            'file' => '/storage/file/patacas.mp4',
        ]);
    }
}
