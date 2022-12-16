## Configurações

Utilize o NetBeans para a utilização deste projeto. A versão do Maven utilizada neste trabalho é a 3.8.6 e o Java JDK é 18. O Java JDK 17 exige que o maven tenha versão superior a 3.6.0 para que os comandos de testes com mvn sejam compatíveis e funcionais. Estas configurações de compatibilidades não são obrigatórias caso a execução dos testes integrados sejam utilizadas somente por meio grafico da IDE NetBeans. Caso precisar adequar as versões e desejar executar por linha de comando os testes com maven, precisará realizar os passos abaixo:


```console
wget https://dlcdn.apache.org/maven/maven-3/3.8.6/binaries/apache-maven-3.8.6-bin.tar.gz -P /tmp

# Aguarde o download finalizar, depois descompacte:

sudo tar xf /tmp/apache-maven-*.tar.gz -C /opt

# crie um link simbolico para chamar o maven no diretório de instalação:

sudo ln -s /opt/apache-maven-3.8.4 /opt/maven

# crie e abre um script maven.sh no /etc/profile.d/:

sudo gedit /etc/profile.d/maven.sh

# adicione o seguinte conteúdo no arquivo (para saber os JDK disponiveis no SO: sudo update-alternatives --config java):
export JAVA_HOME=/usr/lib/jvm/default-java
export M2_HOME=/opt/maven
export MAVEN_HOME=/opt/maven
export PATH=${M2_HOME}/bin:${PATH}

# após salvar o arquivo:

sudo chmod +x /etc/profile.d/maven.sh

source /etc/profile.d/maven.sh

# agora deve constar a versao deseja pela instalação manual, neste caso a 3.8.6:

foo@bar:~$ mvn -version
Apache Maven 3.8.6 (84538c9988a25aec085021c365c560670ad80f63)
Maven home: /opt/maven
Java version: 18.0.2.1, vendor: Oracle Corporation, runtime: /usr/lib/jvm/jdk-18
Default locale: en_US, platform encoding: UTF-8
OS name: "linux", version: "5.15.0-56-generic", arch: "amd64", family: "unix"
```

