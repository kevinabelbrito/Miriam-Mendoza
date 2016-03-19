<script>
    $(function(){
        $("#respuesta").hide();
        $(".success_msj").hide();
        $(".error_msj").hide();
        $("#contact_form").validate({
            submitHandler:function()
            {
                var str = $("#contact_form").serialize();
                $.post("<?= base_url() ?>contacto/enviar_email", str, procesar).error(procesar_error);
                return false;
                function procesar(data)
                {
                    $("#respuesta").show(200);
                    $(".success_msj").show(200);
                    $("#respuesta").delay(3000).hide(200);
                    $(".success_msj").delay(3000).hide(200);
                    jQuery.fn.reset = function(){
                        $(this).each(function(){ this.reset(); });
                    }
                    $("#contact_form").reset();
                }
                function procesar_error()
                {
                    $("#respuesta").show(200);
                    $(".error_msj").show(200);
                    $("#respuesta").delay(3000).hide(200);
                    $(".error_msj").delay(3000).hide(200);
                }
            },
            rules:
            {
                nombre:{required:true, minlength:5},
                email:{required:true, email:true},
                asunto:{required:true, minlength:5},
                msj:{required:true, minlength:10}
            },
            messages:
            {
                nombre:{required:"*Indique el campo", minlength:"Minimo 5 caracteres"},
                email:{required:"*Indique el campo", email:"No es correo electrónico"},
                asunto:{required:"*Indique el campo", minlength:"Minimo 5 caracteres"},
                msj:{required:"*Indique el campo", minlength:"Minimo 10 caracteres"}
            }
        });
    });
</script>
<section id="contacto" class="container-fluid">
    <div class="row">
        <h1 class="text-center">Contactanos</h1>
    </div>
    <div class="row">
        <div class="col-md-6 col-xs-12" id="formulario">
            <form id="contact_form">
                <fieldset>
                    <legend>Su opinión es muy importante</legend>
                <div class="controls">
                    <input type="text" class="textbox" name="nombre" id="nombre" placeholder="Nombres y Apellidos" maxlength="100">
                </div>
                <div class="controls">
                    <input type="email" class="textbox" name="email" id="email" placeholder="Correo Electrónico" maxlength="80">
                </div>
                <div class="controls">
                    <input type="text" name="asunto" id="asunto" class="textbox" placeholder="Asunto">
                </div>
                <div class="controls">
                    <textarea name="msj" class="textbox" id="msj" cols="30" rows="3" placeholder="Mensaje"></textarea>
                </div>
                </fieldset>
                <div class="controls">
                    <div id="respuesta">
                        <strong class="success_msj"><span class="icon-check"></span>Su mensaje fue enviado con éxito</strong>
                        <strong class="error_msj"><span class="icon-cross"></span>Error al enviar, verifique su conexión e intente de nuevo</strong>
                    </div>
                    <button class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
        <div class="col-md-6 col-xs-12" id="info">
            <div id="v-card">
                <h3>Dirección</h3>
                <p>Nuestra sede se encuentra ubicada en la calle Santa Clara, Qta. Windsor Ranch. Urb El Bosque Caracas - Venezuela (a una cuadra de FEDECAMARAS).</p>
            </div>
            <div id="v-card">
                <h3>Teléfonos</h3>
                <strong>(0212) 7311086 / 731-2425</strong>
            </div>
            <div id="v-card">
                <h3>Presupuesto</h3>
                <strong>Organiza desde ya tu proximo evento</strong>
                <a href="<?= base_url() ?>contacto/presupuesto" class="btn btn-primary">Solicitar Presupuesto</a>
            </div>
        </div>
    </div>
</section>