<script>
    $(function(){
        /**************************/
        $(".box1").hover(function(){
            $(".text1").animate({
                top:"0"
            }, 500, 'easeInQuint');
        },function(){
            $(".text1").delay(1000).animate({
                top:"85%"
            }, 1000, 'easeOutBounce');
        });
        /**************************/
        $(".box2").hover(function(){
            $(".text2").animate({
                top:"0"
            }, 500, 'easeInQuint');
        },function(){
            $(".text2").delay(1000).animate({
                top:"85%"
            }, 1000, 'easeOutBounce');
        });
        /**************************/
        $(".box3").hover(function(){
            $(".text3").animate({
                top:"0"
            }, 500, 'easeInQuint');
        },function(){
            $(".text3").delay(1000).animate({
                top:"85%"
            }, 1000, 'easeOutBounce');
        });
        /**************************/
        $(".box4").hover(function(){
            $(".text4").animate({
                top:"0"
            }, 500, 'easeInQuint');
        },function(){
            $(".text4").delay(1000).animate({
                top:"85%"
            }, 1000, 'easeOutBounce');
        });
        /**************************/
        $(".box5").hover(function(){
            $(".text5").animate({
                top:"0"
            }, 500, 'easeInQuint');
        },function(){
            $(".text5").delay(1000).animate({
                top:"85%"
            }, 1000, 'easeOutBounce');
        });
        /**************************/
        $(".box6").hover(function(){
            $(".text6").animate({
                top:"0"
            }, 500, 'easeInQuint');
        },function(){
            $(".text6").delay(1000).animate({
                top:"85%"
            }, 1000, 'easeOutBounce');
        });
    });
</script>
<section class="container-fluid" id="header_servicios">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="text-center">Ofrecemos excelentes servicios para sus eventos</h1>
            <p>Miriam Mendoza en conjunto con Festejos el Prado ofrecen servicios de primera calidad. Una gran variedad de muebles y pubs de lujo para su comididad. Decoracion para baby shower, cumpleaños, 15 años, bodas y mas. Ademas de excelentes pasapalos, postres, comidas para fiestas y eventos infantiles.</p>
        </div>
    </div>
</section>
<section class="container-fluid" id="servicios">
    <div class="row">
        <h1 class="text-center">Servicios disponibles para cada evento</h1>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div id="inter_box" class="box1">
                <img src="<?= base_url() ?>assets/img/servicios/decoraciones.jpg" alt="decoraciones">
                <div id="texto" class="text1">
                    <strong>DECORACIONES</strong>
                    <p>Ponemos a su disposición una variada sección de arreglos florales, que dan un toque de elegancia al ambiente para vivir un momento inolvidable.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div id="inter_box" class="box2">
                <img src="<?= base_url() ?>assets/img/servicios/muebleria.jpg" alt="muebleria">
                <div id="texto" class="text2">
                    <strong>MOBILIARIO</strong>
                    <p>Estamos equipados con una gran variedad de muebles, pubs y mesas muy elegantes para ambientar sus eventos.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div id="inter_box" class="box3">
                <img src="<?= base_url() ?>assets/img/servicios/toldos.jpg" alt="">
                <div id="texto" class="text3">
                    <strong>TOLDOS</strong>
                    <p>Ofrecemos una gran cantidad de toldos para ambientar sus eventos.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div id="inter_box" class="box4">
                <img src="<?= base_url() ?>assets/img/servicios/vajilla.jpg" alt="Vajilla y Cubierteria">
                <div id="texto" class="text4">
                    <strong>VAJILLA Y CRISTALERÍA</strong>
                    <p>Contamos con una amplia gama de <b>vajillas</b> y <b>Cristalería</b> de lujo para complacer los gustos mas exigentes.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div id="inter_box" class="box5">
                <img src="<?= base_url() ?>assets/img/servicios/pasapalos.jpg" alt="">
                <div id="texto" class="text5">
                    <strong>COMIDAS Y POSTRES</strong>
                    <p>Ofrecemos la mas variada selección de platos nacionales e internacionales. Excelencia y variedad en buffets, pasapalos y postres. Especialidad en estaciones como: <b>Mesas de Queso</b>, <b>Sushi</b>, <b>Pastas</b>, <b>Creppes</b>, <b>Brochetas</b>, <b>Galletas</b>, <b>Tortas</b>, entre otros.
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div id="inter_box" class="box6">
               <img src="<?= base_url() ?>assets/img/servicios/carros.jpg" alt="Alquiles de Carros">
                <div id="texto" class="text6">
                    <strong>ALQUILER DE CARROS</strong>
                    <p>Este servicio esta solo disponible para <b>Bodas</b>, Rolls Roys.</p>
                </div>
            </div>
        </div>
    </div>
</section>