# TCC - Sistema de Controle de Saídas com RFID/NFC

## Descrição
Este é o projeto de TCC desenvolvido em grupo para a conclusão do curso técnico em Desenvolvimento de Sistemas. O sistema foi projetado para facilitar a saída de alunos do estacionamento de motos de uma escola, utilizando tags RFID para automação e registro.

## Objetivo
O projeto visa substituir o processo manual de encontrar um segurança para abrir o portão, tornando o fluxo mais rápido e confiável. 

## Tecnologias Utilizadas
- **PHP**: Backend para os endpoints e CRUD.
- **Bootstrap**: Frontend responsivo para o site.
- **C++ (Arduino)**: Programação do microcontrolador.
- **RC522**: Leitor RFID para leitura das tags.
- **ESP8266**: Comunicação Wi-Fi entre o Arduino e o site.

## Funcionamento
1. Os alunos aproximam sua tag RFID do leitor RC522.
2. O Arduino, utilizando o módulo ESP8266, faz uma requisição HTTP a um endpoint PHP.
3. O site registra os dados no banco (usuário, data e hora) e permite a visualização e gerenciamento dos registros.

## Como Rodar
1. Clone este repositório:  
   ```bash
   git clone https://github.com/seu-usuario/tcc
   
2. Configure o servidor PHP e o banco de dados MySQL.
3. Faça o upload do código para o Arduino utilizando a IDE Arduino.
4. Acesse o site pelo navegador para gerenciar as saídas.

Contribuições são bem-vindas! Abra uma issue ou envie um pull request.
