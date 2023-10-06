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
    if (options.tooltip?.x?.formatter) {
        options.tooltip.x.formatter = Function('val', 'opt', options.tooltip.x.formatter);
    }
    if (options.tooltip?.y?.formatter) {
        options.tooltip.y.formatter = Function('val', 'opt', options.tooltip.y.formatter);
    }
    var chart = new ApexCharts(document.querySelector("#{!! $chart->id() !!}"), options);

    chart.render();
</script>
