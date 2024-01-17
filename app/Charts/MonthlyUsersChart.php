<?php
namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use ArielMejiaDev\LarapexCharts\AreaChart;
use Illuminate\Support\Facades\DB;
use \app\Models\Donation;

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

        $donations = Donation::select(
            DB::raw('SUM(valor) as sums'),
            DB::raw('DATE_FORMAT(created_at, "%Y %m") as months')
        )
            ->orderBy('months')
            ->groupBy('months')
            ->get();

            $donationData = $donations->pluck('sums')->toArray(); // Extrai os valores da coluna 'sums'
            $months = $donations->pluck('months')->toArray(); // Extrai os valores da coluna 'months'

            return $areaChart
            ->setTitle('Total de doações mensais')
            ->addData('Doações mensais', $donationData)
            ->setXAxis($months)
            ->setColors(['#ffc63b', '#ff6384']);
    }
}


