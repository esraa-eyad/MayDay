
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

<link href="http://127.0.0.1:8000/website/css/app2.css" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
    <form method="post">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-img" style="height: 200px;width: 240px;margin: 0.6em;">
                    <img src="{{url('/').$user->image}}" alt=""/>

                </div>



            </div>
            <div class="col-md-6">
                <div class="profile-head">

                    <h6>
                        {{ $user->name}}
                    </h6>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Personal Details
                            </a>
                        </li>

                    </ul>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-8">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <label>age</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $user->age}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>bolde_type</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $user->bolde_type}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>chronic_diseases</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $user->chronic_diseases}}</p>
                            </div>
                        </div><div class="row">
                            <div class="col-md-6">
                                <label>allergic_diseases</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $user->allergic_diseases}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Email</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $user->email}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Emergency_phone</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $user->Emergency_phone}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>Phone</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $user->phone}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label>message</label>
                            </div>
                            <div class="col-md-6">
                                <p>{{ $user->message}}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <label>address</label>
                            </div>
                            <div class="col-md-6">
                                <input value="{{ $user->address_longitude}}" type="hidden" name="address_longitude" id="address_longitude" class="MapLon"  >
                                <input value="{{ $user->address_latitude}}" type="hidden" name="address_latitude" id="address_latitude" class="MapLon" >

                                <div id="map_canvas" style="height: 350px;width: 500px;margin: 0.6em;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
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
