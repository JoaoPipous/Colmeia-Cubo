```mermaid

stateDiagram-v2
    [*] --> Início
    Início --> AreaCriada: Criar Área de Conhecimento
    AreaCriada --> AreaVisível: Associada ao Curso
    AreaVisível --> AreaEditada: Editar Informações
    AreaEditada --> AreaVisível: Atualizar Área
    AreaVisível --> AreaRemovida: Excluir Área
    AreaRemovida --> [*]
