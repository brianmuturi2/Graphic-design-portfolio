<div id="clients">
    <div class="section primary-section">
        <div class="triangle"></div>
        <div class="container">
            <div class="title">
                <h1>What Client Say?</h1>
                <p>Feedback from some of my clients.</p>
            </div>
            <div class="row">
                @foreach($comments as $comment)
                <div class="span4">
                    <div class="testimonial">
                        <p>"{{ substr($comment->body, 0, 50) }}{{ strlen($comment->body) > 70 ? "..." : "" }}"</p>
                        <div class="whopic">
                            <div class="arrow"></div>
                            <img src="{{ asset('images/' . $comment->photo) }}" alt="{{$comment->name}}" />
                            <strong>{{$comment->name}}
                                <small>Client</small>
                            </strong>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <p class="testimonial-text">
                "Perfection is Achieved Not When There Is Nothing More to Add, But When There Is Nothing Left to Take Away"
            </p>
        </div>
    </div>
</div>
<div class="section third-section">
    <div class="container centered">
        <div class="sub-section">
            <div class="title clearfix">
                <div class="pull-left">
                    <h3>My Clients</h3>
                </div>
                <ul class="client-nav pull-right">
                    <li id="client-prev"></li>
                    <li id="client-next"></li>
                </ul>
            </div>
            <ul class="row client-slider" id="clint-slider">
                @foreach($clients as $client)
                <li>
                    <a href="">
                        <img src="{{ asset('images/' . $client->logo) }}" alt="{{$client->name}}">
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>