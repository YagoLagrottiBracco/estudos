<?php echo '<img src="../../../material-de-apoio/tipos-genericos-regex.png"><img><br><br><br><br>
<img src="../../../material-de-apoio/representantes.png"><img><br><br><br><br>
<img src="../../../material-de-apoio/posix.png"><img><br><br><br><br>
<img src="../../../material-de-apoio/quantificadores.png"><img><br><br><br><br>
<img src="../../../material-de-apoio/sintaxe.png"><img><br><br><br><br>
<img src="../../../material-de-apoio/ancoras.png"><img><br><br><br><br>
<img src="../../../material-de-apoio/outros.png"><img><br><br><br><br>
Exemplo: coraç[aã]o<br>
Resultado: <br><b>coração<br>
           coraçao</b><br>
           coraçoo<br>
           coraçuo<br>
           coraçeo<br>
<br><br><br><br>
Exemplo: 16[:. ]20<br>
Resultado: <br><b>16:20<br>
           16 20<br>
           16.20</b><br>
           16-20<br>
<br><br><br><br>
Exemplo: <[apib]><br>
Resultado: <br><b>&lt;a><br>
           &lt;i><br>
           &lt;p><br>
           &lt;b></b><br>
           &lt;li><br>
           &lt;em><br>
<br><br><br><br>
Exemplo: <[^ap]><br>
Resultado: <br>&lt;a><br>
           <b>&lt;i></b><br>
           &lt;p><br>
           <b>&lt;b></b><br>
<br><br><br><br>
Exemplo: [0123456789]<br>
Resultado: <br><b>18620398652<br>
           1239832476345<br>
           233274324<br>
           238734</b>abcde<br>
           acbde<b>1234</b><br>
<br><br><br><br>
Exemplo: [0123456789][0123456789]:[0123456789][0123456789]<br>
Resultado: <br><b>12:25<br>
           15:40</b><br>
           15.20<br>
           13 20<br>
<br><br><br><br>
Exemplo: [0-2][0-2]:[0-9][0-9]<br>
Resultado: <br><b>12:25<br>
           15:40</b><br>
           15.20<br>
           13 20<br>
<br><br><br><br>
Exemplo: [a-z]<br>
Resultado: <br><b>TreinaWeb Cursos</b><br>
           123<br>
           12:00<br>
           1.20<br>
<br><br><br><br>
Exemplo: Atenção[!]?<br>
Resultado: <br><b>Atenção</b><br>
           <b>Atenção!</b>?<br>
           <b>Atenção</b>???<br>
           <b>Atenção</b>.<br>
<br><br><br><br>
Exemplo: Atenção[!]<br>
Resultado: <br>Atenção<br>
           <b>Atenção!</b>?<br>
           Atenção???<br>
           Atenção.<br>
<br><br><br><br>
Exemplo: anda[r!]?<br>
Resultado: <br><b>anda</b><br>
           <b>andar</b><br>
           <b>anda!</b><br>
           <br><br><br><br>
Exemplo: <a>[a-zA-Z]*<\/a><br>
Resultado: <br><b>&lt;a>Proutos&lt;/a></b><br>
           <b>&lt;a>Contato&lt;/a></b><br>
          <br><br><br><br>
Exemplo: 9*0<br>
Resultado: <br><b>90</b><br>
           <b>90<u>0</u></b><br>
           <b>90<u>0</u>0</b><br>
           <b><u>99990</u></b><br>
           <b>99999990<u>0</u>0<u>0</u></b><br>
          <br><br><br><br>
Exemplo: go[lL]*<br>
Resultado: <br><b>gol</b><br>
           <b>golll</b><br>
           <b>goLlLlLlLlLL</b><br>
           Gool<br>
           Gooolll<br>
           <br><br><br><br>
Exemplo: <\/?.*><br>
Resultado: <br><b>&lt;html></b><br>
           <b>&lt;/html></b><br>
           <b>&lt;a></b><br>
           <b>&lt;/b></b><br>
           <b>&lt;em></b><br>
           <b>&lt;/video></b><br>
           <br><br><br><br>
Exemplo: [a-zA-Z0-9]*<br>
Resultado: <br>&lt;<b>h1</b>><br>
           &lt;/<b>h1</b>><br>
           &lt;<b>h2</b>><br>
           &lt;/<b>h3</b>><br>
           <br><br><br><br>
Exemplo: go*l<br>
Resultado: <br><b>gl</b><br>
          <b>gol</b><br>
          <b>gooooooooooooool</b><br>
          <b>gool</b><br>
          <br><br><br><br>
Exemplo: go{3,}l<br>
Resultado: <br><b>goool</b><br>
          gol<br>
          gool<br>
          <b>gooooooool</b><br>
          <br><br><br><br>
Exemplo: ^[0-9]<br>
Resultado: <br>Aa2<br>
          <b>2</b>f<br>
          <b>3</b>2<br>
          C3<br>
          <br><br><br><br>
Exemplo: ^[^0-9]<br>
Resultado: <br>1A<br>
          <b><u>&nbsp;</u></b>2<br>
          <b>A</b>3<br>
          C<u>&nbsp;</u>1<br>
          <br><br><br><br>
Exemplo: [0-9]$<br>
Resultado: <br>Teste<b>1</b><br>
          Teste1z<br>
          Teste<br>
          <br><br><br><br>
Exemplo: ^[0-9]<br>
Resultado: <br>12.<b>000</b><br>
          12.00<br>
          12.<b>0000</b><br>
          12.0<br>
          <br><br><br><br>
Exemplo: ^.{4,9}$<br>
Resultado: <br><b>Treina</b><br>
          Web<br>
          <b>TreinaWeb</b><br>
          <b>Cursos</b><br>
          CSS<br>
          <br><br><br><br>
Exemplo: \bdia\b<br>
Resultado: <br><b>dia</b><br>
          bom <b>dia</b><br>
          dialeto<br>
          bom-<b>dia</b><br>
          <br><br><br><br>
Exemplo: \bdia<br>
Resultado: <br>corvardia<br>
          camaradia<br>
          bom <b>dia</b><br>
          <b>dia</b>-bom<br>
          bom-<b>dia</b><br>
          <b>dia</b> bom<br>
          <b>dia</b>gnóstico<br>
          <b>dia</b>leto<br>
          <br><br><br><br>
Exemplo: dia\b<br>
Resultado: <br>corvar<b>dia</b><br>
          camara<b>dia</b><br>
          bom <b>dia</b><br>
          <b>dia</b>-bom<br>
          bom-<b>dia</b><br>
          <b>dia</b> bom<br>
          diagnóstico<br>
          dialeto<br>
          <br><br><br><br>
Exemplo: \S<br>
Resultado: <br><b>bom</b><u>&nbsp;</u><b>dia</b><u>&nbsp;</u><b>pra</b><u>&nbsp;</u><b>você</b><br>
           <br><br><br><br>
Exemplo: \S<br>
Resultado: <br>bom<u>&nbsp;</u>dia<u>&nbsp;</u>pra<u>&nbsp;</u>você<br>
           <br><br><br><br>
Exemplo: .<br>
Resultado: <br><u>.</u><br>
          <b>teste.teste</b><br>
          <b>dia.dia</b><br>
          <br><br><br><br>
Exemplo: \.<br>
Resultado: <br><u>.</u><br>
          teste<u>.</u>teste<br>
          dia<u>.</u>dia<br>
          <br><br><br><br>
Exemplo: ^[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}$<br>
Resultado: <br><b>097.000.444-77</b><br>
          09700044477<br>
          097.000.444.77<br>
          <br><br><br><br>
Exemplo: https?:\/\/|ftp:\/\/<br>
Resultado: <br><b>http://</b><br>
          <br><b>https://</b><br>
          <br><b>ftp://</b><br>
          <br><br><br><br>
Exemplo: (pai|mae){2}<br>
Resultado: <br><b>paipai</b><br>
          mae<br>
          pai<br>
          <b>maemae</b><br>
          <br><br><br><br>
Exemplo: ^bo(m|a)( |-)(tarde|dia|noite)$<br>
Resultado: <br><b>boa noite</b><br>
          <br><b>bom dia</b><br>
          <br><b>boa tarde</b><br>
          <br><b>boa-tarde</b><br>
          <br><b>bom-dia</b><br>
          <br><b>boa-noite </b><br>
          <br><br><br><br>
Exemplo: ^(www\.)?[a-zA-Z]{2,}\.com(\.br)?$<br>
Resultado: <br><b>www.treinaweb.com</b><br>
          <b>www.treinaweb.com.br</b><br>
          www.treinaweb<br>
          <b>treinaweb.com.br</b><br>
          <b>treinaweb.com</b><br>
          <br><br><br><br>';
