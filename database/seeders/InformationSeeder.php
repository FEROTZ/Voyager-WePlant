<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('informations')->insert([
            [
                'id' => 1,
                'title' => '¿Cómo cuidar las flores de exterior en verano?',
                'description' => 'Tenemos que tener especial atención con el riego de nuestras flores en verano, ya que, las altas temperaturas y la sequedad del ambiente las hacen sufrir más si no las regamos suficiente, cuanta más calor haga más las tendremos que regar.

                Os contamos un truco: para evitar que las hojas se quemen y hacer que la tierra esté más tiempo húmeda es mejor regar a primera hora de la mañana o a última hora del día, se tienen que evitar las horas centrales, que es cuando las temperaturas son más altas.

                Si hablamos de la forma de regar las flores en verano, es mucho mejor para ellas no regar tan frecuentemente pero hacerlo en profundidad, que regarlas cada día de una forma superficial. Si las regamos de forma más profunda hacemos que las raíces se desarrollen en profundidad y estarán mejor.

                ¡Pero cuidado con el agua! Se tiene que evitar a toda costa el agua calcárea. Si la de vuestra ciudad tiene mucha cal una cosa que soluciona este problema es echar un chorro de vinagre en el agua y estará lista para las flores.',

                'photo' => 'image1.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'title' => '¿Cuántas horas de oscuridad necesitan tus plantas?',
                'description' => 'Para la fase de crecimiento la marihuana es necesario saber bien cuántas horas de luz necesita la marihuana. La respuesta varía entre las 16 y 20 horas de luz.

                Nosotros recomendamos darle 18 horas de luz y 6 horas de oscuridad. También la podríamos tener a 20/4 en cuyo caso crecerá algo más rápido; o tenerla a 16/8 en cuyo caso crecerá algo menos pero bajaremos la cuenta de la luz.

                Es muy importante no exponer la planta a excesos de luz, tanto en cantidad como en intensidad.

                La marihuana, como un ser vivo, realiza ciertos procesos durante el día y otros procesos internos durante la noche que son necesarios para el desarrollo sano de la planta. Por ello es muy importante tener claro cuántas horas de luz necesita la marihuana.

                Por lo tanto, al cultivar marihuana, recomendamos darle al menos 4 horas de oscuridad para que pueda realizar sus procesos nocturnos con normalidad. Los resultados de una cosecha apresurada no son los mejores.

                Tampoco es recomendable darle más oscuridad de la necesaria. En la etapa de crecimiento, menos de 16 horas de luz podría hacer florecer la planta.',

                'photo' => 'image2.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'title' => '¿El agua azucarada es buena para tus plantas?',
                'description' => 'La única excepción en la que tiene sentido usar agua azucarada es agregarla a las flores cortadas para evitar que se marchiten. Esta es la razón por la cual los floristas a menudo proporcionan una pequeña bolsita de alimento vegetal a base de azúcar para agregar al florero.

                A diferencia de las raíces de las plantas, los tallos de las flores cortadas pueden absorber el azúcar, lo que revive los carbohidratos. El azúcar envía la señal falsa a las flores de que la planta está viva y bien y debe seguir floreciendo. Este efecto es meramente temporal y eventualmente las flores mueren.',

                'photo' => 'image3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'title' => '¿Cómo proteger de tu mascota las plantas de casa?',
                'description' => 'Hoy en día, además de las plantas ornamentales, cada vez es más frecuente la creación de huertos urbanos en las superficies de azoteas, balcones y terrazas de las ciudades. En los hogares donde los propietarios conviven con mascotas es probable que estas causen destrozos que tensen la convivencia.
                Esta circunstancia provoca impotencia en algunas personas y dudas sobre cómo afrontar el problema. En este sentido, como ya sabes, la mejor forma de corregir los malos hábitos es ser paciente y dedicar el suficiente tiempo a la educación de tu mascota. No obstante mientras se completa el proceso de aprendizaje es muy probable que se produzcan episodios en los que tu mascota persista en su actitud rebelde y pueda dañar las plantas. Entonces es cuando resulta muy efectiva la utilización de repelentes.

                En el mercado existen múltiples productos repelentes para mascotas de probada eficacia. De entre todos estos productos, lo ideal es empezar con repelentes naturales porque tienen un efecto comprobado y son menos agresivos.',

                'photo' => 'image4.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
