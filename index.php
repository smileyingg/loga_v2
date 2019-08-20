<!DOCTYPE html>
<html>
<?php include 'head.php'; ?>
<style>
  .h-form .form-body .h-form-label {
    height: auto !important;
  }
</style>

<body>
  <?php include 'header.php'; ?>
  <div class="container-fluid">
    <div class="col s12">
      <h4 style="text-align:center;">ร่วมทำแบบสำรวจเพียง 3 นาที ลุ้นรับของที่ระลึก</h4>
      <h4 style="text-align:center;">สัมมนาเพื่อเพิ่มยอดขายร้านทำเล็บ เพื่อเจ้าขายกิจการ และช่างทำเล็บ</h4><br />
      <h5 style="margin-left:20px;">โปรดเลือกเพียงคำตอบที่ตรงกับสภาพกิจการท่านมากที่สุด เพียงคำตอบเดียว</h5>
      <div class="card">

        <!-- Start Form -->
        <iframe id="iframe" name="iframe" src="#" style="width:0;height:0;border:0px solid #fff;"></iframe>
        <form id="form_survey" method="POST">

          <!-- Q1  -->
          <div class="card-header">
            <h5>บทบาทของท่านคือ <span class="required" style="color:red;">*</span></h5>
          </div>

          <div class="card-body">
            <div class="row" style="padding:20px;">
              <div class="col" style="font-size:20px;">
                <label>
                  <input class="with-gap" name="q1" id="q1_1" type="radio" value="เจ้าของร้านมีร้านของตนเอง" required />
                  <span for="">เจ้าของร้านมีร้านของตนเอง</span>
                </label><br />
                <label>
                  <input class="with-gap" name="q1" id="q1_2" type="radio" value="เจ้าของร้านกำลังวางแผนจะเปิดร้าน" required />
                  <span for="">เจ้าของร้านกำลังวางแผนจะเปิดร้าน</span>
                </label><br />
                <label>
                  <input class="with-gap" name="q1" id="q1_3" type="radio" value="ช่างประจำร้าน" required />
                  <span for="">ช่างประจำร้าน</span>
                </label><br />
                <label>
                  <input class="with-gap" name="q1" id="q1_4" type="radio" value="พนักงานประจำร้าน" required />
                  <span for="">พนักงานประจำร้าน</span>
                </label><br />
              </div>
            </div>
          </div>
          <!-- End Q1 -->

          <!-- Q2  -->
          <div class="card-header">
            <h5>ขนาดร้านทำเล็บ <span class="required" style="color:red;">*</span></h5>
          </div>

          <div class="card-body">
            <div class="row" style="padding:20px;">
              <div class="col" style="font-size:20px;">
                <label>
                  <input class="with-gap" name="q2" id="q2_1" type="radio" value="ร้านขนาดเล็ก รับลูกค้าได้ครั้งละไม่เกิน 2 ที่นั่ง" required />
                  <span for="">ร้านขนาดเล็ก รับลูกค้าได้ครั้งละไม่เกิน 2 ที่นั่ง</span>
                </label><br />
                <label>
                  <input class="with-gap" name="q2" id="q2_2" type="radio" value="ร้านขนาดกลาง รับลูกค้าได้ครั้งละ 2-8 ที่นั่ง" required />
                  <span for="">ร้านขนาดกลาง รับลูกค้าได้ครั้งละ 2-8 ที่นั่ง</span>
                </label><br />
                <label>
                  <input class="with-gap" name="q2" id="q2_3" type="radio" value="ร้านขนาดใหญ่/พรีเมี่ยม รับลูกค้าได้มากกว่า 8 ที่นั่ง" required />
                  <span for="">ร้านขนาดใหญ่/พรีเมี่ยม รับลูกค้าได้มากกว่า 8 ที่นั่ง</span>
                </label><br />
              </div>
            </div>
          </div>
          <!-- End Q2  -->

          <!-- Q3  -->
          <div class="card-header">
            <h5>ราคาเริ่มต้นสำหรับค่าบริการ <span class="required" style="color:red;">*</span></h5>
          </div>

          <div class="card-body">
            <div class="row" style="padding:20px;">
              <div class="col" style="font-size:20px;">
                <label>
                  <input class="with-gap" name="q3" id="q3_1" type="radio" value="ต่ำกว่า 100 บาท" required />
                  <span for="">ต่ำกว่า 100 บาท</span>
                </label><br />
                <label>
                  <input class="with-gap" name="q3" id="q3_2" type="radio" value="100 - 200 บาท" required />
                  <span for="">100 - 200 บาท</span>
                </label><br />
                <label>
                  <input class="with-gap" name="q3" id="q3_3" type="radio" value="200 - 500 บาท" required />
                  <span for="">200 - 500 บาท</span>
                </label><br />
                <label>
                  <input class="with-gap" name="q3" id="q3_4" type="radio" value="500 บาทขึ้นไป" required />
                  <span for="">500 บาทขึ้นไป</span>
                </label><br />
              </div>
            </div>
          </div>
          <!-- End Q3  -->

          <!-- Q4 -->
          <div class="card-header">
            <h5>จำนวนลูกค้าที่เข้าร้าน <span class="required" style="color:red;">*</span></h5>
          </div>

          <div class="card-body">
            <div class="row" style="padding:20px 50px;font-size:20px;">
              <label for="">ตั้งแต่เวลาเปิด-ปิดร้าน ประมาณการจำนวนลูกค้าต่อวัน</label>&nbsp;&nbsp;
              <input type="text" id="q4" name="q4" class="form-control" style="width:500px;" required>
            </div>
          </div>
          <!-- End Q4 -->

          <!-- Q5  -->
          <div class="card-header">
            <h5>ตลอดสัปดาห์ วันใดที่ลูกค้าเข้าร้านมากที่สุด <span class="required" style="color:red;">*</span></h5>
          </div>

          <div class="card-body">
            <div class="row" style="padding:20px;">
              <div class="col" style="font-size:20px;">
                <label>
                  <input class="with-gap" name="q5" id="q5_1" type="radio" value="เสาร์" required />
                  <span for="">เสาร์</span>
                </label><br />
                <label>
                  <input class="with-gap" name="q5" id="q5_2" type="radio" value="อาทิตย์" required />
                  <span for="">อาทิตย์</span>
                </label><br />
                <label>
                  <input class="with-gap" name="q5" id="q5_3" type="radio" value="จันทร์" required />
                  <span for="">จันทร์</span>
                </label><br />
                <label>
                  <input class="with-gap" name="q5" id="q5_4" type="radio" value="อังคาร" required />
                  <span for="">อังคาร</span>
                </label><br />
                <label>
                  <input class="with-gap" name="q5" id="q5_5" type="radio" value="พุธ" required />
                  <span for="">พุธ</span>
                </label><br />
                <label>
                  <input class="with-gap" name="q5" id="q5_6" type="radio" value="พฤหัสบดี" required />
                  <span for="">พฤหัสบดี</span>
                </label><br />
                <label>
                  <input class="with-gap" name="q5" id="q5_7" type="radio" value="ศุกร์" required />
                  <span for="">ศุกร์</span>
                </label><br />
              </div>
            </div>
          </div>
          <!-- End Q5  -->

          <!-- Q6  -->
          <div class="card-header">
            <h5>ช่วงใดของเดือนที่ลูกค้าเข้าร้านมากที่สุด <span class="required" style="color:red;">*</span></h5>
          </div>

          <div class="card-body">
            <div class="row" style="padding:20px;">
              <div class="col" style="font-size:20px;">
                <label>
                  <input class="with-gap" name="q6" id="q6_1" type="radio" value="ต้นเดือน" required />
                  <span for="">ต้นเดือน</span>
                </label><br />
                <label>
                  <input class="with-gap" name="q6" id="q6_2" type="radio" value="สิ้นเดือน" required />
                  <span for="">สิ้นเดือน</span>
                </label><br />
                <label>
                  <input class="with-gap" name="q6" id="q6_3" type="radio" value="กลางเดือน" required />
                  <span for="">กลางเดือน</span>
                </label><br />
                <label>
                  <input class="with-gap" name="q6" id="q6_4" type="radio" value="ตลอดทั้งเดือน" required />
                  <span for="">ตลอดทั้งเดือน</span>
                </label><br />
              </div>
            </div>
          </div>
          <!-- End Q6  -->

          <!-- Q7  -->
          <div class="card-header">
            <h5>วิธีที่ท่านใช้บ่อยที่สุดเพื่อเพิ่มลูกค้า <span class="required" style="color:red;">*</span></h5>
          </div>

          <div class="card-body">

            <div style="font-size:20px;padding:20px;">
              <label>
                <input class="with-gap" name="q7" id="q7_1" type="radio" value="จัดโปรโมชั่นส่วนลด" onclick="myFunctionq7()" required />
                <span for="">จัดโปรโมชั่นส่วนลด</span>
              </label><br />
              <label>
                <input class="with-gap" name="q7" id="q7_2" type="radio" value="โฆษณาทางเฟซบุ๊ก และ/หรือทางไลน์" onclick="myFunctionq7()" required />
                <span for="">โฆษณาทางเฟซบุ๊ก และ/หรือทางไลน์</span>
              </label><br />
              <label>
                <input class="with-gap" name="q7" id="q7_3" type="radio" value="ใช้ระบบสะสมแต้มเพื่อใช้บริการฟรี หรือรับส่วนลดเมื่อใช้บริการครบจำนวนที่กำหนด" onclick="myFunctionq7()" required />
                <span for="">ใช้ระบบสะสมแต้มเพื่อใช้บริการฟรี หรือรับส่วนลดเมื่อใช้บริการครบจำนวนที่กำหนด</span>
              </label><br />
              <label>
                <div class="controls form-inline">
                  <input class="with-gap" name="q7" id="q7_4" type="radio" value="อื่นๆ (โปรดระบุ)" onclick="myFunction()" required />&nbsp;
                  <label for="">อื่นๆ (โปรดระบุ)</label>&nbsp;
                  <input type="text" class="form-control input-small" name="txt_area_q7_4" id="txt_area_q7_4" style="display:none">
                </div>
              </label><br />
            </div>
          </div>
          <!-- End Q7  -->

          <!-- Q8  -->
          <div class="card-header">
            <h5>ท่านมีระบบสะสมแต้มให้ลูกค้า โดย <span class="required" style="color:red;">*</span></h5>
          </div>

          <div class="card-body">
            <div class="row" style="padding:20px;">
              <div class="col" style="font-size:20px;">
                <label>
                  <input class="with-gap" name="q8" id="q8_1" type="radio" value="บัตรสะสมแสตมป์เป็นครั้ง" required />
                  <span for="">บัตรสะสมแสตมป์เป็นครั้ง</span>
                </label><br />
                <label>
                  <input class="with-gap" name="q8" id="q8_2" type="radio" value="บัตรพลาสติกสแกนบาร์โค้ดสะสมในระบบ" required />
                  <span for="">บัตรพลาสติกสแกนบาร์โค้ดสะสมในระบบ</span>
                </label><br />
                <label>
                  <input class="with-gap" name="q8" id="q8_3" type="radio" value="แอปพลิเคชันทางมือถือ" required />
                  <span for="">แอปพลิเคชันทางมือถือ</span>
                </label><br />
                <label>
                  <input class="with-gap" name="q8" id="q8_4" type="radio" value="ยังไม่มีการให้สะสมแต้มให้ลูกค้า" required />
                  <span for="">ยังไม่มีการให้สะสมแต้มให้ลูกค้า</span>
                </label><br />
              </div>
            </div>
          </div>
          <!-- End Q8  -->

          <!-- Q9  -->
          <div class="card-header">
            <h5>ขอบพระคุณที่สละเวลาทำแบบสำรวจนี้ เพื่อเข้าร่วมสัมมนาเกี่ยวกับร้านทำเล็บฟรี โปรดกรอกอีเมล/เบอร์โทรติดต่อ <span class="required" style="color:red;">*</span></h5>
          </div>

          <div class="card-body">
            <div class="row" style="padding:20px;">
              <div class="col" style="font-size:20px;">
                <div class="col-sm-6">
                  <div class="input-group mx-sm-5 mb-3">
                    <div class="input-group-prepend">
                      <span style="width: 120px;" class="input-group-text" id="inputGroup-sizing-default">อีเมล</span>
                    </div>
                    <input class="form-control" id="q9_email" name="q9_email" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="example@example.com" type="email" pattern="[a-zA-Z0-9!#$%&amp;'*+\/=?^_`{|}~.-]+@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*" title="กรุณาตรวจสอบรูปแบบ E-mail" required />
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="input-group mx-sm-5 mb-3">
                    <div class="input-group-prepend">
                      <span style="width: 120px;" class="input-group-text" id="inputGroup-sizing-default">โทรศัพท์</span>
                    </div>
                    <input type="tel" class="form-control" id="q9_telephone" name="q9_telephone" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="xxxxxxxxxx" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" title="กรุณากรอกเบอร์โทรศัพท์ให้ถูกต้อง" required>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Q9  -->


          <!-- Button submit -->
          <div class="card-body">
            <div class="form-action" style="text-align:center;">
              <button class="btn btn-outline-success" type="submit" name="submit" value="submit">ส่งแบบสอบถาม</button>
            </div>
          </div>

        </form>
        <!-- End form -->

      </div>
    </div>
  </div><br />
  <!-- End container-fluid -->

  <?php include 'footer.php'; ?>

  <!-- script submit -->
  <script>
    function myFunction() {
      document.getElementById('txt_area_q7_4').style.display = "";
      document.getElementById('txt_area_q7_4').focus();
      // document.getElementById('txt_area_q7_4').disabled = false;
      // document.getElementById('txt_area_q7_4').focus();
    }

    function myFunctionq7() {
      document.getElementById('txt_area_q7_4').style.display = "none";
      document.getElementById('txt_area_q7_4').value = "";
      // document.getElementById('txt_area_q7_4').disabled = true;
      // document.getElementById('txt_area_q7_4').value =" ";

    }
    $("#form_survey").on("submit", function(e) {

      e.preventDefault();

      $.ajax({
        url: "checksubmit.php",
        type: "post",
        data: $(this).serialize(),
        success: function(result) {
          jQuery("#form_survey input[type=radio]").prop("checked", false);
          console.log("result= " + result);
          if (result == "1") {
            swal({
              position: 'center',
              type: 'success',
              title: 'บันทึกข้อมูลเรียบร้อย',
              showConfirmButton: true,
            }).then((result) => {
              if (result.value) {
                window.location = "thankyou.php";
              }
            });
          } else {
            swal({
              position: 'center',
              type: 'warning',
              title: 'กรุณาใส่คำตอบให้ครบ',
              showConfirmButton: true,
            });
          }
        },
        error: function(xhr, ajaxOptions, thrownError) {
          swal(
            'เกิดข้อผิดพลาด!',
            'ลองอีกครั้ง!',
            'error'
          );
        }
      });

    });
  </script>
  <!-- end script submit -->
</body>

</html>