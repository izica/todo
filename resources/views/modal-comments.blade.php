@foreach($obComments as $obComment)
    <div class="sidebar-comments-item d-flex flex-column">
        <p class="fz-11 ml-0 mb-1">{{$obComment->user->firstname}}:</p>
        <p class="fz-12 ml-1">{{$obComment->content}}.</p>
    </div>
@endforeach
