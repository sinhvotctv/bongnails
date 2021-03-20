<section>
  <div class="block gray">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="lemon-contact">
            <div class="contact-img"><img src="./public/images/gioi-thieu/gioi-thieu-bong-nail.jpg" alt="giới thiệu salon Bông Nails" /></div>
            <div class="contact-form">
              <div class="contact-form-title">
                <div class="contact-title-inner">
                  <h3>LIÊN HỆ BÔNG NAILS</h3>
                </div>
              </div>
              <p>Câu hỏi ? Bình luận ? Chúng tôi rất muốn nghe phản hồi từ Quý khách về dịch vụ tai Bông Nails. </p>
              <form class="simple-form">
                <input type="text" placeholder="Họ và tên" />
                <input type="email" placeholder="Email" />
                <textarea placeholder="Nội dung bình luận"></textarea>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section>
  <div class="block remove-gap  gray">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="contact-boxes">
            <div class="row">
              <div class="col-md-4">
                <div class="contact-box">
                  <span><i class="fa fa-home"></i></span>
                  <div class="contact-info">
                    <strong>Address:</strong>
                    <p><?php echo $introduceData[0]["site_address"]?></p>
                  </div>
                </div><!-- Contact Box -->
              </div>
              <div class="col-md-4">
                <div class="contact-box">
                  <span><i class="fa fa-phone"></i></span>
                  <div class="contact-info">
                    <strong>Phone: </strong>
                    <p><?php echo $introduceData[0]["site_phone"]?></p>
                  </div>
                </div><!-- Contact Box -->
              </div>
              <div class="col-md-4">
                <div class="contact-box">
                  <span><i class="fa fa-home"></i></span>
                  <div class="contact-info">
                    <strong>Email Address:</strong>
                    <p><?php echo $introduceData[0]["site_email"]?></p>
                  </div>
                </div><!-- Contact Box -->
              </div>
            </div>
          </div><!-- Contact Boxes -->
        </div>
      </div>
    </div>
  </div>
</section>