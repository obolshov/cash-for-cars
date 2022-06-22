<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cash For Cars</title>

    <meta name="description" content="CashForCars is the safe, easy and cost effective alternative to selling your car to a dealer or through private advertisement. We guarantee to buy your car whatever the make, age, model or condition. No hassle, no time wasters, no bouncing cheques and no fees. Sell your car in Belfast today!

              We operate from premises in the Belfast area and will buy cars throughout Northern Ireland.">

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <div id="app">
      <v-app>
        <navbar></navbar>
        <quick-start></quick-start>
        <short-description></short-description>
        <how-it-works></how-it-works>
        <main-description></main-description>
        <footer-section></footer-section>
      </v-app>
    </div>
  </body>
  <script src="{{ mix('js/app.js') }}"></script>
</html>
