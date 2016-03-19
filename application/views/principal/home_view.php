<script src="<?= base_url() ?>assets/js/jquery.cycle2.min.js"></script>
<script>
    $(function(){
        $(".carousel").hover(function() {
            $(".pager").animate({
                right: '0.5em'
            }, 1000, 'easeInOutExpo');
            $(".navigation a.next").animate({
                right: '0.6em'
            }, 1000, 'easeInOutElastic');
            $(".navigation a.prev").animate({
                left: '0.5em'
            }, 1000, 'easeInOutElastic');
        }, function() {
            $(".pager").animate({
                right: '-5em'
            }, 1000, 'easeInOutExpo');
            $(".navigation a.next").animate({
                right: '-6em'
            }, 1000, 'easeInOutElastic');
            $(".navigation a.prev").animate({
                left: '-5em'
            }, 1000, 'easeInOutElastic');

        });
    })
</script>
<section class="container-fluid" id="slideshow_principal">
    <div class="carousel">
        <div class="cycle-slideshow"
            data-cycle-fx="scrollHorz"
            data-cycle-speed="1000"
            data-cycle-timeout="8000"
            data-cycle-next=".next"
            data-cycle-prev=".prev"
            data-cycle-slides="div#slide_page"
            data-cycle-pager=".pager">
            <div id="slide_page">
                <img src="<?= base_url() ?>assets/img/slideshow/slider1.jpg" alt="">
                <div class="caption">
                    <div class="content">
                        <h2>Grandes escenarios en cada evento</h2>
                        <p>Disfrute de grandes momentos con nosotros, ofrecemos alquiler de toldos, platos y copas de alta gama para su confort.</p>
                    </div>
                </div>
            </div>
            <div id="slide_page">
                <img src="<?= base_url() ?>assets/img/slideshow/slider2.jpg" alt="">
                <div class="caption">
                    <div class="content">
                        <h2>Distinguidos arreglos florales</h2>
                        <p>Ambientamos sus eventos con una excelente decoracion de fiestas y eventos infantiles, decoraciones para baby shower, bodas, 15 años, en fin cualquier clase de evento.</p>
                    </div>
                </div>
            </div>
            <div id="slide_page">
                <img src="<?= base_url() ?>assets/img/slideshow/slider3.jpg" alt="">
                <div class="caption">
                    <div class="content">
                        <h2>Gran variedad de muebles</h2>
                        <p>Ofrecemos una alta variedad de muebles para fiesta, alquiler de sillas, mesas y pubs para su comodidad.</p>
                    </div>
                </div>
            </div>
            <div id="slide_page">
                <img src="<?= base_url() ?>assets/img/slideshow/slider4.jpg" alt="">
                <div class="caption">
                    <div class="content">
                        <h2>Las mas exquisitas comidas y postres</h2>
                        <p>Contamos con un exquisito menu con platos nacionales e internacionales, comidas para fiestas y eventos infantiles, los mas deliciosos dulces para cumpleaños, bodas, graduaciones y cualquier clase de evento.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="pager"></div>
        <div class="navigation">
            <a href="" class="prev"><span class="icon-chevron-thin-left"></span></a>
            <a href="" class="next"><span class="icon-chevron-thin-right"></span></a>
        </div>
    </div>
</section>
<section class="container-fluid" id="bienvenida">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="text-center">¿Quienes Somos?</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <p>Miriam Mendoza Decoraciones y Eventos es una agencia de festejos ubicada en la ciudad de caracas dedicada al alquiler de sillas, toldos, mesas y pubs, desde hace un tiempo ha venido trabajando en conjunto con Festejos El Prado en la organizacion de diferentes eventos particulares y corporativos.</p>
        </div>
    </div>
</section>
<section class="container-fluid" id="home_evento">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="text-center">Atendemos toda clase de eventos</h1>
            <p>Contamos con un personal altamente capacitado y calificado para la organizacion de toda clase de eventos tales como aniversarios, babyshower, bodas, graduaciones, 15 años y mas. Somos expertos en decoracion de fiestas, decoraciones para baby shower, bodas y demas eventos. Ofrecemos las mas exquisitas comidas y dulces para fiestas, cumpleaños y eventos infantiles ya que contamos con un menu de platos nacionales e internacionales. Tenemos todo lo que usted necesita para disfrutar en familia y amigos.</p>
        </div>
    </div>
</section>
<section class="container-fluid" id="services">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="text-center">Viva momentos inolvidables</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-sm-12">
            <div id="services_column">
                <div class="imagen"><img src="<?= base_url() ?>assets/img/home/lujos.jpg" alt="Grandes Lujos"></div>
                <div class="titulo"><strong>Grandes Lujos</strong></div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div id="services_column">
                <div class="imagen"><img src="<?= base_url() ?>assets/img/home/ambiente.jpg" alt="El Mejor Ambiente"></div>
                <div class="titulo"><strong>El Mejor Ambiente</strong></div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div id="services_column">
                <div class="imagen"><img src="<?= base_url() ?>assets/img/home/atencion.jpg" alt="Excelente Atencion"></div>
                <div class="titulo"><strong>Excelente Atención</strong></div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid" id="presupuesto">
        <h1 class="text-center">Solicite su presupuesto sin compromiso</h1>
        <p>Sigue las instrucciones y reserva tu proximo evento con nosotros.</p>
        <a href="<?= base_url() ?>contacto/presupuesto" class="btn btn-primary">Solicitar Presupuesto</a>
</section>