# COLMEIA CUBO: UM SISTEMA DE GESTÃO DE CURSOS E UNIDADES CURRICULARES

### Nome - Joao Deliberador
### Nome Orientador - Mario

## 1. INTRODUÇÃO
O presente artigo descreve o desenvolvimento do sistema Colmeia CUBO, um software voltado para o gerenciamento de cursos e unidades curriculares (UCs) em uma instituição de ensino superior. O projeto foi idealizado para facilitar o cadastro, visualização, edição e exclusão de cursos e UCs, além de possibilitar a gestão de coordenadores e o acesso dos alunos às suas informações acadêmicas. O principal objetivo do sistema é fornecer uma interface intuitiva e eficiente que automatize processos administrativos, garantindo maior organização e agilidade na gestão acadêmica.

A pesquisa e o desenvolvimento do sistema Colmeia CUBO foram realizados durante o estágio obrigatório do curso de Ciência da Computação, utilizando tecnologias modernas de desenvolvimento web para garantir a usabilidade e a performance necessária ao projeto.

## 2. DESCRIÇÃO DO SISTEMA
O Colmeia CUBO é um sistema de gerenciamento acadêmico focado em cursos e unidades curriculares. Ele permite que os orientadores e coordenadores criem, editem e gerenciem os cursos oferecidos pela instituição, associando cada curso a suas respectivas UCs. O sistema também facilita o cadastro de coordenadores e permite que eles administrem os cursos de forma eficiente.

Os principais módulos do sistema incluem:

Módulo de Gerenciamento de Cursos: Funções para criar, editar e remover cursos, associando unidades curriculares a cada um.
Módulo de Gerenciamento de UCs: Interface para criar e gerenciar UCs, com a opção de associá-las a um ou mais cursos.
Módulo de Gerenciamento de Usuários: Cadastro e administração de coordenadores, com a opção de atribuir ou revogar permissões.
Módulo de Acesso dos Alunos: Permite aos alunos acessar suas UCs e verificar as unidades curriculares associadas ao seu curso.
O sistema visa melhorar a eficiência administrativa, substituindo processos manuais por uma solução digital integrada.

### 2.1. TECNOLOGIAS UTILIZADAS
As tecnologias utilizadas no desenvolvimento do Colmeia CUBO incluem:

Laravel 11: Framework PHP utilizado para o backend do sistema, responsável pelo gerenciamento das rotas, autenticação e lógica de negócios.
Livewire: Utilizado para criar interfaces dinâmicas e interativas sem a necessidade de código JavaScript excessivo.
Tailwind CSS: Framework CSS utilizado para o design responsivo e moderno da interface.
Alpine.js: Biblioteca JavaScript leve utilizada para funcionalidades interativas no frontend.
MySQL: Sistema de gerenciamento de banco de dados, utilizado para armazenar os dados do sistema, como cursos, UCs, e usuários.
Essas tecnologias foram escolhidas devido à sua robustez, flexibilidade e comunidade ativa de suporte.

## 3. TELAS DO SISTEMA
### 3.1. Tela de Login

Descrição: A tela de login permite que usuários, como coordenadores e alunos, insiram suas credenciais (email e senha) para acessar o sistema. Inclui uma opção de "Lembrar-me", para facilitar o acesso em sessões futuras.

### 3.2. Tela Inicial

Descrição: A tela inicial exibe um painel com as principais funcionalidades do sistema, como gerenciamento de cursos, UCs e coordenadores. A interface oferece fácil navegação e acesso rápido às áreas mais relevantes.

### 3.3. Tela de Listagem de Cursos

Descrição: Nesta tela, os cursos cadastrados são exibidos com informações como nome, duração e unidades curriculares associadas. Há opções de edição e exclusão para cada curso.

### 3.4. Tela de Criação de Novo Curso

Descrição: Esta tela permite ao orientador criar um novo curso inserindo o nome e a descrição. O curso é então armazenado no sistema, pronto para associar UCs.

### 3.5. Tela de Criação de Nova UC

Descrição: A criação de uma UC envolve a inserção do nome, descrição, carga horária e a associação da UC a cursos específicos. O orientador pode criar quantas UCs forem necessárias e associá-las a um ou mais cursos.

### 3.6. Tela de Edição de Usuário

Descrição: A edição de usuários permite ao administrador alterar informações dos coordenadores cadastrados, como nome, email e senha. Essas alterações são aplicadas diretamente ao perfil do coordenador no sistema.

## 4. DIAGRAMA DE CASO DE USO

![alt text](img/diagramas/casodeuso.png)

Descrição: O diagrama de caso de uso acima demonstra as interações entre os atores (aluno, orientador) e os principais casos de uso do sistema. O aluno pode acessar a colmeia e baixar seus dados, enquanto o orientador pode gerenciar cursos, áreas de conhecimento e unidades curriculares.

## 5. CONCLUSÃO
O desenvolvimento do sistema Colmeia CUBO permitiu otimizar a gestão acadêmica, proporcionando uma ferramenta eficiente para o gerenciamento de cursos, unidades curriculares e coordenadores. O uso de tecnologias modernas como Laravel, Tailwind, Alpine.js e Livewire garantiu que o sistema fosse dinâmico, intuitivo e fácil de escalar. Com a implementação, espera-se que a instituição de ensino tenha maior controle sobre suas operações, promovendo uma melhor experiência para alunos e coordenadores.

## REFERÊNCIAS
LARAVEL. Laravel: The PHP Framework for Web Artisans. Disponível em: https://laravel.com. Acesso em: 15 out. 2024.

TAILWIND CSS. Tailwind CSS – Rapidly build modern websites without ever leaving your HTML. Disponível em: https://tailwindcss.com. Acesso em: 15 out. 2024.

ALPINE.JS. Alpine.js – A rugged, minimal framework for composing JavaScript behavior in your HTML. Disponível em: https://alpinejs.dev. Acesso em: 15 out. 2024.