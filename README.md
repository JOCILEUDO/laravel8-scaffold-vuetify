# Laravel8 Scaffold vueJs with vuetify

Laravel8 scaffold vueJs com vuetify é um "template" destinado a facilitar a criação de projetos com laravel e utilizando vueJs para fazer o frontend, utilizando o framwork veutify para melhor o visual do frontend. 

## Instalação

O processo de instalação é bem simples, primeiro é necessário instalar as depências necessárias do laravel, execute o seguinte commando:

```bash
composer install
```

Logo em seguida instale os pacotes javascript necessários, com o comando:
```bash
npm install
```

## Uso
Como em uma aplicação padrão laravel, nesse projeto também é necessário a criação de rotas, e views blade, para utilizar o vuejs é necessário que seja criado os components que deseja na pasta ```resources/js/components``` e depois registrar os components no arquivo app.js que fica no caminho ```resources/js/app.js``` uma vez o component registrado ele poderá ser utilizado em qualquer blade ou página vuejs fazendo a importação correta do component.

## Contribuições
Pull Request são bem vindos, para maiores modificações recomendo que entre em contato comigo, meu objetivo é deixar um projeto que seja utilizável e que contribua para o aprendizado.

## Licença
[MIT](https://choosealicense.com/licenses/mit/)