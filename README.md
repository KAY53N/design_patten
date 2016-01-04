# PHP 设计模式练习

##### 单一职责原则(Single Responsibility Principle, SRP)
一个类只负责一个功能领域中的相应职责，或者可以定义为：就一个类而言，应该只有一个引起它变化的原因

##### 开闭原则(Open-Closed Principle, OCP)：
一个软件实体应当对扩展开放，对修改关闭。即软件实体应尽量在不修改原有代码的情况下进行扩展

##### 里氏代换原则(Liskov Substitution Principle, LSP)：
所有引用基类（父类）的地方必须能透明地使用其子类的对象

##### 依赖倒转原则(Dependency Inversion  Principle, DIP)：
抽象不应该依赖于细节，细节应当依赖于抽象。换言之，要针对接口编程，而不是针对实现编程

##### 接口隔离原则(Interface  Segregation Principle, ISP)：
使用多个专门的接口，而不使用单一的总接口，即客户端不应该依赖那些它不需要的接口

##### 合成复用原则(Composite Reuse Principle, CRP)：
尽量使用对象组合，而不是继承来达到复用的目的

##### 迪米特法则(Law of  Demeter, LoD)：
一个软件实体应当尽可能少地与其他实体发生相互作用。

### 创建型模式
- [x] [简单工厂模式](./Simple Factory) `Simple Factory`
- [x] [工厂方法模式](./Factory Method) `Factory Method` 
- [x] [抽象工厂模式](./Abstract Factory) `Abstract Factory`
- [x] [单例模式](./Singleton) `Singleton`
- [x] [原型模式](./Prototype) `Prototype`
- [x] [建造者模式](./Builder) `Builder`

### 结构型模式
- [x] [适配器模式](./Adapter) `Adapter`
- [x] [桥接模式](./Bridge) `Bridge`
- [x] [外观模式](./Facade) `Facade`
- [x] [代理模式](./Proxy) `Proxy`
- [x] [组合模式](./Composite) `Composite`
- [x] [装饰模式](./Decorator) `Decorator`
- [x] [享元模式](./Flyweight) `Flyweight`

### 行为型模式
- [x] [观察者模式](./Observer) `Observer`
- [x] [责任链模式](./Chain of Responsibility) `Chain of Responsibility`
- [x] [命令模式](./Command) `Command`
- [x] [解释器模式](./Interpreter) `Interpreter`
- [x] [迭代器模式](./Iterator) `Iterator`
- [x] [中介者模式](./Mediator) `Mediator`
- [x] [备忘录模式](./Memento) `Memento`
- [x] [状态模式](./State) `State`
- [x] [策略模式](./Strategy) `Strategy`
- [x] [模板方法模式](./Template Method) `Template Method`
- [x] [访问者模式](./Visitor) `Visitor`
