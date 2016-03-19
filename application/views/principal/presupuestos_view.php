<script>
    $(function(){
        $("#respuesta").hide();
        $(".success_msj").hide();
        $(".error_msj").hide();
        $("#presupuesto_form").validate({
            submitHandler:function()
            {
                var datos_form = $("#presupuesto_form").serialize();
                $.post("<?= base_url() ?>contacto/solicitar_presupuesto", datos_form, procesar).error(procesar_error);
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
                    $("#presupuesto_form").reset();
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
                tipo_evento:"required",
                invitados:{required:true, digits:true, min:20},
                fecha:{required:true, date:true},
                hora:"required",
                lugar:{required:true, minlength:20}
            },
            messages:
            {
                nombre:{required:"*Indique el campo", minlength:"Minimo 5 caracteres"},
                email:{required:"*Indique el campo", email:"No es correo electrónico"},
                tipo_evento:"*Indique el campo",
                invitados:{required:"*Indique el campo", digits:"Solo numeros naturales", min:"Se permite como minimo 20 invitados"},
                fecha:{required:"*Indique el campo", date:"No es una fecha"},
                hora:"*Indique el campo",
                lugar:{required:"*Indique el campo", minlength:"Minimo 20 caracteres"}
            }
        });
    });
</script>
<section class="container-fluid" id="contacto">
    <div class="row">
        <div class="col-xs-12">
            <h1 class="text-center">Solicitud de Presupuesto</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-2 col-xs-12"></div>
        <div class="col-md-8 col-xs-12" id="formulario">
            <form id="presupuesto_form">
                <fieldset>
                    <legend>Datos del Solicitante</legend>
                    <div class="controls">
                        <input type="text" class="textbox" name="nombre" id="nombre" maxlength="100" placeholder="Nombres y Apellidos">
                    </div>
                    <div class="controls">
                        <input type="email" name="email" id="email" class="textbox" maxlength="100" placeholder="Correo Electrónico">
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Datos del Evento</legend>
                    <div class="row">
                        <div class="controls col-sm-6 col-xs-12">
                            <label for="tipo_evento">Tipo de Evento</label>
                            <select name="tipo_evento" id="tipo_evento" class="combobox">
                                <option value="">Seleccione un evento</option>
                                <option value="Aniversario">Aniversario</option>
                                <option value="Babyshower">Babyshower</option>
                                <option value="Boda">Boda</option>
                                <option value="Comunion">Comunion</option>
                                <option value="Graduacion">Graduacion</option>
                                <option value="15 Años">15 Años</option>
                                <option value="Otro">Otro</option>
                            </select>
                        </div>
                        <div class="controls col-sm-6 col-xs-12">
                            <label for="invitados">Invitados (Estimado)</label>
                            <input type="number" name="invitados" id="invitados" class="textbox">
                        </div>
                    </div>
                    <div class="row">
                        <div class="controls col-sm-6 col-xs-12">
                            <label for="fecha">Fecha</label>
                            <input type="date" name="fecha" id="fecha" class="textbox" placeholder="Año/Mes/Dia">
                        </div>
                        <div class="controls col-sm-6 col-xs-12">
                            <label for="hora">Hora</label>
                            <input type="time" name="hora" class="textbox" id="hora">
                        </div>
                    </div>
                    <div class="controls">
                        <textarea name="lugar" id="lugar" cols="30" rows="3" class="textbox" placeholder="Lugar donde se realizará el evento"></textarea>
                    </div>
                    </fieldset>
                    <div class="controls">
                        <div id="respuesta">
                            <strong class="success_msj"><span class="icon-check"></span>Su mensaje fue enviado con éxito</strong>
                            <strong class="error_msj"><span class="icon-cross"></span>Error al enviar, verifique su conexión e intente de nuevo</strong>
                        </div>
                        <button class="btn btn-primay">Enviar Solicitud</button>
                    </div>
            </form>
        </div>
        <div class="col-md-2 col-xs-12"></div>
    </div>
</section>