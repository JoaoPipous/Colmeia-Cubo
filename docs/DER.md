# Diagrama de Entidade e Relacionamento(DER)

```mermaid

erDiagram
    ORIENTADOR {
        int ID
        string Nome
    }

    ALUNO {
        int ID
        string Nome
        string CPF
    }

    COLMEIA {
        int ID
        string Nome
    }

    AREA_DE_CONHECIMENTO {
        int ID
        string Titulo
        string Descricao
    }

    UC {
        int ID
        string Titulo
        string Descricao
        int CargaHoraria
    }

    ORIENTADOR_COLMEIA {
        int OrientadorID
        int ColmeiaID
    }

    ALUNO_ACESSA_COLMEIA {
        int AlunoID
        int ColmeiaID
    }

    ALUNO_DOWNLOAD_COLMEIA {
        int AlunoID
        int ColmeiaID
    }

    COLMEIA_AREA_DE_CONHECIMENTO {
        int ColmeiaID
        int AreaDeConhecimentoID
    }

    AREA_DE_CONHECIMENTO_UC {
        int AreaDeConhecimentoID
        int UCID
    }

    ORIENTADOR ||--o{ ORIENTADOR_COLMEIA : Gerencia
    COLMEIA ||--o{ ORIENTADOR_COLMEIA : Gerencia

    ALUNO ||--o{ ALUNO_ACESSA_COLMEIA : Acessa
    COLMEIA ||--o{ ALUNO_ACESSA_COLMEIA : Acessa

    ALUNO ||--o{ ALUNO_DOWNLOAD_COLMEIA : Download
    COLMEIA ||--o{ ALUNO_DOWNLOAD_COLMEIA : Download

    COLMEIA ||--o{ COLMEIA_AREA_DE_CONHECIMENTO : Contem
    AREA_DE_CONHECIMENTO ||--o{ COLMEIA_AREA_DE_CONHECIMENTO : Contem

    AREA_DE_CONHECIMENTO ||--o{ AREA_DE_CONHECIMENTO_UC : Contem
    UC ||--o{ AREA_DE_CONHECIMENTO_UC : Contem
