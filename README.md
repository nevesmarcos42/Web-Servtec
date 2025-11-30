# Web-Servtec

<div align="center">

![PHP](https://img.shields.io/badge/PHP-8.2-777BB4?style=for-the-badge&logo=php)
![MySQL](https://img.shields.io/badge/MySQL-Database-4479A1?style=for-the-badge&logo=mysql)
![HTML5](https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS3](https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white)

Sistema completo de conversão de moedas estrangeiras com cotações em tempo real. Desenvolvido com PHP no backend e HTML/CSS no frontend.

[Funcionalidades](#funcionalidades) • [Tecnologias](#tecnologias) • [Instalação](#instalação) • [Uso](#uso) • [API](#documentação-da-api) • [Contribuir](#contribuindo)

</div>

---

## Índice

- [Sobre o Projeto](#sobre-o-projeto)
- [Funcionalidades](#funcionalidades)
- [Tecnologias](#tecnologias)
- [Arquitetura](#arquitetura)
- [Instalação](#instalação)
- [Uso](#uso)
- [Documentação da API](#documentação-da-api)
- [Implantação](#implantação)
- [Contribuindo](#contribuindo)
- [Licença](#licença)

---

## Sobre o Projeto

Web-Servtec é uma aplicação full stack para auxiliar na conversão de moedas estrangeiras. O projeto foi desenvolvido com foco em fornecer cotações em tempo real através da integração com API de cotação, permitindo conversões precisas e armazenamento de histórico de transações.

### Principais Características

- **Conversão de Moedas** - Sistema completo de conversão com cotações em tempo real
- **API de Cotação** - Integração com Awesome Cotação
- **Gestão de Usuários** - Sistema de cadastro e autenticação
- **Histórico de Conversões** - Armazenamento de dados em banco MySQL
- **Interface Responsiva** - Design limpo e funcional
- **Validações Completas** - Validação de cadastro e login

---

## Funcionalidades

### Backend (PHP)

#### Autenticação

- Cadastro de novos usuários
- Login com validação
- Controle de sessão
- Proteção de rotas

#### Conversão de Moedas

- Consulta de cotações em tempo real
- Cálculos matemáticos precisos
- Múltiplas moedas suportadas
- Histórico de conversões

#### Banco de Dados

- Armazenamento de usuários
- Registro de transações
- Histórico de cotações
- Conexão segura com MySQL

### Frontend (HTML/CSS)

- **Login/Cadastro** - Autenticação de usuários
- **Conversão** - Interface para conversão de moedas
- **Histórico** - Visualização de conversões anteriores
- **Header/Footer** - Componentes reutilizáveis
- **Design Responsivo** - Compatível com diferentes dispositivos

---

## Tecnologias

### Backend

| Tecnologia | Versão | Descrição                |
| ---------- | ------ | ------------------------ |
| **PHP**    | 8.2    | Linguagem de programação |
| **MySQL**  | -      | Banco de dados           |

### Frontend

| Tecnologia | Versão | Descrição             |
| ---------- | ------ | --------------------- |
| **HTML5**  | -      | Estrutura das páginas |
| **CSS3**   | -      | Estilização           |

### APIs Externas

- **Awesome Cotação** - API de cotação de moedas

---

## Arquitetura

### Estrutura de Diretórios

```
Web-Servtec/
├── index.php                    # Página inicial
├── css/                         # Estilos
│   ├── components.css           # Estilos de componentes
│   └── login.css                # Estilos de login
├── image/                       # Imagens
└── src/                         # Código-fonte
    ├── logout.php               # Logout
    ├── banco de dados/          # Conexão com BD
    │   └── conexao.php
    ├── components/              # Componentes reutilizáveis
    │   ├── footer.php
    │   └── header.php
    ├── screens/                 # Páginas da aplicação
    │   ├── cadastro.php
    │   ├── dados.php
    │   └── paginas.php
    └── validacoes/              # Validações
        ├── validarCadastro.php
        └── validarLogin.php
```

---

## Instalação

### Pré-requisitos

- **PHP** - Versão 8.2 ou superior - [Download](https://www.php.net/)
- **MySQL** - Banco de dados - [Download](https://www.mysql.com/)
- **Servidor Web** - Apache/Nginx ou XAMPP

### Instalação Local

#### 1. Clone o repositório

```bash
git clone https://github.com/nevesmarcos42/Web-Servtec.git
cd Web-Servtec
```

#### 2. Configure o banco de dados

Crie um banco de dados MySQL e configure as credenciais em `src/banco de dados/conexao.php`:

```php
<?php
$host = "localhost";
$user = "seu_usuario";
$password = "sua_senha";
$database = "web_servtec";
?>
```

#### 3. Inicie o servidor

```bash
# Com PHP built-in server
php -S localhost:8000

# Ou use XAMPP/WAMP e acesse via:
# http://localhost/Web-Servtec
```

#### 4. Acesse a aplicação

Abra o navegador e acesse: `http://localhost:8000`

---

## Uso

### Primeiro Acesso

1. **Acesse a aplicação**: `http://localhost:8000`

2. **Crie uma conta**:

   - Clique em "Cadastrar"
   - Preencha nome, email e senha
   - Faça login com as credenciais criadas

3. **Realize uma conversão**:
   - Selecione a moeda de origem
   - Informe o valor
   - Escolha a moeda de destino
   - Visualize o resultado

### Funcionalidades Principais

#### Cadastrar Usuário

```
1. Acesse a página de cadastro
2. Preencha os dados solicitados
3. Clique em "Cadastrar"
4. Faça login com suas credenciais
```

#### Converter Moedas

```
1. Faça login no sistema
2. Acesse a página de conversão
3. Selecione as moedas
4. Informe o valor a ser convertido
5. Visualize o resultado
```

#### Visualizar Histórico

```
1. Acesse "Meus Dados" ou "Histórico"
2. Visualize suas conversões anteriores
3. Consulte cotações passadas
```

---

## Documentação da API

### API Externa - Awesome Cotação

A aplicação consome dados da API Awesome Cotação para obter cotações em tempo real.

#### Exemplo de Requisição

```php
<?php
// Consultar cotação do dólar
$url = "https://economia.awesomeapi.com.br/json/last/USD-BRL";
$response = file_get_contents($url);
$data = json_decode($response, true);

echo "Cotação: R$ " . $data['USDBRL']['bid'];
?>
```

---

## Implantação

### Produção

- **Backend**: 000webhost
- **Banco de Dados**: MySQL
- **API**: Awesome Cotação

### Variáveis de Ambiente

Configure as seguintes variáveis no servidor de produção:

```php
// Banco de Dados
DB_HOST=seu_host
DB_USER=seu_usuario
DB_PASSWORD=sua_senha
DB_NAME=nome_do_banco

// API
API_COTACAO_URL=https://economia.awesomeapi.com.br
```

---

## Contribuindo

Contribuições são bem-vindas! Siga os passos:

1. Fork o projeto
2. Crie uma branch para sua feature (`git checkout -b feature/MinhaFeature`)
3. Commit suas mudanças (`git commit -m 'Adiciona MinhaFeature'`)
4. Push para a branch (`git push origin feature/MinhaFeature`)
5. Abra um Pull Request

### Padrões de Código

#### Backend (PHP)

- Seguir PSR-12 (PHP Standards Recommendations)
- Separar lógica de negócio da apresentação
- Validar todos os inputs do usuário
- Usar prepared statements para segurança

#### Frontend (HTML/CSS)

- Código semântico e bem estruturado
- Separar estilos em arquivos CSS
- Manter componentes reutilizáveis
- Garantir responsividade

---

## Licença

Este projeto está sob a licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

---

Desenvolvido como projeto de estudo Full Stack (PHP + MySQL)

---

## Autor

**Marcos Aurélio Neves**

GitHub: [@nevesmarcos42](https://github.com/nevesmarcos42)

---

**Versão**: 1.0.0

**Última Atualização**: Novembro 2025
