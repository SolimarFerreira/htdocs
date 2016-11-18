function currencyMask(element){
    $(element).maskMoney({
        thousands : '.',
        decimal : ',',
        allowZero: true,
        allowNegative : false
    });
}
$(function () {
    currencyMask('.currency');

    //Date picker
    $('.datas').datepicker({
        autoclose: true ,
        language: 'pt-BR'
    });

    $('#botaosalvar').on('click' , function(){
        //$('#table_produtos tbody').remove();
        var ids = new Array();

        $('input[name="products[]"]:checked').each(function(k , v){
            ids.push(v.value);
        });

        $.ajax({
            url : '/produtos/getAll',
            method : 'post',
            dataType : 'json',
            data : {'ids' : ids}
        }).done(function(r){
            if(!r.error){
                $produtosSelecionados = '';
                var list = new Array();
                //$('#table_produtos tbody').remove();
                $.each(r.content , function(k , v){
                    list.push(v);

                    $('.table_produtos:eq(1) tbody').append('<tr><td>' + v.nome +'</td>' +
                        '<td>' + v.descricao+'</td>' +
                        '<td><input type="number" name="quantidade" onchange="txtChanged()" min="1" max="500"></td>' +
                        '<td><input type="text" class="currency soma"  id="soma" name="valor"></td></tr>');
                })
                $produtosSelecionados = list;
                console.log($produtosSelecionados);
            }
            currencyMask('.currency');
            $('.table_produtos').show();
            $('#myModal').modal('hide');
        });
    });

    $('#salvarteste').on('click' , function(){
        alert('etetetfhfu');
    });



    // $('#soma').on('click' , function(){
    //     alert('somou');
    // });

    $('.openModal').on('click' , function(){
        $('.modal table').show();
    });
});

function txtChanged()
{
    var bla = $('#txt_name').val();
    alert('somou');
}