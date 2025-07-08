# Filament Admin Panel

Este projeto Laravel está configurado com o Filament Admin Panel.

## 🚀 Como Acessar

1. **URL do Painel**: http://localhost:8000/admin
2. **Credenciais de Login**:
   - Email: marcelo_hmg@hotmail.com
   - Senha: (a que você definiu durante a instalação)

## 📋 Funcionalidades Configuradas

### ✅ Recurso de Usuários
- **Localização**: `app/Filament/Resources/UserResource.php`
- **Funcionalidades**:
  - Listar todos os usuários
  - Criar novos usuários
  - Editar usuários existentes
  - Excluir usuários
  - Busca por nome e email
  - Ordenação por colunas

### ✅ Recurso de Roteadores
- **Localização**: `app/Filament/Resources/RoteadorResource.php`
- **Funcionalidades**:
  - Gerenciar roteadores da rede
  - Campos: Nome, IP, Modelo, Fabricante, Status, Localização, Descrição
  - Filtros por status e fabricante
  - Busca e ordenação

### ✅ Recurso de Apps ⚙️
- **Localização**: `app/Filament/Resources/AppResource.php`
- **Funcionalidades**:
  - Gerenciar aplicações
  - Campos: Nome, Versão, Descrição, Status, URL, Categoria
  - **Sem botão "New App"**: Apenas visualização e edição
  - **Botão "Globoplay"**: Modal com instruções de uso do vale presente
  - Filtros por status e categoria
  - Busca e ordenação

### ✅ Recurso de Avisos ⭐ DESTAQUE
- **Localização**: `app/Filament/Resources/AvisoResource.php`
- **Funcionalidades**:
  - Sistema de avisos e notificações
  - Campos: Título, Conteúdo, Tipo, Prioridade, Ativo, Datas
  - **Destaque especial**: Avisos críticos aparecem em vermelho
  - **Widget no Dashboard**: Avisos em destaque são exibidos na página inicial
  - **Editor rico**: Suporte a HTML para formatação avançada
  - **Filtros**: Por tipo, prioridade e status ativo

### ✅ Recurso de Informações
- **Localização**: `app/Filament/Resources/InformacaoResource.php`
- **Funcionalidades**:
  - Base de conhecimento
  - Campos: Título, Conteúdo, Categoria, Tipo, Público, Autor, Tags

### ✅ Recurso de Suporte
- **Localização**: `app/Filament/Resources/SuporteResource.php`
- **Funcionalidades**:
  - Sistema de tickets de suporte
  - Campos: Título, Descrição, Status, Prioridade, Categoria
  - Relacionamento com usuários (solicitante e atendente)

### 📚 Página Fraseologia ⭐ NOVA
- **Localização**: `app/Filament/Pages/Fraseologia.php`
- **View**: `resources/views/filament/pages/fraseologia.blade.php`
- **Funcionalidades**:
  - Documentação de fraseologia para atendimento
  - Guias de comunicação com clientes
  - Horários de funcionamento
  - Contatos importantes
  - Layout responsivo e organizado

### 📊 Widgets

#### 📈 Widget de Estatísticas
- **Localização**: `app/Filament/Widgets/StatsOverview.php`
- **Mostra**:
  - Total de usuários
  - Usuários criados hoje
  - Usuários criados este mês

#### 📢 Widget de Avisos em Destaque
- **Localização**: `app/Filament/Widgets/AvisosDestaque.php`
- **Mostra**:
  - Avisos críticos e de alta prioridade
  - Exibição em destaque no Dashboard
  - Formatação especial para avisos importantes

## 🗄️ Modelos Criados

### 📱 Roteador
- **Tabela**: `roteadors`
- **Campos**: nome, ip_address, modelo, fabricante, status, localizacao, descricao

### 📱 App ⚙️
- **Tabela**: `apps`
- **Campos**: nome, versao, descricao, status, url, categoria
- **Observação**: Sem funcionalidade de criação (apenas visualização/edição)
- **Botão Globoplay**: Modal com instruções de resgate do vale presente

### 📱 Aviso ⭐
- **Tabela**: `avisos`
- **Campos**: titulo, conteudo, tipo, prioridade, ativo, data_inicio, data_fim
- **Dados de exemplo**: Inclui aviso sobre feriado com formatação especial

### 📱 Informacao
- **Tabela**: `informacaos`
- **Campos**: titulo, conteudo, categoria, tipo, publico, autor, tags

### 📱 Suporte
- **Tabela**: `suportes`
- **Campos**: titulo, descricao, status, prioridade, categoria, user_id, atendente_id, data_resolucao, solucao

## 🎯 Aviso Especial Configurado

O sistema já inclui um aviso especial sobre o feriado:

**Título**: "Este é o quadro de avisos da Net Rubi - Suporte da semana:"

**Conteúdo**: 
- Quarta-feira (09/06) é feriado
- Votuporanga - Loja fechada
- Suporte 24h
- Suporte externo das 08h às 18h

**Características**:
- ✅ Prioridade: Crítica (aparece em vermelho)
- ✅ Formatação HTML especial
- ✅ Exibição em destaque no Dashboard
- ✅ Ativo e visível

## 📺 Botão Globoplay

O recurso Apps inclui um botão "Globoplay" que abre um modal com instruções completas:

### 🎯 Instruções Incluídas:
1. **Link direto** para resgate do vale presente
2. **Passo a passo** detalhado (7 etapas)
3. **Informações sobre PIN** de 16 dígitos
4. **Dicas importantes** para o usuário
5. **Contato de suporte** para dúvidas

### 🎨 Características do Modal:
- **Design responsivo** e organizado
- **Cores temáticas** para cada seção
- **Link clicável** para o site do Globoplay
- **Destaque especial** para o campo PIN
- **Informações de segurança** e validação

## 📚 Página Fraseologia

A página Fraseologia inclui:

### 🎯 Fraseologia Básica
- Saudação padrão
- Identificação do cliente
- Transferência de chamadas

### 🔧 Fraseologia Técnica
- Problemas de conexão
- Manutenções programadas
- Escalação de casos

### 🕒 Horários de Funcionamento
- Loja Votuporanga
- Suporte 24h
- Suporte externo

### 📞 Contatos Importantes
- WhatsApp Suporte
- E-mail de contato

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

- **Tipo**: SQLite
- **Arquivo**: `database/database.sqlite`
- **Migrações**: Executadas com todos os modelos
- **Seeders**: AvisoSeeder executado com dados de exemplo

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