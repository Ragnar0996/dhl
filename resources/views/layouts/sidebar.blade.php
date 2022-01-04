<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <!-- <div class="sb-sidenav-menu-heading">Core</div> -->
                <a class="nav-link" href="{{ url('/home') }}">
                    Inicio
                </a>

                <!-- Modulo de empleados - - >
                @ if(Auth::user()->ID_ROL_LLAVE_FK == 7 || Auth::user()->ID_ROL_LLAVE_FK == 1 || Auth::user()->ID_ROL_LLAVE_FK == 2)
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menuDHAC" aria-expanded="false" aria-controls="menuDHAC" style="font-size:15px;">
                            <div class="sb-nav-link-icon"><i class="fas fa-palette"></i></div>
                            <B>CULTURA</B>
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="menuDHAC" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                           <nav class="sb-sidenav-menu-nested nav">
                                <!- -<a class="nav-link" href="{ {route('panelLaboratorios')}}">Promocion Cultura y Artes</a>- - >
                                <a class="nav-link" href="">Promocion Cultura y Artes</a>
                                <a class="nav-link" href="">Festividades</a>
                                <a class="nav-link" href="">Culturas Vivas</a>
                                <a class="nav-link" href="">Patrimonio Cultural</a>
                            </nav>

                        </div>

                @ endif
                @ if(Auth::user()->ID_ROL_LLAVE_FK == 3 || Auth::user()->ID_ROL_LLAVE_FK == 1 || Auth::user()->ID_ROL_LLAVE_FK == 2)
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#menuTA" aria-expanded="false" aria-controls="menuTA" style="font-size:15px;">
                            <div class="sb-nav-link-icon"><i class="fas fa-archway"></i></div>
                            <B>TURISMO</B>
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="menuTA" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                             <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="">Servicios turisticos</a>
                                <a class="nav-link" href="">Promocion turistica</a>
                                <a class="nav-link" href="">Eventos, espectaculos y convenciones</a>
                            </nav>
                        </div>
                      
                @ endif
            -->

            @if(Auth::user()->ID_ROL_LLAVE_FK == 3 || Auth::user()->ID_ROL_LLAVE_FK == 1 || Auth::user()->ID_ROL_LLAVE_FK == 2 || Auth::user()->ID_ROL_LLAVE_FK == 17 )
                        <a class="nav-link" href="#" style="font-size:15px;">
                            <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                            <B>Personal</B>

                        </a>


                @endif
                 @if(Auth::user()->ID_ROL_LLAVE_FK == 3 || Auth::user()->ID_ROL_LLAVE_FK == 1 || Auth::user()->ID_ROL_LLAVE_FK == 2 || Auth::user()->ID_ROL_LLAVE_FK == 17 )
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#" aria-expanded="false" aria-controls="" style="font-size:15px;">
                            &nbsp;<div class="sb-nav-link-icon"><i class="fas fa-clipboard-list"></i></div>
                            <B>Actividades</B>

                        </a>


                @endif



                <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                      {{ __('Salir') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
        <label style="font-size: 10px ; color: white; " >SCTM OAX 22/07/2021 v1.00 </label>
        <div class="sb-sidenav-footer">
            <div class="small"></div>
            Copyright &copy; 2021
        </div>

    </nav>
</div>