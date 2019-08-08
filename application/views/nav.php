<nav class="navbar navbar-expand-md fixed-top navbar-default">
                <a class="navbar-brand" href="#">
                        <img src="<?= base_url() ?>web/img/logo-nav.png" class="wow bounceInUp" data-wow-duration="1s" data-wow-delay="1s" width="" height="35" alt="">
                      </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto nav-pills">
                    <li class="nav-item">
                      <a class="nav-link <?=($this->uri->rsegment(1)==='inicio')?'nav-link active':''?>" href="<?= base_url() ?>">
                        <i class="fas fa-home mr-2"></i>Inicio</a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link <?=($this->uri->segment(1)==='nosotros')?'nav-link active':''?>" href="<?= base_url() ?>nosotros">
                       
                          <i class="fas fa-user-tie mr-2"></i>¿Quiénes Somos?</a>

                        </li>
                    <li class="nav-item">
                      <a class="nav-link <?=($this->uri->segment(1)==='clientes')?'nav-link active':''?>" href="<?= base_url() ?>clientes">
                          <i class="fas fa-truck mr-2"></i>Nuestros Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?=($this->uri->segment(1)==='carrier-transicold')?'nav-link active':''?>" href="<?= base_url() ?>carrier-transicold">
                        <span class="color-text-nav">
                                <i class="far fa-snowflake mr-2"></i>Carrier Transicold
                        </span>
                            </a>
                      </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="color-text-nav">
                        <i class="fas fa-briefcase mr-2"></i>Servicios</span>
                      </a>
                      
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item color-text-nav-dropdown <?=($this->uri->segment(2)==='que-ofrecemos')?'dropdown-item active':''?>" href="<?= base_url() ?>servicios/que-ofrecemos">
                            <i class="fas fa-tools mr-2"></i>Qué Ofrecemos?</a>
                            <div class="dropdown-divider"></div>
                        <a class="dropdown-item color-text-nav-dropdown <?=($this->uri->segment(2)==='soporte-tecnico')?'dropdown-item active':''?>" href="<?= base_url() ?>servicios/soporte-tecnico">
                            <i class="fas fa-tools mr-2"></i>Soporte Técnico</a>
                        

                    </li>
                    <li class="nav-item">
                          <a class="nav-link <?=($this->uri->segment(1)==='contacto')?'nav-link active':''?>" href="<?= base_url() ?>contacto">
                                
                              <i class="far fa-envelope mr-2"></i>Contacto</a>
                        </li>
                  </ul>
                </div>
              </nav>