@extends('front.layout.template')

@section('title', 'Contact Laravel Blog - Rudi Kurniawan')
    
@section('content')
    
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                <div class="col-lg-8" data-aos="zoom-in">
                    <!-- Featured blog post-->
                    <div class="card mb-4 shadow-sm">
                        <div class="text-center">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5302414818484!2d106.93142387409598!3d-6.193546060676635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698b3fbf49ecbd%3A0x6b00b1602675792d!2sApartemen%20Delta%20Cakung!5e0!3m2!1sid!2sid!4v1716542848008!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="card-body">
                            <div class="small text-muted">{{ date('d-m-Y') }}</div>
                            <h2 class="card-title">Contact Laravel blog</h2>
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
                                <li>Phone : {{ $config['phone'] }}</li>
                                <li>Email : {{ $config['email'] }}</li>
                                <li><a href="https://youtube.com/{{ $config['youtube'] }}">Youtube</a></li>
                                <li><a href="https://facebook.com/{{ $config['facebook'] }}">Facebook</a></li>
                                <li><a href="https://instagram.com/{{ $config['instagram'] }}">Instagram</a></li>
                            </ul>
                        </div>
                    </div>
                   

                </div>
                <!-- Side widgets-->
                @include('front.layout.side-widget')
            </div>
        </div>
        

@endsection