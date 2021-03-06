@extends('layouts/default')

{{-- Page title --}}
@section('title')
    Training
    @parent
@stop

{{-- page level styles --}}
@section('header_styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/frontend/features.css') }}">
@stop

{{-- breadcrumb --}}
@section('top')
    <div class="breadcum">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ol class="breadcrumb">
                        <li class="d-none d-sm-block ">
                            <i class="livicon" data-name="users" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            <a href="#">Training Video List</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

@stop


{{-- Page content --}}
@section('content')
    <section class="content pr-3 pl-3">
        <div class="row">
            <div class="col-12">
                <div class="card ">
                    <div class="card-header bg-primary text-white clearfix">
                        <h4 class="card-title float-left"> <i class="livicon" data-name="users" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                           Training
                        </h4>
                    </div>
                    <br />
                    <div class="card-body">
                        <div class="table-responsive-lg table-responsive-md table-responsive-sm">
                            <div class="tab-pane fade show active p-3">
                                <div class="row">

                                    <?php $i = 1;?>
                                    @forelse( $videos as $video)
                                    <div class="col-4 row">

                                            <div class="col-6">
                                                <a class="fancybox-effects-a"
                                                   href="{{ URL::to ('video/item/'. $video->id)}}"
                                                   title="Click aside to exit popup">
                                                    <video class="img-fluid gallery-style">
                                                        <source src="{{ asset('consultant/public/uploads/videos/'.$video->video) }}" >
                                                    </video>
                                                </a>
                                            </div>
                                            <div class="col-6">
                                                <h4>{{$video->title}}</h4>
                                                <p>
                                                    {{$video->description}}
                                                </p>
                                                {{--<a href="{{URL::to('survey/' . $video->id)}}" class="btn btn-success">Finish</a>--}}
                                            </div>
                                        <?php $i++;?>

                                    </div>
                                    @empty
                                        <h3>No Posts Exists!</h3>
                                    @endforelse

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- row-->
    </section>
@stop

{{-- page level scripts --}}
@section('footer_scripts')


    <script>
        var video_count = "<?php echo $i;?>";
       for (var j = 1; j < parseInt(video_count); j++) {

           var video_id = "video_sample" + j;
           $("#" + video_id).bind('ended', function () {
               //var video_id = $("#" + video_id).data('id');
               console.log(this);
               //window.location.href = "{{URL::to('survey/' . $video->id)}}";
           });
       }


    </script>

@stop
