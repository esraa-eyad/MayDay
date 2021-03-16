@extends('layouts.app')

@section('content')

    <style>
        .divider-text {
            position: relative;
            text-align: center;
            margin-top: 15px;
            margin-bottom: 15px;
        }
        .divider-text span {
            padding: 7px;
            font-size: 12px;
            position: relative;
            z-index: 2;
        }
        .divider-text:after {
            content: "";
            position: absolute;
            width: 100%;
            border-bottom: 1px solid #ddd;
            top: 55%;
            left: 0;
            z-index: 1;
        }

        .btn-facebook {
            background-color: #405D9D;
            color: #fff;
        }
        .btn-twitter {
            background-color: #42AEEC;
            color: #fff;
        }


    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://malsup.github.com/jquery.form.js" /></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="http://maps.google.com/maps/api/js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
    <script src="http://maps.google.com/maps/api/js?libraries=places&region=uk&language=en&sensor=true"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDn9ssUcOBfc6opeIMcFcEZ27DCewWgDIc&v=3.26">
        <script src="https://maps.googleapis.com/maps/api/js?v=3&language=cs&sensor=false&libraries=geometry&key=AIzaSyBsX3DgRHToXt4_-fZ0P4hhyF1_CdlyMpA%20">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


    <div class="container">
        <br>  <p class="text-center">More bootstrap 4 components on <a href="http://bootstrap-ecommerce.com/"> Bootstrap-ecommerce.com</a></p>
        <hr>





        <div class="">
            <article class="card-body mx-auto" style="max-width: 800px;">
                <h4 class="card-title mt-3 text-center">Create Account</h4>
                <p class="text-center">Get started with your free account</p>

                <form  method="POST" action="{{ route('register') }}"enctype="multipart/form-data">
                    @include('includes.errors')

                    @csrf
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                        </div>
                        <input name="name"  value="{{ old('name') }}" class="form-control" placeholder="Full name" type="text">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                        </div>
                        <input value="{{ old('email') }}"  name="email" id="email" class="form-control" placeholder="Email address" type="email">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-child" ></i> </span>
                        </div>
                        <input type="file" class="custom-file-input" name="image" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose your image
                        </label>

                    </div>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-child" ></i> </span>
                        </div>
                        <input  type="text" class="form-control" value="{{ old('age') }}" name="age" id="age" placeholder="Your Age" class="form-control" >
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                        </div>
                        <select class="custom-select" style="max-width: 120px;">
                            <option selected="">+971</option>
                            <option value="1">+972</option>
                            <option value="2">+198</option>
                            <option value="3">+701</option>
                        </select>
                        <input name="phone" value="{{ old('phone') }}" id="phone" class="form-control" placeholder="Phone number" type="text">
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-phone-volume"></i></span>
                        </div>
                        <select class="custom-select" style="max-width: 120px;">
                            <option selected="">+971</option>
                            <option value="1">+972</option>
                            <option value="2">+198</option>
                            <option value="3">+701</option>
                        </select>
                        <input value="{{ old('Emergency_phone') }}" name="Emergency_phone"   class="form-control" placeholder="Phone Emergency number" type="text">
                    </div>

                    <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-tint" ></i> </span>
                        </div>
                        <select name="bolde_type"class="form-control">
                            <option value="{{ old('bolde_type') }}" style="display: none" selected>your bolde type </option>
                            <option value="O+">O+</option>

                            <option value="O+">O+</option>
                            <option value="A ">A+ </option>
                            <option value="A ">A- </option>
                            <option value="A ">O- </option>
                            <option value="A ">B + </option>
                            <option value="A ">B- </option>
                            <option value="A ">AB+ </option>

                            <option value="A ">AB- </option>
                        </select>
                    </div>
                      <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="far fa-check-circle"></i> </span>
                            </div>
                            <select name="allergic_diseases" value="{{ old('allergic_diseases') }}" class="form-control">
                                    <option value="" style="display: none" selected>Select allergic diseases</option>
                                    <option value="Eggs">Eggs</option>
                                    <option value="Milk"> Milk</option>
                                    <option value="Peanuts">Peanuts</option>
                                    <option value="Soy">Soy</option>
                                    <option value="Wheat">Wheat</option>
                                    <option value="Tree Nuts">Tree Nuts</option>
                                    <option value="Shellfish">Shellfish</option>

                                    <option value="Sesame Seeds">Sesame Seeds</option>
                        </select>
                    </div>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="far fa-check-circle"></i> </span>
                        </div>
                        <select name="chronic_diseases" class="form-control" value="{{ old('chronic_diseases') }}"  class="form-control">
                            <option value="" style="display: none" selected>Select chronic diseases</option>
                            <option value="ALS (Lou Gehrig's Disease)">ALS (Lou Gehrig's Disease)</option>
                            <option value="Alzheimer's Disease and other Dementias">Alzheimer's Disease and other Dementias</option>


                            <option value="Arthritis">Arthritis</option>
                            <option value="Asthma">Asthma</option>
                            <option value="Cancer ">Cancer</option>
                            <option value="Chronic Obstructive Pulmonary Disease (COPD) ">Chronic Obstructive Pulmonary Disease (COPD) </option>
                            <option value="Cystic Fibrosis">Cystic Fibrosis</option>
                            <option value="Diabetes">Diabetes</option>
                            <option value="Eating Disorders">Eating Disorders</option>
                            <option value="Heart Disease">Heart Disease</option>
                            <option value="Obesity">Obesity</option>
                            <option value="Oral Health">Oral Health</option>
                            <option value="Osteoporosis">Osteoporosis</option>

                            <option value="Reflex Sympathetic Dystrophy (RSD) Syndrome">Reflex Sympathetic Dystrophy (RSD) Syndrome</option>
                            <option value="Tobacco Use and Related Conditions">Tobacco Use and Related Conditions</option>

                        </select>
                    </div>
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i  class="fa fa-map-marker"></i> </span>
                        </div>
                        <input type="hidden" name="address_longitude" id="address_longitude" class="MapLon" value="" type="text" placeholder="Longitude" class="form-control"  required >


                        <input type="hidden" name="address_latitude" id="address_latitude" class="MapLon" value="" type="text" placeholder="Longitude" class="form-control"  required>

                        <div id="map_canvas" style="height: 350px;width: 600px;margin: 0.6em;"></div>

                    </div>

                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-sticky-note"></i></span>
                        </div>
                        <textarea  rows="5"  class="form-control"  name="message" value="{{ old('message') }}"  placeholder="Message"  >
                        </textarea>
                    </div>
                    <div class="form-group input-group">


                    </div>
                    <!-- form-group end.// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input  class="form-control @error('password') is-invalid @enderror" name="password" class="form-control" placeholder="Create password" type="password">
                    </div> <!-- form-group// -->
                    <div class="form-group input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                        </div>
                        <input id="password-confirm" type="password"  placeholder="Confirm Passwor" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div> <!-- form-group// -->
                    <div class="form-group">
                        <button type="submit" class="get-started-btn scrollto"> Create Account  </button>

                    </div>
                    <div class="form-group">
                        <p class="text-center">Have an account? <a href="{{ route('login') }}">Log In</a> </p>

                    </div><!-- form-group// -->
                </form>
            </article>
        </div> <!-- card.// -->

    </div>



    <script type="text/javascript" >


    $(function () {
            var lat = 21.584370,
                lng = 39.217770,
                latlng = new google.maps.LatLng(lat, lng),
                image = 'http://www.google.com/intl/en_us/mapfiles/ms/micons/blue-dot.png';
            //zoomControl: true,
            //zoomControlOptions: google.maps.ZoomControlStyle.LARGE,
            var mapOptions = {
                    center: new google.maps.LatLng(lat, lng),
                    zoom: 13,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    panControl: true,
                    panControlOptions: {
                        position: google.maps.ControlPosition.TOP_RIGHT
                    },
                    zoomControl: true,
                    zoomControlOptions: {
                        style: google.maps.ZoomControlStyle.LARGE,
                        position: google.maps.ControlPosition.TOP_left
                    }
                },
                map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions),
                marker = new google.maps.Marker({
                    position: latlng,
                    map: map,
                    icon: image
                });
            var input = document.getElementById('searchTextField');
            var autocomplete = new google.maps.places.Autocomplete(input, {
                types: ["geocode"]
            });
            autocomplete.bindTo('bounds', map);
            var infowindow = new google.maps.InfoWindow();
            google.maps.event.addListener(autocomplete, 'place_changed', function (event) {
                infowindow.close();
                var place = autocomplete.getPlace();
                if (place.geometry.viewport) {
                    map.fitBounds(place.geometry.viewport);
                } else {
                    map.setCenter(place.geometry.location);
                    map.setZoom(17);
                }
                moveMarker(place.name, place.geometry.location);
                $('.MapLat').val(place.geometry.location.lat());
                $('.MapLon').val(place.geometry.location.lng());
            });
            google.maps.event.addListener(map, 'click', function (event) {
                $('.MapLat').val(event.latLng.lat());
                $('.MapLon').val(event.latLng.lng());
                infowindow.close();
                var geocoder = new google.maps.Geocoder();
                geocoder.geocode({
                    "latLng":event.latLng
                }, function (results, status) {
                    console.log(results, status);
                    if (status == google.maps.GeocoderStatus.OK) {
                        console.log(results);
                        var lat = results[0].geometry.location.lat(),
                            lng = results[0].geometry.location.lng(),
                            placeName = results[0].address_components[0].long_name,
                            latlng = new google.maps.LatLng(lat, lng);
                        moveMarker(placeName, latlng);
                        $("#searchTextField").val(results[0].formatted_address);
                    }
                });
            });

            function moveMarker(placeName, latlng) {
                marker.setIcon(image);
                marker.setPosition(latlng);
                infowindow.setContent(placeName);
                //infowindow.open(map, marker);
            }
        });

    </script>

@include('layouts.footers.footers')
@endsection
