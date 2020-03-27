<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Bootstrap Admin html Template : Master</title>
<!-- Bootstrap Styles-->
<link href="{{URL::asset('css/template/assets/css/bootstrap.css')}}" rel="stylesheet" />

<link href="{{URL::asset('js/template/dataTables/dataTables.bootstrap.css')}} " rel="stylesheet" />


<div class="container">
    <div class="row">
        <div class="bg-primary"style="">


            <a href="{{ route('update-slider', $data->id ) }}"><button class="btn btn-lg btn-success">Update</button></a>
            <a href="{{ route('delete-slider', $data->id) }}"><button class="btn btn-lg btn-danger">Delete</button></a>
            <p>{{ $data->id }}</p>
            <p> {{ $data->link_title }}</p>
            <p> {{ $data->link }}</p>
            <img src="{{ asset('/storage/'.$data->img) }}">
            <p>  {{ $data->is_visible }}</p>
            <p> {{ $data->position }}</p>
            <p>  {{ $data->created_at }}
            <p>{{ $data->updated_at }}</p>

        </div>
    </div>
</div>
