<?php defined('SECURE_ACCESS') or die('Direct access not allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Global Network Map</title>

  <!-- FontAwesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <style>
  

    #chartdiv {
      width: 100%;
      height: 50vh;
      position: relative;
      z-index: 1;
    }

    .swiper, .slider-container {
      z-index: 2;
      position: relative;
    }

    .amcharts-map-image {
      cursor: pointer;
    }
  </style>
</head>

<body>

  <div id="chartdiv"></div>

  <!-- AmCharts -->
  <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/maps.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/geodata/worldLow.js"></script>
  <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>

  <script>
    am4core.ready(function() {

      am4core.useTheme(am4themes_animated);

      var chart = am4core.create("chartdiv", am4maps.MapChart);
      chart.geodata = am4geodata_worldLow;
      chart.projection = new am4maps.projections.Miller();
      chart.background.fill = am4core.color("#000");

      chart.homeGeoPoint = { latitude: 22.0, longitude: 78.0 };
      chart.homeZoomLevel = 4.5;

      // World map colors
      var polygonSeries = chart.series.push(new am4maps.MapPolygonSeries());
      polygonSeries.useGeodata = true;
      polygonSeries.mapPolygons.template.fill = am4core.color("#222");
      polygonSeries.mapPolygons.template.stroke = am4core.color("#444");

      // Locations
      var locations = [
        { lat: 23.05, lon: 70.21, title: "Kandla" },
        { lat: 22.97, lon: 69.7, title: "Mundra" },
        { lat: 21.1, lon: 72.7, title: "Hazira" },
        { lat: 18.95, lon: 72.95, title: "Nhava Sheva" },
        { lat: 28.6139, lon: 77.2090, title: "Delhi" },
        { lat: 30.9, lon: 75.85, title: "Ludhiana" },
        { lat: 40.0, lon: -100.0, title: "USA" },
        { lat: -10.0, lon: -55.0, title: "South America" },
        { lat: 50.0, lon: 10.0, title: "Europe" },
        { lat: 0.0, lon: 20.0, title: "Africa" }
      ];

      // Green dots
      var imageSeries = chart.series.push(new am4maps.MapImageSeries());
      var imageTemplate = imageSeries.mapImages.template;
      imageTemplate.propertyFields.latitude = "lat";
      imageTemplate.propertyFields.longitude = "lon";
      imageTemplate.tooltipText = "{title}";

      var circle = imageTemplate.createChild(am4core.Circle);
      circle.radius = 3;
      circle.fill = am4core.color("#00ff99");
      circle.stroke = am4core.color("#fff");
      circle.strokeWidth = 1;

      imageSeries.data = locations;

      // Green line connections
      var lineSeries = chart.series.push(new am4maps.MapLineSeries());
      lineSeries.mapLines.template.stroke = am4core.color("#00ff99");
      lineSeries.mapLines.template.strokeWidth = 2;
      lineSeries.mapLines.template.strokeOpacity = 0.6;
      lineSeries.mapLines.template.strokeDasharray = "4,4";

      for (let i = 0; i < locations.length - 1; i++) {
        lineSeries.data.push({
          "multiGeoLine": [
            [
              { latitude: locations[i].lat, longitude: locations[i].lon },
              { latitude: locations[i + 1].lat, longitude: locations[i + 1].lon }
            ]
          ]
        });
      }

    });
  </script>

</body>
</html>
