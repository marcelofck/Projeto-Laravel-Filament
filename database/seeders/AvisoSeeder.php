<?php

namespace Database\Seeders;

use App\Models\Aviso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AvisoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Aviso::create([
            'titulo' => 'Este é o quadro de avisos da Net Rubi - Suporte da semana:',
            'conteudo' => '<div style="background-color: #fee2e2; border: 2px solid #dc2626; padding: 15px; border-radius: 8px; color: #dc2626; font-weight: bold;">
                <h3 style="color: #dc2626; margin-bottom: 10px;">⚠️ AVISO IMPORTANTE ⚠️</h3>
                <p><strong>Quarta-feira (09/06) é feriado</strong></p>
                <p><strong>Verifique os horários de funcionamento:</strong></p>
                <ul style="margin: 10px 0; padding-left: 20px;">
                    <li><strong>Votuporanga - Loja fechada</strong></li>
                    <li><strong>Suporte 24h</strong></li>
                    <li><strong>Suporte externo das 08h às 18h</strong></li>
                </ul>
                <p style="margin-top: 10px; font-size: 14px;">Planeje suas atividades considerando estes horários.</p>
            </div>',
            'tipo' => 'aviso',
            'prioridade' => 'critica',
            'ativo' => true,
            'data_inicio' => now(),
            'data_fim' => now()->addDays(7),
        ]);

        // Adicionar alguns avisos de exemplo
        Aviso::create([
            'titulo' => 'Manutenção Programada - Rede Principal',
            'conteudo' => 'Será realizada uma manutenção na rede principal no próximo domingo das 02h às 06h. Durante este período pode haver interrupções no serviço.',
            'tipo' => 'info',
            'prioridade' => 'media',
            'ativo' => true,
            'data_inicio' => now(),
            'data_fim' => now()->addDays(3),
        ]);

        Aviso::create([
            'titulo' => 'Atualização de Sistema Concluída',
            'conteudo' => 'A atualização do sistema foi concluída com sucesso. Todos os serviços estão funcionando normalmente.',
            'tipo' => 'sucesso',
            'prioridade' => 'baixa',
            'ativo' => true,
            'data_inicio' => now(),
            'data_fim' => now()->addDays(2),
        ]);
    }
}
