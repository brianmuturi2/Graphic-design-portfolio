<div class="section secondary-section " id="portfolio">
    <div class="triangle"></div>
    <div class="container">
        <div class=" title">
            <h1>Have You Seen My Designs?</h1>
            <p>Below are some of the designs i have done.</p>
        </div>
        <ul class="nav nav-pills">
            <li class="filter" data-filter="all">
                <a href="#noAction">All designs</a>
            </li>
            <li class="filter" data-filter="web">
                <a href="#noAction">Graphic designs</a>
            </li>
            <li class="filter" data-filter="photo">
                <a href="#noAction">Website designs</a>
            </li>
            <li class="filter" data-filter="identity">
                <a href="#noAction">Applications</a>
            </li>
            <li>
                <a href="{{route('all')}}">All designs</a>
            </li>
        </ul>
        <!-- Start details for portfolio project 1 -->
        @foreach($posts as $post)
        <div id="single-project">
            <div id="slidingDiv" class="toggleDiv row-fluid single-project">
                <div class="span6">
                    <img src="{{ asset('images/' . $post->image) }}" alt="bmn graphics" />
                </div>
                <div class="span6">
                    <div class="project-description">
                        <div class="project-title clearfix">
                            <h3>{{$post->title}}</h3>
                            <span class="show_hide close">
                                <i class="icon-cancel"></i>
                            </span>
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
            @endforeach
            <!-- End details for portfolio project 1 -->
            <!-- Start details for portfolio project 2 -->
            @foreach($post1s as $post1)
            <div id="slidingDiv1" class="toggleDiv row-fluid single-project">
                <div class="span6">
                    <img src="{{ asset('images/' . $post1->image) }}" alt="bmn graphics">
                </div>
                <div class="span6">
                    <div class="project-description">
                        <div class="project-title clearfix">
                            <h3>{{$post1->title}}</h3>
                            <span class="show_hide close">
                                <i class="icon-cancel"></i>
                            </span>
                        </div>
                        <div class="project-info">
                            <div>
                                <span>Client</span>{{$post1->client}}</div>
                            <div>
                                <span>Date</span>{{$post1->projectDate}}</div>
                            <div>
                                <span>Skills</span>{{$post1->skills}}</div>
                            <div>
                                <span>Link</span>{{$post1->projectLink}}</div>
                        </div>
                        <p>{{$post1->body}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- End details for portfolio project 2 -->
            <!-- Start details for portfolio project 3 -->
            @foreach($post2s as $post2)
            <div id="slidingDiv2" class="toggleDiv row-fluid single-project">
                <div class="span6">
                    <img src="{{ asset('images/' . $post2->image) }}" alt="bmn graphics">
                </div>
                <div class="span6">
                    <div class="project-description">
                        <div class="project-title clearfix">
                            <h3>{{$post2->title}}</h3>
                            <span class="show_hide close">
                                <i class="icon-cancel"></i>
                            </span>
                        </div>
                        <div class="project-info">
                            <div>
                                <span>Client</span>{{$post2->client}}</div>
                            <div>
                                <span>Date</span>{{$post2->projectDate}}</div>
                            <div>
                                <span>Skills</span>{{$post2->skills}}</div>
                            <div>
                                <span>Link</span>{{$post2->projectLink}}</div>
                        </div>
                        <p>{{$post2->body}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- End details for portfolio project 3 -->
            <!-- Start details for portfolio project 4 -->
            @foreach($post3s as $post3)
            <div id="slidingDiv3" class="toggleDiv row-fluid single-project">
                <div class="span6">
                    <img src="{{ asset('images/' . $post3->image) }}" alt="bmn graphics">
                </div>
                <div class="span6">
                    <div class="project-description">
                        <div class="project-title clearfix">
                            <h3>{{$post3->title}}</h3>
                            <span class="show_hide close">
                                <i class="icon-cancel"></i>
                            </span>
                        </div>
                        <div class="project-info">
                            <div>
                                <span>Client</span>{{$post3->client}}</div>
                            <div>
                                <span>Date</span>{{$post3->projectDate}}</div>
                            <div>
                                <span>Skills</span>{{$post3->skills}}</div>
                            <div>
                                <span>Link</span>{{$post3->projectLink}}</div>
                        </div>
                        <p>{{$post3->body}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- End details for portfolio project 4 -->
            <!-- Start details for portfolio project 5 -->
            @foreach($post4s as $post4)
            <div id="slidingDiv4" class="toggleDiv row-fluid single-project">
                <div class="span6">
                    <img src="{{ asset('images/' . $post4->image) }}" alt="bmn graphics">
                </div>
                <div class="span6">
                    <div class="project-description">
                        <div class="project-title clearfix">
                            <h3>{{$post4->title}}</h3>
                            <span class="show_hide close">
                                <i class="icon-cancel"></i>
                            </span>
                        </div>
                        <div class="project-info">
                            <div>
                                <span>Client</span>{{$post4->client}}</div>
                            <div>
                                <span>Date</span>{{$post4->projectDate}}</div>
                            <div>
                                <span>Skills</span>{{$post4->skills}}</div>
                            <div>
                                <span>Link</span>{{$post4->projectLink}}</div>
                        </div>
                        <p>{{$post4->body}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- End details for portfolio project 5 -->
            <!-- Start details for portfolio project 6 -->
            @foreach($post5s as $post5)
            <div id="slidingDiv5" class="toggleDiv row-fluid single-project">
                <div class="span6">
                    <img src="{{ asset('images/' . $post5->image) }}" alt="bmn graphics">
                </div>
                <div class="span6">
                    <div class="project-description">
                        <div class="project-title clearfix">
                            <h3>{{$post5->title}}</h3>
                            <span class="show_hide close">
                                <i class="icon-cancel"></i>
                            </span>
                        </div>
                        <div class="project-info">
                            <div>
                                <span>Client</span>{{$post5->client}}</div>
                            <div>
                                <span>Date</span>{{$post5->projectDate}}</div>
                            <div>
                                <span>Skills</span>{{$post5->skills}}</div>
                            <div>
                                <span>Link</span>{{$post5->projectLink}}</div>
                        </div>
                        <p>{{$post5->body}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- End details for portfolio project 6 -->
            <!-- Start details for portfolio project 7 -->
            @foreach($post6s as $post6)
            <div id="slidingDiv6" class="toggleDiv row-fluid single-project">
                <div class="span6">
                    <img src="{{ asset('images/' . $post6->image) }}" alt="bmn graphics">
                </div>
                <div class="span6">
                    <div class="project-description">
                        <div class="project-title clearfix">
                            <h3>{{$post6->title}}</h3>
                            <span class="show_hide close">
                                <i class="icon-cancel"></i>
                            </span>
                        </div>
                        <div class="project-info">
                            <div>
                                <span>Client</span>{{$post6->client}}</div>
                            <div>
                                <span>Date</span>{{$post6->projectDate}}</div>
                            <div>
                                <span>Skills</span>{{$post6->skils}}</div>
                            <div>
                                <span>Link</span>{{$post6->projectLink}}</div>
                        </div>
                        <p>{{$post6->body}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- End details for portfolio project 7 -->
            <!-- Start details for portfolio project 8 -->
            @foreach($post7s as $post7)
            <div id="slidingDiv7" class="toggleDiv row-fluid single-project">
                <div class="span6">
                    <img src="{{ asset('images/' . $post7->image) }}" alt="bmn graphics">
                </div>
                <div class="span6">
                    <div class="project-description">
                        <div class="project-title clearfix">
                            <h3>{{$post7->title}}</h3>
                            <span class="show_hide close">
                                <i class="icon-cancel"></i>
                            </span>
                        </div>
                        <div class="project-info">
                            <div>
                                <span>Client</span>{{$post7->client}}</div>
                            <div>
                                <span>Date</span>{{$post7->projectDate}}</div>
                            <div>
                                <span>Skills</span>{{$post7->skills}}</div>
                            <div>
                                <span>Link</span>{{$post7->projectLink}}</div>
                        </div>
                        <p>{{$post7->body}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- End details for portfolio project 8 -->
            <!-- Start details for portfolio project 9 -->
            @foreach($post8s as $post8)
            <div id="slidingDiv8" class="toggleDiv row-fluid single-project">
                <div class="span6">
                    <img src="{{ asset('images/' . $post8->image) }}" alt="bmn graphics">
                </div>
                <div class="span6">
                    <div class="project-description">
                        <div class="project-title clearfix">
                            <h3>{{$post8->title}}</h3>
                            <span class="show_hide close">
                                <i class="icon-cancel"></i>
                            </span>
                        </div>
                        <div class="project-info">
                            <div>
                                <span>Client</span>{{$post8->client}}</div>
                            <div>
                                <span>Date</span>{{$post8->projectDate}}</div>
                            <div>
                                <span>Skills</span>{{$post8->skills}}</div>
                            <div>
                                <span>Link</span>{{$post8->projectLink}}</div>
                        </div>
                        <p>{{$post8->body}}</p>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- End details for portfolio project 9 -->
            <ul id="portfolio-grid" class="thumbnails row">
                @foreach($posts as $post)
                <li class="span4 mix web">
                    <div class="thumbnail">
                        <img src="{{ asset('images/' . $post->image) }}" alt="bmn graphics">
                        <a href="#single-project" class="more show_hide" rel="#slidingDiv">
                            <i class="icon-plus"></i>
                        </a>
                        <h3>{{$post->title}}</h3>
                        <p>{{$post->client}}</p>
                        <div class="mask"></div>
                    </div>
                </li>
                @endforeach
                @foreach($post1s as $post1)
                <li class="span4 mix photo">
                    <div class="thumbnail">
                        <img src="{{ asset('images/' . $post1->image) }}" alt="bmn graphics">
                        <a href="#single-project" class="show_hide more" rel="#slidingDiv1">
                            <i class="icon-plus"></i>
                        </a>
                        <h3>{{$post1->title}}</h3>
                        <p>{{$post1->client}}</p>
                        <div class="mask"></div>
                    </div>
                </li>
                @endforeach
                @foreach($post2s as $post2)
                <li class="span4 mix identity">
                    <div class="thumbnail">
                        <img src="{{ asset('images/' . $post2->image) }}" alt="bmn graphics">
                        <a href="#single-project" class="more show_hide" rel="#slidingDiv2">
                            <i class="icon-plus"></i>
                        </a>
                        <h3>{{$post2->title}}</h3>
                        <p>{{$post2->client}}</p>
                        <div class="mask"></div>
                    </div>
                </li>
                @endforeach
                @foreach($post3s as $post3)
                <li class="span4 mix web">
                    <div class="thumbnail">
                        <img src="{{ asset('images/' . $post3->image) }}" alt="bmn graphics">
                        <a href="#single-project" class="show_hide more" rel="#slidingDiv3">
                            <i class="icon-plus"></i>
                        </a>
                        <h3>{{$post3->title}}</h3>
                        <p>{{$post3->client}}</p>
                        <div class="mask"></div>
                    </div>
                </li>
                @endforeach
                @foreach($post4s as $post4)
                <li class="span4 mix photo">
                    <div class="thumbnail">
                        <img src="{{ asset('images/' . $post4->image) }}" alt="bmn graphics">
                        <a href="#single-project" class="show_hide more" rel="#slidingDiv4">
                            <i class="icon-plus"></i>
                        </a>
                        <h3>{{$post4->title}}</h3>
                        <p>{{$post4->client}}</p>
                        <div class="mask"></div>
                    </div>
                </li>
                @endforeach
                @foreach($post5s as $post5)
                <li class="span4 mix identity">
                    <div class="thumbnail">
                        <img src="{{ asset('images/' . $post5->image) }}" alt="bmn graphics">
                        <a href="#single-project" class="show_hide more" rel="#slidingDiv5">
                            <i class="icon-plus"></i>
                        </a>
                        <h3>{{$post5->title}}</h3>
                        <p>{{$post5->client}}</p>
                        <div class="mask"></div>
                    </div>
                </li>
                @endforeach
                @foreach($post6s as $post6)
                <li class="span4 mix web">
                    <div class="thumbnail">
                        <img src="{{ asset('images/' . $post6->image) }}" alt="bmn graphics" />
                        <a href="#single-project" class="show_hide more" rel="#slidingDiv6">
                            <i class="icon-plus"></i>
                        </a>
                        <h3>{{$post6->title}}</h3>
                        <p>{{$post6->client}}</p>
                        <div class="mask"></div>
                    </div>
                </li>
                @endforeach
                @foreach($post7s as $post7)
                <li class="span4 mix photo">
                    <div class="thumbnail">
                        <img src="{{ asset('images/' . $post7->image) }}" alt="bmn graphics">
                        <a href="#single-project" class="show_hide more" rel="#slidingDiv7">
                            <i class="icon-plus"></i>
                        </a>
                        <h3>{{$post7->title}}</h3>
                        <p>{{$post7->client}}</p>
                        <div class="mask"></div>
                    </div>
                </li>
                @endforeach
                @foreach($post8s as $post8)
                <li class="span4 mix identity">
                    <div class="thumbnail">
                        <img src="{{ asset('images/' . $post8->image) }}" alt="bmn graphics">
                        <a href="#single-project" class="show_hide more" rel="#slidingDiv8">
                            <i class="icon-plus"></i>
                        </a>
                        <h3>{{$post8->title}}</h3>
                        <p>{{$post8->client}}</p>
                        <div class="mask"></div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>