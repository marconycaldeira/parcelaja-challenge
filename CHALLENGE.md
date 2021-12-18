1a PARTE
Pretende-se explorar as tuas habilidades de POO em PHP criando 3 classes.
Shape, Rectangle e Circle.
O Shape deverá ser a classe base com os seguintes requisitos:
1. 4 propriedades com diferentes tipos de visibilidade.
a. Um name público.
b. Um width e length protegido.
c. Um id privado.
2. 2. Uma constante que define o seu tipo com o valor 1.
3. 3. Um construtor que aceita o length e width como parâmetros para inicializar as
respectivas propriedades do objeto.
4. O construtor deverá também inicializar o id, que deverá ser um valor único (fica à tua
liberdade a forma de o fazeres).
5. Getters e Setters da propriedade id.
6. Um método público que calcula e retorna a área do objeto.
7. Um método que retorna um outro objeto com todas as propriedades do mesmo (name,
width, length, id).

O Rectangle deverá herdar do Shape e os requisitos são os seguintes:
1. Uma constante que define o seu tipo com o valor 2.

O Circle deverá herdar do Shape e os requisitos são os seguintes:
1. Uma constante que define o seu tipo com o valor 3.
2. Uma propriedade protegida chamada de radius.
3. Um construtor que aceita o parâmetro radius e inicializa a devida propriedade do objeto.
(Deverás chamar o construtor da herança devidamente).
4. Um método público que calcula e retorna a área do Círculo.
5. Deverá ter a mesma habilidade que foi definida no Shape, e retornar um outro objeto
com as devidas propriedades (name, radius, id).

2a PARTE
Pretende-se explorar (de forma inicial) os teus conhecimentos MVC Symfony
1. Cria um projecto com o nome Shape na versão 4.4 de Symfony
2. Cria as entidades Rectangle e Circle dentro do projecto
3. Cria as respectivas tabelas na base de dados MySql (respeita as propriedades definidas
acima)
4. Cria uma função utilizando DQL/Doctrine Query Language) para procurar todos os
objectos Rectangle e Circle na base de dados
5. Cria o controlador "Shape", com a acção "list" e respectivo template "list" em twig que
lista os objectos Rectangle e Circle que existem na base de dados, rooting com xml,
localhost: 8000/shape/list(utiliza a função acima)
6. Elabora uma classe de testes unitários para validar o cálculo das áreas para as
7. demais formas apresentadas.

3a PARTE
Como desenvolver e entregar o exercício:
● Cria um repositório no github, por exemplo
● Cria a branch: dev
● Desenvolve na branch dev
● No final, o exercício deverá estar disponível no master
● Não te esqueças de documentar o exercício, no ficheiro README.

Diferenciais:
1. Tens liberdade para adicionar novas funcionalidades ou implementar da forma que
achares mais correta (desde que devidamente justificado), de forma a mostrares e
valorizar as tuas habilidades.
2. Tens liberdade para usar as novas versões do PHP e tipar as propriedades e métodos
que aches necessário.