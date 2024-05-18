# Diagrama de Classes

```mermaid
classDiagram
    class Aluno {
        -Nome: string
        -CPF: string
        +consultarCursos(): void
    }

    class Coordenador {
        -nome: string
        -ID: int
        +gerenciarCursos(): void
    }

    class Curso {
        -nome: string
        -codigo: int
        -area: int
        +adicionarCurso(): void
        +atualizarCurso(): void
        +removerCurso(): void
        +visualizarCurso(): void
    }

    class AreasDeConhecimento {
        -titulo: string
        -descricao: string
    }

    class UnidadeCurricular {
        -titulo: string
        -descricao: string
        -cargaHoraria: int
    }

    Aluno "0..*" -- "0..*" AreasDeConhecimento : estuda
    AreasDeConhecimento "1" -- "1..*" UnidadeCurricular : contém
    UnidadeCurricular "*" -- "N" Curso : inclui
    Curso "N" -- "1" Coordenador : gerencia
