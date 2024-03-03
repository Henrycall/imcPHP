# IMC EM PHP

Este é um projeto simples em PHP para classificação do Índice de Massa Corporal (IMC).

## Descrição

O arquivo `calculoimc.php` contém uma função para classificar o IMC com base em faixas predefinidas. O script recebe um valor de IMC como parâmetro e determina a classificação de acordo com as seguintes faixas:

- Até 18.5: Magreza
- 18.51 a 24.9: Saudável
- 25.0 a 29.9: Sobrepeso
- 30.0 a 34.9: Obesidade Grau I
- 35.0 a 39.9: Obesidade Grau II
- Acima de 39.9: Obesidade Grau III

A função imprime uma mensagem indicando o IMC e a classificação correspondente.

## Instalação

Certifique-se de ter o PHP instalado em seu sistema. Você pode baixar o PHP em [php.net](https://www.php.net/downloads).

1. Clone o repositório para o seu ambiente local:

```bash
git clone https://github.com/[SEU-USUARIO]/[SEU-REPOSITORIO].git
cd [SEU-REPOSITORIO]

php calculoimc.php
