@extends('layouts.user_type.auth')

@section('content')

<div>
    <div class="container-fluid">
        <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/vegetables/zanahorias.jpg'); background-position-y: 50%;">
            <span class="mask bg-gradient-primary opacity-6"></span>
        </div>
        <div class="card card-body blur shadow-blur mx-4 mt-n6">
            <div class="row gx-4">
                <div class="col-auto my-auto">
                    <div class="h-100">
                        <h5 class="mb-1">
                            {{ __('Cómo Cultivar Zanahoria Orgánica en Casa') }}
                        </h5>
                        <p class="mb-0 font-weight-bold text-sm">
                          14/06/2022 | WePlant
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-4">
        <div class="card">
            <div class="card-body pt-4 p-3">
                <p>
                  Una raíz comestible llena de vitaminas, minerales y antioxidantes. La zanahoria se originó en Asia Central, se consumían principalmente las hojas y semillas, ya que la raíz tenía textura leñosa. Después de muchos años de domesticación, se llegó a las variedades comestibles que tenemos hoy en día. Aprende cómo cultivar la zanahoria en casa, sus cuidados, beneficios y algunas recetas.

                  La zanahoria es una raíz que comúnmente conocemos de color naranja, con un delicioso y delicado sabor dulce. La podemos encontrar en cualquier mercado, tienda o tianguis. Pero existen una gran infinidad de colores y formas en las zanahorias, podemos encontrarlas de color blanco, amarillo, rojizo o morado.

                  Las zanahorias son una de las hortalizas que se produce con siembra directa. Las semillas son alargadas y muy pequeñas, aproximadamente de 2mm de largo y su color es café claro. Realizar surcos de 1cm de profundidad y 8-10cm entre hileras. Pueden hacerse en hileras dobles o triples para aprovechar el  espacio. Colocar las semillas de zanahoria dejando 5cm entre ellas.

                  Las plántulas comenzarán a brotar a los 15-20 días de la siembra. Los cotiledones serán hojas delgadas y alargadas. Cuando aparezca el segundo par de hojas debemos colocar suelo, mezcla preparada con composta o sólo composta, hasta la base del primer par de hojas.
                </p>
                <h6>Cuidado y consejos</h6>
                <ol>
                  <li>Mantener la humedad en el suelo, evitar el exceso de agua.</li>
                  <li>Deshierbar para evitar plagas y enfermedades.</li>
                  <li>Retirar las hojas viejas y amarillas de las plantas.</li>
                  <li>Aflojar un poco el suelo si se forma una costra, tener cuidado de no lastimar las plantas.</li>
                  <li>Resiste temperaturas de hasta -5°C, cubrir nuestras plantas con agrovelo si la temperatura es bajo cero.</li>
                  <li>Las zanahorias pueden asociarse con lechuga, col, chícharo, cebolla, poro y jitomate.</li>
                  <li>Evitar la siembra de zanahoria donde hubo plantas de la familia Apiaceae (eneldo, apio, cilantro, hinojo, perejil, etc) así se evitarán plagas y enfermedades.</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection