<?php

namespace ArielMejiaDev\LarapexCharts\Traits;

trait ComplexChartDataAggregator
{
    public function addData(string $name, array $data, string|null $type = null, array $goals = []): self
    {
        $defaultGoalOptions = [
            ...$this->horizontal ? ['strokeWidth' => 5] : ['strokeHeight' => 5],
            'strokeColor' => '#775DD0',
        ];

        $dataset = json_decode($this->dataset, true);

        foreach ($goals as $goal) {
            foreach ($defaultGoalOptions as $key => $value) {
                $goal[$key] ??= $value;
            }
        };

        $addedData = [
            'name' => $name,
            'data' => collect($this->xAxis())
                ->zip($data, $goals)
                ->map(
                    fn($item) => [
                        'x' => $item[0],
                        'y' => $item[1],
                        ...$item[2] !== null ? ['goals' => [$item[2]]] : [],
                    ],
                )
                ->toArray(),
        ];

        if ($type !== null) {
            $addedData['type'] = $type;
        }

        $dataset[] = $addedData;

        $this->dataset = json_encode($dataset);

        return $this;
    }
}
