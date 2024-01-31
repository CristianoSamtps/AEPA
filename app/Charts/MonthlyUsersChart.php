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
        //
        $donations = Donation::select(
            //Faz a soma dos valores das doações
            DB::raw('SUM(valor) as sums'),
            //Formata a coluna created_at para aparecer apenas o ano e o mês
            DB::raw('DATE_FORMAT(created_at, "%Y %m") as months')
        )
            ->orderBy('months') //Ordenar por meses
            ->groupBy('months') //Agrupar por meses
            ->get();

        $donationData = $donations->pluck('sums')->toArray(); // Extrai os valores da coluna 'sums'
        $months = $donations->pluck('months')->toArray(); // Extrai os valores da coluna 'months'

        return $areaChart
            ->setTitle('Total de doações mensais')//Define o título
            ->addData('Doações mensais', $donationData) //Adiciona a informação á tabela
            ->setXAxis($months) //Definir o eixo do gráfico da horizontal
            ->setColors(['#ffc63b', '#ff6384']); //Define as cores do gráfico
    }   
}


