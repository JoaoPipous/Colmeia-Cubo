# Especificação de Caso de Uso: Gerenciar Cursos

## Histórico da Revisão

| Data       | Versão | Descrição                | Autor                  |
|------------|--------|--------------------------|------------------------|
| 09/05/2024 | 1.0    | Criação do documento     | João Vitor Deliberador |
| 08/11/2024 | 1.1    | Revisão e adição de informações | João Vitor Deliberador |

## Índice

- [Especificação de Caso de Uso: Gerenciar Cursos](#especificação-de-caso-de-uso-gerenciar-cursos)
  - [Histórico da Revisão](#histórico-da-revisão)
  - [Índice](#índice)
    - [Breve Descrição](#breve-descrição)
    - [Identificação](#identificação)
    - [Pré-condições](#pré-condições)
    - [Fluxo Básico de Eventos](#fluxo-básico-de-eventos)
    - [Fluxo Principal](#fluxo-principal)
    - [Fluxos Alternativos](#fluxos-alternativos)
      - [Fluxo Alternativo 1 - Adicionar Curso](#fluxo-alternativo-1---adicionar-curso)
      - [Fluxo Alternativo 2 - Atualizar Curso](#fluxo-alternativo-2---atualizar-curso)
      - [Fluxo Alternativo 3 - Remover Curso](#fluxo-alternativo-3---remover-curso)
      - [Fluxo Alternativo 4 - Cancelamento](#fluxo-alternativo-4---cancelamento)
    - [Pós-condições](#pós-condições)
    - [Informações Adicionais](#informações-adicionais)

### Breve Descrição

O caso de uso "Gerenciar Cursos" permite que o Coordenador realize operações de CRUD (Create, Read, Update, Delete) sobre os cursos oferecidos pela instituição. Essa funcionalidade facilita a organização e atualização do catálogo de cursos no sistema, garantindo que os dados estejam sempre atualizados para consulta e planejamento acadêmico.

### Identificação

- Nome do Caso de Uso: Gerenciar Cursos
- Código do Caso de Uso: UC001_gerenciar_cursos
- Ator Principal: Coordenador
- Nível: Alto
- Objetivo: Permitir que os coordenadores adicionem, atualizem, removam ou visualizem informações sobre os cursos oferecidos pela instituição.

### Pré-condições

- O Coordenador deve estar autenticado no sistema.
- O Coordenador deve ter permissões específicas para gerenciar cursos.

### Fluxo Básico de Eventos

1. O Coordenador seleciona a opção de gerenciar cursos.
2. O sistema exibe uma lista de cursos existentes com informações básicas, como nome, descrição e carga horária.
3. O Coordenador escolhe entre as opções: adicionar um novo curso, atualizar um curso existente, remover um curso ou visualizar detalhes de um curso.

### Fluxo Principal

1. **Adicionar Novo Curso**
   - O Coordenador escolhe a opção de adicionar um novo curso.
   - O sistema solicita as informações necessárias: nome, descrição e carga horária do curso.
   - O Coordenador preenche as informações e confirma.
   - O sistema adiciona o novo curso à lista e confirma a criação.

2. **Atualizar Curso Existente**
   - O Coordenador seleciona um curso para atualização.
   - O sistema exibe um formulário pré-preenchido com as informações atuais do curso.
   - O Coordenador modifica as informações conforme necessário e salva.
   - O sistema atualiza o curso com as novas informações e confirma a alteração.

3. **Remover Curso**
   - O Coordenador seleciona a opção de remover um curso.
   - O sistema solicita confirmação para a remoção.
   - O Coordenador confirma a ação.
   - O sistema remove o curso da lista e confirma a exclusão.

4. **Visualizar Detalhes do Curso**
   - O Coordenador escolhe a opção de visualizar detalhes de um curso.
   - O sistema exibe todas as informações detalhadas sobre o curso selecionado, incluindo nome, descrição, carga horária e áreas de conhecimento associadas.

### Fluxos Alternativos

#### Fluxo Alternativo 1 - Adicionar Curso

- **Campos Obrigatórios Não Preenchidos:** Se algum campo obrigatório não for preenchido, o sistema exibe uma mensagem de erro e solicita o preenchimento dos campos.
- **Curso Duplicado:** Caso o coordenador tente cadastrar um curso com um nome já existente, o sistema exibe uma mensagem de erro indicando duplicidade e impede o cadastro.

#### Fluxo Alternativo 2 - Atualizar Curso

- **Nome do Curso Já Existente:** Se o Coordenador tentar alterar o nome para um já existente, o sistema exibe uma mensagem de erro e impede a atualização.

#### Fluxo Alternativo 3 - Remover Curso

- **Curso Vinculado a Áreas de Conhecimento ou UCs:** Se o curso tiver áreas de conhecimento ou unidades curriculares associadas, o sistema exibe uma mensagem de alerta informando que é necessário desvincular as associações antes de excluir o curso.

#### Fluxo Alternativo 4 - Cancelamento

- **Cancelar Ação:** Se o Coordenador cancelar a adição, atualização ou exclusão de um curso, o sistema retorna à lista de cursos sem realizar nenhuma alteração.

### Pós-condições

- As informações sobre os cursos são atualizadas conforme as ações realizadas pelo Coordenador.
- As alterações realizadas no sistema são imediatamente refletidas na lista de cursos disponíveis para consulta.

### Informações Adicionais

- Caso de uso associado ao módulo de gerenciamento de cursos.
- A funcionalidade é acessível somente para usuários com o papel de Coordenador.
- Exemplo de tela do caso de uso:

![Caso de Uso - Gerenciar Cursos](img/casodeusoespecifico.png)

---

[Voltar](readme.md)
