# Diagrama de Implantação

```mermaid

graph TB
    subgraph Client_SIDE
        Navegador
    end

    subgraph Server [Servidor]
        direction TB
        subgraph Ubuntu [Ubuntu]
            subgraph Apache
                Laravel
                php
                MySQL
            end
            subgraph Node_JS
                JavaScript
                Vue_JS
            end
        end
    end

    Internet --> Client_SIDE
    Client_SIDE -->|HTTP/HTTPS| Server
