  <?php 

  	$a = file_get_contents("http://localhost/sites/silotransce/include/header.php");

  	echo $a;

  	?>

	<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12">
                <p class="pContato">
                    <small>Tem alguma dúvida, sugestão ou reclamação?</small></p>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm fundoContato">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Nome</label>
                            <input type="text" class="form-control" id="name" placeholder="Digite seu nome" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Digite seu email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Assunto</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Escolha um:</option>
                                <option value="service">Dúvida</option>
                                <option value="suggestions">Sugestão</option>
                                <option value="product">Reclamação</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Mensagem</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Digite sua mensagem"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right btnColor" id="btnContactUs">
                            Enviar</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form>
            <legend><span class="glyphicon glyphicon-globe"></span> Local</legend>
            <address>
                <strong>SILOTRANSCE</strong><br>
                Rua 7<br>
                
                <abbr title="Phone">
                    Telefone:</abbr>
                (12) 3102-1326
            </address>
            <address>
                <strong>SILOTRANSCE - Cruzeiro</strong><br>
                <a href="mailto:#">contato@silotransce.com.br</a>
            </address>
            </form>
        </div>
    </div>
</div>
 

     <?php 

  	$a = file_get_contents("http://localhost/sites/silotransce/include/footer.php");

  	echo $a;

  ?>