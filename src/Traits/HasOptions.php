<?php

namespace ArielMejiaDev\LarapexCharts\Traits;

trait HasOptions
{
    protected array $options;

    public function getOptions(): array
    {
        return $this->options ? array_replace_recursive($this->toArray(), $this->options) : $this->toArray();
    }

    public function setOptions($options): self
    {
        $this->options = $options;

        return $this;
    }

    public function mergeOptions($options): self
    {
        $this->options = array_replace_recursive($this->options, $options);

        return $this;
    }
}
