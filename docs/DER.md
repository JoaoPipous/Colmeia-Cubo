# Diagrama de Entidade e Relacionamento(DER)


```mermaid

    erDiagram
    CURSO {
        int codigo PK
        string nome
        string descricao
    }
    
    AREAS_DE_CONHECIMENTO {
        int id PK
        int curso_id FK
        string titulo
        string descricao
    }
    
    AREAS_FUNCIONAIS {
        int id PK
        int area_conhecimento_id FK
        string nome
        string descricao
    }

    UNIDADES_CURRICULARES {
        int id PK
        int area_funcional_id FK
        string titulo
        string descricao
        int carga_horaria
    }

    COORDENADOR {
        int id PK
        string nome
    }

    ALUNO {
        int id PK
        string nome
        string cpf
    }

    COLMEIA {
        int id PK
        int aluno_id FK
        int curso_id FK
    }

    %% Relacoes
    CURSO ||--o| AREAS_DE_CONHECIMENTO : contem
    AREAS_DE_CONHECIMENTO ||--o| AREAS_FUNCIONAIS : contem
    AREAS_FUNCIONAIS ||--o| UNIDADES_CURRICULARES : contem
    COORDENADOR ||--o| CURSO : gerencia
    COORDENADOR ||--o| AREAS_DE_CONHECIMENTO : gerencia
    COORDENADOR ||--o| AREAS_FUNCIONAIS : gerencia
    COORDENADOR ||--o| UNIDADES_CURRICULARES : gerencia
    ALUNO ||--o| COLMEIA : acessa
    CURSO ||--o| COLMEIA : organiza
