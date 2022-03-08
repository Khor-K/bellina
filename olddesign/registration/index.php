<?php require "../import/page_start.php" ?>
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
            <h5 class="card-header">Регистрация</h5>
            <div class="card-body">
                <form class="form" id="ajax_form" action="javascript:void(null);" onsubmit="registration()">
                    <div class="mb-3">
                        <label for="inputPhoneNumber" class="form-label">Номер телефона</label>
                        <input type="tel" class="form-control" name="inputPhoneNumber" required/>
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">Пароль</label>
                        <input type="password" class="form-control" name="inputPassword">
                        <div id="passwordHelp" class="form-text">Минимум 8 символов в пароле</div>
                    </div>
                    <button name="btn" id="btn" class="btn btn-primary">Зарегистрироваться</button>
                </form>
            </div>
        </div>
    </div>


    <div id="results"></div>

    <script src="../import/ajaxFormData.js"></script>

<?php require "../import/footer.php" ?>