<?php
include "db.php";
$result = mysqli_query($mysql, "SELECT * FROM `0`");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>

    <div class="container mt-4">
        <!-- Форма поиска -->
        <form id="searchForm">
            <div class="form-row">

                <div class="form-group col-md-6">
                    <label for="name">Наименование</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>

                <div class="form-group col-md-5">
                    <label for="adminDistrict">Административный округ</label>
                    <input type="text" class="form-control" id="adminDistrict" name="adminDistrict">
                </div>
            </div>

            <div class="form-row">

                <div class="form-group col-md-3">
                    <label for="seatsFrom">Посадочных мест от</label>
                    <input type="number" class="form-control" id="seatsFrom" name="seatsFrom">
                </div>
                <div class="form-group col-md-3">
                    <label for="seatsTo">Посадочных мест до</label>
                    <input type="number" class="form-control" id="seatsTo" name="seatsTo">
                </div>

                <div class="form-group col-md-3">
                    <label for="isNetwork">Является сетевым</label>
                    <select class="form-control" id="isNetwork" name="isNetwork">
                        <option value="">Не выбрано</option>
                        <option value="1">Да</option>
                        <option value="0">Нет</option>
                    </select>
                </div>

                <div class="form-group col-md-2">
                    <label for="district">Район</label>
                    <select class="form-control" id="district" name="district">
                    </select>
                </div>
            </div>
            < <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="startDate">С какого числа</label>
                    <input type="text" class="form-control datepicker" id="startDate" name="startDate">
                </div>

                <div class="form-group col-md-3">
                    <label for="endDate">По какое число</label>
                    <input type="text" class="form-control datepicker" id="endDate" name="endDate">
                </div>

                <div class="form-group col-md-3">
                    <label for="socialDiscounts">Соц.скидки</label>
                    <select class="form-control" id="social Discounts" name="socialDiscounts">
                        <option value="">Не выбрано</option>
                        <option value="1">Есть</option>
                        <option value="0">Нет</option>
                    </select>
                </div>
    </div>

    <button type="submit" class="btn btn-primary">Найти</button>
    </form>

    <!-- Таблица для результатов поиска -->
<table class="table mt-4">
    <thead>
        <tr>
            <th scope="col">Наименование</th>
            <th scope="col">Вид объекта</th>
            <th scope="col">Адрес</th>
            <th scope="col">Действия</th>
        </tr>
    </thead>
    <tbody id="resultsBody">
        <?php 
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?php echo $row['Name']; ?></td>
                <td><?php echo $row['TypeObject']; ?></td>
                <td><?php echo $row['Address']; ?></td>
                <td> <button class="btn btn-danger delete-btn" data-id="<?php echo $row['id']; ?>">Удалить</button></td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
</div>

    <div class="container mt-4">
        <div class="pagination">
<div class=" form-row">
            <button class="btn first-page-btn btn-primary form-group col-md-4" data-page="1">Первая страница</button>
            <div class="pages-btn ">
                <button class="btn active form-group col-md-2" data-page="1">1</button>
                <button class="btn form-group col-md-2" data-page="2">2</button>
                <button class="btn form-group col-md-2" data-page="3">3</button>
            </div>
            <button class="btn last-page-btn btn-primary  form-group col-md-4">Последняя страница</button>
        </div>
            <button class="bth bth-primary form-group col-md-3"> Добавить предприятие</button>
            </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
</body>
<footer>
    <div class="container">

        <div class="section-title">
          <center>Департамент торговли и услуг города Москвы</center>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bi bi-envelope"></i>
              <p>email@email.com</p>
            </div>
          </div>

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bi bi-map"></i>
              <li>data.mos.ru</li>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bi bi-phone"></i>
              <i class="bi bi-telegram"></i>
            </div>
          </div>

        </div>

</div>
</footer>

</html>