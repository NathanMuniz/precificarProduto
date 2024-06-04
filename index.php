<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="form-field">
        <label for="valorVenda">Valor de Venda Produto </label>
        <input type="number" name="" id="valorVenda">
    </div>

    <div class="form-field">
        <label for="TaxaML">Taxa Fixa ML </label>
        <input type="number" name="" id="TaxaML" value=2>
    </div>

    <div class="form-field">
        <label for="receberProduto">Custo para Receber Produto (Frete) </label>
        <input type="number" name="" id="receberProduto" value=12 >
    </div>

    
    <div class="form-field">
        <label for="valorCompraProduto">Valor de Comprar do Produto  </label>
        <input type="number" name="" id="valorCompraProduto" value= >
    </div>


    <div class="retorno">

    </div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>

        $(document).ready(function() {

            function caculaCustoTotal () {

            }


            function sumValues() {

                let taxaML = parseFloat($('#TaxaML').val()) || 0;
                let receberProduto = parseFloat($('#receberProduto').val()) || 0;
                let valorCompraProduto = parseFloat($('#valorCompraProduto').val()) || 0;
                let valorDeVenda = parseFloat($('#valorVenda').val()) || 0;


                let custoTotal =  taxaML + receberProduto + valorCompraProduto;

                let lucroLiquido = valorDeVenda - custoTotal; 

                let lucroLiquidoPorcentagem = ((lucroLiquido * 100) / valorDeVenda).toFixed(2); ;

                $('.retorno').html('<hr>' + 'Custo Total: R$' + custoTotal + '<br>Lucro Total: R$' + lucroLiquido + ' || ' + lucroLiquidoPorcentagem  + '%');

            }

            // Attach the sumValues function to the change event of the input fields
            $('#valorVenda, #TaxaML, #valorCompraProduto').on('input', sumValues);
        });
    
</script>


</html>
