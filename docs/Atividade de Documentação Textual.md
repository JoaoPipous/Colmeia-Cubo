### Caso de Uso: Gerenciar Cursos (CRUD)

**Descrição:**
O caso de uso "Gerenciar Cursos" permite ao orientador realizar operações de criação, leitura, atualização e exclusão (CRUD) de cursos. Esta funcionalidade é essencial para a administração dos cursos oferecidos pela instituição, garantindo que todas as informações sobre os cursos estejam atualizadas e acessíveis.

**Atores Envolvidos:**
- Orientador

**Fluxo Principal:**
1. **Iniciar Gerenciamento de Cursos:**
   - O orientador acessa o sistema e seleciona a opção de gerenciamento de cursos.
   - O sistema exibe a lista de cursos existentes.

2. **Adicionar Curso:**
   - O orientador seleciona a opção de adicionar um novo curso.
   - O sistema solicita os dados do novo curso (nome, descrição, UCs associadas).
   - O orientador insere os dados e confirma a criação.
   - O sistema valida os dados e salva o novo curso no banco de dados.
   - O sistema exibe uma confirmação de sucesso ao orientador.

3. **Editar Curso:**
   - O orientador seleciona um curso existente para edição.
   - O sistema exibe os dados atuais do curso.
   - O orientador modifica os dados necessários e confirma as alterações.
   - O sistema valida os dados atualizados e salva as alterações no banco de dados.
   - O sistema exibe uma confirmação de sucesso ao orientador.

4. **Remover Curso:**
   - O orientador seleciona um curso existente para remoção.
   - O sistema solicita confirmação para excluir o curso.
   - O orientador confirma a exclusão.
   - O sistema remove o curso do banco de dados.
   - O sistema exibe uma confirmação de sucesso ao orientador.

**Fluxos Alternativos:**
- **Dados Inválidos ao Adicionar ou Editar Curso:**
  - O sistema detecta dados inválidos ao validar as entradas.
  - O sistema exibe mensagens de erro e solicita correções ao orientador.
  - O orientador corrige os dados e tenta novamente.

- **Confirmação de Exclusão Negada:**
  - O orientador decide não excluir o curso após a solicitação de confirmação.
  - O sistema cancela a operação de exclusão e retorna à lista de cursos.

---

### Caso de Uso: Gerenciar Áreas de Conhecimento (CRUD)

**Descrição:**
O caso de uso "Gerenciar Áreas de Conhecimento" permite ao orientador realizar operações de criação, leitura, atualização e exclusão (CRUD) de áreas de conhecimento. Esta funcionalidade é crucial para manter a estrutura curricular organizada e atualizada.

**Atores Envolvidos:**
- Orientador

**Fluxo Principal:**
1. **Iniciar Gerenciamento de Áreas de Conhecimento:**
   - O orientador acessa o sistema e seleciona a opção de gerenciamento de áreas de conhecimento.
   - O sistema exibe a lista de áreas de conhecimento existentes.

2. **Adicionar Área de Conhecimento:**
   - O orientador seleciona a opção de adicionar uma nova área de conhecimento.
   - O sistema solicita os dados da nova área (nome, descrição).
   - O orientador insere os dados e confirma a criação.
   - O sistema valida os dados e salva a nova área no banco de dados.
   - O sistema exibe uma confirmação de sucesso ao orientador.

3. **Editar Área de Conhecimento:**
   - O orientador seleciona uma área existente para edição.
   - O sistema exibe os dados atuais da área.
   - O orientador modifica os dados necessários e confirma as alterações.
   - O sistema valida os dados atualizados e salva as alterações no banco de dados.
   - O sistema exibe uma confirmação de sucesso ao orientador.

4. **Remover Área de Conhecimento:**
   - O orientador seleciona uma área existente para remoção.
   - O sistema solicita confirmação para excluir a área.
   - O orientador confirma a exclusão.
   - O sistema remove a área do banco de dados.
   - O sistema exibe uma confirmação de sucesso ao orientador.

**Fluxos Alternativos:**
- **Dados Inválidos ao Adicionar ou Editar Área de Conhecimento:**
  - O sistema detecta dados inválidos ao validar as entradas.
  - O sistema exibe mensagens de erro e solicita correções ao orientador.
  - O orientador corrige os dados e tenta novamente.

- **Confirmação de Exclusão Negada:**
  - O orientador decide não excluir a área após a solicitação de confirmação.
  - O sistema cancela a operação de exclusão e retorna à lista de áreas de conhecimento.

---

### Caso de Uso: Gerenciar Unidades Curriculares (CRUD)

**Descrição:**
O caso de uso "Gerenciar Unidades Curriculares" permite ao orientador realizar operações de criação, leitura, atualização e exclusão (CRUD) de unidades curriculares (UCs). Esta funcionalidade é essencial para manter as UCs atualizadas e associadas aos cursos adequados.

**Atores Envolvidos:**
- Orientador

**Fluxo Principal:**
1. **Iniciar Gerenciamento de Unidades Curriculares:**
   - O orientador acessa o sistema e seleciona a opção de gerenciamento de UCs.
   - O sistema exibe a lista de UCs existentes.

2. **Adicionar Unidade Curricular:**
   - O orientador seleciona a opção de adicionar uma nova UC.
   - O sistema solicita os dados da nova UC (nome, carga horária, curso associado).
   - O orientador insere os dados e confirma a criação.
   - O sistema valida os dados e salva a nova UC no banco de dados.
   - O sistema exibe uma confirmação de sucesso ao orientador.

3. **Editar Unidade Curricular:**
   - O orientador seleciona uma UC existente para edição.
   - O sistema exibe os dados atuais da UC.
   - O orientador modifica os dados necessários e confirma as alterações.
   - O sistema valida os dados atualizados e salva as alterações no banco de dados.
   - O sistema exibe uma confirmação de sucesso ao orientador.

4. **Remover Unidade Curricular:**
   - O orientador seleciona uma UC existente para remoção.
   - O sistema solicita confirmação para excluir a UC.
   - O orientador confirma a exclusão.
   - O sistema remove a UC do banco de dados.
   - O sistema exibe uma confirmação de sucesso ao orientador.

**Fluxos Alternativos:**
- **Dados Inválidos ao Adicionar ou Editar Unidade Curricular:**
  - O sistema detecta dados inválidos ao validar as entradas.
  - O sistema exibe mensagens de erro e solicita correções ao orientador.
  - O orientador corrige os dados e tenta novamente.

- **Confirmação de Exclusão Negada:**
  - O orientador decide não excluir a UC após a solicitação de confirmação.
  - O sistema cancela a operação de exclusão e retorna à lista de UCs.
