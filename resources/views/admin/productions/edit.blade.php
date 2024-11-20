@if($production->id == 1)
    @include('admin.productions.edit_custom')
@elseif($production->id == 2)
    @include('admin.productions.edit_indivisual')  
@endif