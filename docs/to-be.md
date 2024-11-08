```mermaid
flowchart TD
    subgraph "Usuário Regular"
        A[Início] --> B[Selecionar Curso]
        B --> C[Visualizar Informações do Curso]
        C --> D[Visualizar Áreas de Conhecimento, Áreas Funcionais e Unidades Curriculares]
        D --> E[Visualizar Colmeia CUBO]
    end

    subgraph "Usuário Administrativo"
        F[Login Administrativo] --> G{Autenticação Sucessiva?}
        G -->|Sim| H[Acesso ao Painel de Controle]
        G -->|Não| I[Erro: Login Inválido]
        
        H --> J[Gerenciar Cursos]
        H --> K[Gerenciar Áreas de Conhecimento]
        H --> L[Gerenciar Áreas Funcionais]
        H --> M[Gerenciar Unidades Curriculares]

        J --> N[Criar, Editar ou Excluir Cursos]
        K --> O[Criar, Editar ou Excluir Áreas de Conhecimento]
        L --> P[Criar, Editar ou Excluir Áreas Funcionais]
        M --> Q[Criar, Editar ou Excluir Unidades Curriculares]

        N --> R[Atualizar Colmeia CUBO com Alterações]
        R --> V[Fim do Processo Administrativo]
    end
