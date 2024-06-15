# CURSO DE BACHARELADO EM CIÊNCIA DA COMPUTAÇÃO </br> JOÃO VITOR DELIBERADOR </br> PROJETO DA COLMEIA CUBO </br> Londrina </br> 2024

## SUMÁRIO

- [CURSO DE BACHARELADO EM CIÊNCIA DA COMPUTAÇÃO  JOÃO VITOR DELIBERADOR  PROJETO DA COLMEIA CUBO  Londrina  2024](#curso-de-bacharelado-em-ciência-da-computação--joão-vitor-deliberador--projeto-da-colmeia-cubo--londrina--2024)
  - [SUMÁRIO](#sumário)
  - [INTRODUÇÃO](#introdução)
      - [Núcleo de Práticas em Informática (NPI)](#núcleo-de-práticas-em-informática-npi)
    - [PROPOSTA E OBJETIVOS](#proposta-e-objetivos)
      - [Objetivo Geral](#objetivo-geral)
      - [](#)
    - [JUSTIFICATIVA](#justificativa)
  - [DIAGRAMA DE CASO DE USO](#diagrama-de-caso-de-uso)
  - [TELAS](#telas)
  - [WORKFLOW (AS IS) NA NOTAÇÃO BPMN](#workflow-as-is-na-notação-bpmn)
  - [RECURSOS E AMBIENTE DE DESENOVOLVIMENTO](#recursos-e-ambiente-de-desenovolvimento)
    - [LINGUAGEM DE PROGRAMAÇÃO](#linguagem-de-programação)
    - [BANCO DE DADOS](#banco-de-dados)
    - [Ferramentas de Desenvolvimento](#ferramentas-de-desenvolvimento)
    - [FRONT-END](#front-end)
    - [BACK-END](#back-end)
  - [CRONOGRAMA](#cronograma)
  - [REFERÊNCIAS](#referências)

## INTRODUÇÃO
O ambiente acadêmico contemporâneo enfrenta desafios significativos em termos de gestão e disseminação de informações curriculares. Na Universidade de Londrina (UniFil), essa questão se manifesta na prática laboriosa e ineficiente de criação manual das estruturas curriculares — as "colmeias" — utilizando ferramentas de apresentação como o PowerPoint. Este método não apenas exige um investimento considerável de tempo e esforço por parte dos orientadores, mas também apresenta obstáculos significativos para a atualização e compartilhamento eficiente dessas informações vitais. A comunicação desses elementos curriculares fundamentais para o corpo estudantil, que é feita de forma manual e fragmentada, resulta em um processo propenso a atrasos e inconsistências.

Nesse cenário, a necessidade de inovação é clara e urgente. O projeto Colmeia CUBO, desenvolvido e implementado no Núcleo de Práticas em Informática (NPI) do Centro Universitário Filadélfia - UniFil, surge como uma resposta direta a essa necessidade, propondo a digitalização e centralização das informações curriculares através de um sistema unificado. Este sistema almeja eliminar os desafios associados à criação manual e distribuição das colmeias, oferecendo uma plataforma simplificada e ágil que pode ser facilmente acessada por professores e alunos.

#### Núcleo de Práticas em Informática (NPI)

O NPI é um departamento vital dentro do Centro Universitário Filadélfia - UniFil, responsável pela inovação e prática em projetos de tecnologia da informação. Ele oferece um ambiente de aprendizado prático para os estudantes, permitindo-lhes trabalhar em projetos reais que impactam positivamente a comunidade acadêmica e além. O NPI é o berço do projeto Colmeia CUBO, fornecendo os recursos, a orientação e o apoio técnico necessários para transformar a ideia em realidade. No NPI, estudantes e professores colaboram estreitamente, aplicando as mais recentes tecnologias e metodologias de desenvolvimento para criar soluções que atendam às necessidades educacionais e administrativas da universidade.

A inovação proposta pelo projeto Colmeia CUBO reflete um movimento em direção a práticas mais eficientes e sustentáveis no ensino superior. Ao aproveitar as tecnologias digitais, o sistema não apenas facilitará o gerenciamento curricular, mas também potencializará a comunicação entre docentes e discentes. Espera-se que a implementação da Colmeia CUBO resulte em uma distribuição mais eficaz de informações, permitindo que os alunos planejem seus estudos com maior independência e confiança.

Este documento apresenta uma visão detalhada da concepção e do desenvolvimento do sistema Colmeia CUBO, começando pelo contexto que motivou sua criação, passando pelos objetivos a serem atingidos e chegando até as especificações técnicas e o cronograma de execução. Através deste plano, busca-se oferecer uma compreensão clara do escopo do projeto e da transformação positiva que ele está destinado a impulsionar na UniFil, otimizando processos, melhorando a experiência educacional e alinhando a instituição com as tendências atuais de digitalização na educação.
### PROPOSTA E OBJETIVOS

#### Objetivo Geral
Desenvolver e implementar o sistema Colmeia CUBO para digitalizar e centralizar as informações curriculares dos cursos oferecidos pelo Centro Universitário Filadélfia - UniFil, proporcionando um acesso fácil e atualizado tanto para professores quanto para alunos.

####

- Substituir o método manual de criação de colmeias por uma solução digital integrada que seja fácil de atualizar e compartilhar.

- Criar uma interface intuitiva e que permita aos orientadores atualizar informações curriculares de forma eficiente.
  
- Possibilitar que os alunos acessem informações atualizadas sobre as unidades curriculares e suas respectivas cargas horárias e pré-requisitos de qualquer lugar e a qualquer momento.
  
- Reduzir a carga de trabalho dos professores, automatizando a distribuição das colmeias e permitindo mais tempo para o ensino e outras responsabilidades acadêmicas.
  
- Fomentar a autonomia dos alunos na gestão de seus percursos formativos através de uma plataforma de fácil navegação.

### JUSTIFICATIVA

A criação manual e a distribuição fragmentada de colmeias curriculares têm se mostrado um processo ineficiente e suscetível a atrasos no Centro Universitário Filadélfia - UniFil. O sistema Colmeia CUBO é uma resposta inovadora que se alinha com as diretrizes estratégicas da instituição para melhorar a comunicação acadêmica e otimizar o planejamento de estudos dos alunos. A transformação digital proposta por este sistema trará benefícios significativos, incluindo maior acessibilidade, atualizações em tempo real e uma gestão curricular mais transparente e eficaz.

## DIAGRAMA DE CASO DE USO

Na [Figura 1](#diagrama-de-caso-de-uso) abaixo é apresentado os diagramas de caso de uso do projeto onde em sua descrição detalhada é usado pra o seguinte caso...

Gerenciar Cursos 
Este caso de uso, representado na [Figura 1](#diagrama-de-caso-de-uso), permite que os orientadores adicionem, atualizem, removam ou visualizem informações sobre os cursos oferecidos pela instituição. Engloba a definição de estrutura curricular, carga horária, e pré-requisitos, essencial para a organização e o planejamento acadêmico.

Gerenciar Áreas de Conhecimento
Ilustrado na [Figura 1](#diagrama-de-caso-de-uso), este caso de uso facilita a gestão das diferentes áreas de conhecimento dentro da universidade, permitindo aos administradores definir, atualizar, remover ou consultar áreas específicas. Contribui para a categorização eficaz dos cursos e unidades curriculares.

Gerenciar Unidades Curriculares (UCs) 
Como mostrado na [Figura 1](#diagrama-de-caso-de-uso), permite a manipulação detalhada das unidades curriculares, que são os componentes individuais dos cursos. Os usuários podem adicionar novas UCs, editar informações existentes, excluir UCs ou visualizar detalhes relevantes.

Acessar Colmeia 
Este caso de uso, detalhado na [Figura 1](#diagrama-de-caso-de-uso), possibilita que os alunos acessem a plataforma Colmeia CUBO para visualizar as informações curriculares. Oferece uma interface intuitiva para a exploração dos cursos, áreas de conhecimento, e UCs.

Baixar Colmeia 
Representado na [Figura 1](#diagrama-de-caso-de-uso), este caso de uso permite que os usuários baixem as informações da Colmeia CUBO para consulta offline. Esta funcionalidade suporta uma variedade de formatos, facilitando o planejamento acadêmico flexível.


![Diagrama de caso de uso](img/diagramas/casodeuso.png)



## TELAS
Nesta [Figura 1](#telas) contem a pricipal tela do sistema, A Tela inicial onde mostra a colmeia cubo
![Alt text](img/telas/telainicial.png)
Na [Figura 2](#telas) temos a tela de login para o usuario administrativo(StackHolder)
![Alt text](img/telas/telalogin.png)
Na [Figura 3](#telas) é caso o aluno queria saber informaçoes sobre sua UC, Mostra uma janela com todas as informaçcoes necessarias.
![Alt text](img/telas/telacomfuncao.png)

## WORKFLOW (AS IS) NA NOTAÇÃO BPMN

  
Na [Figura](#workflow-as-is-na-notação-bpmn) é representado O workflow BPMN "as is" representa o processo atual do sistema Colmeia CUBO antes das melhorias. Inicia-se com o login do usuário, seguido pela seleção de um curso e turma específica. O usuário então tem a opção de visualizar, editar ou publicar as informações da colmeia. Após a publicação ou edição, um link pode ser gerado para compartilhamento. O processo também inclui a possibilidade de baixar o conteúdo da colmeia. Este workflow simplifica a gestão curricular e facilita o acesso à informação para os usuários.


![WorkflowASIS](img/diagramas/as-is.png)

## RECURSOS E AMBIENTE DE DESENOVOLVIMENTO

### LINGUAGEM DE PROGRAMAÇÃO

- PHP 
é utilizado principalmente no back-end, através do framework Laravel. Laravel oferece uma rica biblioteca de funcionalidades e uma arquitetura MVC (Model-View-Controller), que facilita a organização do código e a separação de lógica de negócios da apresentação. O PHP será responsável por manipular a lógica de servidor, incluindo o gerenciamento de banco de dados, autenticação de usuários, e processamento de lógica de negócios. Com PHP, o sistema poderá executar operações como criar, ler, atualizar e deletar informações curriculares, além de gerenciar os dados de usuário e sessão.

- JavaScript 
 será utilizado no front-end do projeto, com Vue.js, para criar uma interface de usuário dinâmica e responsiva. É ele que permitirá aos usuários interagir com a Colmeia CUBO de maneira intuitiva e eficaz, como selecionar cursos, visualizar informações curriculares e baixar documentos.
 
 - TypeScript um superset de JavaScript, poderá ser aproveitado para adicionar tipagem estática ao código JavaScript. Isso não só facilita a manutenção e o desenvolvimento do código ao oferecer um conjunto de ferramentas mais robusto para capturar erros e fornecer autocompletação

### BANCO DE DADOS

 MySQL, para gestão eficiente de grandes conjuntos de dados curriculares.

 ### Ferramentas de Desenvolvimento

 Ferramentas adicionais que serão utilizadas incluem Git para controle de versão, Docker para containerização e ferramentas de CI/CD para automação de testes e implantação.

### FRONT-END

- HTML: Será utilizado para estruturar o conteúdo da página web.
- CSS: Para estilização, garantindo uma apresentação visual agradável e responsiva que se adapte a diferentes dispositivos e tamanhos de tela.

### BACK-END

- Laravel: Este framework PHP será utilizado para construir a lógica do servidor, gerenciamento de banco de dados e autenticação de usuários. Laravel é conhecido por sua elegante sintaxe e por fornecer um robusto conjunto de ferramentas para acelerar o desenvolvimento de aplicações web seguras e escaláveis.
- Laravel Sanctum: Para autenticação SPA, utilizaremos o Laravel Sanctum, que proporciona um sistema de autenticação simples e leve para SPAs e token-based APIs.
- Tailwind: Framework CSS utilitário altamente configurável que fornece classes de baixo nível diretamente utilizáveis no HTML. Ao invés de escrever estilos CSS personalizados, você utiliza classes predefinidas que se combinam para criar qualquer design desejado.
- Alpine: é um framework JavaScript leve, que permite adicionar interatividade aos componentes do frontend sem a complexidade dos frameworks maiores como React ou Vue. É ideal para projetos onde a simplicidade e o desempenho são prioridades. 
- Livewire: é um framework full-stack para Laravel que simplifica a construção de interfaces dinâmicas e reativas sem sair do conforto do PHP.
## CRONOGRAMA

![Cronograma](img/CronogramaEstagio.png)

## REFERÊNCIAS

[Voltar](readme.md)