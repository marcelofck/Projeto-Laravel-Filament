<div class="space-y-6">
    <!-- Cabeçalho com Botão Fechar -->
    <div class="flex justify-between items-start">
        <div class="text-center flex-1">
            <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">
                📺 Globoplay
            </h2>
            <p class="text-gray-600 dark:text-gray-400">
                Como usar o vale presente Globoplay
            </p>
        </div>
        
        <!-- Botão de Fechar no canto direito -->
        <button 
            type="button" 
            onclick="document.querySelectorAll('.fi-modal-window, .fi-modal-overlay').forEach(el => el.remove()); document.body.style.overflow = 'auto';"
            class="inline-flex items-center px-3 py-1 bg-gray-600 hover:bg-gray-700 text-white text-sm font-medium rounded-lg transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 ml-4">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
            Fechar
        </button>
    </div>

    <!-- Instruções -->
    <div class="bg-blue-50 dark:bg-blue-900/20 border border-blue-200 dark:border-blue-800 rounded-lg p-4">
        <h3 class="font-semibold text-blue-800 dark:text-blue-200 mb-3">
            📋 Passo a Passo
        </h3>
        
        <div class="space-y-4">
            <!-- Passo 1 -->
            <div class="flex items-start space-x-3">
                <div class="flex-shrink-0 w-6 h-6 bg-blue-500 text-white rounded-full flex items-center justify-center text-sm font-bold">
                    1
                </div>
                <div>
                    <p class="text-blue-800 dark:text-blue-200 font-medium">Clique no link:</p>
                    <a href="https://especiais.globoplay.globo/panfleto/globo.com-gift-card.html" 
                       target="_blank" 
                       class="text-blue-600 dark:text-blue-300 hover:underline break-all">
                        https://especiais.globoplay.globo/panfleto/globo.com-gift-card.html
                    </a>
                </div>
            </div>

            <!-- Passo 2 -->
            <div class="flex items-start space-x-3">
                <div class="flex-shrink-0 w-6 h-6 bg-blue-500 text-white rounded-full flex items-center justify-center text-sm font-bold">
                    2
                </div>
                <div>
                    <p class="text-blue-800 dark:text-blue-200">
                        <strong>Resgate de acordo com o vale presente adquirido:</strong><br>
                        Plano Globoplay Padrão com anúncios - Resgatar 1 mês
                    </p>
                </div>
            </div>

            <!-- Passo 3 -->
            <div class="flex items-start space-x-3">
                <div class="flex-shrink-0 w-6 h-6 bg-blue-500 text-white rounded-full flex items-center justify-center text-sm font-bold">
                    3
                </div>
                <div>
                    <p class="text-blue-800 dark:text-blue-200">
                        Insira seu e-mail e senha da Conta Globo. Se você não possui uma Conta Globo, clique em "Cadastre-se"
                    </p>
                </div>
            </div>

            <!-- Passo 4 -->
            <div class="flex items-start space-x-3">
                <div class="flex-shrink-0 w-6 h-6 bg-blue-500 text-white rounded-full flex items-center justify-center text-sm font-bold">
                    4
                </div>
                <div>
                    <p class="text-blue-800 dark:text-blue-200">
                        Confirme seus dados
                    </p>
                </div>
            </div>

            <!-- Passo 5 -->
            <div class="flex items-start space-x-3">
                <div class="flex-shrink-0 w-6 h-6 bg-blue-500 text-white rounded-full flex items-center justify-center text-sm font-bold">
                    5
                </div>
                <div>
                    <p class="text-blue-800 dark:text-blue-200">
                        Informe em "Pagamento" o PIN de 16 dígitos
                    </p>
                    <div class="mt-2 p-3 bg-yellow-50 dark:bg-yellow-900/20 border border-yellow-200 dark:border-yellow-800 rounded">
                        <p class="text-yellow-800 dark:text-yellow-200 font-medium">
                            PIN: <span class="bg-yellow-100 dark:bg-yellow-800 px-2 py-1 rounded font-mono">-cole o nº do pin aqui-</span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Passo 6 -->
            <div class="flex items-start space-x-3">
                <div class="flex-shrink-0 w-6 h-6 bg-blue-500 text-white rounded-full flex items-center justify-center text-sm font-bold">
                    6
                </div>
                <div>
                    <p class="text-blue-800 dark:text-blue-200">
                        Leia e aceite o contrato do Globoplay Vale Presente
                    </p>
                </div>
            </div>

            <!-- Passo 7 -->
            <div class="flex items-start space-x-3">
                <div class="flex-shrink-0 w-6 h-6 bg-blue-500 text-white rounded-full flex items-center justify-center text-sm font-bold">
                    7
                </div>
                <div>
                    <p class="text-blue-800 dark:text-blue-200">
                        Clique no botão "Continuar"
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Informações Adicionais -->
    <div class="bg-green-50 dark:bg-green-900/20 border border-green-200 dark:border-green-800 rounded-lg p-4">
        <div class="flex items-start space-x-3">
            <div class="flex-shrink-0">
                <span class="text-green-500">✅</span>
            </div>
            <div>
                <h4 class="font-medium text-green-800 dark:text-green-200">
                    Informações Importantes
                </h4>
                <ul class="mt-2 text-sm text-green-700 dark:text-green-300 space-y-1">
                    <li>• O PIN deve ter exatamente 16 dígitos</li>
                    <li>• Certifique-se de ter uma Conta Globo válida</li>
                    <li>• O vale presente é válido por tempo limitado</li>
                    <li>• Em caso de problemas, entre em contato com o suporte</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Contato de Suporte -->
    <div class="bg-gray-50 dark:bg-gray-700 rounded-lg p-4">
        <div class="flex items-center space-x-3">
            <div class="flex-shrink-0">
                <span class="text-gray-500">📞</span>
            </div>
            <div>
                <h4 class="font-medium text-gray-900 dark:text-white">
                    Precisa de Ajuda?
                </h4>
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    Entre em contato com o suporte da Net Rubi
                </p>
            </div>
        </div>
    </div>
</div> 