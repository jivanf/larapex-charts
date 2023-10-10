<?php

namespace ArielMejiaDev\LarapexCharts\Traits;

trait ComplexChartDataAggregator
{
    public function addData(string $name, array $data, string|null $type = null): self
    {
        $dataset = json_decode($this->dataset, true);

        $addedData = [
            'name' => $name,
            'data' => $data,
        ];

        if (!is_null($type)) {
            $addedData['type'] = $type;
        }

        $dataset[] = $addedData;

        $this->dataset = json_encode($dataset);

        return $this;
    }
}
