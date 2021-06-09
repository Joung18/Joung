<?php

include('h.php');
//1. เชื่อมต่อ database:
include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง tb_member:
$query = "SELECT * FROM tbl_type ORDER BY type_id asc" or die("Error:" . mysqli_error());
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:

// //row = tung
// //col = non

// $sql = "SELECT * FROM tbl_unit ORDER BY unit_id asc" or die("Error:" . mysqli_error());

// $rs = mysqli_query($con, $sql);
?>
<div class="container">
  <div class="row">
      <form  name="addproduct" action="product_add_db.php" method="POST" enctype="multipart/form-data"  class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-5">
            <p> ຊື່ສິນຄ້າ 
            <input type="text"  name="p_name" class="form-control" required placeholder="ຊື່ສິນຄ້າ" />
          </div>
        </div></p>

        <div class="form-group">
          <div class="col-sm-5">
            <p> ປະເພດສິນຄ້າ 
            <select name="type_id" class="form-control" required>
              <option value="type_id">ປະເພດສິນຄ້າ</option>
              <?php foreach($result as $results){?>
              <option value="<?php echo $results["type_id"];?>">
                <?php echo $results["type_name"]; ?>
              </option>
              <?php } ?>
            </select>
          </div></p>
        </div>

        <div class="form-group">
          <div class="col-sm-5">
            <p> ລາຄາຂາຍ 
            <input type="text"  name="p_price" class="form-control" required placeholder="ລາຄາຂາຍ"/>
        </div></p>

        <div class="form-group">
          <div class="col-sm-5">
            <p> ຈຳນວນ
            <input type="text"  name="p_qty" class="form-control" required placeholder="ຈຳນວນ" />
          </div>
        </div></p>

        <div class="form-group">
          <div class="col-sm-5">
            <p> ຊະນິດສິນຄ້າ
            <select name="unit_id" class="form-control" required>
              <option value="unit_id">ຊະນິດສິນຄ້າ</option>
              <!-- <php foreach($rs as $rss){?> -->
              <!-- <option value="<php echo $rss["unit_id"];?>"> -->
                <!-- <php echo $rss["unit_name"]; ?> -->
                <option value="">ແກັດ</option>
                <option value="">ແພັກ</option>
                <option value="">ອັນ</option>
              </option>
              <!-- <php } ?> -->
            </select>
          </div>
        </div></p>

        <div class="form-group">
          <div class="col-sm-5">
            <p> ລາຍລະອຽດສິນຄ້າ 
             <textarea  name="p_detail" rows="5" cols="60"></textarea>
          </div>
        </div></p>

     
        <div class="form-group">
          <div class="col-sm-5">
            <p> ຮູບສິນຄ້າ 
            <input type="file" name="p_img" id="p_img" class="form-control" />
          </div>
        </div></p>
        <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-success" name="btnadd"> ບັນທຶກ </button>
            
          </div>
        </div>
      </form>
    </div>
  </div>
