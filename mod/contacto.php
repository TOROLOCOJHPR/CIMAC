<div class="text-dark text-center" style="background-image: url('/img/auditorio.jpg')">
    <div class="pb-5 px-4 capa-blanca" style="background-color:rgba(255,255,255,1)">
        <h2 class="text-cimac">Contáctanos</h2>
        <p class="lead">
            ¿Tienes alguna duda o comentario? Envíanos un mensaje
        </p>
        <hr class="small">
        <form id='formulario' class="row mx-0" action=''>
            <input type="hidden" name="servicio" value="contacto">
            <div class="form-group col-md-5 mb-0 p-0">
                <input class="form-control rounded-0" name='nombre' id='nombre' type="text"  placeholder="Nombre" required>
                <input class="form-control rounded-0 my-1" name='email' id='email' type="email" placeholder="Email" required>
                <input class="form-control rounded-0 my-1" name='telefono' id='telefono' type="tel" placeholder="Teléfono (10 digitos)" required>
                <div class="g-recaptcha" data-sitekey="6LdRpGYUAAAAAL0rAJji9u77koDOPGg561zl-weD" data-callback="enableBtn"></div>
            </div>
            <div class="form-group col-md-7 mb-0 p-0 pl-1 rounded-0">
                <textarea rows="7" class="form-control rounded-0" name='msg' id='msg' placeholder="Escribe tu duda o comentario" required></textarea>
                <button id='enviar' class="mx-auto mt-1 btn btn-primary btn-block rounded-0" type="submit" disabled>Enviar mensaje</button>
                <button type="button" id='enviar-otro' class="mx-auto mt-1 btn btn-info btn-block d-none rounded-0" onclick='nuevomensaje()'>Enviar otro mensaje</button>
            </div>
        </form>
    </div>
</div>