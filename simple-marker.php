<style>
.map_container {
  position:relative;
  display: inline-block;
}
.map_container img {
  display: block;
  max-width: 100%;
  height: auto;
}
.map-marker {
    position: absolute;
    font-size: 20px;
    text-shadow: 1px 1px 1px #000;
    text-decoration:none;
  }
  .map-marker span {
    position:relative;
    color:#fff;
  }
  .map-marker:before {
    content: "\f111";
    font-family: 'FontAwesome';
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
  }
  #one {
    top: 17%;
    left: 4%;
  }

  #two {
    top: 12%;
    left: 34%;
  }
 </style>
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" />
<div class="map_container">
  <img src="http://geology.com/world/world-map-clickable.gif" />
  <a href="#" id="one" class="map-marker">
    <span aria-hidden="true">1</span>
  </a>
  <a href="#" id="two" class="map-marker">
    <span aria-hidden="true">2</span>
  </a>
</div>