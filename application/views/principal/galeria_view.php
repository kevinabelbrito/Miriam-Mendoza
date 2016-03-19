<link rel="stylesheet" href="<?= base_url() ?>assets/vendors/fancybox/jquery.fancybox.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/vendors/fancybox/helpers/jquery.fancybox-buttons.css">
<link rel="stylesheet" href="<?= base_url() ?>assets/vendors/fancybox/helpers/jquery.fancybox-thumbs.css">
<script src="<?= base_url() ?>assets/vendors/fancybox/jquery.fancybox.js"></script>
<script src="<?= base_url() ?>assets/vendors/fancybox/helpers/jquery.fancybox-buttons.js"></script>
<script src="<?= base_url() ?>assets/vendors/fancybox/helpers/jquery.fancybox-thumbs.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/instafeed.min.js"></script>
<script>
    $(function(){
        var loadButton = document.getElementById('load_more');
        var feed = new Instafeed({
            get: "user",
            userId: "1202816941",
            accessToken: "1202816941.778ada5.04f0763220a445c1ba37c978e2dc24e4",
            resolution: "standard_resolution",
            template: '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12" id="inter_box"><a rel="muebles" class="galeria" href="{{image}}"><img src="{{image}}" alt="{{caption}}" title="{{caption}}"></a></div>',
            sortBy: "most-recent",
            limit: 20,
            after: function() {
                // disable button if no more results to load
                if (!this.hasNext()) {
                    loadButton.setAttribute('disabled', 'disabled');
                    $("#load_more").css('display', 'none');
                }
            }
        });
        // bind the load more button
        loadButton.addEventListener('click', function() {
            feed.next();
        });
        feed.run();
        $(".galeria").fancybox({
                'helpers':{
                'title': {
                'type': 'outside'
                },
                'buttons': {
                'position': 'bottom'
                },
                'thumbs': {
                'width': 100,
                'height': 100,
                'position': 'top'
                }
            }
        });
    });
</script>
<section class="container-fluid" id="galeria">
    <div class="row">
        <h1 class="text-center">Hecha un vistazo a Nuestra Galería</h1>
        <div id="instafeed"></div>
    </div>
    <div class="row text-center">
        <button class="btn btn-default" id="load_more">Cargar Mas</button>
    </div>
</section>