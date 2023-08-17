<script>
    var options = @json($chart->getOptions());

    // TODO: Handle other callbacks
    if (options.dataLabels.formatter) {
        options.dataLabels.formatter = Function('val', 'opt', options.dataLabels.formatter);
    }
    var chart = new ApexCharts(document.querySelector("#{!! $chart->id() !!}"), options);

    chart.render();
</script>
