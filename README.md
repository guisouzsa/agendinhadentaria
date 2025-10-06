# 🦷 AgendinhaDentaria

**AgendinhaDentaria** é um sistema web simples e direto, criado para ajudar consultórios odontológicos a organizarem seus atendimentos com mais eficiência. Ele permite o cadastro completo de pacientes, com funcionalidades básicas e essenciais para o dia a dia do dentista.

## ✅ Funcionalidades

O sistema oferece as seguintes operações:

- **Cadastrar pacientes** com os campos:
  - `id`
  - `nomePaciente`
  - `data`
  - `hora`
  - `procedimento`
  - `status`
  - `email`
- **Visualizar** os dados cadastrados
- **Atualizar** informações dos pacientes
- **Excluir** registros

## 🎯 Objetivo

O objetivo do AgendinhaDentaria é oferecer uma solução prática e acessível para consultórios que precisam manter o controle dos atendimentos sem complicações. É ideal para quem busca organização sem precisar lidar com sistemas complexos.

## 🛠️ Tecnologias Utilizadas

- **Backend:** Laravel (PHP)
- **Frontend:** HTML e CSS
- **Banco de Dados:** MySQL
- **Gerenciador de dependências:** Bleeze
- **Controle de versão:** Git e GitHub

## 🚀 Como Executar o Projeto

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/AgendinhaDentaria.git
   ```

2. Instale as dependências do Laravel:
   ```bash
   composer install
   ```

3. Configure o arquivo `.env` com os dados do seu banco MySQL

4. Execute as migrações:
   ```bash
   php artisan migrate
   ```

5. Inicie o servidor:
   ```bash
   php artisan serve
   ```

6. Acesse o sistema no navegador:
   ```
   http://localhost:8000
   ```

