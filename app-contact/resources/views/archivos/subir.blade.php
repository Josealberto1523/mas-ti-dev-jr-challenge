<div class="modal fade" id="modalSubirUno" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">

        <form class="needs-validation col-12" novalidate id="formSubirUno" enctype='multipart/form-data'>
            @csrf
            
            <div class="modal-body">
                <button type="button" class="btn btn-danger boton-adjunto" data-dismiss="modal">CERRAR</button>                

                <div class="col-md-12 col-sm-12 mt-4">
                    
                    <div class="text-center tituloAdjuntos">
                        <h3 class="adjuntoLabel mayusculas subirEtiqueta">AVATAR</h3>
                    </div> 

                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="inputGroupSubir"
                            aria-describedby="inputGroupFileAddon02" name="agustino" value="">
                            <label class="custom-file-label borde-ag" for="inputGroupSubir">SELECCIONE</label>
                        </div>
                    </div>                
                    <small id="subirUnoError" class="text-danger d-none mt-4"></small>                    
                </div> 
                
            </div>

            <div class="modal-footer">        
                <button type="button" id="subirUno" class="btn btn-info subColor btn-block btn-lg"><i class="la flaticon2-plus-1"></i> SUBIR</button>
            </div>

        </form>
        </div>
    </div>
</div>