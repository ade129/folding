<section class="content-header">
    <h1>Slideshow</h1>
    <ol class="breadcrumb">
      <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"><i class="fa fa-cubes"></i>Slideshow</li>
    </ol>
</section>

<section class="content">
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Index</h3>
        <div class="box-tools pull-right">
            <a href="{{url('slideshow/create-new')}}" class="btn btn-box-tool" title="Create New"><i class="fa fa-plus"></i>create New</a>
        </div>
     </div>
</div>

<div class="box-body table-responsive">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Fungsi</th>
                <th>Images</th>
                <th>description</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($slideshow as $jancuk1 => $slide)
                <tr>
                    <td>{{$jancuk1+1}}</td>
                    <td>{{$slide->name}}</td>
                    <td>{{$slide->fungsi}}</td>
                    <td>
                        @if (is_null($slide->images))
                          <label> - </label>
                        @else
                          <img class="img-rounded zoom" src="{{asset('porducts_images')}}/{{$slide->images }}" width="100">
                        @endif
                      </td>
                    <td>{{$slide->desc}}</td>
                    {{-- <td>
                        <center>
                            <a href="{{url('/premiums/update/'.$premium->idpremiums)}}"><i class="fa fa-pencil-square-o"></i></a>
                        </center>
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</section>     