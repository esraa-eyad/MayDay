@extends('layouts.app')

@section('content')
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
    <section id="contact" class="contact section-bg">
        <div class="container" data-aos="fade-up">



            <section id="contact" class="contact section-bg">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>profile</h2>

                        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
                    </div>

                    <div class="row">

                        <div class="col-lg-6">

                            <div class="row">


                                <div class="col-md-12">
                                    <div class="info-box">
                                        <img src="{{url('/').$user->qrcode}}"></img>
                                        <p>Scan me to return to the original page.</p>
                                        <br>


                                        <a href="Print_qr" class="get-started-btn scrollto">  print QR code
                                        </a>

                                    </div>



                                </div>

                            </div>
                        </div>


                        <div class="col-lg-6 mt-4 mt-md-0">
                            <form action="{{ route('profile.update')}}" method="post" enctype="multipart/form-data" role="form" class="form">
                                @csrf
                                @if( session()->has('success'))
                                    <div class="alert alert-success">{{ session()->get('success') }}</div>
                                @endif

                                @include('includes.errors')
                                <div class="form-group">
                                    <img src="{{url('/').$user->image}}" class="testimonial-img" alt="">

                                    <h3>{{ $user->name}}</h3>

                                </div>
                                <div class="form-group">

                                    <label for="age">your age</label>
                                    <input value="{{ $user->name}}" type="hidden" name="name" id="name"  class="form-control"  required >

                                    <input type="age" name="age" class="form-control" id="age" placeholder="Enter name" value="{{ $user->age }}">                                    </div>


                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Chronic Diseases and Conditions</label>
                                    <select name="chronic_diseases" class="form-control form-select"   aria-label="Default select example">
                                        <option value="{{ $user->chronic_diseases }}" style="display: none" selected>{{ $user->chronic_diseases }}</option>

                                        <option value="ALS (Lou Gehrig's Disease)" <?php if( $user->chronic_diseases=='ALS (Lou Gehrigs Disease)') echo 'selected'; ?>>ALS (Lou Gehrig's Disease)</option>
                                        <option value="Arthritis" <?php if( $user->chronic_diseases=='Arthritis') echo 'selected'; ?>>Arthritis</option>
                                        <option value="Asthma" <?php if( $user->chronic_diseases=='Asthma') echo 'selected'; ?>>Asthma</option>
                                        <option value="Cancer" <?php if( $user->chronic_diseases=='Cancer') echo 'selected'; ?>>Cancer</option>
                                        <option value="Chronic Obstructive Pulmonary Disease (COPD)" <?php if( $user->chronic_diseases=='Chronic Obstructive Pulmonary Disease (COPD)') echo 'selected'; ?>>Chronic Obstructive Pulmonary Disease (COPD)</option>
                                        <option value="Alzheimer's Disease and other Dementias" <?php if( $user->chronic_diseases=='Alzheimer is Disease and other Dementias') echo 'selected'; ?>>Alzheimer's Disease and other Dementias</option>
                                        <option value="Cystic Fibrosis" <?php if( $user->chronic_diseases=='Cystic Fibrosis') echo 'selected'; ?>>Cystic Fibrosis</option>
                                        <option value="Diabetes"<?php if( $user->chronic_diseases=='Diabetes') echo 'selected'; ?>>Diabetes</option>
                                        <option value="Eating Disorders"<?php if( $user->chronic_diseases=='Eating Disorders') echo 'selected'; ?>>Eating Disorders</option>
                                        <option value="Heart Disease"<?php if( $user->chronic_diseases=='Heart Disease') echo 'selected'; ?>>Heart Disease</option>
                                        <option value="Obesity"<?php if( $user->chronic_diseases=='Obesity') echo 'selected'; ?>>Obesity</option>
                                        <option value="Oral Health"<?php if( $user->chronic_diseases=='Oral Health') echo 'selected'; ?>>Oral Health</option>
                                        <option value="Osteoporosis"<?php if( $user->chronic_diseases=='Osteoporosis') echo 'selected'; ?>>Osteoporosis</option>

                                        <option value="Reflex Sympathetic Dystrophy (RSD) Syndrome"<?php if( $user->chronic_diseases=='Reflex Sympathetic Dystrophy (RSD) Syndrome') echo 'selected'; ?>>Reflex Sympathetic Dystrophy (RSD) Syndrome</option>
                                        <option value="Tobacco Use and Related Conditions"<?php if( $user->chronic_diseases=='Tobacco Use and Related Conditions') echo 'selected'; ?>>Tobacco Use and Related Conditions</option>
                                    </select>
                                    <div class="validate"></div>
                                </div>


                                <div class="form-group">
                                    <label for="name">your email</label>

                                    <input type="text" class="form-control" value="{{ $user->email }}" name="email" id="age" placeholder="Your Age" data-rule="age" data-msg="Please enter your age">
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group">
                                    <label for="name">your phone</label>

                                    <input type="text" class="form-control" value="{{ $user->phone }}" name="phone" id="phone" placeholder="Your Age" data-rule="phone" data-msg="Please enter your age">
                                </div>
                                <div class="form-group">
                                    <label for="name">your Emergency phone</label>

                                    <input type="text" class="form-control" value="{{ $user->Emergency_phone }}" name="Emergency_phone" id="Emergency_phone"  data-rule="Emergency_phone" data-msg="Please enter your age">
                                    <div class="validate"></div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">bolde_type</label>
                                    <select name="bolde_type" class="form-control form-select"   aria-label="Default select example">
                                        <option value="{{ $user->bolde_type }}" style="display: none" selected>{{ $user->bolde_type }}</option>

                                        <option  value="O+" <?php if( $user->bolde_type=='O+') echo 'selected'; ?>>O+</option>
                                        <option value="A+" <?php if( $user->bolde_type=='A+') echo 'selected'; ?> >A+ </option>
                                        <option value="A-" <?php if( $user->bolde_type=='A-') echo 'selected'; ?>>A- </option>
                                        <option value="O-" <?php if( $user->bolde_type=='O-') echo 'selected'; ?> >O- </option>
                                        <option value="B+" <?php if( $user->bolde_type=='B+') echo 'selected'; ?>>B+ </option>
                                        <option value="B-"<?php if( $user->bolde_type=='B-') echo 'selected'; ?>>B- </option>
                                        <option value="AB+" <?php if( $user->bolde_type=='AB+') echo 'selected'; ?>>AB+ </option>

                                        <option value="AB-" <?php if( $user->bolde_type=='AB-') echo 'selected'; ?>>AB-</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">allergic diseases</label>
                                    <select name="allergic_diseases"  class="form-control form-select" aria-label="Default select example">
                                        <option value="Eggs" <?php if( $user->allergic_diseases=='Eggs') echo 'selected'; ?> >Eggs</option>
                                        <option value="Milk" <?php if( $user->allergic_diseases=='Milk') echo 'selected'; ?> > Milk</option>
                                        <option value="Peanuts" <?php if( $user->allergic_diseases=='Peanuts') echo 'selected'; ?> >Peanuts</option>
                                        <option value="Soy" <?php if( $user->allergic_diseases=='Soy') echo 'selected'; ?> >Soy</option>
                                        <option value="Wheat" <?php if( $user->allergic_diseases=='Wheat') echo 'selected'; ?> >Wheat</option>
                                        <option value="Tree Nuts" <?php if( $user->allergic_diseases=='Tree Nuts') echo 'selected'; ?> >Tree Nuts</option>
                                        <option value="Shellfish" <?php if( $user->allergic_diseases=='Shellfish') echo 'selected'; ?> >Shellfish</option>

                                        <option value="Sesame Seeds" <?php if( $user->allergic_diseases=='Sesame Seeds') echo 'selected'; ?>>Sesame Seeds</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">your address</label>

                                    <input value="{{ $user->address_longitude}}" type="hidden" name="address_longitude" id="address_longitude" >
                                    <input value="{{ $user->address_latitude}}" type="hidden" name="address_latitude" id="address_latitude" >
                                    <div id="map_canvas" style="height: 350px;width: 400px;margin: 0.6em;"></div>

                                </div>
                                <div class="form-group">
                                    <label for="name">your message</label>

                                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message">{{ $user->message }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Choose your image<small class="text-info">(Enter image if you want change.)</small></label>

                                    <input type="file"  name="image" id="exampleInputFile">

                                </div>
                                <div class="form-group">
                                    <label for="password">User password<small class="text-info">(Enter password if you want change.)</small></label>
                                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                                </div>
                                <button type="submit" class="btn btn-sm btn-primary">Update Profile</button>
                            </form>
                        </div>


                    </div>

                </div>
            </section><!-- End Contact Section -->

        </div>
    </section><!-- End Contact Section -->
    <script type="text/javascript">
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
        $(function(){
            $('#persondetail').ajaxForm({
                beforeSubmit: function() {

                },
                success: function(data) {
                    // Maybe with maybe not.
                    var data = JSON.parse(data);

                    if(data['status'] == 'success') {
                        swal("Good job!", "You clicked the button!", "success");
                    }
                }
            });

        });
    </script>

    @include('layouts.footers.footers')
@endsection
@section('js')


    <script type="text/javascript">
        function printDiv() {
            var printContents = document.getElementById('print').innerHTML;
            var originalContents = document.body.innerHTML;
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
            location.reload();
        }
    </script>

@endsection
