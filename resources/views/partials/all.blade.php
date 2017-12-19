@extends('master._app')
@section('all')
<div class="section secondary-section " id="portfolio">
    <div class="triangle"></div>
    <div class="container">
	@foreach($posts as $post)
	<div id="1">
		<div id="slidingDiv{{$post->id}}" class="toggleDiv row-fluid				 single-project">
		    <div class="span6">
		        <img src="{{ asset('images/' . $post->image) }}" alt="bmn designs">
		    </div>
		    <div class="span6">
		        <div class="project-description">
		            <div class="project-title clearfix">
		                <h3>{{$post->title}}</h3>
		                <a href="" class="show_hide close">
		                    <i class="icon-cancel"></i>
		                </a>
		            </div>
		            <div class="project-info">
		                <div>
		                    <span>Client</span>{{$post->client}}</div>
		                <div>
		                    <span>Date</span>{{$post->projectDate}}</div>
		                <div>
		                    <span>Skills</span>{{$post->skills}}</div>
		                <div>
		                    <span>Link</span>{{$post->projectLink}}</div>
		            </div>
		            <p>{{$post->body}}</p>
		        </div>
		    </div>
		</div>
	</div>
	@endforeach
    <div>
        <ul id="portfolio-grid" class="thumbnails row">
            @foreach($posts as $post)
            <li class="span4 mix web">
                <div class="thumbnail">
                    <img src="{{ asset('images/' . $post->image) }}" alt="{{$post->title}}">
                        <a href="#1" class="show_hide more" rel="#slidingDiv{{$post->id}}">
                            <i class="icon-plus"></i>
                        </a>
                    <h3>{{$post->title}}</h3>
                    <p></p>
                    <div class="mask"></div>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
	<div class="pagination">
		{!! $posts->links(); !!}
	</div>
</div>
</div>
@endsection