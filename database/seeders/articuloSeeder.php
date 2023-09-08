<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class articuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        $titulos = [
            'La Importancia de la Educación en la Sociedad Moderna',
            'El Impacto de la Tecnología en la Vida Cotidiana',
            'Los Beneficios de una Vida Activa y Saludable',
            'Los Desafíos de la Educación a Distancia',
            'La Importancia de la Sostenibilidad Ambiental'
        ];

        $subtitulos = [
            'Subtitulo 1',
            'Subtitulo 2',
            'Subtitulo 3',
            'Subtitulo 4',
            'Subtitulo 5'
        ];

        $contenidos = [
            'La educación es un pilar fundamental en la sociedad moderna. No solo es un vehículo para adquirir conocimientos y habilidades, sino que también desempeña un papel crucial en la formación de ciudadanos informados y responsables. En este artículo, exploraremos la importancia de la educación en la sociedad actual y cómo influye en el desarrollo individual y colectivo.

            En primer lugar, la educación proporciona a las personas las herramientas necesarias para comprender el mundo que las rodea. A través de la educación, las personas pueden adquirir conocimientos en una variedad de disciplinas, desde ciencias y matemáticas hasta humanidades y artes. Esto no solo les permite tomar decisiones informadas en su vida personal, sino que también contribuye al progreso y la innovación en la sociedad.
            
            Además de la adquisición de conocimientos, la educación fomenta el pensamiento crítico y la resolución de problemas. Los estudiantes aprenden a analizar información, evaluar argumentos y tomar decisiones fundamentadas. Estas habilidades son esenciales en un mundo donde la información es abundante y a menudo contradictoria. La educación no solo se trata de lo que se aprende, sino de cómo se aprende a aprender.
            
            Otro aspecto importante de la educación es su capacidad para promover la igualdad de oportunidades. Cuando se proporciona una educación de calidad a todos los miembros de la sociedad, se reduce la brecha entre los ricos y los pobres. Esto no solo beneficia a los individuos al permitirles acceder a mejores empleos y oportunidades, sino que también contribuye a una sociedad más equitativa y cohesionada.
            
            En resumen, la educación desempeña un papel fundamental en la sociedad moderna al proporcionar conocimientos, fomentar el pensamiento crítico y promover la igualdad de oportunidades. Es un motor de desarrollo individual y colectivo que contribuye al progreso y al bienestar de la sociedad en su conjunto. Por lo tanto, invertir en la educación es una inversión en el futuro de una sociedad próspera y justa.',
            'En la sociedad contemporánea, la tecnología se ha convertido en una parte integral de la vida cotidiana. Desde los smartphones que llevamos en nuestros bolsillos hasta la automatización en nuestros hogares, la tecnología ha transformado la forma en que vivimos, trabajamos y nos relacionamos. En este artículo, examinaremos el impacto de la tecnología en la vida cotidiana y cómo ha cambiado nuestra forma de interactuar con el mundo.

            Uno de los cambios más notables ha sido la forma en que la tecnología ha alterado nuestras interacciones sociales. Las redes sociales y las aplicaciones de mensajería han conectado a personas de todo el mundo, permitiéndoles mantenerse en contacto instantáneamente. Sin embargo, también han planteado cuestiones sobre la privacidad y la adicción a la pantalla. Las relaciones personales han evolucionado, con más comunicación digital y menos cara a cara.
            
            La tecnología también ha mejorado la conveniencia en nuestra vida diaria. Los dispositivos inteligentes en el hogar, como termostatos y asistentes de voz, hacen que la gestión del entorno sea más eficiente. Los vehículos autónomos y las aplicaciones de viaje compartido han cambiado la forma en que nos movemos por la ciudad. La compra en línea ha revolucionado la forma en que adquirimos productos, brindando comodidad pero también planteando preocupaciones sobre el comercio local y la sostenibilidad.
            
            Sin embargo, no todo son beneficios. La dependencia de la tecnología también ha generado preocupaciones sobre la seguridad cibernética y la pérdida de empleos debido a la automatización. Además, el tiempo que pasamos frente a pantallas puede tener efectos negativos en nuestra salud mental y física si no se gestiona adecuadamente.
            
            En resumen, la tecnología ha tenido un impacto profundo en la vida cotidiana, desde la forma en que nos comunicamos hasta cómo administramos nuestro tiempo y nuestras tareas. Si bien ofrece una mayor comodidad y conectividad, también plantea desafíos que requieren una gestión consciente para garantizar que la tecnología mejore nuestra calidad de vida sin perjudicarla.',
            'Una vida activa y saludable es esencial para el bienestar general de una persona. Más allá de la estética, mantener un estilo de vida activo y saludable tiene una serie de beneficios tanto físicos como mentales. En este artículo, exploraremos por qué es importante llevar un estilo de vida activo y cómo puede mejorar la calidad de vida.

            En primer lugar, el ejercicio regular es crucial para mantener la salud física. Ayuda a mantener un peso corporal saludable, fortalece los músculos y mejora la resistencia cardiovascular. Esto, a su vez, reduce el riesgo de enfermedades crónicas como la obesidad, la diabetes tipo 2 y las enfermedades cardíacas. Además, el ejercicio libera endorfinas, que son neurotransmisores que actúan como analgésicos naturales y generadores de bienestar, lo que ayuda a reducir el estrés y mejorar el estado de ánimo.
            
            Una vida activa también contribuye a una mejor salud mental. El ejercicio regular se ha asociado con la reducción de los síntomas de la depresión y la ansiedad, así como con una mayor claridad mental y concentración. La actividad física promueve la liberación de neurotransmisores como la serotonina, que están relacionados con la regulación del estado de ánimo y el bienestar emocional.
            
            Además, un estilo de vida activo fomenta la socialización y la interacción con otros. Participar en actividades deportivas o ejercicios en grupo puede fortalecer las relaciones personales y crear un sentido de comunidad. La sensación de pertenencia y apoyo social tiene beneficios profundos para la salud mental y emocional.
            
            En resumen, llevar una vida activa y saludable no solo tiene beneficios físicos evidentes, como mantener un peso corporal saludable y reducir el riesgo de enfermedades crónicas, sino que también mejora la salud mental y emocional al reducir el estrés y fomentar la socialización. Comprometerse con un estilo de vida activo es una inversión en la salud y el bienestar a largo plazo.',
            'La educación a distancia ha experimentado un auge significativo en los últimos años, especialmente con el surgimiento de la tecnología digital. Si bien ofrece ventajas en términos de accesibilidad y flexibilidad, también presenta una serie de desafíos que afectan tanto a estudiantes como a educadores. En este artículo, exploraremos algunos de los desafíos clave asociados con la educación a distancia.

            Uno de los principales desafíos de la educación a distancia es la falta de interacción cara a cara. A diferencia de las aulas tradicionales, donde los estudiantes y profesores pueden interactuar en persona, la educación a distancia se basa en la comunicación a través de plataformas en línea. Esto puede resultar en una experiencia de aprendizaje menos personal y la pérdida de la dinámica de grupo que fomenta la colaboración y el intercambio de ideas.
            
            Otro desafío es la disciplina y la autogestión requerida por parte de los estudiantes. En un entorno de aprendizaje a distancia, los estudiantes deben ser responsables de organizar su tiempo de estudio y mantenerse motivados. La falta de una estructura física puede llevar a la procrastinación y al abandono de los cursos si no se gestionan adecuadamente.
            
            Además, la brecha digital es un obstáculo importante en la educación a distancia. No todos los estudiantes tienen acceso a la tecnología o a una conexión a internet confiable, lo que limita su capacidad para participar en cursos en línea. Esto plantea preocupaciones sobre la equidad en el acceso a la educación.
            
            En resumen, la educación a distancia ofrece flexibilidad y accesibilidad, pero también presenta desafíos significativos relacionados con la interacción interpersonal, la autodisciplina y la brecha digital. Superar estos desafíos requiere un enfoque cuidadoso en el diseño de cursos en línea y el apoyo adecuado tanto para estudiantes como para educadores.',
            'La sostenibilidad ambiental es un tema de creciente relevancia en la sociedad actual. Se refiere a la práctica de utilizar los recursos naturales de manera que no comprometan la capacidad de las generaciones futuras para satisfacer sus propias necesidades. En este artículo, exploraremos la importancia de la sostenibilidad ambiental y cómo puede afectar a nuestro planeta y a nuestra calidad de vida.

            Uno de los aspectos más críticos de la sostenibilidad ambiental es la conservación de los recursos naturales. El agotamiento de recursos como el agua dulce, los combustibles fósiles y los bosques puede tener efectos devastadores en el medio ambiente y la economía. La sostenibilidad promueve la gestión responsable de estos recursos, asegurando que estén disponibles para las generaciones futuras.
            
            Además, la sostenibilidad ambiental está estrechamente relacionada con la reducción de la contaminación y la mitigación del cambio climático. Las emisiones de gases de efecto invernadero, la contaminación del aire y del agua, y la degradación del suelo son problemas urgentes que amenazan la salud de nuestro planeta y de sus habitantes. Adoptar prácticas sostenibles, como la transición a fuentes de energía renovable, puede ayudar a mitigar estos impactos negativos.
            
            La sostenibilidad también tiene beneficios económicos. Las empresas que adoptan prácticas sostenibles a menudo encuentran oportunidades de ahorro de costos a través de la eficiencia energética y la reducción de desperdicios. Además, la creciente conciencia de la sostenibilidad entre los consumidores puede impulsar la demanda de productos y servicios sostenibles, lo que a su vez puede estimular la innovación y el crecimiento económico.
            
            En resumen, la sostenibilidad ambiental es esencial para la preservación de nuestro planeta y la calidad de vida de las generaciones futuras. Promueve la conservación de recursos naturales, la reducción de la contaminación y la mitigación del cambio climático, al tiempo que ofrece beneficios económicos. Adoptar prácticas sostenibles es una responsabilidad compartida que todos podemos asumir para un futuro más saludable y próspero.'
        ];
        
        $faker = Faker::create();

        foreach (range(1, 5) as $index) {
            DB::table('articulos')->insert([
                'id' => $faker->uuid,
                'titulo' => $titulos[$index -1],
                'subtitulo' => $subtitulos[$index -1],
                'contenido' => $contenidos[$index -1],
                'fecha_publicacion' => $faker->dateTimeBetween('-1 year', 'now'),
                'estado_revision' => $faker->randomElement([0, 1, 2]),
                'autor_id' => $faker->numberBetween(1, 6), // Ajusta este rango según tus usuarios reales
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
