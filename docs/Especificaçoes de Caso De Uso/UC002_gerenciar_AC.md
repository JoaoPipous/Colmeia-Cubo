# Especificação de Caso de Uso: Gerenciar Áreas de Conhecimento

## Histórico da Revisão

| Data       | Versão | Descrição                        | Autor                  |
|------------|--------|----------------------------------|------------------------|
| 12/05/2024 | 1.0    | Criação do documento             | João Vitor Deliberador |
| 08/11/2024 | 1.1    | Revisão e adição de informações  | João Vitor Deliberador |

## Índice

- [Especificação de Caso de Uso: Gerenciar Áreas de Conhecimento](#especificação-de-caso-de-uso-gerenciar-áreas-de-conhecimento)
  - [Histórico da Revisão](#histórico-da-revisão)
  - [Índice](#índice)
    - [Breve Descrição](#breve-descrição)
    - [Identificação](#identificação)
    - [Pré-condições](#pré-condições)
    - [Fluxo Básico de Eventos](#fluxo-básico-de-eventos)
    - [Fluxo Principal](#fluxo-principal)
    - [Fluxos Alternativos](#fluxos-alternativos)
      - [Fluxo Alternativo 1 - Adicionar Área de Conhecimento](#fluxo-alternativo-1---adicionar-área-de-conhecimento)
      - [Fluxo Alternativo 2 - Atualizar Área de Conhecimento](#fluxo-alternativo-2---atualizar-área-de-conhecimento)
    - [Pós-condições](#pós-condições)
    - [Informações Adicionais](#informações-adicionais)

### Breve Descrição

O caso de uso "Gerenciar Áreas de Conhecimento" permite que o Coordenador realize operações de CRUD (Create, Read, Update, Delete) sobre as áreas de conhecimento associadas aos cursos da instituição. Esse gerenciamento possibilita uma categorização organizada e atualizada das áreas de conhecimento que compõem os currículos dos cursos oferecidos.

### Identificação

- Nome do Caso de Uso: Gerenciar Áreas de Conhecimento
- Código do Caso de Uso: UC002_gerenciar_areas_de_conhecimento
- Ator Principal: Coordenador
- Nível: Alto
- Objetivo: Permitir que o Coordenador adicione, atualize, remova ou visualize informações sobre as áreas de conhecimento dos cursos.

### Pré-condições

- O Coordenador deve estar autenticado no sistema.
- O Coordenador deve ter permissões específicas para gerenciar áreas de conhecimento.

### Fluxo Básico de Eventos

1. O Coordenador seleciona a opção de gerenciar áreas de conhecimento.
2. O sistema exibe uma lista das áreas de conhecimento existentes com informações básicas, como nome, descrição e cor.
3. O Coordenador escolhe entre as opções: adicionar uma nova área de conhecimento, atualizar uma área existente, remover uma área ou visualizar detalhes de uma área.

### Fluxo Principal

1. **Adicionar Nova Área de Conhecimento**
   - O Coordenador escolhe a opção de adicionar uma nova área de conhecimento.
   - O sistema solicita as informações necessárias: nome, descrição e cor da área.
   - O Coordenador preenche as informações e confirma.
   - O sistema adiciona a nova área de conhecimento à lista e confirma a criação.

2. **Atualizar Área de Conhecimento Existente**
   - O Coordenador seleciona uma área de conhecimento para atualização.
   - O sistema exibe um formulário pré-preenchido com as informações atuais da área.
   - O Coordenador modifica as informações conforme necessário e salva.
   - O sistema atualiza a área de conhecimento com as novas informações e confirma a alteração.

3. **Remover Área de Conhecimento**
   - O Coordenador seleciona a opção de remover uma área de conhecimento.
   - O sistema remove automaticamente a área de conhecimento da lista, juntamente com todos os itens vinculados a ela, como unidades curriculares e áreas funcionais, sem necessidade de confirmação.

4. **Visualizar Detalhes da Área de Conhecimento**
   - O Coordenador escolhe a opção de visualizar detalhes de uma área de conhecimento.
   - O sistema exibe todas as informações detalhadas sobre a área selecionada, incluindo nome, descrição e cor.

### Fluxos Alternativos

#### Fluxo Alternativo 1 - Adicionar Área de Conhecimento

- **Campos Obrigatórios Não Preenchidos:** Se algum campo obrigatório não for preenchido, o sistema exibe uma mensagem de erro e solicita o preenchimento dos campos.

#### Fluxo Alternativo 2 - Atualizar Área de Conhecimento

- **Nome da Área de Conhecimento Já Existente:** Se o Coordenador tentar alterar o nome para um já existente, o sistema exibe uma mensagem de erro e impede a atualização.

### Pós-condições

- As informações sobre as áreas de conhecimento são atualizadas conforme as ações realizadas pelo Coordenador.
- O sistema garante que, ao excluir uma área de conhecimento, todos os itens vinculados a ela também são removidos automaticamente.

### Informações Adicionais

- Caso de uso associado ao módulo de gerenciamento de áreas de conhecimento.
- A funcionalidade é acessível somente para usuários com o papel de Coordenador.
- Exemplo de tela do caso de uso:

![Caso de Uso - Gerenciar Áreas de Conhecimento](img/casodeusoespecifico_areas.png)

---

[Voltar](readme.md)
