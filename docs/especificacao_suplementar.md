# Especificação Suplementar </br> Projeto de Análises Clínicas </br> Versão 1.0

## Histórico da Revisão

| Data | Versão | Descrição | Autor |
| ---- | ------ | --------- | ----- |
| 03/04/2024 | 1.0 | Criação do documento | João Vitor Deliberador  

| Data | Versão | Descrição | Autor |
| ---- | ------ | --------- | ----- |
| 05/04/2024 | 1.0 | Finalizando documento | João Vitor Deliberador  


## Índice

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
    - [Liguagem de Programação](#liguagem-de-programação)
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

- Outros requisitos como sistemas e ambientes operacionais, requisitos de
compatibilidade e restrições de design.

### Objetivo

Esta especificação suplementar visa complementar o modelo caso de uso, juntos capturam todos os requisitos de software que precisam ser descritos.

### Escopo

Esse documento engloba os requisitos de todo o sistema que será feito.

### Definições, Acrônimos e Abreviações

Consultar o [glossário](glossario.md).

### Referências

Referências sobre como funciona o sistema na [Colmeia Cubo](https://unifil.br/cubo/?gad_source=1&gclid=CjwKCAjwwr6wBhBcEiwAfMEQs4mK5Gn8KfnDKVVKQ3hREByNX-xMn-cLw11YgXeQgpXMniL1ehGcpRoC6LgQAvD_BwE)

[Yggdrasil2](https://akafts.github.io/yggdrasil2/) é um sistema parecido onde estao sendo tirados referências


### Visão Geral

As sessões a seguir abordam os requisitos cruciais do sistema, fornecendo detalhes que não foram completamente discerníveis apenas pelos diagramas. Incluem funcionalidades essenciais, utilidade para os usuários, garantia de confiabilidade, otimização de desempenho, suporte contínuo, restrições de design, documentação online para usuários, requisitos de assistência do sistema, componentes adquiridos, interfaces, exigências de licenciamento, considerações legais e observações sobre padrões aplicáveis.

## Funcionalidade

Os requisitos funcionais do projeto estão disponíveis no [diagrama de caso de uso](caso_de_uso.md)

## Utilidade

### Treinamento

Requer pouco nivel de treinamento para o usuario administrativo 

## Confiabilidade

### Disponibilidade

O sistema precisa estar disponivel 24/7.

### Exatidão

Colmeia gerada não pode ter disciplinas que nao fazem parte da area de conhecimento do Cursos

### Taxa de Erros ou Defeitos

- Erro crítico: Perda de informações. 

## Desempenho

### Capacidade

O sistema precisa ter a capacidade de armazenar uma grande quantidade de informações e dados(COLMEIA) dos usuários e ter a capacidade de permitir atualizacoes downloads de vários usuários utilizando o sistema ao mesmo tempo.


## Suportabilidade

### Padrão de Codificação

- PHP:
PSR-1 e PSR-2: Para estilo de codificação e padrões de nomenclatura.
PSR-4: Para autoloading de classes seguindo o modelo MVC do Laravel.
- JavaScript:
Airbnb Style Guide: Adotado para convenções de código, incluindo sintaxe e boas práticas.
ESLint: Utilizado para garantir a qualidade do código e conformidade com o estilo.
- TypeScript:
Microsoft TypeScript Guidelines: Para práticas recomendadas e estilo de codificação.
Prettier: Empregado para formatar o código automaticamente.

## Restrições de Design

### Logo e Cores

O Sistema devera seguir o padrão de cores estabelecido pela UniFil, seguindo oque já esta em uso pela COLMEIA CUBO


### Liguagem de Programação

O Sistema sera desenvolvido usando [JavaScript](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript) e [Laravel](https://laravel.com/) no backend e [Vue.js](https://vuejs.org/) no frontend

## Documentação do Usuário On-line e Requisitos do Sistema de Ajuda

Toda documentação do projeto sera on-line.

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

Licença de uso seguindo os protocolos fornecidos pela instituiçao UniFil.

## Observações Legais, sobre Direitos Autorais e Outras Observações

O sistema seguira as observações legais de acordo com os padrões da instituição UniFil.

## Padrões Aplicáveis

Não se aplica.

[Voltar](readme.md)
