# 🚀 Portfólio / Landing Page

Bem-vindo ao repositório do meu portfólio pessoal e Landing Page!
Este projeto foi desenvolvido como um laboratório prático para demonstrar meus estudos e habilidades no desenvolvimento web moderno, com foco em back-end estruturado e front-end responsivo.

## 🎯 Sobre o Projeto

O objetivo desta Landing Page é servir como meu cartão de visitas digital, apresentando quem sou, minhas habilidades e formas de contato.

Mais do que uma página estática, construí este projeto utilizando a arquitetura do **Laravel**, organizando a interface através de **Componentes Blade** para manter o código limpo, reaproveitável e sustentável. A estilização 100% customizada foi feita utilizando **Tailwind CSS**.

## 🛠️ Tecnologias Utilizadas

A stack principal deste projeto é composta pelas seguintes tecnologias e ferramentas:

- **[Laravel](https://laravel.com/):** Framework PHP utilizado para a estrutura, roteamento (`routes/web.php`) e componentização (Blade).
- **[Tailwind CSS](https://tailwindcss.com/):** Framework CSS utilitário para criações de interfaces fluidas, responsivas e modernas.
- **[MySQL](https://www.mysql.com/):** Banco de dados relacional configurado para futuras persistências de dados (formulários, leads, etc).
- **[Vite](https://vitejs.dev/):** Ferramenta de build incrivelmente rápida para compilação dos assets (CSS/JS) no Laravel.
- **[Vanta.js](https://www.vantajs.com/) / Three.js:** Bibliotecas JavaScript utilizadas para criar o fundo (background) 3D interativo presente em toda a aplicação.

## ✨ Funcionalidades em Destaque

- **Componentização Blade:** A interface está dividida em pedaços lógicos (`<x-header />`, `<x-home />`, `<x-about />`, `<x-contact />`, `<x-footer />`), demonstrando boas práticas de organização de código.
- **Design Responsivo (Mobile First):** A página se adapta perfeitamente a celulares, tablets e computadores, utilizando os breakpoints do Tailwind.
- **Integrações de Contato Externo:**
    - Botão dinâmico utilizando a API do WhatsApp para início rápido de conversas.
    - Botão configurado com parâmetros webmail (Gmail API) para abrir mensagens com o endereço de destino já preenchido.
- **UI/UX Moderna:** Elementos com efeitos de _Glassmorphism_ (fundo de vidro translúcido) e micro-interações (`hover`, `transition-all`) nos botões e links.

## ⚙️ Como rodar o projeto localmente

Se você deseja fazer um clone deste repositório e rodar o projeto na sua máquina, siga os passos abaixo:

### Pré-requisitos

- [PHP](https://www.php.net/) ^8.2
- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/) & NPM

### Passo a passo

1. **Clone o repositório:**
    ```bash
    git clone https://github.com/SEU-USUARIO/SEU-REPOSITORIO.git
    cd SEU-REPOSITORIO
    ```
