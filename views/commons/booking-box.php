<section class="booking-box none">
  <!-- <div class="layer none"></div> -->
  <div class="block gray booking-box-content" >
    <div class="container">
      <div class="row" style="position: relative; z-index: 1005">
        <div class="booking-box-close"><p><span>Close</span></p></div>
        <div class="col-md-12">
          <div class="appointment-box">
            <!-- <div class="appointment-title">
              <div class="title-inner">
                <h3>Đặt Lịch Ngay Hôm Nay</h3>
              </div>
            </div> -->
            <form class="appointment-form" action = "<?php echo BASE_URL.'send-mail'?>" method ="POST">
              <div class="appointment-fields">
                <div class="row">
                  <div class="col-md-6"><input name="name" type="text" placeholder="Họ và tên" require/></div>
                  <div class="col-md-6">
                    <select class="select-service" name="service">
                      <option value="0">Chọn dịch vụ</option>
                      <option value="Làm móng tay - móng chân">Làm móng tay / móng chân</option>
                      <option value="Uốn mi">Uốn mi</option>
                      <option value="Nail box">Nail box</option>
                    </select>
                  </div>
                  <div class="col-md-3"><input name="date" type="text" placeholder="01/01/2021"/></div>
                  <div class="col-md-3" >
                    <select name="time" class="select-time" require>
                      <option value="0">Chọn thời gian</option>
                      <option value="09h00">09:00</option>
                      <option value="09h30">09:30</option>
                      <option value="10h00">10:00</option>
                      <option value="10:30">10:30</option>
                      <option value="11:00">11:00</option>
                      <option value="11:30">11:30</option>
                      <option value="12:00">12:00</option>
                      <option value="12:30">12:30</option>
                      <option value="13:00">13:00</option>
                      <option value="13:30">13:30</option>
                      <option value="14:00">14:00</option>
                      <option value="14:30">14:30</option>
                      <option value="15:00">15:00</option>
                      <option value="15:30">15:30</option>
                      <option value="16:00">16:00</option>
                      <option value="16:30">16:30</option>
                      <option value="17:00">17:00</option>
                      <option value="17:30">17:30</option>
                      <option value="18:00">18:00</option>
                      <option value="18:30">18:30</option>
                      <option value="19:00">19:00</option>
                      <option value="19:30">19:30</option>
                      <option value="20:00">20:00</option>
                      <option value="20:30">20:30</option>
                    </select>
                  </div>
                  <div class="col-md-6"><input name="phone" type="text" placeholder="Số điện thoại"/></div>
                  <div class="col-md-6"><input name="email" type="email" placeholder="Email" /></div>
                </div>
              </div>
              <div class="appointment-bottom">
                <div class="social-links">
                  <a href="#" title=""><i class="fa fa-skype"></i></a>
                  <a href="#" title=""><i class="fa fa-twitter"></i></a>
                  <a href="#" title=""><i class="fa fa-linkedin"></i></a>
                  <a href="#" title=""><i class="fa fa-facebook"></i></a>
                </div>
                <button class="lemon-btn confirm-button" type="submit" title="">Đặt lịch ngay <i class="fa fa-angle-double-right"></i></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>