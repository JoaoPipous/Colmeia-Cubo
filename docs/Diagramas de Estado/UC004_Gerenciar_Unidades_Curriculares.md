```mermaid

stateDiagram-v2
    [*] --> Início
    Início --> UnidadeCriada: Criar Unidade Curricular
    UnidadeCriada --> UnidadeVisível: Associada a uma Área Funcional
    UnidadeVisível --> UnidadeEditada: Editar Unidade Curricular
    UnidadeEditada --> UnidadeVisível: Atualizar Unidade Curricular
    UnidadeVisível --> UnidadeRemovida: Excluir Unidade Curricular
    UnidadeRemovida --> [*]
