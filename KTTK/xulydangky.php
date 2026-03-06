
    <?php
    session_start();
    
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $hoten = $_POST['hoten'] ?? '';
        $gioitinh = $_POST['gioitinh'] ?? '';
        

    $anh = $_FILES['anhdaidien'];
    $ext = strtolower(pathinfo($anh['name'], PATHINFO_EXTENSION));


    if(!in_array($ext, ['png','jpg','jpeg'])){
        die("Chỉ chấp nhận file ảnh định dạng PNG, JPG, JPEG");
    }

    $xyz = rand(100,999);
    $newname = pathinfo($anh['name'], PATHINFO_FILENAME);
    $tenfile = $newname ."_". $xyz . "." . $ext;

    move_uploaded_file($anh['tmp_name'], "image/" . $tenfile);

    $_SESSION['Register'] = [
        'email' => $email,
        'password' => $password,
        'hoten' => $hoten,
        'gioitinh' => $gioitinh,
        'anhdaidien' => $tenfile
    ];

    echo "Email: $email <br>";
    echo "Họ tên: $hoten <br>";
    echo "Giới tính: $gioitinh <br>";
    echo "<img src='image/$tenfile' width='100' height='100'><br>";
    echo "Chúc mừng bạn đã đăng ký thành công";
    echo "<a href='dangnhap.php'>Click vào đây để đăng nhập </a>"
  ?>
