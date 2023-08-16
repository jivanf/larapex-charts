<script>
    var options = @json($chart->getOptions());
    var chart = new ApexCharts(document.querySelector("#{!! $chart->id() !!}"), options);

    chart.render();
</script>
