


<!-- Modal -->



    <div class="modal fade" id="modal-delete-{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        {{Form::Open(array('action' =>array('UserController@destroy',$user->id),'method'=>'delete'))}}
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel"><b>ELIMIAR</b></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <p class="text-left">CONFIRME SI DESEA ELIMINAR</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CANCELAR</button>
                <button type="submit" class="btn btn-outline-primary"> <b>CONFIRMAR</b> </button>
            </div>
          </div>
          
        </div>
        {{Form::Close()}}
    </div>