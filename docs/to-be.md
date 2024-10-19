```mermaid

flowchart TD
    A[Início] --> B[Login]
    B --> C{Usuário Autenticado?}
    C -->|Sim| D[Apresentar Cursos Disponíveis]
    C -->|Não| E[Erro: Login Inválido]

    D --> F{Selecionar Curso?}
    F -->|Sim| G[Selecionar Turma Automática]
    F -->|Não| A[Retorna para Login]

    G --> H[Visualizar Colmeia]
    H --> I[Editar Colmeia]
    I --> J{Publicar Colmeia?}
    J -->|Sim| K[Publicar CUBO]
    J -->|Não| L[Finalizar sem Publicação]

    K --> M[Gerar Link Automaticamente]
    M --> N[Notificar Usuário com Link]
    N --> O[Processo Finalizado]

    L --> O[Processo Finalizado]
