@section('title', __('Home'))


<div>
    {{ __('You are logged in!') }}
</div>
<div>
    <h1>Chart</h1>
    <p> chart is a graphical representation for data visualization, in which "the data is represented by symbols, such as bars in a bar chart, lines in a line chart, or slices in a pie chart". A chart can represent tabular numeric data, functions or some kinds of quality structure and provides different info.</p>
  <!-- Chart's container -->
  
  <div id="chart" style="height: 300px;"></div>
  
  <!-- Charting library -->
  <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
  <!-- Chartisan -->

<script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
  <!-- Your application script -->
  <script>
    const chart = new Chartisan({
      el: '#chart',
      url: "@chart('dish_chart')",
    });
  </script>
</div>
