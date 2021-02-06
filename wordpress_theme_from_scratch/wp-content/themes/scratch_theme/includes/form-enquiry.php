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
    let enquiry = document.getElementById('enquiry');
    enquiry.addEventListener('submit', (e) => {
        e.preventDefault();

        let url = '<?= admin_url('admin-ajax.php') ?>';

        let formData = new FormData(enquiry);
        formData.append('action', 'enquiry');
        const params = new URLSearchParams(formData);
        // console.log(params);
        // let obj = {};
        // for (let [key, value] of formData.entries()) {
        //     obj[key] = value;
        // }
        // console.log(obj);

        async function sendPostRequest(url) {
            let response = await fetch(url, {
                method: 'POST',
                credentials: 'same-origin',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'Cache-Control': 'no-cache',
                },
                body: params,
            });

            try {
                return await response.json();
            } catch(error) {
                return 'Error: ' + error;
            }
        }
        sendPostRequest(url)
        .then(data => console.log(data.data));
    });
</script>