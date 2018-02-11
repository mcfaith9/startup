<style>
  .container-fluid {
      padding-right: 66%;
      margin-right: auto;
      margin-left: 10px;
      margin-top: 30%;
  }
  .well {
      min-height: 20px;
      padding: 19px;
      margin-bottom: 20px;
      background-color: #f5f5f5;
      border: 1px solid #e3e3e3;
      border-radius: 4px;
      -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
      box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
  }
  .form-control {
    display: block;
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    margin: 10px 0;
}
.btnMap-primary {
    color: #fff;
    background-color: #428bca;
    border-color: #357ebd;
}
.btnMap-default {
    color: #333;
    background-color: #fff;
    border-color: #ccc;
}
.btnMap {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: 400;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
}
.alert-info {
    color: #31708f;
    background-color: #d9edf7;
    border-color: #bce8f1;
}
.alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
}
label {
    display: inline-block;
    max-width: 50%;
    margin-bottom: 5px;
    font-weight: 700;
}
select{
    margin-bottom: 10px;
}

</style>

<div class="map">
  <div class='container-fluid'>
        <div class='well'>
          <h4>
            Address <small>(<a id='find_me' href='#'>find me</a>)</small>
          </h4>
          <p>
            <input class='form-control' id='search_address' placeholder='Enter an address or an intersection' type='text' />
          </p>
          <p>
            <label>
              within
              <select id='search_radius'>
                <option value='400'>2 blocks</option>
                <option value='805'>1/2 mile</option>
                <option value='1610'>1 mile</option>
                <option value='3220'>2 miles</option>
              </select>
            </label>
          </p>
          <a class='btnMap btnMap-primary' id='search' href='#'>
            <i class='glyphicon glyphicon-search'></i>
            Search
          </a>
          <a class='btnMap btnMap-default' id='reset' href='#'>
            <i class='glyphicon glyphicon-repeat'></i>
            Reset
          </a>
        </div>
        <div class='alert alert-info' id='result_box' ><strong id='result_count'></strong></div>
      </div>
        <noscript>
          <div class='alert alert-info'>
            <h4>Your JavaScript is disabled</h4>
            <p>Please enable JavaScript to view the map.</p>
          </div>
        </noscript>
        <div id="map_canvas" style="height: 595px;"></div>
      </div>


<script type="text/javascript" src="https://maps.google.com/maps/api/js?libraries=places&key=AIzaSyAiHstsybXa9hm7q5ZMVrelSkbRF7pfzz8&callback=initMap"></script>

    
<script>
//<![CDATA[
  $(window).resize(function () {
    var h = $(window).height(),
      offsetTop = 105; // Calculate the top offset
  
    $('#map_canvas').css('height', (h - offsetTop));
  }).resize();
  
  $(function() {
    var myMap = new MapsLib({
      fusionTableId:      "1m4Ez9xyTGfY2CU6O-UgEcPzlS0rnzLU93e4Faa0",
      googleApiKey:       "AIzaSyA3FQFrNr5W2OEVmuENqhb2MBB2JabdaOY",
      locationColumn:     "geometry",
      map_center:         [41.8781136, -87.66677856445312], //lang, lat
      locationScope:      "chicago"
    });

    var autocomplete = new google.maps.places.Autocomplete(document.getElementById('search_address'));

    $(':checkbox').click(function(){
      myMap.doSearch();
    });

    $(':radio').click(function(){
      myMap.doSearch();
    });
    
    $('#search_radius').change(function(){
      myMap.doSearch();
    });
    
    $('#search').click(function(){
      myMap.doSearch();
    });
    
    $('#find_me').click(function(){
      myMap.findMe(); 
      return false;
    });
    
    $('#reset').click(function(){
      myMap.reset(); 
      return false;
    });
    
    $(":text").keydown(function(e){
        var key =  e.keyCode ? e.keyCode : e.which;
        if(key === 13) {
            $('#search').click();
            return false;
        }
    });
  });
//]]>
function initMap() {
        // Styles a map in night mode.
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 40.674, lng: -73.945},
          zoom: 12,
          styles: [
            {elementType: 'geometry', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.stroke', stylers: [{color: '#242f3e'}]},
            {elementType: 'labels.text.fill', stylers: [{color: '#746855'}]},
            {
              featureType: 'administrative.locality',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'geometry',
              stylers: [{color: '#263c3f'}]
            },
            {
              featureType: 'poi.park',
              elementType: 'labels.text.fill',
              stylers: [{color: '#6b9a76'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry',
              stylers: [{color: '#38414e'}]
            },
            {
              featureType: 'road',
              elementType: 'geometry.stroke',
              stylers: [{color: '#212a37'}]
            },
            {
              featureType: 'road',
              elementType: 'labels.text.fill',
              stylers: [{color: '#9ca5b3'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry',
              stylers: [{color: '#746855'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'geometry.stroke',
              stylers: [{color: '#1f2835'}]
            },
            {
              featureType: 'road.highway',
              elementType: 'labels.text.fill',
              stylers: [{color: '#f3d19c'}]
            },
            {
              featureType: 'transit',
              elementType: 'geometry',
              stylers: [{color: '#2f3948'}]
            },
            {
              featureType: 'transit.station',
              elementType: 'labels.text.fill',
              stylers: [{color: '#d59563'}]
            },
            {
              featureType: 'water',
              elementType: 'geometry',
              stylers: [{color: '#17263c'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.fill',
              stylers: [{color: '#515c6d'}]
            },
            {
              featureType: 'water',
              elementType: 'labels.text.stroke',
              stylers: [{color: '#17263c'}]
            }
          ]
        });
      }
</script>