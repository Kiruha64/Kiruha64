@include('basis.basis')
@yield('basis')
@yield('page_header')

{{--@foreach($aboutuspagetitles as $aboutuspagetitle)--}}
{{--    <p>{{$aboutuspagetitle->title}}</p>--}}
{{--@endforeach--}}

@yield('end_page_header')

{{--@yield('list_no_active_link')--}}
{{--{{ route('about_uspagetitle-create') }}--}}
{{--@yield('list_no_active')--}}
{{--Create Page Name--}}
{{--@yield('end_list_no_active')--}}

@yield('list_no_active_link')
{{ route('footer') }}
@yield('list_no_active')
Footers List
@yield('end_list_no_active')

@yield('list_active_link')
{{ route('footer-create') }}
@yield('list_active')
Create Footer Table
@yield('end_list_active')
@yield('start_code')

<div class="container"
     style="font-size: 16px">
    <div class="row">
        <form method="POST" action="{{ route('footer-create-post') }}"enctype="multipart/form-data">

            {{ csrf_field() }}

            <div class="col-md-12">
                <h4><strong>Text</strong></h4>

                <textarea id="textarea" name="text"></textarea>

            </div>

            <div class="col-md-12">
                <h4><strong>Is visible</strong></h4>
                <select class="input-sm col-md-10 warning" style="border: 2px solid gray" name="is_visible">
                    <option>1</option>
                    <option>0</option>
                </select><br>
            </div>

            <div class="col-md-12">
                <h4><strong>Position</strong></h4>
                <input type="number" min="1" class="input-lg col-md-2"name="position"placeholder="Position place"style="border: 2px solid gray">
            </div>

            <div class="col-md-4">
                <a href=""class="col-md-4"><button class="btn btn-success col-md-12">Create</button></a>
            </div>
        </form>
    </div>
</div>
{{--@isset($path)--}}
{{--    <img src="{{ asset('/storage/' . $path) }}">--}}
{{--@endisset--}}


@yield('menu_toggle')
@yield('last_scripts')
