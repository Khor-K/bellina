<?php
include "../import/page_start.php";
?>
<style>
    @media only screen and (min-width: 800px) {
        .card {
            width: 40%;
            min-width: 800px;
        }
    }
    @media only screen and (max-width: 800px) {
        .card {
            width: 100%;
        }
    }
</style>
    <div class="d-flex justify-content-center">
        <div class="card" >
            <h5 class="card-header">Создание заявки</h5>
            <div class="card-body">
                <form id="ajax_form" action="javascript:void(null);" onsubmit="createRequest()">
                    <div class="mb-3">
                        <label for="selectRequestType" class="form-label">Тип заявки</label>
                        <select class="form-select" id="selectRequestType" aria-label="Тип заявки" required>
                            <?php
                            $options = [1 => 'Постройка жилья', 2 => 'Аренда жилья', 3 => 'Покупка жилья', 4 => 'Сдача жилья в аренду', 5 => 'Продажа жилья'];

                            $array_key = array_keys($options);
                            $array_value = array_values($options);

                            for ($i = 1; $i <= max($array_key); $i++) {
                                print '<option value="' . $array_key[$i - 1] . '" ' .
                                    ((($_GET['request_type'] ?? '1') == $i) ? 'selected' : '') .
                                    '>' . $array_value[$i - 1] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="inputPhoneNumber" class="form-label">Номер телефона</label>
                        <input type="text" class="form-control" id="inputPhoneNumber">
                        <script>
                            $(function(){
                                $("#inputPhoneNumber").mask("+7(999) 999-9999");
                            });
                        </script>
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Добавьте описание своей заявки" id="inputDescription"></textarea>
                        <label for="inputDescription">Описание заявки</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="../import/ajaxFormData.js"></script>

<?php include "../import/footer.php"; ?>