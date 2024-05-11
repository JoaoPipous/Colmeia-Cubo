# Especificação de Caso de Uso Gerenciar Cursos

## Histórico da Revisão

| Data | Versão | Descrição | Autor |
| ---- | ------ | --------- | ----- |
| 09/05/2024 | 1.0 | Criação do documento | João Vitor Deliberador  

## Índice

  - [Histórico da Revisão](#histórico-da-revisão)
  - [Índice](#índice)
  - [Breve Descrição](#breve-descrição)
  - [Indentificação](#identificação])
  - [Pré Condições](#pré-condições)
  - [Fluxo Básico de Eventos](#fluxo-básico-de-eventos)
  - [Fluxo Principal](#fluxo-principal)
  - [Fluxo Alternativo](#fluxo-alternativo)
  - [Pós Condições](#pós-condições)

### Breve Descrição:
O caso de uso "Gerenciar Cursos" permite que os orientadores realizem operações de CRUD (Create, Read, Update, Delete) sobre os cursos oferecidos pela instituição, facilitando a organização e atualização do catálogo de cursos.

### Identificação:
- Nome do Caso de Uso: Gerenciar Cursos
- Ator Principal: Orientador
- Nível: N/A
- Objetivo: Permitir que os orientadores adicionem, atualizem, removam ou visualizem informações sobre os cursos oferecidos pela instituição.

### Pré-condições:

O orientador deve estar autenticado no sistema.
O orientador deve ter permissão para gerenciar cursos.

### Fluxo Básico de Eventos:

- O orientador seleciona a opção de gerenciar cursos.
- O sistema exibe uma lista de cursos existentes.
- O orientador escolhe entre adicionar um novo curso, atualizar um curso existente, remover um curso ou visualizar detalhes de um curso.

### Fluxo Principal:
O caso de uso começa quando o orientador seleciona a opção de gerenciar cursos.
O sistema exibe uma lista de cursos existentes.
O orientador escolhe entre adicionar um novo curso, atualizar um curso existente, remover um curso ou visualizar detalhes de um curso.
Se o orientador escolher adicionar um novo curso:
O sistema solicita as informações necessárias para o novo curso, como nome, descrição, carga horária, etc.
O orientador fornece as informações solicitadas.
O sistema adiciona o novo curso à lista de cursos.
Se o orientador escolher atualizar um curso existente:
O sistema exibe um formulário pré-preenchido com as informações atuais do curso.
O orientador pode modificar as informações conforme necessário.
O sistema atualiza as informações do curso.
Se o orientador escolher remover um curso:
O sistema solicita confirmação.
O orientador confirma a remoção.
O sistema remove o curso da lista.
Se o orientador escolher visualizar detalhes de um curso:
O sistema exibe todas as informações detalhadas do curso selecionado.

### Fluxo Alternativo:

- Se o orientador cancelar a adição ou atualização de um curso, o sistema retorna à lista de cursos sem realizar nenhuma alteração.

#### Fluxo Alternativo 1 - Adicionar Curso Cancelado:

- O orientador escolhe adicionar um novo curso.
- O orientador preenche parcialmente o formulário de adição do curso.
- O orientador cancela a adição do curso.
- O sistema retorna à lista de cursos sem adicionar o novo curso.

#### Fluxo Alternativo 2 - Atualizar Curso Cancelado:

- O orientador escolhe atualizar um curso existente.
- O orientador modifica parcialmente as informações do curso.
- O orientador cancela a atualização do curso.
- O sistema retorna à lista de cursos sem alterar as informações do curso.

### Pós-condições:

As informações sobre os cursos são atualizadas conforme as ações realizadas pelo orientador.
Fluxo Alternativo:

Se o orientador cancelar a adição ou atualização de um curso, o sistema retorna à lista de cursos sem realizar nenhuma alteração.



[Voltar](readme.md)