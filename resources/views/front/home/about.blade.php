@extends('front.layout.template')

@section('title', 'About Laravel Blog - Rudi Kurniawan')
    
@section('content')
    
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8" data-aos="flip-up">
                    <!-- Featured blog post-->
                    <div class="card mb-4 shadow-sm">
                        <a href="{{ asset('front/img/laravel.png') }}">
                            <img class="card-img-top featured-img" 
                                src="{{ asset('front/img/laravel.png') }}" 
                                alt="About Laravel Blog" />
                        </a>

                        <div class="card-body">
                            <div class="small text-muted">{{ date('d-m-Y') }}</div>
                            <h2 class="card-title">About Laravel blog</h2>
                            <p class="card-text">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus veniam cupiditate explicabo, vero facere consequatur doloribus adipisci dolore quibusdam eaque ex odit sit quo ducimus voluptate obcaecati tempora deleniti mollitia?
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci provident iusto laudantium dolor eaque, harum enim, doloremque ea explicabo consectetur quisquam vitae. Natus alias possimus, consectetur sapiente autem ad commodi.
                            
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt hic sit eveniet maiores ea necessitatibus, qui incidunt vitae aspernatur dolore vel odio eaque architecto, blanditiis, cum veritatis a exercitationem magnam?
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus consequatur molestiae iure ipsa fugit! Fugit libero eius aliquid perspiciatis illum officia repellat, nemo sint beatae animi autem ipsam dolore nisi.
                                </p>
                            </p>

                            <ul>
                                <li><a href="https://youtube.com">Youtube</a></li>
                                <li><a href="https://facebook.com">Facebook</a></li>
                                <li><a href="https://instagram.com">Instagram</a></li>
                            </ul>
                        </div>
                    </div>
                   

                </div>
                <!-- Side widgets-->
                @include('front.layout.side-widget')
            </div>
        </div>
        

@endsection