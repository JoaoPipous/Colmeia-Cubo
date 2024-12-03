```mermaid

stateDiagram-v2
    [*] --> Início
    Início --> AreaFuncionalCriada: Criar Área Funcional
    AreaFuncionalCriada --> AreaFuncionalVisível: Associada a uma Área de Conhecimento
    AreaFuncionalVisível --> AreaFuncionalEditada: Editar Informações
    AreaFuncionalEditada --> AreaFuncionalVisível: Atualizar Área Funcional
    AreaFuncionalVisível --> AreaFuncionalRemovida: Excluir Área Funcional
    AreaFuncionalRemovida --> [*]
