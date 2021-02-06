<form id="enquiry" method="post">
    <h2>Envia sua mensagem</h2>
    <div class="form-group row">
        <div class="col-lg-6">
            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="Nome">
        </div>
        <div class="col-lg-6">
            <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Sobrenome">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-6">
            <input type="text" name="email" id="email" class="form-control" placeholder="E-mail">
        </div>
        <div class="col-lg-6">
            <input type="tel" name="phone" id="phone" class="form-control" placeholder="Telefone">
        </div>
    </div>

    <div class="form-group">
        <textarea name="enquiry" class="form-control" placeholder="Mensagem"></textarea>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-success btn-block">Enviar mensagem</button>
    </div>

</form>

<script>
    (() => {
        let enquiry = document.getElementById('enquiry');
        enquiry.addEventListener('submit', (e) => {
            e.preventDefault();
            let form = new FormData(enquiry);
            let obj = {};
            for (let [key, value] of form.entries()) {
                obj[key] = value;
            }

            let url = '<?=admin_url('admin-ajax.php')?>';
            console.log(obj);
            console.log(url);
        });
    })();
</script>