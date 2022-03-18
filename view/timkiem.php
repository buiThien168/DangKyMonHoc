<?php
			$sx='';
			if(isset($_POST['sx'])){
				$sx=$_POST['sx'];
			}
			switch ($sx) {
					case 'price-ascending':
						$sx1=" ORDER BY DonGia ASC ";
						break;
					case 'price-descending':
						$sx1=" ORDER BY DonGia DESC ";
						break;
					default:
						$sx1=" ";
						break;
				
			}
            $tukhoa=$_POST['search'];
            // lấy sản phẩm cần tìm
            $sql="SELECT * FROM `sinhvien` WHERE `username`  LIKE N'%".$tukhoa."%' ".$sx1;
            $kq=mysqli_query($conn,$sql);

        ?>