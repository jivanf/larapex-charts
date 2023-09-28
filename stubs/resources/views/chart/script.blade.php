<script>
    var options = @json($chart->getOptions());

    // TODO: Automatically handle callbacks
    if (options.dataLabels?.formatter) {
        options.dataLabels.formatter = Function('val', 'opt', options.dataLabels.formatter);
    }
    if (options.xaxis?.labels?.formatter) {
        options.xaxis.labels.formatter = Function('val', 'opt', options.xaxis.labels.formatter);
    }
    if (options.yaxis?.labels?.formatter) {
        options.yaxis.labels.formatter = Function('val', 'opt', options.yaxis.labels.formatter);
    }
    var chart = new ApexCharts(document.querySelector("#{!! $chart->id() !!}"), options);

    chart.render();
</script>
