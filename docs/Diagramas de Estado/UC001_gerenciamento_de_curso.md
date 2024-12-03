```mermaid

stateDiagram-v2
    [*] --> Início
    Início --> CursoCriado: Criar Curso
    CursoCriado --> CursoPublicado: Publicado Automaticamente
    CursoPublicado --> CursoVisível: Criar Área de Conhecimento e Área Funcional
    CursoVisível --> CursoEditado: Editar Curso
    CursoEditado --> CursoVisível: Atualizar Informações
    CursoVisível --> CursoRemovido: Excluir Curso
    CursoRemovido --> [*]


