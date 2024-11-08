# Especificação de Caso de Uso: Gerenciar Unidades Curriculares (UCs)

## Histórico da Revisão

| Data       | Versão | Descrição                        | Autor                  |
|------------|--------|----------------------------------|------------------------|
| 12/05/2024 | 1.0    | Criação do documento             | João Vitor Deliberador |
| 08/11/2024 | 1.1    | Revisão e adição de informações  | João Vitor Deliberador |

## Índice

- [Especificação de Caso de Uso: Gerenciar Unidades Curriculares (UCs)](#especificação-de-caso-de-uso-gerenciar-unidades-curriculares-ucs)
  - [Histórico da Revisão](#histórico-da-revisão)
  - [Índice](#índice)
    - [Breve Descrição](#breve-descrição)
    - [Identificação](#identificação)
    - [Pré-condições](#pré-condições)
    - [Fluxo Básico de Eventos](#fluxo-básico-de-eventos)
    - [Fluxo Principal](#fluxo-principal)
    - [Fluxos Alternativos](#fluxos-alternativos)
      - [Fluxo Alternativo 1 - Adicionar Unidade Curricular](#fluxo-alternativo-1---adicionar-unidade-curricular)
      - [Fluxo Alternativo 2 - Atualizar Unidade Curricular](#fluxo-alternativo-2---atualizar-unidade-curricular)
    - [Pós-condições](#pós-condições)
    - [Informações Adicionais](#informações-adicionais)

### Breve Descrição

O caso de uso "Gerenciar Unidades Curriculares (UCs)" permite que o Coordenador realize operações de CRUD (Create, Read, Update, Delete) sobre as unidades curriculares associadas a cursos e áreas funcionais. Esse gerenciamento facilita a organização detalhada das UCs dentro de cada área funcional e curso, permitindo uma visão clara de sua carga horária e demais informações relevantes.

### Identificação

- Nome do Caso de Uso: Gerenciar Unidades Curriculares (UCs)
- Código do Caso de Uso: UC004_gerenciar_unidades_curriculares
- Ator Principal: Coordenador
- Nível: Alto
- Objetivo: Permitir que o Coordenador adicione, atualize, remova ou visualize informações sobre as Unidades Curriculares vinculadas aos cursos e áreas funcionais.

### Pré-condições

- O Coordenador deve estar autenticado no sistema.
- O Coordenador deve ter permissão para gerenciar unidades curriculares.

### Fluxo Básico de Eventos

1. O Coordenador acessa a opção de gerenciar Unidades Curriculares.
2. O sistema exibe uma lista das UCs existentes, organizadas por curso e área funcional, mostrando informações básicas como nome, descrição e carga horária.
3. O Coordenador escolhe entre as opções: adicionar uma nova UC, atualizar uma UC existente, remover uma UC ou visualizar detalhes de uma UC.

### Fluxo Principal

1. **Adicionar Nova Unidade Curricular**
   - O Coordenador escolhe a opção de adicionar uma nova UC.
   - O sistema solicita as informações necessárias para a nova UC, incluindo nome, descrição, carga horária e seleção da área de conhecimento associada.
   - O Coordenador preenche as informações e confirma.
   - O sistema adiciona a nova UC à lista de Unidades Curriculares e confirma a criação.

2. **Atualizar Unidade Curricular Existente**
   - O Coordenador seleciona uma UC para atualização.
   - O sistema exibe um formulário pré-preenchido com as informações atuais da UC.
   - O Coordenador modifica as informações conforme necessário e salva.
   - O sistema atualiza a UC com as novas informações e confirma a alteração.

3. **Remover Unidade Curricular**
   - O Coordenador seleciona a opção de remover uma UC.
   - O sistema remove automaticamente a UC da lista, junto com qualquer associação com áreas funcionais ou cursos, sem necessidade de confirmação.

4. **Visualizar Detalhes da Unidade Curricular**
   - O Coordenador escolhe a opção de visualizar detalhes de uma UC.
   - O sistema exibe todas as informações detalhadas da UC selecionada, incluindo nome, descrição e carga horária.

### Fluxos Alternativos

#### Fluxo Alternativo 1 - Adicionar Unidade Curricular

- **Campos Obrigatórios Não Preenchidos:** Se algum campo obrigatório não for preenchido, o sistema exibe uma mensagem de erro e solicita o preenchimento dos campos.
- **Unidade Curricular Duplicada:** Caso o Coordenador tente cadastrar uma UC com um nome já existente na mesma área funcional, o sistema exibe uma mensagem de erro indicando duplicidade e impede o cadastro.

#### Fluxo Alternativo 2 - Atualizar Unidade Curricular

- **Nome da UC Já Existente:** Se o Coordenador tentar alterar o nome para um já existente na mesma área funcional, o sistema exibe uma mensagem de erro e impede a atualização.

### Pós-condições

- As informações sobre as UCs são atualizadas conforme as ações realizadas pelo Coordenador.
- O sistema garante que, ao excluir uma UC, todos os vínculos e referências a ela em áreas funcionais ou cursos também são removidos automaticamente.

### Informações Adicionais

- O gerenciamento de UCs permite uma organização mais eficiente do currículo e das cargas horárias associadas.
- Este caso de uso é acessível apenas para usuários com a função de Coordenador.
- Exemplo de tela do caso de uso:

![Caso de Uso - Gerenciar Unidades Curriculares](img/casodeusoespecifico_unidades_curriculares.png)

---

[Voltar](readme.md)
