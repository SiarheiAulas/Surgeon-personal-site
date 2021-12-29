<div class="main-text">
    <div class="title">
        <h2><a href="{{route('confs.show', ['conf'=>$conf])}}">{{$conf->ru_header}}</a></h2>
    </div>
    <div class="date">
        <h3>{{__('conf.date')}}{{date('d.m.Y', strtotime($conf->start_date))}} 
            @isset($conf->end_date)
            - {{date('d.m.Y', strtotime($conf->end_date))}}
            @endisset
        </h3>
    </div>
    <div>
        {!!$conf->ru_description!!}
    </div>
    @isset($conf->url_video)
        <div class="admin-buttons">
            <a href="{{$conf->url_video}}" target="_blank">{{__('conf.video')}}</a>
        </div>
    @endisset
    <div class="admin-buttons">
        <a href="{{route('download', ['file'=>$conf->url_pdf, 'id'=>$conf->id])}}">{{__('conf.presentationdownload')}}</a>
    </div>
    @auth()
        <div class="admin-buttons">
            <form action="{{route('confs.destroy', $conf->id)}}" method="post">
                @csrf
                @method('DELETE')
                <input type="hidden" value="delete">
                <button class="custom-button-2" type="submit">{{__('layout.delete')}}</button>
            </form>
        </div>
        <div class="admin-buttons">
            <a href="{{route('confs.edit', $conf->id)}}">{{__('layout.edit')}}</a>
        </div>
     @endauth
</div>