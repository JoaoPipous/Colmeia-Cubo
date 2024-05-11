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
- Ator Principal: Cordenador
- Nível: N/A
- Objetivo: Permitir que os cordenadores adicionem, atualizem, removam ou visualizem informações sobre os cursos oferecidos pela instituição.

### Pré-condições:
O Cordenador deve estar autenticado no sistema.
O Cordenador deve ter permissão para gerenciar cursos.

### Fluxo Básico de Eventos:

- O Cordenador seleciona a opção de gerenciar cursos.
- O sistema exibe uma lista de cursos existentes.
- O Cordenador escolhe entre adicionar um novo curso, atualizar um curso existente, remover um curso ou visualizar detalhes de um curso.

### Fluxo Principal:
- O caso de uso começa quando o Cordenador seleciona a opção de gerenciar cursos.
- O sistema exibe uma lista de cursos existentes.
- O Cordenador escolhe entre adicionar um novo curso, atualizar um curso existente, remover um curso ou visualizar detalhes de um curso.
Se o Cordenador escolher adicionar um novo curso:
- O sistema solicita as informações necessárias para o novo curso, como nome, descrição, carga horária, etc.
- O Cordenador fornece as informações solicitadas.
- O sistema adiciona o novo curso à  lista de cursos.
Se o Cordenador escolher atualizar um curso existente:
- O sistema exibe um formulário pré-preenchido com as informações atuais do curso.
- O Cordenador pode modificar as informações conforme necessário.
- O sistema atualiza as informações do curso.
Se o Cordenador escolher remover um curso:
- O sistema solicita confirmação.
- O Cordenador confirma a remoção.
- O sistema remove o curso da lista.
Se o Cordenador escolher visualizar detalhes de um curso:
- O sistema exibe todas as informações detalhadas do curso selecionado.

### Fluxo Alternativo:

- Se o Cordenador cancelar a adição ou atualização de um curso, o sistema retorna à lista de cursos sem realizar nenhuma alteração.

#### Fluxo Alternativo 1 - Adicionar Curso Cancelado:

- O Cordenador escolhe adicionar um novo curso.
- O Cordenador preenche parcialmente o formulário de adição do curso.
- O Cordenador cancela a adição do curso.
- O sistema retorna à lista de cursos sem adicionar o novo curso.

#### Fluxo Alternativo 2 - Atualizar Curso Cancelado:

- O Cordenador escolhe atualizar um curso existente.
- O Cordenador modifica parcialmente as informações do curso.
- O Cordenador cancela a atualização do curso.
- O sistema retorna à lista de cursos sem alterar as informações do curso.

### Pós-condições:

As informações sobre os cursos são atualizadas conforme as ações realizadas pelo Cordenador.
Fluxo Alternativo:

Se o Cordenador cancelar a adição ou atualização de um curso, o sistema retorna à lista de cursos sem realizar nenhuma alteração.



[Voltar](readme.md)