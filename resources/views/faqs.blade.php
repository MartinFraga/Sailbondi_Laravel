@extends('layouts.layout')

@section('content')
<!-- ACORDION -->
<div class="accordion" id="accordionExample">
    <div class="card rounded">
        <div class="card-header bg-info" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link text-white" type="button" data-toggle="collapse"
                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    ¿Quiénes somos?
                </button>
            </h2>
        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
            data-parent="#accordionExample">
            <div class="card-body ml-3">
                <b>SAILBONDI</b> es una marca de fantasía operada por las empresas Flotalineas S.A., Navegación
                Charrua S.A. y Ferryboat S.R.L. Nos constituimos como una moderna empresa de transporte de
                pasajeros que conecta las ciudades de Buenos Aires con Colonia del Sacramento, Montevideo y Punta del Este. Nuestra misión es
                brindarte un servicio de alta calidad, rápido, seguro y a un costo mucho más accesible a la hora
                de conectar Buenos Aires con las Costa Uruguaya.
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header bg-info" id="headingTwo">
            <h2 class="mb-0">
                <button class="btn btn-link collapsed text-white" type="button" data-toggle="collapse"
                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    ¿Dónde quedan los puntos de venta SAILBONDI?
                </button>
            </h2>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body ml-3">
                <b>Argentina</b><br>
                Buenos Aires -
                Grierson Cecilia Boulevard 787, Puerto Madero.<br>
                De lunes a viernes de 9 a 19hs. Sábados de 9 a 13hs.
                Mostrador en el Puerto.<br><br>
                <b>Uruguay</b><br>
                Colonia -
                Puerto de Colonia<br>
                De lunes a domingos de 7.30 a 19hs. Sábados de 9 a 13hs.<br><br>
                Montevideo -
                Terminal Tres Cruces.<br>
                De lunes a viernes de 9 a 19hs. Sábados de 9 a 13hs.<br><br>
                Punta del Este -
                Terminal Puerto.<br>
                De lunes a viernes de 9 a 18s.
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header bg-info" id="headingThree">
            <h2 class="mb-0">
                <button class="btn btn-link collapsed text-white" type="button" data-toggle="collapse"
                    data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    ¿Dónde quedan las Terminales de SAILBONDI?
                </button>
            </h2>
        </div>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body ml-3">
                <b>Argentina</b><br>
                Buenos Aires -
                Grierson Cecilia Boulevard 787, Puerto Madero.<br><br>
                <b>Uruguay</b><br>
                Colonia -
                Puerto de Colonia<br>
                Montevideo -
                Terminal Tres Cruces.<br>
                Punta del Este -
                Terminal Puerto.
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header bg-info" id="headingFour">
            <h2 class="mb-0">
                <button class="btn btn-link collapsed text-white" type="button" data-toggle="collapse"
                    data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    ¿Qué documentación preciso tener en vigencia para poder viajar?
                </button>
            </h2>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
            <div class="card-body ml-3">
                <b>Documentación obligatoria para viajar</b><br>

                Documento Nacional de Identidad (D.N.I.), actualizado y/o renovado en el caso de los menores de
                8 y 16 años.<br>

                Pasaporte (actualizado y en buen estado).<br><br>

                <b>Requisitos de migraciones para menores de 18 años</b><br>

                Deberán viajar en compañía de sus padres, en conjunto de la LIBRETA DE MATRIMONIO o PARTIDA DE
                NACIMIENTO ORIGINAL. Si viajan solos o con alguno de ellos lo harán con una AUTORIZACIÓN de los
                mismos ante Escribano Público colegiado o ante un juez competente. Resolución 31.100-2005 a
                partir del 16/08/2005. Los menores de 6 años serán asentados en un registro especial que a tal
                efecto llevará la Dirección Nacional de Migraciones. Requisitos del permiso para menores de
                edad. Permisos de menores que viajan solos: Hasta 13 años inclusive el permiso debe decir que va
                a Uruguay, quien lo acompaña y quien lo recibe. Madres solteras: La partida de nacimiento a
                parte de ser original solo sirve por el lapso de seis meses,luego de ese tiempo la debe
                actualizar. Menores que viajan solos: de 14 a 18 años vuelven a servir los permisos
                viejos,osea,pueden decir que van a cualquier parte del mundo,solo ó acompañado, y no necesita
                que expecifique a donde va. Menores extranjeros: ya sean con radicación,temporaria,precaria ó
                permanente,si ó si deben traer el permiso para poder salir de Argentina. En caso de que uno de
                los padres haya fallecido, el padre/madre acompañante deberá presentar el ACTA DE DEFUNCIÓN
                junto a la PARTIDA DE NACIMIENTO DEL MENOR O LIBRETA DE MATRIMONIO donde estén registradas las
                dos situaciones.
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header bg-info" id="headingFive">
            <h2 class="mb-0">
                <button class="btn btn-link collapsed text-white" type="button" data-toggle="collapse"
                    data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    ¿Existe diferencia de precio entre el pasaje de un adulto y el pasaje de un menor?
                </button>
            </h2>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
            <div class="card-body ml-3">
                No, solamente los niños menores de 1 año viajan gratis.
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header bg-info" id="headingSix">
            <h2 class="mb-0">
                <button class="btn btn-link collapsed text-white" type="button" data-toggle="collapse"
                    data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                    ¿Se transportan vehículos y/o bicicletas?
                </button>
            </h2>
        </div>
        <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
            <div class="card-body ml-3">
                Nuestros barcos no poseen bodegas para transportar vehículos, pero sí contamos con un servicio de traslado de bicicletas sujeto a
                disponibilidad.
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header bg-info" id="headingSeven">
            <h2 class="mb-0">
                <button class="btn btn-link collapsed text-white" type="button" data-toggle="collapse"
                    data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                    ¿Se transportan mascotas? ¿Cuáles son las condiciones? ¿Tiene un costo adicional?
                </button>
            </h2>
        </div>
        <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
            <div class="card-body ml-3">
                <b>Mascotas en bodega</b><br>
                Las mascotas deben ser transportadas en canil, o si el pasajero transporta vehículo (auto o
                camioneta) podrá transportarlo dentro el mismo sin el canil.<br><br>
                <b>Canil</b><br>
                Debe ser de material rígido, con ventilación, base impermeable y sus medidas: 45x35x25. El mismo
                no es proporcionado por la empresa. No se aceptará bolso de mascotas.<br><br>
                <b>Documentación importante</b><br>
                Desde del 01/12/16 es obligatorio para el ingreso de mascotas a Uruguay contar con los
                siguientes certificados:<br>
                Prueba de detección de la respuesta inmunitaria negativa a Leishmaniasis: de acuerdo al "Manual
                de las Pruebas de Diagnóstico y de las Vacunas para los animales terrestres" de la OIE,
                realizada con una antelación no mayor a los 60 días previos al ingreso.<br>
                Certificado sanitario requerido por la resolución MERCOSUR/GMC/ RES Nº 52/2012.
                Identificación con microchip de perros: Según ley 18471 artículo 18.
                Las autoridades de control sanitario de Uruguay no permitirán el ingreso al país de mascotas que
                no cuenten con estos certificados.<br><br>
                <b>Perros lazarillos</b><br>
                Viajan en cabina sin canil y no tienen cargo, previa presentación de certificado entrenamiento y
                vacunación.
            </div>
        </div>
    </div>
</div><!-- ACORDION -->
@endsection