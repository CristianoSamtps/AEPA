<?php
namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use ArielMejiaDev\LarapexCharts\AreaChart;

class MonthlyUsersChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): AreaChart
    {
        $areaChart = new AreaChart();

        return $areaChart
            ->setTitle('Utilizadores mensais')
            ->addData('Utilizadores ativos', \App\Models\User::query()->inRandomOrder()->limit(6)->pluck('id')->toArray())
            ->addData('Inactive users', \App\Models\User::query()->inRandomOrder()->limit(6)->pluck('id')->toArray())
            ->setXAxis(['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'])
            ->setColors(['#ffc63b', '#ff6384']);
    }
}


