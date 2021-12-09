<?php include 'header.php'; ?>
<link rel="stylesheet" href="css/contact.css">


    <section class="map">
        <div class="card text-center m-5 shadow">
            <div class="card-body">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.6570604824014!2d105.78272751548381!3d21.04640359255043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135abb158a2305d%3A0x5c357d21c785ea3d!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyDEkGnhu4duIEzhu7Fj!5e0!3m2!1svi!2s!4v1638970454092!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>
    <hr>
    <section class=" card-deck mx-0 mb-5 mt-4 justify-content-between">
        <div class="card shadow email">
            <div class="card-head text-center"><i class="fa fa-envelope icon"></i></div><hr>    
            <div class="card-body">_____@gmail.com</div>
        </div>
        <div class="card shadow phone text-center">
            <div class="card-head"><i class="fa fa-phone icon"></i></div>  <hr>
            <div class="card-body">19001009</div>
        </div>
        <div class="card shadow address">
            <div class="card-head text-center"><i class="fa fa-home icon"></i></div>  <hr>
            <div class="card-body">EPU DKM</div>
        </div>
    
    </section>
    <hr>

    <section class="my-4">
        
        <div class="container justify-content-center">
        <div class="row mx-5">
        <div class="col-md-12">
        <h2 class="text-secondary bg-light text-center py-2 mb-3">Liên hệ</h2>
        <form action="mailto.php"  method="POST">
            <div class="form-group">
                <label for="name">Họ và tên</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="email">Địa chỉ E-mail</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="E-mail Id">
            </div>
            <div class="form-group">
                <label for="msg">Lời nhắn</label>
                <textarea name="msg" id="msg" class="form-control" rows="5" placeholder="Message"></textarea>
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary w-50">Gửi</button>
            </div>

        </form>
        </div>
        </div></div>
    </section>


<?php include 'footer.php'; ?>