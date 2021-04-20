<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Кошик</title>
</head>
<body>

    <?php require 'blocks/header.php' ?>    

    <h2 style="margin-left: 30px; margin-top:20px;">Кошик</h2>

    <section class="page">
        <?php session_start();
        if (!isset($_SESSION['cart'])):?>

        <h3>Порожньо...</h3>

        <?php else :?>
        <table>
            <?php $temp=$_SESSION['cart'];
                foreach($temp as $id=>$kol): ?>
                <tr id="<?=$id?>">
                    <td>
                        <?php 
                            $query ="SELECT name FROM food WHERE id='$id'";
 
                            $result = mysqli_query($link, $query); 
                            if($result)
                            {
                                while ($row = mysqli_fetch_row($result)) {
                                    echo "<li>$row[0]</li>";
                                }                                
                            }
                        ?>
                    </td>
                    <td><input type="number" class="count-product border" id="<?=$id?>" value="<?=$kol?>"></td>
                    <td><button class="butn__del btn-default btn-del" id="<?=$id?>">Х</button></td>
                </tr>
                <?php endforeach; ?>
        </table>
        <button class="butn"> Замовити</button>        
        <?php endif; ?>    
        
        

        <script src="jquery-2.2.3.min.js"></script>   
        

        <script>
            //изменение количества
                $('.count-product').change(function () { //изменение содержимого инпута     
                var col = $(this).val(); //получаем количество
                if (col<1){ col = 1; $(this).val(1); } //если ввели меньше 1 установим 1
                var id = $(this).attr('id'); //получаем id товара
                    $.ajax({//аякс-запрос
                    type: "POST",//метод
                    url: 'cartamount.php',//куда передаем
                    data: {col_tov: col, id_tov: id},//данные
                    success: function() {//получаем результат
                    //тут можно пересчитать сумму
                        }
                    });
                });
                //удаление товара
                $('.btn-del').click(function () { //клик на кнопку     
                var id = $(this).attr('id'); //получаем id товара
                    $.ajax({//аякс-запрос
                    type: "POST",//метод
                    url: 'cartdel.php',//куда передаем
                    data: {id_tov: id},//данные
                    success: function(data) {//получаем результат
                            //тут можно пересчитать сумму
                            $('tr#'+id).css('display', 'none');//скрываем строку таблицы
                        }
                    });
                });

        </script>
     </section>

    <?php require 'blocks/futter.php' ?>

</body>
</html>