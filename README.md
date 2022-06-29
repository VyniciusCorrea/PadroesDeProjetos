                                                                Design Patterns - Singleton

                                                                         Singleton

Também conhecido como "Carta Única". O Singleton é um padrão de projeto criacional que permite a você garantir que uma classe tenha apenas uma instância, enquanto provê um ponto de acesso global para essa instância.
O padrão Singleton resolve dois problemas de uma só vez, violando o princípio de responsabilidade única:

1.Garante que uma classe tenha apenas uma única instância.

A razão mais comum para isso, é para controlar o acesso a algum recurso compartilhado—por exemplo, uma base de dados ou um arquivo.

Funciona assim: imagine que você criou um objeto, mas depois de um tempo você decidiu criar um novo. Ao invés de receber um objeto fresco, você obterá um que já foi criado.

2.Fornece um ponto de acesso global para aquela instância.

Assim como uma variável global, o padrão Singleton permite que você acesse algum objeto de qualquer lugar no programa. Contudo, ele também protege aquela instância de ser sobrescrita por outro código.

Implementaçãoes do Singleton.

Fazer o construtor padrão privado, para prevenir que outros objetos usem o operador new com a classe singleton.

Criar um método estático de criação que age como um construtor. Esse método chama o construtor privado por debaixo dos panos para criar um objeto e o salva em um campo estático. Todas as chamadas seguintes para esse método retornam o objeto em cache.
Se o seu código tem acesso à classe singleton, então ele será capaz de chamar o método estático da singleton. Então sempre que aquele método é chamado, o mesmo objeto é retornado.

Estrutura do Singleton.
Veja na imagem abaixo um exemplo de estrutura e aplicação.

![image](https://user-images.githubusercontent.com/92867151/176340162-5db0de27-c1b0-4682-88cd-b2a8e4f9e13d.png)

A classe Singleton declara o método estático getInstance que retorna a mesma instância de sua própria classe.

O construtor da singleton deve ser escondido do código cliente. Chamando o método getInstance deve ser o único modo de obter o objeto singleton.
Utilize o padrão Singleton quando uma classe em seu programa deve ter apenas uma instância disponível para todos seus clientes; por exemplo, um objeto de base de dados único compartilhado por diferentes partes do programa.

 O padrão Singleton desabilita todos os outros meios de criar objetos de uma classe exceto pelo método especial de criação. Esse método tanto cria um novo objeto ou retorna um objeto existente se ele já tenha sido criado.

 Utilize o padrão Singleton quando você precisa de um controle mais estrito sobre as variáveis globais.

 Ao contrário das variáveis globais, o padrão Singleton garante que há apenas uma instância de uma classe. Nada, a não ser a própria classe singleton, pode substituir a instância salva em cache.

Observe que você sempre pode ajustar essa limitação e permitir a criação de qualquer número de instâncias singleton. O único pedaço de código que requer mudanças é o corpo do método getInstance.

Principais pontos positivos: 

Você pode ter certeza que uma classe só terá uma única instância.

Você ganha um ponto de acesso global para aquela instância.

O objeto singleton é inicializado somente quando for pedido pela primeira vez.

Principais pontos negativos:

 Viola o princípio de responsabilidade única. O padrão resolve dois problemas de uma só vez.
 
 Pode ser difícil realizar testes unitários do codígo cliente do Singleton porque muitos frameworks de teste dependem da herança para produzir objetos simulados.
 
 Implementação:
 
 1.Crie um campo privado estático na classe para o armazenamento da instância singleton.

 2.Declare um método de criação público estático para obter a instância singleton.

 3.Implemente dentro do método estático. Ela deve criar um novo objeto na sua primeira chamada e colocá-lo no campo estático. O método   deve sempre retornar aquela   instância em todas as chamadas subsequentes.

 4.Crie o construtor da classe ser privado. O método estático da classe vai ainda ser capaz de chamar o construtor, mas não os demais objetos.

 5.Para o código cliente, substitua todas as chamadas diretas para o construtor do singleton com chamadas para seu método de criação estático.




