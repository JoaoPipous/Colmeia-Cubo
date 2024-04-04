# Especificação Suplementar </br> Projeto de Análises Clínicas </br> Versão 1.0

## Histórico da Revisão

| Data | Versão | Descrição | Autor |
| ---- | ------ | --------- | ----- |
| 03/04/2024 | 1.0 | Criação do documento | João Vitor Deliberador  

| Data | Versão | Descrição | Autor |
| ---- | ------ | --------- | ----- |
| 03/04/2024 | 1.5 | Finalizando documento | João Vitor Deliberador  


## Índice

1. [Introdução](#introdução)

    1. [Objetivo](#objetivo)

    2. [Escopo](#escopo)

    3. [Definições, Acrônimos e Abreviações](#definições-acrônimos-e-abreviações)

    4. [Referências](#referências)

    5. [Visão Geral](#visão-geral)

2. [Funcionalidade](#funcionalidade)

3. [Utilidade](#utilidade)

     1. [Treinamento](#treinamento)

4. [Confiabilidade](#confiabilidade)

    1. [Disponibilidade](#disponibilidade)

    2. [Exatidão](#exatidão)

    3. [Taxa de Erros ou Defeitos](#taxa-de-erros-ou-defeitos)

5. [Desempenho](#desempenho)

    1. [Capacidade](#capacidade)

6. [Suportabilidade](#suportabilidade)

    1. [Padrão de Codificação](#padrão-de-codificação)

7. [Restrições de Design](#restrições-de-design)

    1. [Logo e Cores](#logo-e-cores)

    2. [Liguagem de Programação](#liguagem-de-programação)

8. [Documentação do Usuário On-line e Requisitos do Sistema de Ajuda](#documentação-do-usuário-on-line-e-requisitos-do-sistema-de-ajuda)

9. [Componentes Comprados](#componentes-comprados)

10. [Interfaces](#interfaces)

    1. [Interfaces de Hardware](#interfaces-de-hardware)

    2. [Interfaces de Software](#interfaces-de-software)

    3. [Interfaces de Comunicações](#interfaces-de-comunicações)

11. [Requisitos de Licença](#requisitos-de-licença)

12. [Observações Legais, sobre Direitos Autorais e Outras Observações](#observações-legais-sobre-direitos-autorais-e-outras-observações)

13. [Padrões Aplicáveis](#padrões-aplicáveis)

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

O Sistema precisa ser perfeito nos resultados sem espaço para falhas

### Taxa de Erros ou Defeitos

- Erro crítico: Perda de informações.
- Erro padrão : Instabilidade do Servidor, Falha ao realizar downloads 



## Desempenho

### Capacidade

O sistema precisa ter a capacidade de armazenar uma grande quantidade de informações e dados(COLMEIA) dos usuários e ter a capacidade de permitir atualizacoes downloads devarios dos usuários utilizando o sistema ao mesmo tempo.



## Suportabilidade

### Padrão de Codificação

Um padrão de codificação de login no [InertiaJS](https://inertiajs.com/), usando o framework [Laravel](https://laravel.com/) no backend e [Vue.js](https://vuejs.org/) no frontend

## Restrições de Design

### Logo e Cores

O Sistema devera seguir o padrao de cores estabelecido pela UniFil, seguindo oque já esta em uso pela COLMEIA CUBO


### Liguagem de Programação

O Sistema sera desenvolvido usando [InertiaJS](https://inertiajs.com/)

## Documentação do Usuário On-line e Requisitos do Sistema de Ajuda

Toda documentação do projeto sera on-line.

## Componentes Comprados

Não se aplica.

## Interfaces

### Interfaces de Hardware

Em análise.

### Interfaces de Software

Em análise.

### Interfaces de Comunicações

Em análise.

## Requisitos de Licença

Não se aplica.

## Observações Legais, sobre Direitos Autorais e Outras Observações

O sistema seguira as observações legais de acordo com os padrões da instituição UniFil.

## Padrões Aplicáveis

Não se aplica.

[Voltar](readme.md)
