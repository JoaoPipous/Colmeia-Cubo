# Especificação Suplementar </br> PROJETO DA COLMEIA CUBO </br> Versão 1.1

## Histórico da Revisão

| Data       | Versão | Descrição                | Autor                  |
|------------|--------|--------------------------|------------------------|
| 03/04/2024 | 1.0    | Criação do documento     | João Vitor Deliberador |
| 08/11/2024 | 1.1    | Atualização do documento | João Vitor Deliberador |

## Índice

- [Especificação Suplementar  PROJETO DA COLMEIA CUBO  Versão 1.1](#especificação-suplementar--projeto-da-colmeia-cubo--versão-11)
  - [Histórico da Revisão](#histórico-da-revisão)
  - [Índice](#índice)
  - [Introdução](#introdução)
    - [Objetivo](#objetivo)
    - [Escopo](#escopo)
    - [Definições, Acrônimos e Abreviações](#definições-acrônimos-e-abreviações)
    - [Referências](#referências)
    - [Visão Geral](#visão-geral)
  - [Funcionalidade](#funcionalidade)
  - [Utilidade](#utilidade)
    - [Treinamento](#treinamento)
  - [Confiabilidade](#confiabilidade)
    - [Disponibilidade](#disponibilidade)
    - [Exatidão](#exatidão)
    - [Taxa de Erros ou Defeitos](#taxa-de-erros-ou-defeitos)
  - [Desempenho](#desempenho)
    - [Capacidade](#capacidade)
  - [Suportabilidade](#suportabilidade)
    - [Padrão de Codificação](#padrão-de-codificação)
  - [Restrições de Design](#restrições-de-design)
    - [Logo e Cores](#logo-e-cores)
    - [Linguagem de Programação](#linguagem-de-programação)
  - [Documentação do Usuário On-line e Requisitos do Sistema de Ajuda](#documentação-do-usuário-on-line-e-requisitos-do-sistema-de-ajuda)
  - [Componentes Comprados](#componentes-comprados)
  - [Interfaces](#interfaces)
    - [Interfaces de Hardware](#interfaces-de-hardware)
    - [Interfaces de Software](#interfaces-de-software)
    - [Interfaces de Comunicações](#interfaces-de-comunicações)
  - [Requisitos de Licença](#requisitos-de-licença)
  - [Observações Legais, sobre Direitos Autorais e Outras Observações](#observações-legais-sobre-direitos-autorais-e-outras-observações)
  - [Padrões Aplicáveis](#padrões-aplicáveis)

## Introdução

O documento de Especificação Suplementar é responsável por capturar os requisitos do sistema que não são prontamente capturados nos casos de uso do modelo de caso de uso. Entre os requisitos estão incluídos:

- Requisitos legais e de regulamentação, incluindo padrões de aplicativos.
- Atributos de qualidade do sistema a ser criado, incluindo requisitos de utilidade, confiabilidade, desempenho e suportabilidade.
- Outros requisitos como sistemas e ambientes operacionais, requisitos de compatibilidade e restrições de design.

### Objetivo

Esta especificação suplementar visa complementar o modelo de caso de uso, capturando todos os requisitos de software necessários para a construção do sistema.

### Escopo

Esse documento engloba os requisitos de todo o sistema que será desenvolvido para o projeto Colmeia CUBO.

### Definições, Acrônimos e Abreviações

Consultar o [glossário](glossario.md).

### Referências

- [Colmeia CUBO](https://unifil.br/cubo/?gad_source=1&gclid=CjwKCAjwwr6wBhBcEiwAfMEQs4mK5Gn8KfnDKVVKQ3hREByNX-xMn-cLw11YgXeQgpXMniL1ehGcpRoC6LgQAvD_BwE)
- [Yggdrasil2](https://akafts.github.io/yggdrasil2/) como sistema semelhante.
- [Documentação Laravel](https://laravel.com/)
- [Documentação Livewire](https://laravel-livewire.com/docs/2.x/quickstart)
- [Documentação Tailwind](https://tailwindcss.com/docs)
- [Honeycomb Design](https://abbekeultjes.nl/honeycomb/)

### Visão Geral

As sessões a seguir abordam os requisitos cruciais do sistema, fornecendo detalhes que não foram completamente descritos apenas pelos diagramas. Incluem funcionalidades essenciais, utilidade para os usuários, garantia de confiabilidade, otimização de desempenho, suporte contínuo, restrições de design, documentação online para usuários, requisitos de assistência do sistema, componentes adquiridos, interfaces, exigências de licenciamento, considerações legais e observações sobre padrões aplicáveis.

## Funcionalidade

Os requisitos funcionais do projeto estão disponíveis no [diagrama de caso de uso](caso_de_uso.md).

## Utilidade

### Treinamento

O sistema requer baixo nível de treinamento para o usuário administrativo.

## Confiabilidade

### Disponibilidade

O sistema precisa estar disponível 24/7, permitindo acesso contínuo a alunos, professores e coordenadores.

### Exatidão

A estrutura da Colmeia deve garantir que somente as disciplinas pertinentes estejam associadas à área de conhecimento específica do curso selecionado.

### Taxa de Erros ou Defeitos

- Erro crítico: Perda de informações curriculares, especialmente durante atualizações de dados.

## Desempenho

### Capacidade

O sistema deve ter a capacidade de armazenar grandes volumes de dados curriculares, permitindo que múltiplos usuários realizem consultas e atualizações simultâneas sem degradação de desempenho.

## Suportabilidade

### Padrão de Codificação

- **PHP**:
  - PSR-1 e PSR-2: Para estilo de codificação e padrões de nomenclatura.
  - PSR-4: Para autoloading de classes seguindo o modelo MVC do Laravel.
- **JavaScript**:
  - Airbnb Style Guide: Para convenções de código, incluindo sintaxe e boas práticas.
  - ESLint: Para garantir a qualidade do código e conformidade com o estilo.
- **TypeScript**:
  - Microsoft TypeScript Guidelines: Para práticas recomendadas e estilo de codificação.
  - Prettier: Para formatação automática do código.

## Restrições de Design

### Logo e Cores

O sistema deve seguir o padrão de cores e estilo visual definidos pela UniFil, mantendo a identidade visual atual da Colmeia CUBO.

### Linguagem de Programação

O sistema será desenvolvido utilizando [JavaScript](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript) e [Laravel](https://laravel.com/) com [Livewire](https://laravel-livewire.com/) no backend, e [Tailwind CSS](https://tailwindcss.com/) no frontend.

## Documentação do Usuário On-line e Requisitos do Sistema de Ajuda

Toda a documentação do projeto será disponibilizada online, com guias de uso acessíveis para todos os usuários.

## Componentes Comprados

Não se aplica.

## Interfaces

### Interfaces de Hardware

Não se aplica.

### Interfaces de Software

Não se aplica.

### Interfaces de Comunicações

Não se aplica.

## Requisitos de Licença

O sistema seguirá os protocolos de licenciamento estabelecidos pela UniFil.

## Observações Legais, sobre Direitos Autorais e Outras Observações

O sistema seguirá as observações legais conforme os padrões institucionais da UniFil.

## Padrões Aplicáveis

Não se aplica.

[Voltar](readme.md)
