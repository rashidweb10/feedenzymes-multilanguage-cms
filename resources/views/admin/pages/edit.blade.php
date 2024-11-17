
@if($page->id == 1)
    @include('admin.pages.edit_home')
@elseif($page->id == 2)
    @include('admin.pages.edit_about')
@elseif($page->id == 3)
    @include('admin.pages.edit_career')    
@elseif($page->id == 4)
    @include('admin.pages.edit_contact')  
@endif