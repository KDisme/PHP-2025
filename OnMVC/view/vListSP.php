<?php
   
    include_once("controller/cSanpham.php");
    $p = new cSanpham();
    $list = $p->cGetSP();
?>

<table border="1" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>STT</th>
            <th>Ten sp</th>
            <th>Gia Goc</th>
            <th>Gia Ban</th>
            <th>Hinh Anh</th>
            <th>Thuong hieu</th>
            <th>Thao tac</th>
        </tr>
    </thead>
    <tbody>
            <?php
                $stt = 0; foreach($list as $product) : $stt++ 
            ?>
            <tr>
                <td><?=$product['MaSP']?></td>
                <td><?=$product['TenSP']?></td>
                <td><?=$product['GiaGoc']?></td>
                <td><?=$product['GiaBan']?></td>
                <td><img src="image/<?=$product['HinhAnh']?> " width="60"></td>
                <td><?=$product['TenTH']?></td>
                <td><a href="?suasp&id=<?=$product['MaSP']?>">Sua</a> | <a href="?xoasp&id=<?=$product['MaSP']?>" onclick='return confirm("Bạn có chắc chắn muốn xóa sản phẩm này không?")'>Xoa</a></td>
            </tr>
            <?php
                endforeach;
            ?>

</table>
