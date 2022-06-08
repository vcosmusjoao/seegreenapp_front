<?php 
	require "_helpers/index.php"; 
	echo siteHeader("Empresas"); //chama a função para retornar o Header
?>
<header>
    <div class="p-5 text-center bg-image" style="
      background-image: url('https://i.ibb.co/dpB73mw/Group-2.png');
      background-position: top;
      height: 400px;
      margin-bottom:10px;
    ">
    </div>

</header>
<div class="container">
    <div id="servicos">
        <div class="row">
            <h2 >Nossos Objetivos </h2>
            <div class="col-lg-4 mb-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://i.ibb.co/Mpnk6bs/image-15.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">As novas gerações de consumidores que estão vindo não querem apenas um bom produto ou uma boa experiência, eles querem tudo isso e ainda saber que estão fazendo algo bom para o meio ambiente. Ao utilizar o App o Usuário vai ter mais confiança em suas compras.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mb-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://i.ibb.co/Jn65YQn/image-16.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">São inúmeros trabalhos externos que fazem uma empresa funcionar, em grandes Companias de Fashion, você encontra o vestido confeccionado, mas de onde vem aquele tecido? de onde vem o couro dessa bota? Essas e outras questões são importantes que o consumidor tenha ciência antes de fazer escolhas, além de passar confiança para o consumidor final, passando credibilidade para as empresas</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4 mt-5">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="https://i.ibb.co/WtLPGhY/image-18.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Outras empresas podem conhecer o trabalho de Agricultores, consumidores também, trazendo mais conhecimento para essas pessoas que fazem muito por toda sociedade, mas pouco são reconhecidas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sobre">
  <h2>Saiba Mais</h2>
  <img src="https://i.ibb.co/WGzFPTN/Group-3.png" alt="Snow" style="width:1345px; ">

  <p class="text-center" style=" width:700px; margin-left:22%; ">Atualmente um dos requisitos da Industria 4.0 é falar de sustentabilidade nos nossos produtos e nos nossos hábitos de consumo. As novas gerações de consumidores que estão vindo não querem apenas um bom produto ou uma boa experiência, eles querem tudo isso e ainda saber que estão fazendo algo bom para o meio ambiente, ajudando no meio que vivem e é imprescindível que eles saibam e tenham conhecimento de todo o processo do produto que está adquirindo. O fast fashion que vem tomando forma desde 1990 já não está sendo tão aceita pelas pessoas que consomem roupas, degrado o ambiente, gera más condições de emprego e torna a roupa como algo descartável, mas antes de virar peça de roupa e ir para aterros e lixões esses são algodões, viscose, muito consumo de água que pode vir a ser uma questão de escolha, será que vou querer comprar de uma marca que os agricultores utilizam bilhões de litros de águas e inúmeros agrotóxicos?</p>
 
</div>
<div id="contato">
<h2>Sobre</h2>
<div class="container mb-5">
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-seegreen">Submit</button>
</form>
</div>
</div>

<footer class="rodape text-center text-lg-start text-muted">

    <!-- Copyright -->
    <div class="text text-center p-4 ">
        © 2022 Copyright:
        <a class="text ">Todos os direitos reservados</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->

</body>
<style>
.rodape {
    bottom: 0;
    width: 100%;
    text-align: center;
    background-color: #6B705C;
    color: #fff;
}
.btn-seegreen{
  background-color: #6B705C;
  color:#fff;
}

.text {
    color: white;
}
h2{
  text-align:center;
  margin-top:15px;
  margin-bottom:15px;
}




</style>


</html>