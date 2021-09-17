<div class="row mt-4">
   <div class="card text-center imgresponsive bordeFooter">
      <div class="card-header fondo2">
         <h5 class="card-title lead">Contáctanos <i class="fab fa-teamspeak"></i> </h5>
      </div>
      <div class="card-body fondo lead t-contactanos">
         <a class="m-4" href="#" data-toggle="modal" data-target="#modal_email" style="color:#bc172e">
            <i class="far fa-envelope"></i> Email
         </a>
         <a  class="m-4" href="#" data-toggle="modal" data-target="#modal_telefono" style="color:#68a266">
            <i class="fas fa-phone-square-alt"></i> Teléfonos
         </a>
         <a  class="m-4" href="#" data-toggle="modal" data-target="#modal_direccion" style="color:#d9a829">
            <i class="fas fa-map-marked-alt"></i> Dirección
         </a>
         <a  class="m-4" href="" data-toggle="modal" data-target="#modal_youtube" style="color:red">
            <i class="fab fa-youtube"></i> YouTube
         </a>
         <a  class="m-4" href="" data-toggle="modal" data-target="#modal_facebook" style="color:#3e66af">
            <i class="fab fa-facebook-square"></i> Facebook
         </a>
      </div>
      <div class="card-footer text-muted fondo2 lead">
         <img src="{{ asset('img/kof_icono.png') }}" width="80px" height="100px" alt=""> 2021© Todos los derechos reservados
      </div>
   </div>
</div>



<!-- Modal de Email -->
<div class="modal fade" id="modal_email" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content w-75">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Email</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <!-- construccion del formulario de datos para agregar un nuevo estudiante -->
            <form id="frmArchivos" enctype="multipart/form-data" method="post">
               <input type="text" id="idCategoria" name="idCategoria" hidden="true" class="form-control">
               <p>
                  "Copia el siguiente correo o escanea el QR"
                  <hr>
               <p class="text-center" style="color:#bc172e">maspornosotrosac@gmail.com</p>
               <div align="center">
                  <img src="{{ asset('img/QRCorreo.png')}}" alt="" width="150px" height="150px">
               </div>
               </p>
            </form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
         </div>
      </div>
   </div>
</div>
<!-- fin de la modal de email -->


<!-- Modal de telefono  -->
<div class="modal fade" id="modal_telefono" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content w-75">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Teléfonos</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <!-- construccion del formulario de datos para agregar un nuevo estudiante -->
            <form id="frmArchivos" enctype="multipart/form-data" method="post">
               <input type="text" id="idCategoria" name="idCategoria" hidden="true" class="form-control">
               <p>
                  "Copia los siguientes números o escanea el QR"
                  <hr>
               <p class="text-center" style="color:#68a266">(52) 58443083 o 58443022 ext: 114</p>
               <div align="center">
                  <img src="{{ asset('img/QRTelefono.png') }}" alt="" width="150px" height="150px">
               </div>
               </p>
            </form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
         </div>
      </div>
   </div>
</div>
<!-- Fin de la modal de telefono  -->


<!-- Modal de dirección -->
<div class="modal fade" id="modal_direccion" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content w-75">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Dirección</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <!-- construccion del formulario de datos para agregar un nuevo estudiante -->
            <form id="frmArchivos" enctype="multipart/form-data" method="post">
               <input type="text" id="idCategoria" name="idCategoria" hidden="true" class="form-control">
               <p>
                  "Copia la dirección o escanea el QR"
                  <hr>
               <p class="text-center" style="color:#d9a829">Atzayacatl 93, Tula, Milpa Alta, 12200 San Pedro Atocpan, CDMX</p>
               <div align="center">
                  <img src="{{ asset('img/QRDireccion.png') }}" alt="" width="150px" height="150px">
               </div>
               </p>
            </form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
         </div>
      </div>
   </div>
</div>
<!-- Fin de la modal de direccion  -->


<!-- Modal de YouTube -->
<div class="modal fade" id="modal_youtube" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content w-75">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Youtube</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <!-- construccion del formulario de datos para agregar un nuevo estudiante -->
            <form id="frmArchivos" enctype="multipart/form-data" method="post">
               <input type="text" id="idCategoria" name="idCategoria" hidden="true" class="form-control">
               <p>
                  "Copia el siguiente link del canal o escanea el QR"
                  <hr>
               <p class="text-center" style="color:red">xxxxxxxxxxxxxxxxxxxxx</p>
               <div align="center">
                  <img src="{{ asset('img/QRCorreo.png') }}" alt="" width="150px" height="150px">
               </div>
               </p>
            </form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
         </div>
      </div>
   </div>
</div>
<!-- fin de la modal de Youtube -->


<!-- Modal de Facebook -->
<div class="modal fade" id="modal_facebook" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content w-75">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Facebook</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <!-- construccion del formulario de datos para agregar un nuevo estudiante -->
            <form id="frmArchivos" enctype="multipart/form-data" method="post">
               <input type="text" id="idCategoria" name="idCategoria" hidden="true" class="form-control">
               <p>
                  "Copia el link de nuestra red social o escanea el QR"
                  <hr>
                  <a href="https://m.facebook.com/masponosotros/" class="text-center" style="color: #3e66af">https://m.facebook.com/masponosotros/</a>
               <div align="center">
                  <img src="{{ asset('img/QRFacebook.png') }}" alt="" width="150px" height="150px">
               </div>
               </p>
            </form>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cerrar</button>
         </div>
      </div>
   </div>
</div>
<!-- fin de la modal de Facebook -->


</body>

</html>


<!-- ## Mean stack back-end
### Practica1 Unidad1 -->