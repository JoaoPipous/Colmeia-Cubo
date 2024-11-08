# Especificação de Caso de Uso: Gerenciar Áreas Funcionais

## Histórico da Revisão

| Data       | Versão | Descrição                        | Autor                  |
|------------|--------|----------------------------------|------------------------|
| 15/05/2024 | 1.0    | Criação do documento             | João Vitor Deliberador |
| 08/11/2024 | 1.1    | Revisão e adição de informações  | João Vitor Deliberador |

## Índice

- [Especificação de Caso de Uso: Gerenciar Áreas Funcionais](#especificação-de-caso-de-uso-gerenciar-áreas-funcionais)
  - [Histórico da Revisão](#histórico-da-revisão)
  - [Índice](#índice)
    - [Breve Descrição](#breve-descrição)
    - [Identificação](#identificação)
    - [Pré-condições](#pré-condições)
    - [Fluxo Básico de Eventos](#fluxo-básico-de-eventos)
    - [Fluxo Principal](#fluxo-principal)
    - [Fluxos Alternativos](#fluxos-alternativos)
      - [Fluxo Alternativo 1 - Adicionar Área Funcional](#fluxo-alternativo-1---adicionar-área-funcional)
      - [Fluxo Alternativo 2 - Atualizar Área Funcional](#fluxo-alternativo-2---atualizar-área-funcional)
    - [Pós-condições](#pós-condições)
    - [Informações Adicionais](#informações-adicionais)

### Breve Descrição

O caso de uso "Gerenciar Áreas Funcionais" permite que o Coordenador realize operações de CRUD (Create, Read, Update, Delete) sobre as áreas funcionais associadas às áreas de conhecimento e aos cursos. Esse gerenciamento facilita a organização detalhada e a categorização das funções acadêmicas dentro das áreas de conhecimento.

### Identificação

- Nome do Caso de Uso: Gerenciar Áreas Funcionais
- Código do Caso de Uso: UC003_gerenciar_areas_funcionais
- Ator Principal: Coordenador
- Nível: Alto
- Objetivo: Permitir que o Coordenador adicione, atualize, remova ou visualize informações sobre as áreas funcionais vinculadas às áreas de conhecimento.

### Pré-condições

- O Coordenador deve estar autenticado no sistema.
- O Coordenador deve ter permissão para gerenciar áreas funcionais.

### Fluxo Básico de Eventos

1. O Coordenador acessa a opção de gerenciar áreas funcionais.
2. O sistema exibe uma lista das áreas funcionais existentes, organizadas por área de conhecimento e curso, com informações básicas como nome e descrição.
3. O Coordenador escolhe entre as opções: adicionar uma nova área funcional, atualizar uma área existente, remover uma área ou visualizar detalhes de uma área funcional.

### Fluxo Principal

1. **Adicionar Nova Área Funcional**
   - O Coordenador escolhe a opção de adicionar uma nova área funcional.
   - O sistema solicita as informações necessárias para a nova área funcional, como nome e descrição.
   - O Coordenador preenche as informações e confirma.
   - O sistema adiciona a nova área funcional à lista de áreas funcionais e confirma a criação.

2. **Atualizar Área Funcional Existente**
   - O Coordenador seleciona uma área funcional para atualização.
   - O sistema exibe um formulário pré-preenchido com as informações atuais da área funcional.
   - O Coordenador modifica as informações conforme necessário e salva.
   - O sistema atualiza a área funcional com as novas informações e confirma a alteração.

3. **Remover Área Funcional**
   - O Coordenador seleciona a opção de remover uma área funcional.
   - O sistema remove automaticamente a área funcional da lista, juntamente com todos os itens vinculados a ela, como unidades curriculares, sem necessidade de confirmação.

4. **Visualizar Detalhes da Área Funcional**
   - O Coordenador escolhe a opção de visualizar detalhes de uma área funcional.
   - O sistema exibe todas as informações detalhadas sobre a área funcional selecionada, incluindo nome e descrição.

### Fluxos Alternativos

#### Fluxo Alternativo 1 - Adicionar Área Funcional

- **Campos Obrigatórios Não Preenchidos:** Se algum campo obrigatório não for preenchido, o sistema exibe uma mensagem de erro e solicita o preenchimento dos campos.

#### Fluxo Alternativo 2 - Atualizar Área Funcional

- **Nome da Área Funcional Já Existente:** Se o Coordenador tentar alterar o nome para um já existente na mesma área de conhecimento, o sistema exibe uma mensagem de erro e impede a atualização.

### Pós-condições

- As informações sobre as áreas funcionais são atualizadas conforme as ações realizadas pelo Coordenador.
- O sistema garante que, ao excluir uma área funcional, todos os itens vinculados a ela também são removidos automaticamente.

### Informações Adicionais

- Caso de uso associado ao módulo de gerenciamento de áreas funcionais.
- A funcionalidade é acessível somente para usuários com o papel de Coordenador.
- Exemplo de tela do caso de uso:

![Caso de Uso - Gerenciar Áreas Funcionais](img/casodeusoespecifico_areas_funcionais.png)

---

[Voltar](readme.md)



