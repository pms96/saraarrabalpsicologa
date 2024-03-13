@if( !$pages->isEmpty() )
<table class="table tb-table tb-dbholder">
    <thead>
        <tr>
            <th></th>
            <th>{{__('pagebuilder::pagebuilder.name')}}</th>
            <th>{{__('pagebuilder::pagebuilder.url')}}</th>
            <th>{{__('pagebuilder::pagebuilder.status')}}</th>
            <th>{{__('pagebuilder::pagebuilder.actions')}}</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pages as $page)
        <tr>
            <td data-label=""><span>{{ $page->id }}</span></td>
            <td data-label="{{__('pagebuilder::pagebuilder.name')}}"><span>{!! $page->name !!}</span></td>
            <td data-label="{{__('pagebuilder::pagebuilder.url')}}"><span>{{ url(
                    !empty($page->slug)?$page->slug:'/' ) }}</span></td>
            <td data-label="{{__('pagebuilder::pagebuilder.status')}}"><em
                    class="{{ $page->status == 'published' ? 'tk-project-tag tk-success-tag' : 'tk-project-tag' }}">{{$page->status
                    == 'draft' ? __('pagebuilder::pagebuilder.draft'):__('pagebuilder::pagebuilder.published')}}</em>
            </td>
            <td data-label="{{__('pagebuilder::pagebuilder.actions')}}">
                <ul class="tb-action-icon">
                    <li> <a id="page_edit_btn" href="javascript:void(0)" data-page-id={{$page->id}}><i
                                class="icon-edit-3 edit"></i></a>
                    </li>
                    <li> <a href="{{route('pagebuilder.build', ['id' => $page->id])}}" target="_blank"><i
                                class="icon-settings"></i></a> </li>
                    <li {!! ($page->status != 'published'? 'class="eye-disabled"': '') !!}>
                        <a href="{{ url( !empty($page->slug) ? $page->slug : '/' )}}" target="_blank"><i
                                class="icon-eye"></i></a>
                    </li>
                    <li> <a href="javascript:void(0);" data-page-id="{{ $page->id }}" class="tb-delete deletePage"><i
                                class="icon-trash-2"></i></a> </li>
                </ul>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{!!$pages->links('pagebuilder::pagination.pb-pagination') !!}
@else
@component('pagebuilder::components.no-record')@endcomponent
@endif