```mermaid

flowchart TD
    subgraph Usuário Regular
        A[Início] --> B[Selecionar Curso]
        B --> C[Visualizar Informações do Curso]
        C --> D[Visualizar UCs, ACs e Colmeia]
        D --> E[Baixar PDF]
    end

    subgraph Usuário Administrativo
        F[Login ADM] --> G{Autenticação ADM Sucessiva?}
        G -->|Sim| H[Acesso ao Painel de Controle]
        G -->|Não| I[Erro: Login Inválido]
        
        H --> J[Gerenciar Cursos]
        H --> K[Gerenciar Unidades Curriculares]
        H --> L[Gerenciar Atividades Complementares]

        J --> M[Criar, Editar ou Excluir Cursos]
        K --> N[Criar, Editar ou Excluir UCs]
        L --> O[Criar, Editar ou Excluir ACs]

        M --> P[Editar Colmeia CUBO]
        P --> Q{Deseja Publicar Colmeia?}
        Q -->|Sim| R[Publicar CUBO e Gerar Link]
        Q -->|Não| S[Finalizar Edição]

        R --> T[Fim do Processo ADM]
    end
