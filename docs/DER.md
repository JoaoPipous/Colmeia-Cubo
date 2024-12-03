# Diagrama de Entidade e Relacionamento(DER)


```mermaid
erDiagram
    CURSO {
        int id PK
        varchar nome
        varchar descricao
        boolean status
    }

    AREA_CONHECIMENTO {
        int id PK
        varchar nome
        varchar cor
        int duracao
        boolean status
        int curso_id FK
    }

    AREA_FUNCIONAL {
        int id PK
        varchar nome
        varchar descricao
        int duracao
        boolean status
        int area_conhecimento_id FK
    }

    UNIDADE_CURRICULAR {
        int id PK
        varchar nome
        varchar descricao
        int carga_horaria
        boolean status
        int area_funcional_id FK
    }

    CURSO ||--o{ AREA_CONHECIMENTO : has
    AREA_CONHECIMENTO ||--o{ AREA_FUNCIONAL : organizes
    AREA_FUNCIONAL ||--o{ UNIDADE_CURRICULAR : includes


```