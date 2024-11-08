# Diagrama de Classes

```mermaid
classDiagram
    class Aluno {
        -Nome: string
        -CPF: string
        +acessarColmeia(): void
    }

    class Coordenador {
        -nome: string
        -ID: int
        +gerenciarCursos(): void
        +gerenciarAreasConhecimento(): void
        +gerenciarAreasFuncionais(): void
        +gerenciarUnidadesCurriculares(): void
    }

    class Curso {
        -nome: string
        -codigo: int
        +adicionarCurso(): void
        +atualizarCurso(): void
        +removerCurso(): void
        +visualizarCurso(): void
    }

    class AreasDeConhecimento {
        -titulo: string
        -descricao: string
        +adicionarArea(): void
        +atualizarArea(): void
        +removerArea(): void
        +visualizarArea(): void
    }

    class AreasFuncionais {
        -nome: string
        -descricao: string
        +adicionarAreaFuncional(): void
        +atualizarAreaFuncional(): void
        +removerAreaFuncional(): void
        +visualizarAreaFuncional(): void
    }

    class UnidadeCurricular {
        -titulo: string
        -descricao: string
        -cargaHoraria: int
        +adicionarUC(): void
        +atualizarUC(): void
        +removerUC(): void
        +visualizarUC(): void
    }

    %% Definição das Relações entre as Classes
    Curso "1" -- "0..*" AreasDeConhecimento : contém
    AreasDeConhecimento "1" -- "0..*" AreasFuncionais : contém
    AreasFuncionais "1" -- "0..*" UnidadeCurricular : contém
    Coordenador "1" -- "1" Curso : gerencia
    Coordenador "1" -- "1" AreasDeConhecimento : gerencia
    Coordenador "1" -- "1" AreasFuncionais : gerencia
    Coordenador "1" -- "1" UnidadeCurricular : gerencia
    Aluno "0..*" -- "1" Curso : acessa
