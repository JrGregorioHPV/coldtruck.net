<hgroup class="container mt-5 mb-3 wow bounceInUp" data-wow-duration="2s" data-wow-delay="1s">
        <div class="col lg-12"></div>
        <h1><i class="far fa-envelope mr-3"></i>Contacto</h1>
        <hr class="bg-danger">
    </hgroup>

    <section class="container wow bounceInUp" data-wow-duration="2s" data-wow-delay="1s">
      <p>Si desea contactarse con nosotros, puede escribirnos al siguiente formulario y le atenderemos en todas sus dudas. Estamos para ayudarle en lo que necesite.</p>

      <div class="row">
        <div class="col lg-5">
        <img src="<?= base_url() ?>web/img/contacto.jpg" class="img-fluid float-left" alt="">
        <hgroup class="container mt-5 mb-5">
          
        <div class="col lg-12"></div>
        <h2 class="">Información de Contacto</h2>
        <hr class="bg-danger mb-4">
        <ul>
          <li class="mb-1"><span class="h5"><i class="fas fa-phone-square-alt mr-2 text-success"></i><u>Teléfono</u>: (+507) 396-2683</span></li>
          <li class="mb-1"><span class="h5"><i class="fas fa-map-marker-alt mr-2 text-danger"></i><u>Dirección</u>: Pedregal, calle Rana de Oro</span></li>
          <li class="mb-1"><span class="h5"><i class="fas fa-at mr-2 text-primary"></i><u>E-Mail</u>: info@coldtruck.net</span></li>
        </ul>
        <span class="h4">Nuestras Redes Sociales</span>
        <hr class="bg-danger mb-4">
        <ul>
          <li><a href="https://www.facebook.com/Coldtruck-Solutions-1648312535192823/" target="_blank" class="btn btn-social-icon btn-facebook">
             <span class="fa fa-facebook"></span></a>
             <a href="https://twitter.com/ColdtruckPTY" target="_blank" class="btn btn-social-icon btn-twitter">
                <span class="fa fa-twitter"></span></a>
             <a href="https://www.instagram.com/coldtrucksolutions/" target="_blank" class="btn btn-social-icon btn-instagram">
               <span class="fa fa-instagram"></span></a></li>
        </ul>
       
    </hgroup>  
      </div>
        <div class="col lg-7">
        <div class="card">
  <div class="card-header text-center">
    <h3>Formulario de Contacto</h3>
    </div>
    
        <form id="FormularioContacto" class="m-3">
        <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
    <label for="Nombre">* Nombre</label>
    <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-user-tie nombre"></i></div>
        </div>
        <input type="text" class="form-control" id="Nombre" aria-describedby="MensajeNombre" placeholder="Nombre">
       <br> <small id="MensajeNombre" class="form-text text-danger">Mensaje.</small>
      </div>
  </div></div>
    <div class="col-lg-6"><div class="form-group">
    <label for="Apellido">* Apellido</label>
    <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-user-tie apellido"></i></div>
        </div>
        <input type="text" class="form-control" id="Apellido" aria-describedby="MensajeApellido" placeholder="Apellido">
        <small id="MensajeApellido" class="form-text text-danger">Mensaje.</small>
      </div>
  </div></div>
  </div>

        
  <div class="form-group">
    <label for="EMail">* Correo Electrónico</label>
    <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text">@</div>
        </div>
        <input type="email" class="form-control" id="EMail" aria-describedby="MensajeEMail" placeholder="Correo Electrónico">
      </div>
  </div>
  <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
    <label for="Telefono">* Teléfono</label>
    <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-phone-volume"></i></div>
        </div>
        <input type="text" class="form-control" id="Telefono" aria-describedby="MensajeTelefono" placeholder="">
      </div>
  </div>
    </div>
    <div class="col-lg-6">
    <div class="form-group">
    <label for="Dirección">Dirección</label>
    <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-map-marker-alt"></i></div>
        </div>
        <input type="text" class="form-control" id="Direccion" aria-describedby="Direccion" placeholder="">
      </div>
  </div>
    </div>
  </div>
  
  <div class="form-group">
    <label for="Asunto">Asunto</label>
    <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="far fa-question-circle"></i></div>
        </div>
        <select class="form-control" id="Asunto">
        <option>Contacto</option>
      <option>Cotización</option>
      <option>Soporte Técnico</option>
    </select>
      </div>
  </div>
  <div class="form-group">
    <label for="Mensaje">* Mensaje</label>
    <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-pencil-alt"></i></div>
        </div>
        <textarea class="form-control" id="Mensaje" rows="3"></textarea>
      </div>
  </div>
  <div class="row p-3">
  <div id="Alerta" class="col-lg-12 alert alert-secondary text-center" role="alert">
  * Los campos son requeridos
</div>
  <div class="col-lg-6">
      <button type="submit" class="btn btn-danger col-lg-12">
          <i class="far fa-times-circle mr-2"></i>Cancelar</button>
  </div>
  <div class="col-lg-6">
      <button type="button" id="btnEnviar" class="btn btn-primary col-lg-12">
        <i class="far fa-paper-plane mr-2"></i>Enviar</button>
  </div>
</div>
</form>
</div>
        </div>
      </div>
    </section>

<section class="container-fluid caja mt-4 pt-4 pb-4 wow bounceInUp" data-wow-duration="2s" data-wow-delay="0s">
<hgroup class="container mb-3">
          <div class="col lg-12"></div>
          <h2 class="text-center">Nuestra Ubicación en el Mapa</h2>
          <hr class="bg-danger">
          <h4 class="text-muted text-center">Pedregal, calle Rana de Oro - Panamá</h4>
      </hgroup>
  <div class="container">
    <div class="row">
  <div class="embed-responsive embed-responsive-16by9 col-lg-12">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15759.012309193027!2d-79.43747335027682!3d9.086244506497827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fab545437925553%3A0xd1b3891c7a428a6d!2sColdtruck+Solutions!5e0!3m2!1ses-419!2spa!4v1564952217709!5m2!1ses-419!2spa" width="" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
  </div>
</div>
</section>