
@if(session('statut') == 'visitor' || session('statut') == 'user')
    <li {!! Request::is('contacs/create') ? 'class="active"' : '' !!}>
        {!! link_to('contacts/create', trans('contacts/contacts')) !!}
    </li>
@endif