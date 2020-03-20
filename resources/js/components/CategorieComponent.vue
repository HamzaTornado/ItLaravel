<template>

<div class="modal fade" id="categorieModal" tabindex="-1" role="dialog" aria-labelledby="addNewTitle" aria-hidden="true"
data-backdrop="static" data-keyboard="false">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="categorieModalLabel">New message</h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <form action="{{ url('admin/categorie') }}" method="post" >
        <!-- Generer Token key erreur-->
        @csrf
        <!------------------------------>
    <div class="modal-body">
        <div class="form-group">
          <label for="nom_cat" class="col-form-label">Nom Categorie</label>
          <input type="text" class="form-control" id="nom_cat" name="nom_cat" required>
            @if (count($errors->get('nom_cat')))
                @foreach ($errors->get('nom_cat') as $message)
                    <li class="text-danger">{{$message}}</li>
                @endforeach
            @endif
        </div>

    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary">Enregistrer</button>
    </div>
    </form>
  </div>
</div>
</div>

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

