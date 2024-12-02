  ```mermaid
  sequenceDiagram
    actor Coordenador
    Coordenador ->> CursosController: acessar página de listagem de cursos
    CursosController ->> CursosService: obter lista de cursos
    CursosService ->> Database: consulta de cursos
    Database -->> CursosService: retorna lista de cursos
    CursosService -->> CursosController: retorna lista de cursos
    CursosController -->> Coordenador: exibe lista de cursos

    Coordenador ->> CursosController: solicitar criação de novo curso
    CursosController ->> CursosService: criar curso (dados do novo curso)
    CursosService ->> Database: inserir novo curso
    Database -->> CursosService: confirmação de criação
    CursosService -->> CursosController: confirmação de criação
    CursosController -->> Coordenador: curso criado com sucesso

    Coordenador ->> CursosController: solicitar edição de curso
    CursosController ->> CursosService: editar curso (dados atualizados)
    CursosService ->> Database: atualizar curso
    Database -->> CursosService: confirmação de atualização
    CursosService -->> CursosController: confirmação de atualização
    CursosController -->> Coordenador: curso atualizado com sucesso

    Coordenador ->> CursosController: solicitar exclusão de curso
    CursosController ->> CursosService: excluir curso
    CursosService ->> Database: remover curso
    Database -->> CursosService: confirmação de remoção
    CursosService -->> CursosController: confirmação de remoção
    CursosController -->> Coordenador: curso excluído com sucesso
