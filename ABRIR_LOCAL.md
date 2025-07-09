# 🚀 COMO ABRIR O PROJETO LARAVEL + FILAMENT LOCALMENTE

## 📋 Pré-requisitos

- **PHP 8.2+** instalado
- **Composer** instalado
- **Node.js** (opcional, para assets)

## 🔧 Passos para Configuração

### 1. **Instalar Dependências do Composer**
```bash
composer install
```
> **O que faz:** Instala todas as dependências do Laravel e Filament, incluindo:
> - Laravel Framework 12.0
> - Filament Admin Panel 3.3.30
> - Livewire 3.6.3
> - Todas as bibliotecas necessárias

### 2. **Configurar Arquivo de Ambiente**
```bash
# Se não existir .env, copia do .env.example
if (!(Test-Path .env)) { Copy-Item .env.example .env }
```
> **O que faz:** Cria o arquivo `.env` com as configurações do ambiente local

### 3. **Gerar Chave da Aplicação**
```bash
php artisan key:generate
```
> **O que faz:** Gera a chave de criptografia da aplicação (APP_KEY)

### 4. **Configurar Banco de Dados**
```bash
php artisan migrate
```
> **O que faz:** 
> - Cria o banco SQLite se não existir
> - Executa todas as migrações criando as tabelas:
>   - `users` - Usuários do sistema
>   - `apps` - Aplicações gerenciadas
>   - `roteadors` - Roteadores da rede
>   - `avisos` - Sistema de avisos
>   - `informacaos` - Base de conhecimento
>   - `suportes` - Sistema de tickets

### 5. **Carregar Dados de Exemplo**
```bash
php artisan db:seed
```
> **O que faz:** Executa os seeders criando:
> - Aviso especial sobre feriado (com formatação HTML)
> - Dados de exemplo para testes

### 6. **Criar Usuário Administrador**
```bash
php artisan make:filament-user
```
> **O que faz:** Cria um usuário admin para acessar o painel Filament
> - **Nome:** admin
> - **Email:** admin@admin.com
> - **Senha:** (definida durante a criação)

### 7. **Iniciar o Servidor**
```bash
php artisan serve
```
> **O que faz:** Inicia o servidor de desenvolvimento na porta 8000

## 🌐 URLs de Acesso

- **Página inicial:** http://localhost:8000
- **Painel Filament:** http://localhost:8000/admin

## 🔐 Credenciais de Login

- **Email:** admin@admin.com
- **Senha:** (a que você definiu durante a criação do usuário)

## ✅ Funcionalidades Disponíveis

### 📊 **Dashboard**
- Estatísticas de usuários
- Widget de avisos em destaque
- Visão geral do sistema

### 👥 **Gerenciamento de Usuários**
- Listar, criar, editar e excluir usuários
- Busca por nome e email
- Ordenação por colunas

### 📱 **Gerenciamento de Apps**
- Visualizar e editar aplicações
- **Botão "Globoplay"** - Modal com instruções de resgate do vale presente
- Filtros por status e categoria
- **Sem botão "New App"** - Apenas visualização/edição

### 🌐 **Gerenciamento de Roteadores**
- Gerenciar roteadores da rede
- Campos: Nome, IP, Modelo, Fabricante, Status, Localização, Descrição
- Filtros por status e fabricante

### 📢 **Sistema de Avisos** ⭐ DESTAQUE
- Sistema completo de avisos e notificações
- **Aviso especial configurado:** Feriado com formatação HTML
- Avisos críticos aparecem em vermelho
- Editor rico com suporte a HTML
- Filtros por tipo, prioridade e status

### 📚 **Base de Conhecimento**
- Gerenciar informações e documentação
- Campos: Título, Conteúdo, Categoria, Tipo, Público, Autor, Tags

### 🛠️ **Sistema de Suporte**
- Sistema de tickets de suporte
- Relacionamento com usuários (solicitante e atendente)
- Campos: Título, Descrição, Status, Prioridade, Categoria

### 📖 **Página Fraseologia** ⭐ NOVA
- Documentação de fraseologia para atendimento
- Guias de comunicação com clientes
- Horários de funcionamento
- Contatos importantes

## 🎯 Aviso Especial Configurado

O sistema já inclui um aviso especial sobre o feriado:

**Título:** "Este é o quadro de avisos da Net Rubi - Suporte da semana:"

**Conteúdo:** 
- Quarta-feira (09/06) é feriado
- Votuporanga - Loja fechada
- Suporte 24h
- Suporte externo das 08h às 18h

**Características:**
- ✅ Prioridade: Crítica (aparece em vermelho)
- ✅ Formatação HTML especial
- ✅ Exibição em destaque no Dashboard
- ✅ Ativo e visível

## 🎨 Botão Globoplay

O recurso Apps inclui um botão "Globoplay" que abre um modal com instruções completas:

### 🎯 Instruções Incluídas:
1. **Link direto** para resgate do vale presente
2. **Passo a passo** detalhado (7 etapas)
3. **Informações sobre PIN** de 16 dígitos
4. **Dicas importantes** para o usuário
5. **Contato de suporte** para dúvidas

## 🗄️ Estrutura do Banco de Dados

### 📱 **Roteador**
- **Tabela:** `roteadors`
- **Campos:** nome, ip_address, modelo, fabricante, status, localizacao, descricao

### 📱 **App** ⚙️
- **Tabela:** `apps`
- **Campos:** nome, versao, descricao, status, url, categoria
- **Observação:** Sem funcionalidade de criação (apenas visualização/edição)

### 📱 **Aviso** ⭐
- **Tabela:** `avisos`
- **Campos:** titulo, conteudo, tipo, prioridade, ativo, data_inicio, data_fim
- **Dados de exemplo:** Inclui aviso sobre feriado com formatação especial

### 📱 **Informacao**
- **Tabela:** `informacaos`
- **Campos:** titulo, conteudo, categoria, tipo, publico, autor, tags

### 📱 **Suporte**
- **Tabela:** `suportes`
- **Campos:** titulo, descricao, status, prioridade, categoria, user_id, atendente_id, data_resolucao, solucao

## 🛠️ Comandos Úteis

### Iniciar o Servidor
```bash
php artisan serve
```

### Criar Novo Recurso
```bash
php artisan make:filament-resource NomeDoRecurso
```

### Criar Nova Página
```bash
php artisan make:filament-page NomeDaPagina --panel=admin
```

### Criar Novo Widget
```bash
php artisan make:filament-widget NomeDoWidget --stats-overview
```

### Criar Novo Usuário Admin
```bash
php artisan make:filament-user
```

### Criar Modelo com Migração, Factory e Seeder
```bash
php artisan make:model NomeDoModelo -mfs
```

### Executar Seeders Específicos
```bash
php artisan db:seed --class=AvisoSeeder
```

## 📁 Estrutura de Arquivos

```
app/
├── Filament/
│   ├── Resources/
│   │   ├── UserResource.php          # Gerenciamento de usuários
│   │   ├── RoteadorResource.php      # Gerenciamento de roteadores
│   │   ├── AppResource.php           # Gerenciamento de apps ⚙️
│   │   ├── AvisoResource.php         # Sistema de avisos ⭐
│   │   ├── InformacaoResource.php    # Base de conhecimento
│   │   └── SuporteResource.php       # Sistema de suporte
│   ├── Widgets/
│   │   ├── StatsOverview.php         # Widget de estatísticas
│   │   └── AvisosDestaque.php        # Widget de avisos em destaque ⭐
│   ├── Pages/
│   │   ├── Dashboard.php             # Página do dashboard
│   │   └── Fraseologia.php           # Página de fraseologia ⭐
│   └── Providers/
│       └── Filament/
│           └── AdminPanelProvider.php # Configuração do painel
├── Models/
│   ├── User.php
│   ├── Roteador.php
│   ├── App.php
│   ├── Aviso.php
│   ├── Informacao.php
│   └── Suporte.php
└── resources/
    └── views/
        └── filament/
            ├── pages/
            │   └── fraseologia.blade.php # View da página fraseologia ⭐
            └── modals/
                └── globoplay-instructions.blade.php # Modal do Globoplay ⭐
```

## 🎨 Personalização

### Alterar Tema
Edite `app/Providers/Filament/AdminPanelProvider.php` para personalizar:
- Cores do tema
- Logo
- Nome do painel
- Configurações de autenticação

### Adicionar Novos Recursos
1. Execute: `php artisan make:filament-resource NomeDoModelo`
2. Configure os campos no formulário e tabela
3. Personalize as ações e filtros conforme necessário

### Adicionar Novos Avisos
1. Acesse o painel em http://localhost:8000/admin
2. Vá para "Avisos" no menu lateral
3. Clique em "Criar Aviso"
4. Use o editor rico para formatação HTML
5. Defina a prioridade (Crítica = vermelho, Alta = laranja)

### Personalizar Fraseologia
1. Edite o arquivo `resources/views/filament/pages/fraseologia.blade.php`
2. Adicione ou modifique as seções conforme necessário
3. Mantenha o layout responsivo e organizado

### Personalizar Modal Globoplay
1. Edite o arquivo `resources/views/filament/modals/globoplay-instructions.blade.php`
2. Modifique as instruções conforme necessário
3. Atualize links ou informações de contato

## 🔧 Configuração do Banco de Dados

- **Tipo:** SQLite
- **Arquivo:** `database/database.sqlite`
- **Migrações:** Executadas com todos os modelos
- **Seeders:** AvisoSeeder executado com dados de exemplo

## 📝 Próximos Passos

1. Acesse o painel em http://localhost:8000/admin
2. Faça login com suas credenciais
3. Veja o aviso especial no Dashboard
4. Explore a página "Fraseologia" no menu lateral
5. Vá para "Apps" e teste o botão "Globoplay"
6. Verifique que o recurso "Apps" não tem botão de criação
7. Explore todos os recursos criados
8. Adicione novos avisos conforme necessário
9. Personalize a fraseologia conforme suas necessidades

## 🆘 Suporte

Para mais informações sobre o Filament, consulte:
- [Documentação Oficial](https://filamentphp.com/docs)
- [GitHub do Filament](https://github.com/filamentphp/filament)

## 🎉 Status do Projeto

✅ **Projeto totalmente funcional!**
- Laravel 12.0 + Filament 3.3.30
- Todas as funcionalidades implementadas
- Banco de dados configurado
- Dados de exemplo carregados
- Usuário admin criado
- Servidor rodando

**Acesse agora:** http://localhost:8000/admin 